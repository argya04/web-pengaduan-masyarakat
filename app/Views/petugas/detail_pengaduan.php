<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url(); ?>/css/styles.css" rel="stylesheet">

</head>

<?php if( in_groups('Petugas')) : ?>

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



            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item ">
                <a class="nav-link" href="/petugas/dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manajemen Laporan Pengaduan
            </div>
            <!--Nav Item - Pages Collapse Menu -->

            <!--Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Status Pengaduan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Berdasarkan Status :</h6>
                        <a class="collapse-item" href="/petugas/belumverifikasi">Belum
                            Diverifikasi</a>
                        <a class="collapse-item" href="/petugas/ditolak"> Ditolak</a>

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
                    <h1 class="h3 mb-4 text-gray-800">Detail Pengaduan</h1>


                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <form class="form-horizontal">


                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="username">Pelapor :</label>
                                    <div class="col-sm-10">
                                        <label class="control-label" id="username"
                                            disabled><?=$lp['username']; ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="username">Judul Laporan :</label>
                                    <div class="col-sm-10">
                                        <label class="control-label " id="judul_laporan"
                                            disabled><?=$lp['judul_laporan']; ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="kategori">Kategori Laporan :</label>
                                    <div class="col-sm-10">
                                        <label class="control-label" id="kategori"
                                            disabled><?=$kategori->nama_kategori; ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="isi_laporan">Isi Laporan :</label>
                                    <div class="col-sm-10">
                                        <label class="control-label" id="isi_laporan"
                                            disabled><?=$lp['isi_laporan']; ?></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="no_telepon">Nomor Telepon :</label>
                                    <div class="col-sm-10">
                                        <label class="control-label" id="no_telepon"
                                            disabled><?=$lp['no_telepon']; ?></label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="tgl_pengaduan">Tanggal Pelaporan
                                        :</label>
                                    <div class="col-sm-10">
                                        <label class="control-label" id="tgl_pengaduan"
                                            disabled><?php $d = strtotime($lp['tgl_pengaduan']); ?></label>
                                        <?= date("d M, Y - H:i", $d) ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="foto">Foto
                                        :</label>
                                    <div class="col-sm-10">
                                        <label class="control-label" id="foto" disabled><img class=""
                                                src="<?=base_url('uploads/'.$lp['foto']); ?>"></img></label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="status">Status :</label>
                                    <div class="col-sm-10">
                                        <?php if( $lp ['status']=='belum verifikasi') echo '<span class="badge badge-warning" style="background-color:#FFBD35">Belum Verifikasi</span>' ; 
    elseif( $lp ['status']=='verifikasi') echo '<span class="badge badge-primary" style="background-color:#3081df">Sudah Diverifikasi</span>' ;
    elseif( $lp ['status']=='proses') echo '<span class="badge badge-info" style="background-color:#36b9cc">Diproses</span>' ;
    elseif( $lp ['status']=='selesai') echo '<span class="badge badge-success" style="background-color:green">Selesai</span>' ;
    elseif( $lp ['status']=='ditolak') echo '<span class="badge badge-danger" style="background-color:red">Ditolak</span>' ; ?>

                                    </div>

                                    <?php if( in_groups('Petugas')) :?>


                                </div>



                                <div class="form-group">

                                    <div class="col-sm-offset-2 col-sm-10">

                                        <a onclick="return confirm('Apakah anda yakin ingin memverifikasi pengaduan ?')"
                                            href=<?= base_url('petugas/verifikasi/' . $lp['id_pengaduan']); ?>
                                            class="btn btn-primarys btn-sm <?= ($lp['status'] == 'selesai') | ($lp['status'] == 'ditanggapi') | ($lp['status'] == 'proses') | ($lp['status'] == 'ditolak')  | ($lp['status'] == 'verifikasi') ? 'disabled' : ''; ?>"
                                            aria-disabled="true">Verifikasi <i class="far fa-edit"></i></a>


                                        <a href=<?= base_url('petugas/tolak/' . $lp['id_pengaduan']); ?>
                                            class="btn btn-danger btn-sm <?= ($lp['status'] == 'selesai') | ($lp['status'] == 'ditolak') | ($lp['status'] == 'ditanggapi') | ($lp['status'] == 'proses') | ($lp['status'] == 'verifikasi') ? 'disabled' : ''; ?>"
                                            aria-disabled="true">Tolak <i class="far fa-times-circle"></i></a>


                                    </div>
                                    <?php if ($lp['status']=='belum verifikasi'):?>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <small><a href="<?= base_url('/petugas/belumverifikasi') ?>">&laquo; Kembali
                                                    ke menu sebelumnya</a></small>
                                        </li>
                                    </ul>
                                    <?php endif;?>

                                    <?php endif;?>

                                    <?php if ($lp['status']=='ditolak'):?>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <small><a href="<?= base_url('/petugas/ditolak') ?>">&laquo; Kembali
                                                    ke menu sebelumnya</a></small>
                                        </li>
                                    </ul>

                                    <?php endif;?>
                                </div>


                            </form>
                        </div>


                    </div>

                    <!--container-fluid -->

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