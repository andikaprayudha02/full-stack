<nav class="navbar navbar-expand-lg navbar-dark navbar-nds sticky-top py-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('home') }}">
            <i class="bi bi-cpu-fill text-info fs-4"></i>
            <span>{{ \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital') }}</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#ndsNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="ndsNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#services">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#portfolio">Portofolio</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-info text-dark fw-semibold px-3 rounded-pill" href="{{ route('home') }}#contact">
                        <i class="bi bi-send-fill me-1"></i> Hubungi Kami
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>