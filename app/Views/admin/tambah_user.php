<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php if( in_groups('Admin')) : ?>

    <title>Tambah User</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url(); ?>/css/styles.css" rel="stylesheet">

    <link href="<?=base_url(); ?>/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E - Lapor</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Management
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin/list_user">
                    <i class="fas fa-users"></i>
                    <span>List User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Pengaduan
            </div>

            <!-- Nav Item - Data Pengaduan -->

            <li class="nav-item">
                <a class="nav-link" href="/admin/data_pengaduan">
                    <i class="fas fa-file"></i>
                    <span>Data Pengaduan</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/admin/data_kategori">
                    <i class="fas fa-file"></i>
                    <span>Data Kategori Pengaduan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Generate Laporan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Generate :</h6>
                        <a class="collapse-item " href="/admin/laporan_aplikasi">Laporan Keseluruhan</a>
                        <a class="collapse-item" href="/admin/customreport"> Custom Generate Laporan</a>

                    </div>
                </div>
            </li>


            <?php endif; ?>


            <!-- Nav Item - Pages Collapse Menu
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaduan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data :</h6>
                        <a class="collapse-item" href="/user/karyawan">Buat Pengaduan</a>
                        <h6 class="collapse-header">Status Pengaduan</h6>
                        <a class="collapse-item" href="/user/tambah_karyawan"> Karyawan</a>
                        <a class="collapse-item" href="/user/tambah_jabatan"> Jabatan</a>
                        <a class="collapse-item" href="/user/tambah_golongan"> Golongan</a>
                        <a class="collapse-item" href="/user/tambah_gaji"> Gaji</a>
                    </div>
                </div>
            </li>-->



            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Tables -->


            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="fas fa-sign-out-alt fa-sm"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Awal Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=user()->username; ?></span>
                                <img class="img-profile rounded-circle" src="/img/profile/profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('logout'); ?>" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div class="container-fluid">

                    <!-- Page Heading -->

                    <h4 class="h4 mb-4 text-gray-800">Form Tambah User</h4>
                    <div class="card-body">

                        <form class="form-horizontal" action="<?=base_url('admin/savetambahuser')?>" method="POST"
                            enctype="multipart/form-data">
                            <?= csrf_field(); ?>

                            <?php $validation = \Config\Services::validation(); ?>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nik">NIK :</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nik"
                                        class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>"
                                        id="nik" aria-describedby="nik" placeholder="Masukkan NIK*"
                                        value="<?= old('nik') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nik'); ?>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="nama">Nama Lengkap :</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nama"
                                        class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                                        id="nama" aria-describedby="nama" placeholder="Masukkan Nama Lengkap*"
                                        value="<?= old('nama') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama'); ?>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="alamat">Alamat :</label>
                                <div class="col-sm-12">
                                    <input type="text" name="alamat"
                                        class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                                        id="alamat" aria-describedby="alamat" placeholder="Masukkan Alamat*"
                                        value="<?= old('alamat') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>

                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-2" for="no_telepon">Tanggal Lahir :</label>
                                <div class="col-sm-12">
                                    <input type="date" name="tgl_lahir"
                                        class="form-control <?= ($validation->hasError('no_telepon')) ? 'is-invalid' : ''; ?>"
                                        id="tgl_lahir" aria-describedby="tgl_lahir" placeholder="Tanggal Lahir"
                                        value="<?= old('tgl_lahir') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tgl_lahir'); ?>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2" for="no_telepon">No. Telepon :</label>
                                <div class="col-sm-12">
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('no_telepon')) ? 'is-invalid' : ''; ?>"
                                        id="no_telepon" placeholder="Isi nomor telepon*" name="no_telepon"
                                        value="<?= old('no_telepon'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('no_telepon'); ?>
                                    </div>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-sm-2" for="username">Username :</label>
                                <div class="col-sm-12">
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                                        id="username" placeholder="Isi username*" name="username"
                                        value="<?= old('username'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('username'); ?>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="control-label col-sm-2" for="password">Password :</label>
                                <div class="col-sm-12">
                                    <input type="password"
                                        class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>"
                                        id="password" name="password" value="<?= old('password'); ?>"
                                        placeholder="Masukan Password*">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email :</label>
                                <div class="col-sm-12">
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>"
                                        id="email" placeholder="example@gmail.com*" name="email"
                                        value="<?= old('email'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                            </div>
                            <small id="emailHelp"
                                class="form-text text-muted col-sm-12"><?=lang('Auth.weNeverShare')?></small>
                            <br>



                            <div class="form-group">
                                <label class="control-label col-sm-4" for="role">Role</label>
                                <div class="col-sm-12">
                                    <select
                                        class="form-control <?= ($validation->hasError('role')) ? 'is-invalid' : ''; ?>"
                                        id="role" name="role">
                                        <option selected disabled>-- Pilih Role --</option>
                                        <?php foreach ($group as $row): ?>
                                        <option value="<?= $row['id'] ; ?>"><?= $row['name'];?></option>
                                        <!--<option value="Petugas">Petugas Verifikasi</option>
                                        <option value="Medis">Petugas Kategorial Medis</option>
                                        <option value="Polisi">Petugas Kategorial Polisi</option>
                                        <option value="Damkar">Petugas Kategorial Damkar</option>
                                        <option value="Disdikbud">Petugas Kategorial Pendidikan</option>
                                        <option value="Pertamanan">Petugas Kategorial Pertamanan</option>
                                        <option value="Masyarakat">Masyarakat</option> -->
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('role'); ?>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <label class="control-label col-sm-4" for="role">Role</label>
                                <div class="col-sm-12">
                                    <select
                                        class="form-control"
                                        id="role" name="role">
                                        <option selected disabled>-- Pilih Role --</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Petugas">Petugas Verifikasi</option>
                                        <option value="Medis">Petugas Kategorial Medis</option>
                                        <option value="Polisi">Petugas Kategorial Polisi</option>
                                        <option value="Damkar">Petugas Kategorial Damkar</option>
                                        <option value="Disdikbud">Petugas Kategorial Pendidikan</option>
                                        <option value="Pertamanan">Petugas Kategorial Pertamanan</option>
                                        <option value="Masyarakat">Masyarakat</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        
                                    </div>
                                </div>
                            </div> -->

                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Submit
                            </button>
                        </form>
                    </div>


                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Argya Falan Rifqi <br> <br><?= date('d M Y H:i:s')?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda harus login kembali untuk mengakses halaman ini</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url(); ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url(); ?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url(); ?>/js/demo/datatables-demo.js"></script>

    <!--Alert Pengaduan -->

    <script src="<?=base_url(); ?>/js/sweetalert2.all.min.js"></script>
    <script src="<?=base_url(); ?>/js/myscript.js"></script>


</body>

</html>