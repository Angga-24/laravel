<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item {{ $menu === 'dashboard' ? 'active':''}}">
    <a class="nav-link" href="{{route('sbadmin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item {{ $menu === 'home' ? 'active':''}}">
    <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-home"></i>
        <span>Home</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item {{ $menu === 'biodata' ? 'active':''}}">
    <a class="nav-link" href="{{route('biodata')}}">
        <i class="fas fa-book"></i>
        <span>Biodata</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item {{ $menu === 'latihan' ? 'active':''}}">
    <a class="nav-link" href="{{route('latihan')}}">
        <i class="fas fa-list"></i>
        <span>Latihan</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item {{ $menu === 'lokal' ? 'active':''}}">
    <a class="nav-link" href="{{route('lokal.index')}}">
        <i class="fas fa-school"></i>
        <span>Data Kelas</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">
<li class="nav-item {{ $menu === 'siswa' ? 'active':''}}">
    <a class="nav-link" href="{{route('siswa.index')}}">
        <i class="fas fa-users"></i>
        <span>Data Siswa</span></a>
</li>

<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
