<?php

namespace App\Controllers;
use App\Models\PengaduanModel;
use App\Models\TanggapanModel;
use App\Models\UsersModel;
use App\Models\KategoriModel;
use App\Models\AuthGroupsUsersModel;
use App\Models\KategoriGroupsModel;
use App\Models\AuthGroupsModel;
use App\Models\TolakPengaduanModel;
use Myth\Auth\Password;
use Dompdf\Dompdf;


class Admin extends BaseController
{
    protected $db;
    protected $builder;


    public function __construct()
    {
        $this->db =\Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->build = $this->db->table('auth_groups');
        $this->lp = new PengaduanModel();
        $this->tgpn = new TanggapanModel();
        $this->usersgroups = new AuthGroupsUsersModel();
        $this->katgroups = new KategoriGroupsModel();
        $this->authGroupsModel = new AuthGroupsModel();
        $this->users = new UsersModel();
        $this->authorize = service('authorization');
        $this->tolak = new TolakPengaduanModel();
        $this->kategori = new KategoriModel();
        
        $user = user_id();
        $getgroup = $this->usersgroups->find($user);
        $this->getrole = $this->katgroups->where('group_id', $getgroup['group_id'])->first();

 
    }
    

    public function dashboard()
    {

        if (in_groups('Masyarakat')) {
            return redirect()->to('masyarakat/home');
        }

        if (in_groups('Petugas')) {
            return redirect()->to('petugas/dashboard');
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

        $lp= new PengaduanModel();
        $data= array(
            'tot_pengaduan' => $this->lp->tot_pengaduan(),
            'tot_users' => $this->users->tot_users(),
            'tot_tanggapan' => $this->tgpn->tot_tanggapan(),
            'tot_kategori' => $this->kategori->tot_kategori(),
            'tot_tolak' => $this->tolak->tot_tolak(),
            'kriminal' =>$lp->where(['id_kategori' => 1])->getNumber(),
            'kesehatan' =>$lp->where(['id_kategori' => 2])->getNumber(),
            'kebakaran' =>$lp->where(['id_kategori' => 3])->getNumber(),
        
        );

        return view('admin/dashboard',$data);
    }

    // List User Yang Terdaftar

    public function list_user()
    {
        $data['title'] = 'List User';

        //$users = new \Myth\Auth\Models\UserModel();

        //$data['users'] = $users->findAll();

        $db      = \Config\Database::connect();
        $this->builder = $db->table('users');
        $this->builder->select('users.id as userid, username, email, name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();
 
        return view('admin/list_user', $data);
    }

    public function tambah_user()
    {
        $authGroupsModel = new AuthGroupsModel();

        $authGroupsModel->select('id, name, description');
        // $auth->join('auth_groups', 'auth_groups.id = kategori.id_kategori');
        // $auth->where('status', 'belum verifikasi');
        $group = $authGroupsModel->findAll();

        $data = [
            'title' => 'Tambah User',
            'group' => $group,
            'users' => $this->users->findAll()
            
        ];
       
        return view('admin/tambah_user', $data);
    }

    

    public function savetambahuser()
    {
        $valid = $this->validate([
            'nik' => [
        		'label' => 'NIK',
        		'rules' =>'required|is_unique[users.nik]|is_numeric',
        		'errors' =>
        		[
        			'required'=>'{field} wajib diisi',
        			'is_unique'=>'{field} sudah terdaftar !',
        			'is_numeric'=>'{field} hanya berisikan angka berjumlah 16'
        			]
        	],

        	'nama' => [
        		'label' => 'Nama lengkap',
        		'rules' =>'required|alpha_space',
        		'errors' =>
        		[
        			'required'=>'{field} lengkap wajib diisi',
        			'alpha_space'=>'{field} lengkap hanya berisikan huruf !'
        			]
        	],

        	'alamat' => [
        		'label' => 'Alamat',
        		'rules' =>'required',
        		'errors' =>
        		[
        			'required'=>'{field} wajib diisi',
                
        		]
        	],

        	'tgl_lahir' => [
        		'label' => 'Tanggal lahir',
        		'rules' =>'required',
        		'errors' =>
        		[
        			'required'=>'{field} wajib diisi',
                
        		]
        	],

        	'no_telepon' => [
        		'label' => 'Nomor telepon',
        		'rules' =>'required|is_numeric',
        		'errors' =>
        		[
        			'required'=>'{field} wajib diisi',
        			'is_numeric'=>'{field} hanya berisikan angka',
                
        		]
        	],
            

        	'username' => [
        	'label' => 'Username',
        	'rules'=> 'required|alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
        	'errors' =>
        		[
        			'required'=>'{field}  harus diisi',
        			'is_unique'=>'{field} sudah terdaftar !',
        			'max_length'=>'{field} maximal 30 huruf',
        			'min_length'=>'{field} minimal 3 kata',
        			'alpha_numeric_space'=>'{field} terdiri dari alpha numeric dan spasi',
        			]
        	],
            
        	'email' => [
        	'label' => 'Email',
        	'rules'	=> 'required|valid_email|is_unique[users.email]',
        	'errors' => [
        		'required' => '{field} wajib diisi',
        		'valid_email' => '{field} formatnya ex@gmail.com',
        		'is_unique' => '{field} sudah terdaftar'
        	]
            
        	],
        	'password' => [
                'label' => 'Password',
                'rules' =>'required|strong_password',
                'errors' =>
                [
                    'required'=>'{field} wajib diisi',
        			'strong_password'=>'{field} terlalu lemah',

                ]
            ],

            'role' => [
                'label' => 'Role',
                'rules' =>'required',
                'errors' =>
                [
                    'required'=>'{field} wajib diisi',

                ]
            ],
 
         ]);
        if (!$valid) {
            return redirect()->back()->to(base_url('admin/tambah_user'))->withInput();
        } else {

        $password = Password::hash($this->request->getVar('password'));

        $data=[
                'nik' =>$this->request->getVar('nik'),
                'nama' =>$this->request->getVar('nama'),
                'alamat' =>$this->request->getVar('alamat'),
                'tgl_lahir' =>$this->request->getVar('tgl_lahir'),
                'no_telepon' =>$this->request->getVar('no_telepon'),
                'email' =>$this->request->getVar('email'),
                'username' =>$this->request->getVar('username'),
                'created_at' => date('Y-m-d h:i:s a'),
                'password_hash'=> $password,
                'active' => 1
            ];

        $role = $this->request->getVar('role');
        $this->users->insert($data);
        $last_id = $this->users->getInsertID();
            
        $this->authorize->addUserToGroup($last_id, $role);
        (session()->setFlashdata('status', 'Dibuat'));
        return redirect()->to(base_url('/admin/list_user'));
    }
        
    }

    public function myprofile()
    {

        return view('admin/myprofile');
        
    }


    public function delete_user($id)
    {
        $user = new UsersModel();
        $user->delete($id);
        (session()->setFlashdata('status','Dihapus'));
        return redirect()->to(base_url('admin/list_user'));
        
    }
    
    //Melihat Detail Dari User
    public function detail($id = 0)
    {
        $data['title'] = 'Detail User';

        $this->builder->select('users.id as userid, username, email, user_img, nama, nik, alamat, tgl_lahir, no_telepon, ,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id=users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin/list_user');
        }
 
        return view('admin/detail', $data);
    }

    // View Data Pengaduan :

    public function data_pengaduan()
    {
        $lp = new PengaduanModel();
        $data = [
            
            'laporan' => $this->lp->findAll(),
            'kategori' => $lp->ambilKategori(),
            
        ];
        return view('admin/data_pengaduan', $data);
    }

    public function laporan_aplikasi()
    {
        $lp = new PengaduanModel();
       $kategori = new KategoriModel();
  
        $tolak = new TolakPengaduanModel();
  
        $data = [
            'title' => 'Detail Pengaduan',
            'laporan' => $lp->findAll(),
            'kategori' => $kategori->getKategori(),
            
            'tolak' => $tolak->findAll(),
            
        ];
        return view('admin/laporan_aplikasi', $data);
    }

    public function customreport()
    {
        $lp = new PengaduanModel();
       $kategori = new KategoriModel();
  
        $tolak = new TolakPengaduanModel();
  
        $data = [
            'title' => 'Detail Pengaduan',
            'laporan' => $lp->findAll(),
            'kategori' => $kategori->getKategori(),
            
            'tolak' => $tolak->findAll(),
            
        ];
        return view('admin/customreport',$data);
    }
    

    public function check_report_data_dk(){
        if (!$this->validate([
            'startdate' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'harus diisi!'
                ]
            ],
            'enddate'=>[
                'rules' => 'required',
                'errors'=>[
                    'required' => 'harus diisi!'
                ]
             ],
             'id_kategori'=>[
                 'rules' => 'required',
                 'errors'=>[
                     'required' => 'harus diisi!'
                 ]
              ]
        ])) {
            return redirect()->to('/admin/customreport')->withInput();
        }

