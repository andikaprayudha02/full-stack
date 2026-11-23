<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'company_name'    => 'Nusantara Digital Solution',
            'company_tagline' => 'Mitra Transformasi Rekayasa Web & Keamanan Siber',
            'about_us'        => 'Mitra solusi rekayasa perangkat lunak dan keamanan sistem informasi untuk institusi pendidikan, keuangan, dan pemerintahan.',
            'address'         => 'Palembang, Sumatera Selatan',
            'contact_email'   => 'info@nusantaradigital.co.id',
            'contact_phone'   => '+62 711 445566',
            'whatsapp_number' => '6281234567890',
        ];

        foreach ($settings as $key => $value) {
            CompanySetting::updateOrCreate(
                ['setting_key' => $key],
                ['setting_value' => $value]
            );
        }
    }
}