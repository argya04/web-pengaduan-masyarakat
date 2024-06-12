<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\TanggapanModel;
use App\Models\KategoriModel;
use App\Models\TolakPengaduanModel;
use App\Models\UsersModel;
use App\Models\AuthGroupsUsersModel;
use App\Models\KategoriGroupsModel;


class Petugas extends BaseController
{
    protected $db;
    protected $builder;


    public function __construct()
    {
        $this->db =\Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->lp = new PengaduanModel();
        $this->tgpn = new TanggapanModel();
        $this->kategori = new KategoriModel();
        $this->tolak = new TolakPengaduanModel();
        $this->usersModel = new UsersModel();
        $this->usersgroups = new AuthGroupsUsersModel();
        $this->katgroups = new KategoriGroupsModel();
        
        $user = user_id();
        $getgroup = $this->usersgroups->find($user);
        $this->getrole = $this->katgroups->where('group_id', $getgroup['group_id'])->first();

    }

    public function dashboard()
    {

        if (in_groups('Masyarakat')) {
            return redirect()->to('masyarakat/home');
        }

        if (in_groups('Admin')) {
            return redirect()->to('admin/dashboard');
        }

        if (has_permission('kategorial')) {
            $lp = new PengaduanModel();
            $kategori = $this->getrole['kategori_id'];
            $nama_kategori= $this->kategori->where('id_kategori',$kategori)->first();
            $data = [
            'verifikasi' =>$lp->where(['id_kategori' => $kategori, 'status' => 'verifikasi'])->getNumber(),
            'proses' =>$lp->where(['id_kategori' => $kategori,'status' => 'proses'])->getNumber(),
            'selesai' =>$lp->where(['id_kategori' => $kategori, 'status' => 'selesai'])->getNumber(),
            'pendidikan' =>$lp->where(['id_kategori' => $kategori])->getNumber(),
            'title' => 'Dashboard '.$nama_kategori['nama_kategori'],
            ];
            return view('kategorial/index',$data);
        }
        
        $lp = new PengaduanModel();
       
        $data = [
            'belum' =>$lp->where([ 'status' => 'belum verifikasi'])->getNumber(),
            'verifikasi' =>$lp->where([ 'status' => 'verifikasi'])->getNumber(),
            'proses' =>$lp->where([ 'status' => 'proses'])->getNumber(),
            // 'ditanggapi' =>$lp->where(['status' => 'ditanggapi'])->getNumber(),
            'selesai' =>$lp->where(['status' => 'selesai'])->getNumber(),
            'ditolak' =>$lp->where([ 'status' => 'ditolak'])->getNumber(),
        ];
        return view('petugas/dashboard',$data);
    }

    public function myprofile()
    {
       
        return view('petugas/myprofile');
    }

    public function belumverifikasi()
    {
        $lp = new PengaduanModel();

        $lp->select('id_pengaduan, judul_laporan, isi_laporan, username, no_telepon, foto, status, tgl_pengaduan, nama_kategori');
        $lp->join('kategori', 'pengaduan.id_kategori = kategori.id_kategori');
        $lp->where('status', 'belum verifikasi');
        $laporan = $lp->findAll();

        $data = [
            'title' => 'Status Pengaduan',
            'laporan' => $laporan,
            'kategori' => $lp->ambilKategori(),
        ];
        return view('petugas/belumverifikasi',$data);
    }

    public function verifall()
    {
        if (isset($_POST['submit'])) {
            $checklist = $this->request->getVar('checklist_pengaduan');


            $lp = new PengaduanModel();
            foreach ($checklist as $c) {
                $lp->update($checklist, ['status' => 'verifikasi']);
            }
            
            (session()->setFlashdata('status', 'berhasil diverifikasi'));
            return redirect()->to('petugas/belumverifikasi');
        }
    }

    public function ditolak()
    {
        $lp = new PengaduanModel();
        $data = [
            'title' => 'Status Pengaduan',
            'laporan' => $this->lp->where('status', 'ditolak')->findAll(),
            'kategori' => $lp->ambilKategori(),
        ];
        return view('petugas/ditolak',$data);
    }

    public function detail_pengaduan($id)
    {
        $lp = new PengaduanModel();
    
        $data = [
            'title' => 'Detail Pengaduan',
       
            'kategori' => $lp->ambilKategori($id),
            'lp'=> $lp->find($id),
         
           
        ];
        return view('petugas/detail_pengaduan',$data);
    }


    public function verifikasi($id)
     {
         $lp = new PengaduanModel();
         $lp->update($id, ['status'=>'verifikasi']);

         (session()->setFlashdata('status', 'berhasil diverifikasi'));
         return redirect()->to('petugas/belumverifikasi');
     
     }

    //  public function selesai($id=null)
    // {
    //     if(empty($id)){
    //         return redirect()->to('petugas/data_pengaduan');
    //     }

    //     $lp = new PengaduanModel();
    //     $data =['laporan'=> $lp->find($id)];
        
    //     $lp->update($id, ['status'=>'selesai']);

    //     (session()->setFlashdata('status', 'berhasil di selesaikan'));
       
    //     return redirect()->to(base_url('petugas/data_pengaduan'));
    // }

    public function tolak($id=null)
    {
        if(empty($id)){
            return redirect()->to('petugas/tolak');
        }
        $tolak = new TolakPengaduanModel();
        $lp = new PengaduanModel();
        
        $data = [
            'title' => 'Tolak Pengaduan',
            'lp' => $lp->find($id),
            'tolak' => $tolak->find($id),
            'laporan'=> $lp->find($id),
            
        ];
       
        return view('petugas/tolak',$data);
    }
    

    public function savetolak($id)
     {
         $valid = $this->validate([
            
            'alasan' => [
                'label' => 'Alasan penolakan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong !',
                ]
            ]


        ]);
         if (!$valid) {
             return redirect()->back()->to(base_url('petugas/tolak/'.$id))->withInput();
         } else {

             $lp = new PengaduanModel();
             $tolak = new TolakPengaduanModel();
             $data = [
             'id_pengaduan' => $this->request->getPost('id_pengaduan'),
             'id_petugas' => user()->id,
             'alasan' => $this->request->getPost('alasan'),
             'tgl_ditolak' => date('Y-m-d H:i:s'),
             
         ];
             $tolak->save($data);
             $lp->update($id, ['status'=>'ditolak']);

             (session()->setFlashdata('status', 'berhasil ditolak'));
             return redirect()->to('petugas/ditolak');
         }
     }


    public function register()
    {
        return view('auth/register');
    }
}