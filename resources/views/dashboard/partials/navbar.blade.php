<style>
    #fontheader {
        font-size: 1.563rem !important;
    }

    #fontp {
        font-size: 1.25rem !important;
    }

    .fontlink {
        font-size: 15px !important;
    }

    .text-justify {
        text-align: justify;
    }
</style>
<style>
    .bd-placeholder-img {
        font-size: 1rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 1rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
</style>
<style>
    .sidebar {
        position: fixed;
    }
</style>
<main class="d-flex flex-nowrap">
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
                <a href="#" class="nav-link link-dark">
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
</main>
