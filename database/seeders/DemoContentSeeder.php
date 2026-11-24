<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DemoContentSeeder extends Seeder
{
    public function run(): void
    {
        $web = Category::firstOrCreate(
            ['slug' => 'web-development'],
            ['name' => 'Web Development']
        );
        $cloud = Category::firstOrCreate(
            ['slug' => 'cloud-infrastructure'],
            ['name' => 'Cloud & Infrastructure']
        );
        $security = Category::firstOrCreate(
            ['slug' => 'cyber-security'],
            ['name' => 'Cyber Security']
        );

        // 3 Layanan
        Service::firstOrCreate(['slug' => 'custom-web-engineering'], [
            'category_id' => $web->id,
            'title'       => 'Custom Web Engineering',
            'icon'        => 'bi-window-stack',
            'description' => 'Pembangunan aplikasi web modern berbasis arsitektur MVC dan REST API yang skalabel.',
        ]);

        Service::firstOrCreate(['slug' => 'server-cloud-architecture'], [
            'category_id' => $cloud->id,
            'title'       => 'Server & Cloud Architecture',
            'icon'        => 'bi-hdd-network',
            'description' => 'Manajemen server Linux/Windows, virtualisasi container, dan automasi backup berkala.',
        ]);

        Service::firstOrCreate(['slug' => 'vulnerability-assessment'], [
            'category_id' => $security->id,
            'title'       => 'Vulnerability Assessment',
            'icon'        => 'bi-shield-lock',
            'description' => 'Pengujian penetrasi dan audit celah keamanan aplikasi web berstandar OWASP Top 10.',
        ]);

        // 3 Portofolio (kolom image wajib diisi karena tidak nullable)
        Portfolio::firstOrCreate(['title' => 'Portal Akademik Kampus Terpadu'], [
            'category_id'    => $web->id,
            'client_name'    => 'Politeknik Nusantara',
            'image'          => 'portfolios/portal-akademik.jpg',
            'project_url'    => 'https://example.com/portal-akademik',
            'description'    => 'Pengembangan sistem informasi manajemen perkuliahan dan modul praktikum.',
            'completed_date' => '2026-03-15',
        ]);

        Portfolio::firstOrCreate(['title' => 'Audit Keamanan Sistem Pembayaran QRIS'], [
            'category_id'    => $security->id,
            'client_name'    => 'PT. FinTech Sriwijaya',
            'image'          => 'portfolios/audit-qris.jpg',
            'project_url'    => null,
            'description'    => 'Pengujian penetrasi menyeluruh pada endpoint API transaksi pembayaran.',
            'completed_date' => '2026-06-20',
        ]);

        Portfolio::firstOrCreate(['title' => 'Migrasi Server ke Cloud Hybrid'], [
            'category_id'    => $cloud->id,
            'client_name'    => 'CV. Sumsel Logistik',
            'image'          => 'portfolios/migrasi-cloud.jpg',
            'project_url'    => 'https://example.com/migrasi-cloud',
            'description'    => 'Perancangan dan migrasi infrastruktur server lokal ke arsitektur cloud hybrid.',
            'completed_date' => '2026-09-10',
        ]);
    }
}