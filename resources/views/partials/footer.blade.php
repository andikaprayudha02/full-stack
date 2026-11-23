<footer class="bg-dark text-light pt-5 pb-4 mt-5 border-top border-secondary">
    <div class="container">
        <div class="row gy-4">

            <div class="col-lg-5 col-md-6">
                <h5 class="fw-bold text-white d-flex align-items-center gap-2 mb-3">
                    <i class="bi bi-cpu-fill text-info"></i>
                    {{ \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital Solution') }}
                </h5>
                <p class="text-secondary small pe-lg-4">
                    {{ \App\Models\CompanySetting::getVal('about_us', 'Mitra solusi rekayasa perangkat lunak dan keamanan sistem informasi.') }}
                </p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h6 class="fw-bold text-uppercase text-info mb-3">Tautan Cepat</h6>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="{{ route('about') }}" class="text-secondary text-decoration-none">Profil Perusahaan</a></li>
                    <li class="mb-2"><a href="{{ route('home') }}#services" class="text-secondary text-decoration-none">Layanan Teknis</a></li>
                    <li class="mb-2"><a href="{{ route('home') }}#portfolio" class="text-secondary text-decoration-none">Karya Portofolio</a></li>
                    <li class="mb-2"><a href="{{ route('home') }}#contact" class="text-secondary text-decoration-none">Konsultasi Proyek</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h6 class="fw-bold text-uppercase text-info mb-3">Kantor & Kontak</h6>
                <ul class="list-unstyled small text-secondary">
                    <li class="mb-2 d-flex gap-2">
                        <i class="bi bi-geo-alt-fill text-info"></i>
                        <span>{{ \App\Models\CompanySetting::getVal('address', 'Palembang, Sumatera Selatan') }}</span>
                    </li>
                    <li class="mb-2 d-flex gap-2">
                        <i class="bi bi-envelope-fill text-info"></i>
                        <span>{{ \App\Models\CompanySetting::getVal('contact_email', 'info@nusantaradigital.co.id') }}</span>
                    </li>
                    <li class="mb-2 d-flex gap-2">
                        <i class="bi bi-telephone-fill text-info"></i>
                        <span>{{ \App\Models\CompanySetting::getVal('contact_phone', '+62 711 445566') }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="border-secondary my-4">

        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center small text-secondary">
            <p class="mb-0">&copy; {{ date('Y') }} {{ \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital Solution') }}. All rights reserved.</p>
            <p class="mb-0">Praktikum Rekayasa Web — Full-Stack Laravel</p>
        </div>
    </div>
</footer>