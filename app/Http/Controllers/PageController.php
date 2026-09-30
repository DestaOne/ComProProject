<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menyediakan data untuk Halaman Beranda (Home)
    public function home()
    {
        $services = [
            [
                'title' => 'Perdagangan Eceran Mesin Kantor',
                'image' => 'https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url'   => url('/layanan/mesin-kantor'),
            ],
            [
                'title' => 'Komputer & Perlengkapannya',
                'image' => 'https://images.unsplash.com/photo-1551739440-5dd934d3a94a?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url'   => url('/layanan/komputer'),
            ],
            [
                'title' => 'Perdagangan Eceran Furnitur',
                'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=958&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url'   => url('/layanan/furnitur'),
            ],
        ];

        return view('index', compact('services'));
    }

    // Menyediakan data untuk Halaman Katalog Layanan Lengkap
    public function layanan()
    {
        $allServices = [
            [
                'title' => 'Mesin Kantor',
                'desc'  => 'Menyediakan berbagai peralatan mekanis maupun elektronik berstandar korporat. Kami memastikan ketersediaan mesin fotokopi, printer, mesin penghancur kertas, hingga sistem presensi yang siap menunjang produktivitas dokumen dan administrasi perusahaan Anda.',
                'image' => 'https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url'   => url('/layanan/mesin-kantor'),
                'bg'    => 'bg-slate-50',
            ],
            [
                'title' => 'Komputer & Perlengkapannya',
                'desc'  => 'Solusi komputasi yang disesuaikan dengan skala kerja Anda. Mulai dari PC Desktop, laptop spesifikasi tinggi untuk profesional, hingga perangkat keras jaringan dan aksesori yang menjamin integrasi data yang stabil dan aman.',
                'image' => 'https://images.unsplash.com/photo-1551739440-5dd934d3a94a?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url'   => url('/layanan/komputer'),
                'bg'    => 'bg-white',
            ],
            [
                'title' => 'Peralatan Listrik & Penerangan',
                'desc'  => 'Kami memahami bahwa pencahayaan dan pasokan listrik adalah detak jantung operasional. Dapatkan solusi penerangan hemat energi, tata cahaya ruang kerja yang ergonomis, serta perangkat manajemen daya kelistrikan yang aman.',
                'image' => 'https://images.unsplash.com/photo-1553873002-785d775854c9?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url'   => url('/layanan/peralatan-listrik'),
                'bg'    => 'bg-slate-50',
            ],
            [
                'title' => 'Piranti Lunak (Software)',
                'desc'  => 'Menyediakan lisensi resmi untuk berbagai kebutuhan perangkat lunak. Mulai dari sistem operasi, aplikasi perkantoran, perlindungan antivirus korporat, hingga software desain spesifik yang memastikan operasional digital Anda legal dan efisien.',
                'image' => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?q=80&w=1169&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url'   => url('/layanan/software'),
                'bg'    => 'bg-white',
            ],
            [
                'title' => 'Furnitur Perkantoran',
                'desc'  => 'Merancang tata ruang yang memacu produktivitas dengan furnitur ergonomis berkualitas tinggi. Kami mendistribusikan meja kerja, kursi ortopedi, lemari arsip, hingga partisi modular yang memadukan estetika modern dengan ketahanan jangka panjang.',
                'image' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=958&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'url'   => url('/layanan/furnitur'),
                'bg'    => 'bg-slate-50',
            ],
        ];

        return view('layanan', compact('allServices'));
    }
}