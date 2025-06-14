<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <a class="nav-link" href="{{ route('berita.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                    Kelola Berita
                </a>

                <a class="nav-link" href="{{ route('kategori.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                    Kategori
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Login sebagai:</div>
            {{ Auth::user()->role ?? 'Guest' }}
        </div>
    </nav>
</div>
