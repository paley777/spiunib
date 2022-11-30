<nav class="navbar sticky-top navbar-light navbar-expand-md py-3" style="background: #d8dbcc">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('storage/images/logo_spi2.png') }}" alt="" width="230" height="40"></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-2" class="collapse navbar-collapse" style="color: rgb(255,255,255);">
            <ul class="navbar-nav ms-auto" style="color: rgb(255,255,255);font-family: ABeeZee, sans-serif;">
                <li class="nav-item"><a class="nav-link {{ $active === 'index' ? 'active' : '' }}"
                        href="/">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ $active === 'news' ? 'active' : '' }}"
                        href="/news">Berita</a></li>
                <li class="nav-item"><a class="nav-link {{ $active === 'report' ? 'active' : '' }}"
                        href="/report">Pengaduan</a></li>
                <li class="nav-item"><a class="nav-link {{ $active === 'report' ? 'active' : '' }}"
                        href="/profile">Profil</a></li>
            </ul>
        </div>
    </div>
</nav>
