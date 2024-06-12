<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php if( in_groups('Admin')) : ?>
    <title>List User</title>

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
                                <a class="dropdown-item" href="/admin/myprofile">
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
                    <h1 class="h3 mb-3 text-gray-800">List User</h1>

                    <?php
                if(session()->getFlashdata('status')) :?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data User
                        <strong>berhasil</strong> <?=session()->getFlashdata('status');?>.


                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif;?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">

                            <a class="btn btn-outline-primary" href="/admin/tambah_user">Tambah <i
                                    class="fas fa-pen"></i></a><br><br>

                            <div class="table-responsive text nowrap">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="table-dark" scope="col" style="text-align: center;">No.</th>
                                            <th class="table-dark" scope="col" style="text-align: center;">Username
                                            </th>
                                            <th class="table-dark" scope="col" style="text-align: center;">Email
                                            </th>
                                            <th class="table-dark" scope="col" style="text-align: center;">Role
                                            </th>
                                            <th class="table-dark" scope="col" style="text-align: center;">Action
                                            </th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <th scope="row" style="text-align: center;">
                                                <?= $i++ ?>
                                            </th>
                                            <td><?= $user->username; ?></td>
                                            <td><?= $user->email; ?></td>
                                            <td style="text-align: center;">
                                                <?php if( $user->name=='Petugas') echo '<span class="badge badge-warning" style="background-color:#FFBD35">Petugas Verifikasi</span>'
                                                ; elseif( $user->name=='Masyarakat') echo '<span
                                                    class="badge badge-primary"
                                                    style="background-color:#3081df">Masyarakat</span>' ;
                                                elseif( $user->name=='Admin') echo '<span class="badge badge-danger"
                                                    style="background-color:red">Admin</span>' ;
                                                    else echo '<span class="badge badge-info"
                                                    style="background-color:#36b9cc">Petugas Kategorial</span>';?></td>
                                            <td style="text-align: center;">
                                                <a href="<?= base_url('admin/' .$user->userid) ;?>"
                                                    class="btn btn-info btn-sm">Detail <i
                                                        class="fas fa-user-shield"></i></a>
                                                <a onclick="return confirm('Yakin Mau Menghapus Data Ini?')"
                                                    href="<?= base_url('admin/delete_user/'.$user->userid); ?>"
                                                    class="btn btn-sm btn-danger btn-sm">
                                                    Delete <i class="far fa-trash-alt"></i></a>
                                            </td>

                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

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