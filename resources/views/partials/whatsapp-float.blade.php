@php
    $waNumber = preg_replace('/\D/', '', \App\Models\CompanySetting::getVal('whatsapp_number', '6281234567890'));
    $waText   = urlencode('Halo Nusantara Digital Solution, saya ingin berkonsultasi mengenai proyek.');
@endphp

<a href="https://wa.me/{{ $waNumber }}?text={{ $waText }}"
   target="_blank" rel="noopener noreferrer"
   class="position-fixed bottom-0 end-0 m-4 btn btn-success rounded-pill shadow-lg wa-float d-flex align-items-center gap-2"
   aria-label="Chat via WhatsApp">
    <i class="bi bi-whatsapp fs-5"></i>
    <span class="d-none d-sm-inline fw-semibold">Chat WhatsApp</span>
</a>