<?php

namespace App\Controllers;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;
use App\Models\KategoriModel;
use App\Models\TolakPengaduanModel;
use App\Models\UsersModel;
use App\Models\AuthGroupsUsersModel;
use App\Models\KategoriGroupsModel;
class Masyarakat extends BaseController
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
        $this->users = new UsersModel();
        $this->usersgroups = new AuthGroupsUsersModel();
        $this->katgroups = new KategoriGroupsModel();
        
        $user = user_id();
        $getgroup = $this->usersgroups->find($user);
        $this->getrole = $this->katgroups->where('group_id', $getgroup['group_id'])->first();
    }

    public function home()
    {
        if (in_groups('Petugas')) {
            return redirect()->to('petugas/dashboard');
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
       $username = user()->username;
        $data = [
            'total' =>$lp->where([ 'username' => $username])->getNumber(),
            'belum' =>$lp->where([ 'username' => $username, 'status' => 'belum verifikasi'])->getNumber(),
            'verifikasi' =>$lp->where(['username' => $username, 'status' => 'verifikasi'])->getNumber(),
            'proses' =>$lp->where(['username' => $username, 'status' => 'proses'])->getNumber(),
            'selesai' =>$lp->where(['username' => $username, 'status' => 'selesai'])->getNumber(),
            'ditolak' =>$lp->where(['username' => $username, 'status' => 'ditolak'])->getNumber(),
        ];
        return view('masyarakat/home',$data);
    }

    public function myprofile()
    {
       
        return view('masyarakat/myprofile');
    }

    public function edit_profile($id=0)
    {
        $users = new UsersModel();

        $data['title'] = 'Detail User';

        $this->builder->select('users.id as userid, username, email, user_img, nik, nama, no_telepon, alamat, tgl_lahir, no_telepon, ,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/masyarakat/home');
        }
        return view('masyarakat/edit_profile',$data);
    }

    // Form Untuk Membuat Pengaduan
    public function buat_pengaduan()
    {

        $lp = new PengaduanModel();
        $kategori = new KategoriModel();
        $data = ['kategori' => $kategori->tampil()];
        $data['pengaduan'] = $lp->findAll();

        return view('masyarakat/buat_pengaduan',$data);
    }

     //INPUT DATA Pengaduan Dan Validasi Inputan Pengaduan//
    

     public function inputPengaduan()
     {
         $valid = $this->validate([
            //  'kategori' => [
            //      'label' => 'Kategori',
            //      'rules' => 'required',
            //      'errors' => [
            //          'required' => '{field} tidak boleh kosong !',
            //      ]
            //  ],
             
             'judul_laporan' => [
                 'label' => 'Judul Laporan',
                 'rules' => 'required',
                 'errors' => [
                     'required' => '{field} tidak boleh kosong !',
                 ]
             ],
 
             'isi_laporan' => [
                 'label' => 'Isi Laporan',
                 'rules' => 'required|min_length[5]',
                 'errors' => [
                     'required' => '{field} tidak boleh kosong !',
                     'min_length' => '{field} minimal panjang field 5 !',
                    
                 ]
             ],
             
 
             'foto' => [
                 'label' => 'Foto',
                 'rules' => 'uploaded[foto]|is_image[foto]',
                 'errors' => [
                     'required' => '{field} tidak boleh kosong !',
                     'is_image' => '{field} harus berupa Foto !',
                     'uploaded' => '{field} harus di upload'
                 ]
             ]
 
 
         ]);
         if (!$valid) {
             return redirect()->back()->to(base_url('masyarakat/buat_pengaduan'))->withInput();
         } else {
             $lp = new PengaduanModel();
            //  $kategori= $this->request->getVar('id_kategori');
 
             $file = $this->request->getFile('foto');
         
             $imageName = $file->getName();


        //          $file->move('uploads/', $imageName);
        //      foreach ($kategori as $k) {
                 
        //          $status = 'belum verifikasi';
 
        //          $data = [
        //      'username' => user()->username,
        //      'nik' => user()->nik,
        //      'id_kategori' => $k,
        //      'judul_laporan' => $this->request->getPost('judul_laporan'),
        //      'isi_laporan' => $this->request->getPost('isi_laporan'),
        //      'no_telepon' => user()->no_telepon,
        //      'tgl_pengaduan' => date('Y-m-d H:i:s'),
        //      'foto' => $imageName,
        //      'status' => $status,
        //  ];
        //          $lp->save($data);
        //      }
             $file->move('uploads/', $imageName);
         
             $status = 'belum verifikasi';
 
             $data = [
             'username' => user()->username,
             'nik' => user()->nik,
             'id_kategori' => $this->request->getPost('id_kategori'),
             'judul_laporan' => $this->request->getPost('judul_laporan'),
             'isi_laporan' => $this->request->getPost('isi_laporan'),
             'no_telepon' => user()->no_telepon,
             'tgl_pengaduan' => date('Y-m-d H:i:s'),
             'foto' => $imageName,
             'status' => $status,
         ];
             $lp->save($data);
             (session()->setFlashdata('status','Dibuat'));
             return redirect()->to(base_url('/masyarakat/statusbelum'));
         }
     }
 
 

    // Fungsi untuk menghapus data pengaduan sebelum ditanggapi berdasarkan id pengaduan
    public function delete_pengaduan($id_pengaduan)
    {
        $lp = new PengaduanModel();
        $lp->delete($id_pengaduan);
        (session()->setFlashdata('status','Dihapus'));
        return redirect()->to(base_url('/masyarakat/statusbelum'));
        
    }

    //Melihat Data Pengaduan Berdasarkan Status Belum Ditanggapi
    public function statusbelum()
    {

        $lp = new PengaduanModel();
        $username = user()->username;
        $lp->select('id_pengaduan, judul_laporan, isi_laporan, username, no_telepon, foto, status, tgl_pengaduan, nama_kategori');
        $lp->join('kategori', 'pengaduan.id_kategori = kategori.id_kategori');
        $lp->where('status', 'belum verifikasi');
        $lp->where(['username' => $username]);
        $laporan = $lp->findAll();

        $data = [
            'title' => 'Status Pengaduan',
            'laporan' => $laporan,
            'kategori' => $lp->ambilKategori(),
        ];
        
        // if($status == 'belum verifikasi'){
        //     $data=[
        //         'title' => 'Status Pengaduan',
        //         //mencari berdasarkan status belum ditanggapi sesuai dengan username.
        //         'belum' => $lp->where(['username'=> $username, 'status'=>'belum verifikasi'])->paginate(20, 'belum verifikasi'),
                
        //     ];
            return view('/masyarakat/status_pengaduan/statusbelumverifikasi', $data);
        // }
    }

    public function statusverifikasi()
    {

        $lp = new PengaduanModel();
        $username = user()->username;
        $lp->select('id_pengaduan, judul_laporan, isi_laporan, username, no_telepon, foto, status, tgl_pengaduan, nama_kategori');
        $lp->join('kategori', 'pengaduan.id_kategori = kategori.id_kategori');
        $lp->where('status', 'verifikasi');
        $lp->where(['username' => $username]);
        $laporan = $lp->findAll();

        $data = [
            'title' => 'Status Pengaduan',
            'laporan' => $laporan,
            'kategori' => $lp->ambilKategori(),
        ];
            return view('/masyarakat/status_pengaduan/statusverifikasi', $data);
        
    }

    public function statusproses()
    {

        $lp = new PengaduanModel();
        $username = user()->username;
        $lp->select('id_pengaduan, judul_laporan, isi_laporan, username, no_telepon, foto, status, tgl_pengaduan, nama_kategori');
        $lp->join('kategori', 'pengaduan.id_kategori = kategori.id_kategori');
        $lp->where('status', 'proses');
        $lp->where(['username' => $username]);
        $laporan = $lp->findAll();

        $data = [
            'title' => 'Status Pengaduan',
            'laporan' => $laporan,
            'kategori' => $lp->ambilKategori(),
        ];
            return view('/masyarakat/status_pengaduan/statusproses', $data);
        
    }

    public function statusselesai()
    {

        $lp = new PengaduanModel();
        $username = user()->username;
        $lp->select('id_pengaduan, judul_laporan, isi_laporan, username, no_telepon, foto, status, tgl_pengaduan, nama_kategori');
        $lp->join('kategori', 'pengaduan.id_kategori = kategori.id_kategori');
        $lp->where('status', 'selesai');
        $lp->where(['username' => $username]);
        $laporan = $lp->findAll();

        $data = [
            'title' => 'Status Pengaduan',
            'laporan' => $laporan,
            'kategori' => $lp->ambilKategori(),
        ];
            return view('/masyarakat/status_pengaduan/statusselesai', $data);
        
    }

    // public function statusditanggapi($status=null)
    // {

    //     $lp = new PengaduanModel();
    //     $username = user()->username;
        
    //     if($status == 'ditanggapi'){
    //         $data=[
    //             'title' => 'Status Pengaduan',
    //             'tanggapan' =>$lp->getTanggapan(),
    //             //mencari berdasarkan status belum ditanggapi sesuai dengan username.
    //             'ditanggapi' => $lp->where(['username'=> $username, 'status'=>'ditanggapi'])->paginate(20, 'ditanggapi'),
               


    //         ];
    //         return view('/masyarakat/status_pengaduan/statusditanggapi', $data);
    //     }
    // }

    public function statustolak()
    {

        $lp = new PengaduanModel();
        $username = user()->username;
        $lp->select('id_pengaduan, judul_laporan, isi_laporan, username, no_telepon, foto, status, tgl_pengaduan, nama_kategori');
        $lp->join('kategori', 'pengaduan.id_kategori = kategori.id_kategori');
        $lp->where('status', 'ditolak');
        $lp->where(['username' => $username]);
        $laporan = $lp->findAll();

        $data = [
            'title' => 'Status Pengaduan',
            'laporan' => $laporan,
            'kategori' => $lp->ambilKategori(),
        ];
            return view('/masyarakat/status_pengaduan/statusditolak', $data);
        
    }

    // Melihat Detail Pengaduan//
    public function detail_pengaduan($id)
    {
        if (empty($id)) {
            return redirect()->to('masyarakat/semua');
        }
        $lp = new PengaduanModel();
        $tgpn = new TanggapanModel();
        $tolak = new TolakPengaduanModel();
    
        $data = [
            'title' => 'Detail Pengaduan',
            'tanggapan' =>$lp->getTanggapan($id),
            
            'kategori' => $lp->ambilKategori($id),
            'lp'=> $lp->find($id),
            'tolak' => $tolak->where('id_pengaduan',$id)->first(),

            'tgpn' => $tgpn->where('id_pengaduan',$id)->first(),
        ];
        return view('masyarakat/detail_pengaduan',$data);
    }


    public function register()
    {
        return view('auth/register');
    }

   
    //Mengedit data pengaduan
    public function edit_pengaduan($id)
    {
        $lp = new PengaduanModel();
        $kategori = new KategoriModel();
        $data = [
            'lp' => $lp->find($id),
            'kategori' => $kategori->getKategori(),
        ];
        // dd($data);
       
        return view('masyarakat/edit_pengaduan',$data);
    }

    public function save_updatepengaduan($id)
     {
         $valid = $this->validate([
            
            'judul_laporan' => [
                'label' => 'Judul Laporan',
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => '{field} tidak boleh kosong !',
                    'alpha_space' => '{field} hanya berisikan huruf !',
                ]
            ],

            'isi_laporan' => [
                'label' => 'Isi Laporan',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong !',
                    'min_length' => '{field} minimal panjang field 5 !',
                   
                ]
            ],
            

            'tgl_pengaduan' => [
                'label' => 'Tanggal Pengaduan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong !',
                ]
            ],

            'foto' => [
                'label' => 'Foto',
                'rules' => 'uploaded[foto]|is_image[foto]',
                'errors' => [
                    'is_image' => '{field} harus berupa Foto !',
                    'uploaded' => '{field} harus di upload'
                ]
            ]


        ]);
         if (!$valid) {
             return redirect()->back()->to(base_url('masyarakat/edit_pengaduan/'.$id))->withInput();
         } else {
             $lp = new PengaduanModel();

             $file = $this->request->getFile('foto');
        
             $imageName = $file->getName();
             $file->move('uploads/', $imageName);
        
             $status = 'belum verifikasi';

             $data = [
            'username' => user()->username,
            'id_kategori' => $this->request->getPost('id_kategori'),
            'judul_laporan' => $this->request->getPost('judul_laporan'),
            'isi_laporan' => $this->request->getPost('isi_laporan'),
            'no_telepon' => user()->no_telepon,
            'tgl_pengaduan' => date('Y-m-d H:i:s'),
            'foto' => $imageName,
            'status' => $status,
        ];
             $lp->update($id,$data);
             (session()->setFlashdata('status', 'Diedit'));
             return redirect()->to(base_url('/masyarakat/statusbelum/'));
         }
     }


}