        $strdate = $this->request->getVar('startdate');
        $enddate = $this->request->getVar('enddate');
        $kategori = $this->request->getVar('id_kategori');

        // dd($kategori);


        $s = $strdate. ' 00:00:00';
        $end = $enddate. ' 23:59:59';

        if ($kategori == 'semua') {
            $this->lp->select('*');
            $this->lp->where("tgl_pengaduan BETWEEN '$s' AND '$end'");
            $countdata = $this->lp->countAllResults();
        } else {
            $this->lp->select('*');
            $this->lp->where("tgl_pengaduan BETWEEN '$s' AND '$end'")->where('id_kategori', $kategori);
            $countdata = $this->lp->countAllResults();
        }

        // $countdata = $laporan->countAllResults();
        // $lp = new PengaduanModel();
        // $this->lp->select('nama_kategori');
        // $this->lp->join('kategori', 'kategori.id_kategori=pengaduan.id_kategori');
        // $laporan = $lp->findAll();

        // $data =['lp' => $laporan];
        // return view('/admin/customreport', $data);

        if (empty($countdata)) {
            session()->setFlashdata('pesan_danger2', 'Data tidak ada');
            return redirect()->back()->withInput();
        } else {
            session()->setFlashdata('pesan_success2', "$countdata data pengaduan ditemukan dari tanggal");
            return redirect()->back()->withInput();
        }
    }
    
    public function printpdf()
    {
        $lp = new PengaduanModel();
        $tgpn = new TanggapanModel();
        $tolak = new TolakPengaduanModel();
        $k = new KategoriModel();
      
        // $dompdf= new Dompdf();
        $strdate = $this->request->getVar('startdate');
        $enddate = $this->request->getVar('enddate');
        $kategori = $this->request->getVar('id_kategori');

        // dd($kategori);


        $s = $strdate. ' 00:00:00';
        $end = $enddate. ' 23:59:59';
        if(empty($strdate)||$kategori=='semua'){

            $data = [
                'title' => 'Generate Laporan',
                
                'laporan' => $lp->findAll(),
                'tanggapan' => $tgpn->findAll(),
                'tolak' => $tolak->findAll(),
                'kategori' => $k->findAll(),
                
    
                
            ];
            return view('admin/generatePDF',$data);
        }
        

        $this->lp->select('*');
        $lp =$this->lp->where("tgl_pengaduan BETWEEN '$s' AND '$end'")->where('id_kategori', $kategori);

        $data = [
            'title' => 'Generate Laporan',
            
            'laporan' => $lp->findAll(),
            'tanggapan' => $tgpn->findAll(),
            'tolak' => $tolak->findAll(),
            'kategori' => $k->findAll(),
            

            
        ];

        // $dompdf->loadHtml(view('admin/generatePDF', $data));
        // $dompdf->setPaper('A4','landscape');
        // $dompdf->render();
        // $dompdf->stream('laporan_e-lapor'.date('d_M_Y'), array("Attachment"=> false));
        return view('admin/generatePDF',$data);
    }

    public function excel()
    {
        $lp = new PengaduanModel();
        $tgpn = new TanggapanModel();
        $tolak = new TolakPengaduanModel();
        $kategori = new KategoriModel();
      

        $data = [
            'title' => 'Generate Laporan',
            
            'laporan' => $lp->findAll(),

            'tanggapan' => $tgpn->findAll(),
            'tolak' => $tolak->findAll(),
            'kategori' => $kategori->getKategori(),
            
        ];
        echo view('admin/excel',$data);
    }

    public function detail_pengaduan($id=null)
    {
        if (empty($id)) {
            return redirect()->to('admin/data_pengaduan');
        }
        $lp = new PengaduanModel();
        $tolak = new TolakPengaduanModel();
    
        $data = [
            'title' => 'Detail Pengaduan',
            
            'tanggapan' =>$lp->getTanggapan($id),
            
            'kategori' => $lp->ambilKategori($id),
            'laporan'=> $lp->find($id),
            'laporan' => $this->lp->findAll(),
            'lp'=> $lp->find($id),

            'tolak' => $tolak->where('id_pengaduan',$id)->first(),
           
        ];
        return view('admin/detail_pengaduan',$data);
    }

    public function delete_pengaduan($id_pengaduan)
    {
        $lp = new PengaduanModel();
        $lp->delete($id_pengaduan);
        (session()->setFlashdata('status','Dihapus'));
        return redirect()->to(base_url('admin/data_pengaduan'));
        
    }

   

    public function data_pengaduan_ditolak()
    {
        $tolak = new TolakPengaduanModel();
        $data['tolak'] = $tolak->getTolak();

 
        return view('admin/data_pengaduan_ditolak', $data);
    }

    public function delete_pengaduan_ditolak($id_ditolak)
    {
        $tolak = new TolakPengaduanModel();
        $tolak->delete($id_ditolak);
        (session()->setFlashdata('status','Dihapus'));
        return redirect()->to(base_url('admin/data_penanggung_jawab'));
        
    }
    

    public function data_kategori()
    {
        $role = $this->db->table('kat_group');

        $role->select('*');
        $role->join('kategori', 'kategori.id_kategori = kat_group.kategori_id');
        $role->join('auth_groups', 'auth_groups.id = kat_group.group_id');
        $query = $role->get()->getResult();
        $data = [
            
            'kategori' => $query,
        ];
        return view('admin/data_kategori', $data);
    }

    // Form Untuk Menambahkan Kategori  
    public function tambah_kategori()
    {

        $kategori = new KategoriModel();
        $data['kategori'] = $kategori->findAll();

        return view('admin/tambah_kategori',$data);
    }

   public function save_tambahkategori()
   {
       
       $valid = $this->validate([
           'nama_kategori' => [
               'label' => 'Kategori',
               'rules' => 'required|is_unique[kategori.nama_kategori]',
               'errors' => [
                   'required' => '{field} tidak boleh kosong !',
                   
                   'is_unique' => '{field} sudah ada !',
               ]
           ],

           'divisi' => [
            'label' => 'Divisi',
            'rules' => 'required|is_unique[auth_groups.name]',
            'errors' => [
                'required' => '{field} tidak boleh kosong !',
                
                'is_unique' => '{field} sudah ada !',
            ]
        ],


       ]);
       if (!$valid) {
           return redirect()->back()->to(base_url('admin/tambah_kategori'))->withInput();
       } 
       $role = $this->request->getVar('divisi');
       $kat = $this->request->getVar(('nama_kategori'));

       //insert role
       $groups = [
           'name' => $role,
           'description' => 'Petugas ' . $role
       ];
       $this->authGroupsModel->insert($groups);
       $last_div = $this->authGroupsModel->getInsertID();

       //insert permission
       $permis = $this->db->table('auth_groups_permissions');
       $permissions = [
           'group_id' => $last_div,
           'permission_id' => '1'
       ];
       $permis->insert($permissions);

       //insert kategori
       $kategori = [
           'nama_kategori' => $kat
       ];
       $this->kategori->insert($kategori);
       $last_kat = $this->kategori->getInsertID();

       //insert role Groups
       $kats = $this->db->table('kat_group');
       $katsgroup = [
           'group_id' => $last_div,
           'kategori_id' => $last_kat
       ];
       
       $kats->insert($katsgroup);

           (session()->setFlashdata('status', 'berhasil ditambahkan'));
           return redirect()->to('admin/data_kategori');
       }   

   public function edit_kategori($id=null)
   {

    
       if(empty($id)){
           return redirect()->to('admin/data_kategori');
       }
       
       $kategori = new KategoriModel();
       $data = [
           'title' => 'Pilih Dinas Terkait',
           'kategori' => $kategori->find($id),
           'validation'=>  \Config\Services::validation()
           
            
       ];
      
       return view('admin/edit_kategori',$data);
   }

   public function save_editkategori($id_kategori)
    {
        $valid = $this->validate([
           'nama_kategori' => [
               'label' => 'Nama kategori',
               'rules' => 'required',
               'errors' => [
                   'required' => '{field} tidak boleh kosong !',
               ]
           ],


       ]);
        if (!$valid) {
            return redirect()->back()->to(base_url('admin/edit_kategori/'.$id_kategori))->withInput();
        } else {

            $kategori = new KategoriModel();
            
            $kategori->update($id_kategori,['nama_kategori' => $this->request->getVar('nama_kategori')]);

            (session()->setFlashdata('status', 'berhasil di edit'));
            return redirect()->to('admin/data_kategori');
        }
    }

   public function delete_kategori($id)
   {
    $katgroup = $this->db->table('kat_group');
    $katgroup->select('*');
    $katgroup->where('id_kat', $id);
    $cek = $katgroup->get()->getResult();
    $katgroups= $cek[0]->kategori_id;
    $groupusers = $cek[0]->group_id;

    //Menghapus dari table kategori
    $this->kategori->where('id_kategori', $katgroups);
    $this->kategori->delete();

    //Menghapus dari table auth groups
    $this->authGroupsModel->where('id', $groupusers);
    $this->authGroupsModel->delete();
       (session()->setFlashdata('status','Dihapus'));
       return redirect()->to(base_url('admin/data_kategori'));
       
   }


    public function register()
    {
        return view('admin/register');
    }

}