<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SMKS TARUNA BHAKTI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">TB</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active"><a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-fire"></i>
                <span>Dashboard</span></a></li>
            <li class="menu-header">Modul</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-columns"></i> <span>Data Master</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('siswa')}}">Data Siswa</a></li>
                    <li><a class="nav-link" href="{{route('petugas')}}">Data Petugas</a></li>
                    <li><a class="nav-link" href="{{route('kelas')}}">Data Kelas</a></li>
                    <li><a class="nav-link" href="{{route('surat')}}">Data Surat</a></li>
                    <li><a class="nav-link" href="{{route('suratmasuk')}}">Data Surat Masuk</a></li>
                </ul>
            </li>
        </ul>

    </aside>
</div>