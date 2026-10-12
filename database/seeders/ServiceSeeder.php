<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $unsplash = fn (string $path) => 'https://images.unsplash.com/'.$path.'&auto=format&fit=crop';

        $services = [
            [
                'title' => 'Mesin Kantor',
                'slug' => 'mesin-kantor',
                'image' => $unsplash('photo-1612815154858-60aa4c59eaa6?q=80&w=1170'),
                'summary' => 'Menyediakan berbagai peralatan mekanis maupun elektronik berstandar korporat. Kami memastikan ketersediaan mesin fotokopi, printer, mesin penghancur kertas, hingga sistem presensi yang siap menunjang produktivitas dokumen dan administrasi perusahaan Anda.',
                'detail' => "# Cakupan Produk\n- Mesin Fotokopi & Printer Multifungsi\n- Mesin Penghancur Kertas (Paper Shredder)\n- Mesin Hitung Uang & Alat Presensi\n# Keandalan Operasional\nSetiap unit mesin kantor yang kami distribusikan dilengkapi dengan jaminan garansi resmi serta dukungan teknis purna jual untuk meminimalisir gangguan operasional perusahaan Anda.",
            ],
            [
                'title' => 'Komputer & Perlengkapannya',
                'slug' => 'komputer',
                'image' => $unsplash('photo-1551739440-5dd934d3a94a?q=80&w=764'),
                'summary' => 'Solusi komputasi yang disesuaikan dengan skala kerja Anda. Mulai dari PC Desktop, laptop spesifikasi tinggi untuk profesional, hingga perangkat keras jaringan dan aksesori yang menjamin integrasi data yang stabil dan aman.',
                'detail' => "# Cakupan Perangkat\n- PC Desktop & Laptop Korporat\n- Perangkat Jaringan (Router, Switch, Hub)\n- Aksesori & Periferal Pendukung Kerja\n# Standar Teknologi\nKami menyediakan spesifikasi perangkat keras terkini yang dapat disesuaikan secara khusus dengan skala beban kerja instansi maupun perusahaan Anda.",
            ],
            [
                'title' => 'Peralatan Listrik & Penerangan',
                'slug' => 'peralatan-listrik',
                'image' => $unsplash('photo-1553873002-785d775854c9?q=80&w=1170'),
                'summary' => 'Kami memahami bahwa pencahayaan dan pasokan listrik adalah detak jantung operasional. Dapatkan solusi penerangan hemat energi, tata cahaya ruang kerja yang ergonomis, serta perangkat manajemen daya kelistrikan yang aman.',
                'detail' => "# Cakupan Produk\n- Sistem Penerangan & Lampu LED Efisien\n- Perangkat Manajemen Daya & Stabilizer\n- Komponen Instalasi & Aksesori Kelistrikan\n# Keamanan & Kualitas\nSeluruh produk kelistrikan yang kami sediakan telah memenuhi standar keamanan nasional untuk menjamin perlindungan instalasi gedung Anda.",
            ],
            [
                'title' => 'Piranti Lunak (Software)',
                'slug' => 'software',
                'image' => $unsplash('photo-1461749280684-dccba630e2f6?q=80&w=1169'),
                'summary' => 'Menyediakan lisensi resmi untuk berbagai kebutuhan perangkat lunak. Mulai dari sistem operasi, aplikasi perkantoran, perlindungan antivirus korporat, hingga software desain spesifik yang memastikan operasional digital Anda legal dan efisien.',
                'detail' => "# Cakupan Lisensi\n- Sistem Operasi & Aplikasi Perkantoran Resmi\n- Software Keamanan & Antivirus Korporat\n- Aplikasi Pendukung Desain & Produktivitas\n# Kepatuhan Legal\nKami menjamin keaslian lisensi untuk menghindari risiko hukum serta memastikan sistem digital perusahaan Anda mendapatkan pembaruan keamanan yang berkala.",
            ],
            [
                'title' => 'Furnitur',
                'slug' => 'furniture',
                'image' => $unsplash('photo-1586023492125-27b2c045efd7?q=80&w=958'),
                'summary' => 'Merancang tata ruang yang memacu produktivitas dengan furnitur ergonomis berkualitas tinggi. Kami mendistribusikan meja kerja, kursi ortopedi, lemari arsip, hingga partisi modular yang memadukan estetika modern dengan ketahanan jangka panjang.',
                'detail' => "# Cakupan Produk\n- Kursi Ergonomis & Eksekutif\n- Meja Kerja Individual & Meeting\n- Sistem Partisi & Modular\n- Lemari Arsip & Penyimpanan\n# Nilai Tambah\nSeluruh produk furnitur kami dikurasi berdasarkan daya tahan material dan standar ergonomi internasional. Kami melayani pembelian eceran hingga pengadaan massal untuk proyek tata ruang kantor baru.",
            ],
        ];

        foreach ($services as $service) {
            Service::firstOrCreate(['slug' => $service['slug']], $service);
        }
    }
}
