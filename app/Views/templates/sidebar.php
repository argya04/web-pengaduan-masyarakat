<?php if (in_groups('Admin')) : ?>

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

    <li class="nav-item active">
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
    <li class="nav-item">
        <a class="nav-link" href="/admin/list_user">
            <i class="fas fa-users"></i>
            <span>List User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengaduan
    </div>

    <!-- Nav Item - Data Pengaduan -->

    <li class="nav-item">
        <a class="nav-link" href="/admin/data_pengaduan">
            <i class="fas fa-file"></i>
            <span>Data Pengaduan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/admin/data_pengaduan_ditolak">
            <i class="fas fa-file"></i>
            <span>Data Pengaduan Ditolak</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Assign
    </div>
    <li class="nav-item ">
        <a class="nav-link" href="/admin/data_assign">
            <i class="fas fa-file"></i>
            <span>Data Assign</span></a>
    </li>


    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Tanggapan
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item ">
        <a class="nav-link" href="/admin/data_tanggapan">
            <i class="fas fa-file"></i>
            <span>Data Tanggapan</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        Penanggung Jawab
    </div>

    <!-- Nav Item - Data Pengaduan -->

    <li class="nav-item">
        <a class="nav-link" href="/admin/data_penanggung_jawab">
            <i class="fas fa-file"></i>
            <span>Data Penanggung Jawab</span></a>
    </li>
    <?php endif; ?>


    <?php if (in_groups('Masyarakat')) : ?>

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/masyarakat/home">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <div class="sidebar-brand-text mx-3">E - Lapor</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <li class="nav-item active">
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

        <!--Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Status Pengaduan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Berdasarkan Status :</h6>
                    <a class="collapse-item" href="/masyarakat/semua">Semua</a>
                    <a class="collapse-item" href="/masyarakat/belumditanggapi">Belum
                        Ditanggapi</a>
                    <a class="collapse-item" href="/masyarakat/ditanggapi"> Ditanggapi</a>
                    <a class="collapse-item" href="/masyarakat/selesai"> Selesai</a>

                </div>
            </div>
        </li>
        <?php endif; ?>

        <?php if (in_groups('Petugas')) : ?>

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/petugas/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E - Lapor</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
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

            <!-- Nav Item - Dashboard -->

            <li class="nav-item">
                <a class="nav-link" href="/petugas/data_pengaduan">
                    <i class="fas fa-file"></i>
                    <span>Data Pengaduan</span></a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="/petugas/dashboard">
                    <i class="fas fa-file"></i>
                    <span>Assign</span></a>
            </li>


            <!-- Heading -->
            <div class="sidebar-heading">
                Manajemen Tanggapan
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item ">
                <a class="nav-link" href="/petugas/dashboard">
                    <i class="fas fa-file"></i>
                    <span>Data Tanggapan</span></a>
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