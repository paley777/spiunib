<style>
    .navbar {
        background-image: linear-gradient(to top, #12145c 0%, #1d52a6 100%);
    }

    .nav-link {
        font-size: 12pt !important;
    }

    .btn-sm {
        font-size: 11pt !important;
    }
</style>

<nav class="navbar shadow sticky-top navbar-expand-lg navbar-dark px-1">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('storage/images/logo_spi1.png') }}" alt="" width="230" height="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class=" navbar-nav ">
                <a class="nav-link {{ $active === 'index' ? 'active' : '' }}" href="/">Beranda</a>
                <a class="nav-link {{ $active === 'news' ? 'active' : '' }}" href="/news">Berita dan Pengumuman</a>
                <a class="nav-link {{ $active === 'report' ? 'active' : '' }}" href="/report">Pengaduan</a>
                <a class="nav-link {{ $active === 'profile' ? 'active' : '' }}" href="/profile">Profil</a>
            </div>
        </div>


    </div>
</nav>
