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

        <!-- 3. SERVICES SECTION (dinamis dari tabel services) -->
    <section id="services" class="py-5">
        <div class="container py-4">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h6 class="text-primary fw-bold text-uppercase">Layanan Unggulan</h6>
                <h2 class="fw-bold">Solusi Teknologi End-to-End</h2>
                <p class="text-muted">
                    Menampilkan {{ $services->count() }} layanan profesional dari database kami.
                </p>
            </div>

            <div class="row g-4">
                @forelse($services as $service)
                    <div class="col-md-4">
                        <div class="card h-100 p-4 rounded-4 service-card shadow-sm">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div class="icon-box">
                                    <i class="bi {{ $service->icon ?? 'bi-gear' }}"></i>
                                </div>
                                <span class="badge bg-primary-subtle text-primary">
                                    {{ $service->category->name }}
                                </span>
                            </div>
                            <h5 class="fw-bold">{{ $service->title }}</h5>
                            <p class="text-muted small">{{ $service->description }}</p>
                            <a href="#contact" class="small fw-semibold text-decoration-none mt-auto">
                                Tanya Layanan Ini &rarr;
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5 bg-white rounded-4 border border-dashed">
                            <p class="text-muted mb-0">Belum ada data layanan yang tersedia di database.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

        <!-- 4. PORTFOLIO SECTION (dinamis dari tabel portfolios) -->
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
                @forelse($portfolios as $portfolio)
                    <div class="col-md-4">
                        <div class="card h-100 rounded-4 overflow-hidden portfolio-card shadow-sm">
                            <div class="portfolio-cover d-flex align-items-center justify-content-center p-4 text-center" style="height: 180px;">
                                <span class="text-white fw-bold">{{ $portfolio->title }}</span>
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex justify-content-between small text-muted mb-2">
                                    <span class="badge bg-primary-subtle text-primary">{{ $portfolio->category->name }}</span>
                                    <span>{{ $portfolio->completed_date->format('d M Y') }}</span>
                                </div>
                                <h5 class="fw-bold">{{ $portfolio->title }}</h5>
                                <p class="small fw-medium text-muted mb-2">Klien: {{ $portfolio->client_name }}</p>
                                <p class="text-muted small">{{ $portfolio->description }}</p>

                                <div class="mt-auto pt-3 border-top">
                                    @if($portfolio->project_url)
                                        <a href="{{ $portfolio->project_url }}" target="_blank" rel="noopener"
                                           class="small fw-semibold text-decoration-none">
                                            Kunjungi Proyek &nearr;
                                        </a>
                                    @else
                                        <span class="small text-muted fst-italic">Proyek Internal (Non-Publik)</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5 bg-white rounded-4 border border-dashed">
                            <p class="text-muted mb-0">Belum ada data portofolio yang ditambahkan.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

        <!-- 5. CONTACT SECTION (simpan ke tabel messages) -->
    <section id="contact" class="py-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow rounded-4 p-4 p-md-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold">Mulai Diskusi Proyek Anda</h3>
                            <p class="text-muted small">Kirimkan kebutuhan spesifikasi sistem Anda, tim engineer kami akan segera merespons.</p>
                        </div>

                        {{-- Flash message sukses --}}
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill me-1"></i> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="sender_name" class="form-label small fw-semibold">Nama Lengkap *</label>
                                    <input type="text" id="sender_name" name="sender_name"
                                           value="{{ old('sender_name') }}"
                                           class="form-control @error('sender_name') is-invalid @enderror"
                                           placeholder="Nama Anda / Instansi">
                                    @error('sender_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="sender_email" class="form-label small fw-semibold">Alamat Email *</label>
                                    <input type="email" id="sender_email" name="sender_email"
                                           value="{{ old('sender_email') }}"
                                           class="form-control @error('sender_email') is-invalid @enderror"
                                           placeholder="nama@perusahaan.com">
                                    @error('sender_email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="subject" class="form-label small fw-semibold">Subjek Kebutuhan *</label>
                                    <input type="text" id="subject" name="subject"
                                           value="{{ old('subject') }}"
                                           class="form-control @error('subject') is-invalid @enderror"
                                           placeholder="Misal: Pengembangan ERP / Audit Keamanan">
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="message_body" class="form-label small fw-semibold">Rincian Pesan *</label>
                                    <textarea id="message_body" name="message_body" rows="4"
                                              class="form-control @error('message_body') is-invalid @enderror"
                                              placeholder="Jelaskan gambaran singkat kebutuhan proyek Anda...">{{ old('message_body') }}</textarea>
                                    @error('message_body')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary px-4 py-2 fw-semibold">
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

{{-- Jika validasi gagal, gulir otomatis ke form kontak --}}
@if($errors->any())
    @push('scripts')
        <script>
            document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
        </script>
    @endpush
@endif