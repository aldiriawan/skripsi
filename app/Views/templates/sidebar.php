<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-bus"></i>
        </div>
        <div class="sidebar-brand-text mx-3">AlfaOmega Group</div>
    </a>

    <?php if (in_groups('leader')) : ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link pt-0" href="<?= base_url('leader'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

    <?php endif; ?>

    <?php if (in_groups('admin')) : ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link pt-0" href="<?= base_url('admin'); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu Admin
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/admin'); ?>">
                <i class="far fa-fw fa-file-alt"></i>
                <span>Laporan Admin</span></a>
        </li>

    <?php endif; ?>


    <?php if (in_groups(['leader', 'admin'])) : ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Karyawan
        </div>

        <!-- Nav Item - User List -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/user_list'); ?>">
                <i class="fas fa-fw fa-users"></i>
                <span>Daftar Karyawan</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

    <?php endif; ?>

    <?php if (in_groups('checker')) : ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Checker Menu
        </div>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/checker'); ?>">
                <i class="far fa-fw fa-file-alt"></i>
                <span>Laporan Checker</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user"></i>
                <span>Laporan Checker</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">User Profile:</h6>
                    <a class="collapse-item" href="<?= base_url('user'); ?>">My Profile</a>
                    <a class="collapse-item" href="cards.html">Edit Profile</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

    <?php endif; ?>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>