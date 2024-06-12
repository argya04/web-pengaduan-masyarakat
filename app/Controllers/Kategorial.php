<?php

namespace App\Controllers;

use App\Models\PengaduanModel;
use App\Models\TanggapanModel;
use App\Models\KategoriModel;
use App\Models\TolakPengaduanModel;
use App\Models\UsersModel;
use App\Models\AuthGroupsUsersModel;
use App\Models\KategoriGroupsModel;

class Kategorial extends BaseController
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

    public function myprofile()
    {
        if (has_permission('kategorial')) {
        return view('kategorial/myprofile');
    }
        
    }

    public function index()
    {

        if (in_groups('Masyarakat')) {
            return redirect()->to('masyarakat/home');
        }

        if (in_groups('Admin')) {
            return redirect()->to('admin/dashboard');
        }
        
        if (in_groups('Petugas')) {
            return redirect()->to('petugas/dashboard');
        }

        //jika berada di groups disdikbud maka munculkan sesuai group disdikbud
       
            // return redirect()->to('kategorial/index');
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
            return view('kategorial/index', $data);

    }

    public function sudahverifikasi()
    {
        
         $lp = new PengaduanModel();
         $lp->select('pengaduan.status, id_pengaduan, username, judul_laporan, isi_laporan, pengaduan.tgl_pengaduan as tgl, kategori.nama_kategori');
         $lp->join('kategori', 'kategori.id_kategori = pengaduan.id_kategori');
         $lp->where('pengaduan.id_kategori', $this->getrole['kategori_id']);
         $lp->where('pengaduan.status', 'verifikasi');
         $query = $lp->get();
         $data = [
             'laporan' =>$query->getResultArray(),
      
         ];

         return view('kategorial/sudahverifikasi', $data);
        
    }

    public function detail_pengaduan($id)
    {
       
            $lp = new PengaduanModel();
    
            $data = [
            'title' => 'Detail Pengaduan',
            
            'kategori' => $lp->ambilKategori($id),
            'lp'=> $lp->find($id),
         
           
        ];
            return view('kategorial/detail_pengaduan', $data);
        
}

public function sudahproses()
    {
       
        $lp = new PengaduanModel();
        $lp->select('pengaduan.status, id_pengaduan, username, judul_laporan, isi_laporan, pengaduan.tgl_pengaduan as tgl, kategori.nama_kategori');
        $lp->join('kategori', 'kategori.id_kategori = pengaduan.id_kategori');
        $lp->where('pengaduan.id_kategori', $this->getrole['kategori_id']);
        $lp->where('pengaduan.status', 'proses');
        $query = $lp->get();
        $data = [
             'laporan' =>$query->getResultArray(),
        
         ];

        return view('kategorial/sudahproses', $data);
    
    }

    public function sudahselesai()
    {
        
         $lp = new PengaduanModel();
         $lp->select('pengaduan.status, id_pengaduan, username, judul_laporan, isi_laporan, pengaduan.tgl_pengaduan as tgl, kategori.nama_kategori');
         $lp->join('kategori', 'kategori.id_kategori = pengaduan.id_kategori');
         $lp->where('pengaduan.id_kategori', $this->getrole['kategori_id']);
         $lp->where('pengaduan.status', 'selesai');
         $query = $lp->get();
         $data = [
             'laporan' =>$query->getResultArray(),

         ];

         return view('kategorial/sudahselesai', $data);

        
    }

    public function proses($id)
    {
        
            $lp = new PengaduanModel();
            $lp->update($id, ['status'=>'proses']);

            (session()->setFlashdata('status', 'Diproses'));
            return redirect()->to('kategorial/sudahproses');
        

       
    }

    public function tanggapi($id=null)
    {
        
            if (empty($id)) {
                return redirect()->to('kategorial/sudahproses');
            }
            $tgpn = new TanggapanModel();
            $lp = new PengaduanModel();
            $data = [
            'title' => 'Tanggapi ',
            'lp' => $lp->find($id),
            'tgpn' => $tgpn->find($id),
            'laporan'=> $lp->find($id),
            
        ];
       
            return view('kategorial/tanggapi', $data);
        
    }

    public function savetanggapi($id)
    {
      
            $valid = $this->validate([
       
           'isi_tanggapan' => [
               'label' => 'Isi Tanggapan',
               'rules' => 'required',
               'errors' => [
                   'required' => '{field} tidak boleh kosong !',
               ]
            ]


       ]);
            if (!$valid) {
                return redirect()->back()->to(base_url('kategorial/tanggapi/'.$id))->withInput();
            } else {
                $lp = new PengaduanModel();
                $tgpn = new TanggapanModel();
                $file = $this->request->getFile('foto');
        
                $imageName = $file->getName();
                $file->move('bukti/', $imageName);
       
                $data = [
                'id_pengaduan' => $this->request->getPost('id_pengaduan'),
                'isi_tanggapan' => $this->request->getPost('isi_tanggapan'),
                'id_petugas' => user()->id,
                'tgl_tanggapan' => date('Y-m-d H:i:s'),
                'foto' => $imageName,

        ];
                $tgpn->save($data);
                $lp->update($id, ['status'=>'selesai']);

                (session()->setFlashdata('status', 'berhasil ditanggapi'));
                return redirect()->to('kategorial/sudahselesai');
            
        }
        
    }

}