<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Pengaduan</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url(); ?>/css/styles.css" rel="stylesheet">

</head>
<?php if( in_groups('Masyarakat')) : ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center active" href="/masyarakat/home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E - Lapor</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item ">
                <a class="nav-link" href="/masyarakat/home">
                    <i class="fas fa-home"></i>
                    <span>Home</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengaduan
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/masyarakat/buat_pengaduan">
                    <i class="fas fa-pen"></i>
                    <span>Buat Pengaduan</span></a>
            </li>

            <!--Menu status pengaduan-->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Status Pengaduan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Berdasarkan Status :</h6>
                        <a class="collapse-item active" href="/masyarakat/statusbelum">Belum
                            Diverifikasi</a>
                        <a class="collapse-item" href="/masyarakat/statusverifikasi"> Diverifikasi</a>
                        <a class="collapse-item" href="/masyarakat/statusproses"> Proses</a>
                        <a class="collapse-item" href="/masyarakat/statusselesai"> Selesai</a>
                        <a class="collapse-item" href="/masyarakat/statustolak"> Ditolak</a>

                    </div>
                </div>
            </li>
            <?php endif; ?>


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
                                <a class="dropdown-item" href="/masyarakat/myprofile">
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

                    <h4 class="h4 mb-4 text-gray-800">Form Edit Pengaduan</h4>
                    <div class="card-body">

                        <form class="form-horizontal"
                            action="<?=base_url('masyarakat/save_updatepengaduan/'. $lp['id_pengaduan'])?>"
                            method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>

                            <?php $validation = \Config\Services::validation(); ?>


                            <input type="hidden" class="form-control" id="username" name="username"
                                value="<?=$lp['username']; ?>" disabled>

                            <input type="hidden" class="form-control" id="username" name="username"
                                value="<?=$lp['nik']; ?>" disabled>



                            <div class="form-group">
                                <label class="control-label col-sm-2" for="judul_laporan">Judul Laporan :</label>
                                <div class="col-sm-12">
                                    <input type="text"
                                        class="form-control <?= ($validation->hasError('judul_laporan')) ? 'is-invalid' : ''; ?>"
                                        id="judul_laporan" placeholder="Tulis judul laporan ..." name="judul_laporan"
                                        value="<?= (old('judul_laporan'))? old('judul_laporan'): $lp['judul_laporan']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('judul_laporan'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="isi_laporan">Isi Laporan :</label>
                                <div class="col-sm-12">
                                    <textarea
                                        class="form-control <?= ($validation->hasError('isi_laporan')) ? 'is-invalid' : ''; ?>"
                                        id="isi_laporan"
                                        placeholder="Tulis Isi Laporan Anda Secara Detail dan Lokasi Kejadiannya*"
                                        name="isi_laporan"
                                        value="<?= (old('isi_laporan'))? old('isi_laporan'): $lp['isi_laporan']; ?>"
                                        rows="3"><?= $lp['isi_laporan'];?></textarea>

                                    <div class="invalid-feedback">
                                        <?= $validation->getError('isi_laporan'); ?>
                                    </div>

                                </div>
                            </div>


                            <input type="hidden" class="form-control" id="no_telepon" name="no_telepon"
                                value="<?=$lp['no_telepon']; ?>" disabled>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="nama">Tanggal Pengaduan :</label>
                                <div class="col-sm-12">
                                    <?= $lp['tgl_pengaduan']; ?>
                                    <input type="datetime-local"
                                        class="form-control <?= ($validation->hasError('tgl_pengaduan')) ? 'is-invalid' : ''; ?>"
                                        id="tgl_pengaduan" placeholder="" name="tgl_pengaduan" rows="3"
                                        value="<?= (old('tgl_pengaduan'))? old('tgl_pengaduan'): $lp['tgl_pengaduan']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tgl_pengaduan'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="kategori" class="control-label col-sm-4">Kategori Pengaduan</label>
                                <div class="col-sm-12">
                                    <select class="form-control" id="kategori" name="id_kategori">
                                        <option>--Pilih Kategori--</option>
                                        <?php foreach ($kategori as $k): ?>
                                        <option value="<?= $k->id_kategori ?>"
                                            <?php if ($k->id_kategori == $lp['id_kategori']) { echo 'selected'; } ?>>
                                            <?= $k->nama_kategori ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="foto">Upload Foto :</label>
                                <div class="col-sm-12">
                                    <input type="file"
                                        class="form-group <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>"
                                        name="foto" accept="image/*"
                                        value="<?= (old('foto'))? old('foto'): $lp['foto']; ?>"><?= $lp['foto']; ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('foto'); ?>
                                    </div>

                                </div>
                            </div>

                            <div class="img-preview" style="margin-bottom: 20px"></div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a onclick="return confirm('Tidak jadi mengedit pengaduan ini ?')"
                                        href="/masyarakat/statusbelum/belum verifikasi"
                                        class="btn btn-warning">Kembali</a>
                                    <button onclick="return confirm('Apakah anda yakin ingin membuat pengaduan ?')"
                                        type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>


                <!--container-fluid -->

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
                        <span aria-hidden="true"></span>
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

    <script src="<?=base_url(); ?>/js/sweetalert2.all.min.js"></script>
    <script src="<?=base_url(); ?>/js/myscript.js"></script>



</body>

</html>