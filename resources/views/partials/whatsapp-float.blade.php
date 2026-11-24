@php
    $company = \App\Models\CompanySetting::getVal('company_name', 'Nusantara Digital Solution');

    // Ambil hanya angka, lalu ubah awalan 0 menjadi kode negara 62
    $waNumber = preg_replace('/\D/', '', \App\Models\CompanySetting::getVal('whatsapp_number', '62895422131725'));
    if (str_starts_with($waNumber, '0')) {
        $waNumber = '62' . substr($waNumber, 1);
    }

    $waText = rawurlencode("Halo {$company}, saya ingin berkonsultasi mengenai proyek.");
@endphp

<a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}"
   target="_blank" rel="noopener noreferrer"
   class="position-fixed bottom-0 end-0 m-4 btn btn-success rounded-pill shadow-lg wa-float d-flex align-items-center gap-2"
   style="z-index: 1050;"
   aria-label="Chat via WhatsApp">
    <i class="bi bi-whatsapp fs-5"></i>
    <span class="d-none d-sm-inline fw-semibold">Chat WhatsApp</span>
</a>