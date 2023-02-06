<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index') }}">
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard-index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('berita-admin.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Berita</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('list-laporan-admin') }}">
            <i class="fas fa-fw fa-tasks"></i>
            <span>Data Laporan</span></a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengaturan web :</h6>
                <a class="collapse-item" href="{{ route('index-banner') }}">Banner</a>
                <a class="collapse-item" href="{{ route('index-profile') }}">Profile</a>
                <a class="collapse-item" href="{{ route('index-kebijakan') }}">Tata cara kebijakan</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('survei-index') }}">
            <i class="fas fa-fw fa-question"></i>
            <span>Survei</span></a>
    </li>

    {{--
    <hr class="sidebar-divider my-0">

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('pengguna-akun') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Akun pengguna</span></a>
    </li> --}}

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>