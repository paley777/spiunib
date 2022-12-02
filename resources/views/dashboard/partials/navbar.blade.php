{{-- <main class="d-flex flex-nowrap">
    <div class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; min-height: 100%;">
        <a href="/dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="{{ asset('storage/images/logo_spi2.png') }}" alt="" width="230" height="40">
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto" id="fontlink">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ $active === 'index' ? 'active' : 'link-dark' }}"
                    aria-current="page">
                    <i class="bi bi-house-fill"></i> Beranda
                </a>
            </li>
            <li>
                <a href="/dashboard/reports" class="nav-link {{ $active === 'reports' ? 'active' : 'link-dark' }}">
                    <i class="bi bi-flag-fill"></i> Manajemen Pengaduan
                </a>
            </li>
            <li>
                <a href="/dashboard/news" class="nav-link {{ $active === 'news' ? 'active' : 'link-dark' }}">
                    <i class="bi bi-newspaper"></i> Manajemen Berita
                </a>
            </li>
            <li>
                <a href="/dashboard/users" class="nav-link {{ $active === 'users' ? 'active' : 'link-dark' }}">
                    <i class="bi bi-person-video2"></i> Manajemen User
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown" id="fontlink">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <h5 class>Hai, {{ Auth()->user()->nama }}</h5>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="/dashboard/profile/" id="fontlink">Profil</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form class="d-flex" action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item" id="fontlink" type="submit">Sign out</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</main> --}}

<nav class="navbar sticky-top navbar-light navbar-expand-md py-3"
    style="background: #d8dbcc; font-family: ABeeZee, sans-serif;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('storage/images/logo_spi2.png') }}" alt="" width="230" height="40"></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span
                class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-2" class="collapse navbar-collapse" style="color: rgb(255,255,255);">
            <ul class="navbar-nav ms-auto" style="color: rgb(255,255,255);font-family: ABeeZee, sans-serif;">
                <li class="nav-item"><a class="nav-link {{ $active === 'index' ? 'active' : '' }}"
                        href="/dashboard">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ $active === 'reports' ? 'active' : '' }}"
                        href="/dashboard/reports">Manajamen Pengaduan</a></li>
                <li class="nav-item"><a class="nav-link {{ $active === 'news' ? 'active' : '' }}"
                        href="/dashboard/news">Manajemen Berita</a></li>
                <li class="nav-item"><a class="nav-link {{ $active === 'users' ? 'active' : '' }}"
                        href="/dashboard/users">Manajemen Akun</a></li>
            </ul>
        </div>
    </div>
</nav>
