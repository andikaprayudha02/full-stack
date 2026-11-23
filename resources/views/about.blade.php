@extends('layouts.app')

@section('title', 'Tentang Kami — ' . \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital Solution'))

@section('content')

    <!-- HEADER HALAMAN -->
    <section class="page-header">
        <div class="container">
            <span class="badge bg-info text-dark fw-semibold px-3 py-2 rounded-pill mb-3">
                <i class="bi bi-building me-1"></i> Tentang Kami
            </span>
            <h1 class="display-6 fw-bold mb-2">
                {{ \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital Solution') }}
            </h1>
            <p class="lead text-light opacity-75 mb-0">
                {{ \App\Models\CompanySetting::getVal('company_tagline', 'Mitra Transformasi Rekayasa Web & Keamanan Siber') }}
            </p>
        </div>
    </section>

    <!-- PROFIL PERUSAHAAN -->
    <section class="py-5">
        <div class="container py-3">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <h6 class="text-primary fw-bold text-uppercase">Profil Perusahaan</h6>
                    <h2 class="fw-bold mb-3">Membangun Ekosistem Digital yang Andal dan Aman</h2>
                    <p class="text-muted">
                        {{ \App\Models\CompanySetting::getVal('about_us', 'Mitra solusi rekayasa perangkat lunak dan keamanan sistem informasi.') }}
                    </p>
                    <p class="text-muted">
                        Berbasis di {{ \App\Models\CompanySetting::getVal('address', 'Palembang, Sumatera Selatan') }},
                        kami melayani institusi pendidikan, keuangan, dan pemerintahan dengan layanan pengembangan web,
                        arsitektur server &amp; cloud, serta audit keamanan siber berstandar OWASP Top 10.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="row g-3 text-center">
                        <div class="col-6">
                            <div class="p-4 bg-light rounded-4 border">
                                <h3 class="fw-bold text-primary mb-1">50+</h3>
                                <p class="small text-muted mb-0">Sistem Terimplementasi</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 bg-light rounded-4 border">
                                <h3 class="fw-bold text-primary mb-1">99.9%</h3>
                                <p class="small text-muted mb-0">Uptime Server</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 bg-light rounded-4 border">
                                <h3 class="fw-bold text-primary mb-1">24/7</h3>
                                <p class="small text-muted mb-0">Monitoring</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 bg-light rounded-4 border">
                                <h3 class="fw-bold text-primary mb-1">OWASP</h3>
                                <p class="small text-muted mb-0">Standar Keamanan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VISI & MISI -->
    <section class="py-5 bg-light border-top border-bottom">
        <div class="container py-3">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="card h-100 rounded-4 shadow-sm p-4 service-card">
                        <div class="icon-box mb-3"><i class="bi bi-eye"></i></div>
                        <h4 class="fw-bold">Visi</h4>
                        <p class="text-muted mb-0">
                            Menjadi mitra teknologi terpercaya di Indonesia dalam rekayasa perangkat lunak
                            dan keamanan sistem informasi yang inovatif, andal, dan berkelanjutan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card h-100 rounded-4 shadow-sm p-4 service-card">
                        <div class="icon-box mb-3"><i class="bi bi-bullseye"></i></div>
                        <h4 class="fw-bold">Misi</h4>
                        <ul class="text-muted mb-0 ps-3">
                            <li class="mb-2">Membangun aplikasi web modern berbasis arsitektur MVC dan REST API yang skalabel.</li>
                            <li class="mb-2">Menjamin keamanan sistem klien melalui audit dan pengujian penetrasi berstandar OWASP.</li>
                            <li class="mb-2">Mengelola infrastruktur server dan cloud dengan ketersediaan tinggi.</li>
                            <li class="mb-2">Mendukung transfer ilmu dan pengembangan talenta digital lokal.</li>
                            <li>Memberikan layanan konsultasi yang transparan, responsif, dan berorientasi hasil.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TIM ENGINEER -->
    <section class="py-5">
        <div class="container py-4">
            <div class="text-center max-w-700 mx-auto mb-5">
                <h6 class="text-primary fw-bold text-uppercase">Tim Kami</h6>
                <h2 class="fw-bold">Tim Engineer Profesional</h2>
                <p class="text-muted">Para insinyur di balik setiap solusi yang kami hadirkan.</p>
            </div>

            @php
                $team = [
                    ['name' => 'Rizky Pratama',  'role' => 'Lead Full-Stack Engineer',  'icon' => 'bi-code-slash',  'desc' => 'Laravel, REST API, dan arsitektur aplikasi web.'],
                    ['name' => 'Siti Nurhaliza', 'role' => 'UI/UX & Frontend Engineer', 'icon' => 'bi-palette',     'desc' => 'Desain antarmuka, Bootstrap, dan pengalaman pengguna.'],
                    ['name' => 'Budi Santoso',   'role' => 'Cybersecurity Analyst',     'icon' => 'bi-shield-lock', 'desc' => 'Penetration testing dan audit keamanan OWASP.'],
                    ['name' => 'Dewi Anggraini', 'role' => 'DevOps & Cloud Engineer',   'icon' => 'bi-hdd-network', 'desc' => 'Server Linux, container, dan automasi backup.'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($team as $member)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card h-100 text-center p-4 rounded-4 team-card shadow-sm">
                            <div class="mx-auto mb-3 avatar-circle">
                                <i class="bi {{ $member['icon'] }}"></i>
                            </div>
                            <h5 class="fw-bold mb-1">{{ $member['name'] }}</h5>
                            <p class="text-primary small fw-semibold mb-2">{{ $member['role'] }}</p>
                            <p class="text-muted small mb-0">{{ $member['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection