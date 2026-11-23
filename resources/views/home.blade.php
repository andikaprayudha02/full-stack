@extends('layouts.app')

@section('title', 'Beranda — ' . \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital Solution'))

@section('content')

    <!-- 1. HERO -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-7">
                    <span class="badge bg-info text-dark fw-semibold px-3 py-2 rounded-pill mb-3">
                        <i class="bi bi-shield-check me-1"></i> Enterprise IT & Cybersecurity Partner
                    </span>
                    <h1 class="display-5 fw-bold mb-3">
                        {{ \App\Models\CompanySetting::getVal('company_tagline', 'Mitra Transformasi Rekayasa Web & Keamanan Siber') }}
                    </h1>
                    <p class="lead text-light opacity-75 mb-4">
                        {{ \App\Models\CompanySetting::getVal('about_us', 'Mitra solusi rekayasa perangkat lunak dan keamanan sistem informasi.') }}
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#portfolio" class="btn btn-info btn-lg text-dark fw-bold px-4">
                            Lihat Portofolio <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                        <a href="#services" class="btn btn-outline-light btn-lg px-4">Layanan Kami</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="p-4 bg-white bg-opacity-10 rounded-4 border border-light border-opacity-25 shadow-lg">
                        <i class="bi bi-code-square display-1 text-info"></i>
                        <h4 class="mt-3 fw-bold">Arsitektur Modern & Aman</h4>
                        <p class="small text-light opacity-75 mb-0">
                            Dibangun dengan standar industri Laravel MVC, RESTful API, dan proteksi OWASP Top 10.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ABOUT & STATS -->
    <section id="about" class="py-5 bg-light border-bottom">
        <div class="container py-3">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded-4 shadow-sm">
                        <h2 class="fw-bold text-primary mb-1">50+</h2>
                        <p class="text-muted mb-0">Sistem Informasi Terimplementasi</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded-4 shadow-sm">
                        <h2 class="fw-bold text-primary mb-1">99.9%</h2>
                        <p class="text-muted mb-0">Uptime Cloud & Server Architecture</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white rounded-4 shadow-sm">
                        <h2 class="fw-bold text-primary mb-1">24/7</h2>
                        <p class="text-muted mb-0">Monitoring & Incident Response</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SERVICES -->
    <section id="services" class="py-5">
        <div class="container py-4">
            <div class="text-center max-w-700 mx-auto mb-5">
                <h6 class="text-primary fw-bold text-uppercase">Layanan Unggulan</h6>
                <h2 class="fw-bold">Solusi Teknologi End-to-End</h2>
                <p class="text-muted">Kami merancang, membangun, dan mengamankan infrastruktur digital organisasi Anda.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 p-4 rounded-4 service-card shadow-sm">
                        <div class="icon-box mb-3"><i class="bi bi-window-stack"></i></div>
                        <h5 class="fw-bold">Custom Web Engineering</h5>
                        <p class="text-muted small mb-0">Pembangunan aplikasi web modern berbasis arsitektur MVC dan REST API yang skalabel.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 rounded-4 service-card shadow-sm">
                        <div class="icon-box mb-3"><i class="bi bi-hdd-network"></i></div>
                        <h5 class="fw-bold">Server & Cloud Architecture</h5>
                        <p class="text-muted small mb-0">Manajemen server Linux/Windows, virtualisasi container, dan automasi backup berkala.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-4 rounded-4 service-card shadow-sm">
                        <div class="icon-box mb-3"><i class="bi bi-shield-lock"></i></div>
                        <h5 class="fw-bold">Vulnerability Assessment</h5>
                        <p class="text-muted small mb-0">Pengujian penetrasi dan audit celah keamanan aplikasi web berstandar OWASP Top 10.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. PORTFOLIO -->
    <section id="portfolio" class="py-5 bg-light">
        <div class="container py-4">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-5">
                <div>
                    <h6 class="text-primary fw-bold text-uppercase">Rekam Jejak Karya</h6>
                    <h2 class="fw-bold mb-0">Portofolio Proyek Terpilih</h2>
                </div>
                <p class="text-muted mb-0 mt-2 mt-md-0">Bukti nyata implementasi sistem pada berbagai mitra institusi.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden portfolio-card shadow-sm">
                        <div class="bg-secondary bg-opacity-25 d-flex align-items-center justify-content-center" style="height: 220px;">
                            <i class="bi bi-laptop fs-1 text-secondary"></i>
                        </div>
                        <div class="card-body p-4">
                            <span class="badge bg-primary-subtle text-primary mb-2">Web Application</span>
                            <h5 class="fw-bold">Portal Akademik Kampus Terpadu</h5>
                            <p class="text-muted small">
                                Klien: <strong>Politeknik Nusantara</strong> — Pengembangan sistem informasi manajemen perkuliahan dan modul praktikum.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100 rounded-4 overflow-hidden portfolio-card shadow-sm">
                        <div class="bg-secondary bg-opacity-25 d-flex align-items-center justify-content-center" style="height: 220px;">
                            <i class="bi bi-shield-shaded fs-1 text-secondary"></i>
                        </div>
                        <div class="card-body p-4">
                            <span class="badge bg-danger-subtle text-danger mb-2">Cybersecurity Audit</span>
                            <h5 class="fw-bold">Audit Keamanan Sistem Pembayaran QRIS</h5>
                            <p class="text-muted small">
                                Klien: <strong>PT. FinTech Sriwijaya</strong> — Pengujian penetrasi menyeluruh pada endpoint API transaksi pembayaran.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CONTACT -->
    <section id="contact" class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow rounded-4 p-4 p-md-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">Mulai Diskusi Proyek Anda</h3>
                            <p class="text-muted small">Kirimkan kebutuhan spesifikasi sistem Anda, tim engineer kami akan segera merespons.</p>
                        </div>

                        <form action="#" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Nama Anda / Instansi">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Alamat Email</label>
                                    <input type="email" class="form-control" placeholder="nama@perusahaan.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Subjek Kebutuhan</label>
                                    <input type="text" class="form-control" placeholder="Misal: Pengembangan ERP / Audit Keamanan">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Rincian Pesan</label>
                                    <textarea class="form-control" rows="4" placeholder="Jelaskan gambaran singkat kebutuhan proyek Anda..."></textarea>
                                </div>
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-primary px-4 py-2 fw-semibold">
                                        <i class="bi bi-send-fill me-1"></i> Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection