@extends('layouts.app')

@php
    $titles = [
        'mesin-kantor' => 'Mesin Kantor',
        'komputer' => 'Komputer & Perlengkapannya',
        'peralatan-listrik' => 'Peralatan Listrik & Penerangan',
        'software' => 'Piranti Lunak (Software)',
        'furnitur' => 'Furnitur Perkantoran'
    ];
    $judul_layanan = $titles[$kategori] ?? 'Detail Layanan';
@endphp

@section('content')
<div class="bg-white py-12 md:py-20 border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center text-sm font-medium text-slate-500 mb-8 space-x-2">
            <a href="{{ url('/') }}" class="hover:text-blue-800 transition-colors">Beranda</a>
            <span>/</span>
            <a href="{{ url('/layanan') }}" class="hover:text-blue-800 transition-colors">Layanan</a>
            <span>/</span>
            <span class="text-slate-900">{{ $judul_layanan }}</span>
        </nav>

        <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight mb-6 leading-tight">
            {{ $judul_layanan }}
        </h1>
        <p class="text-lg md:text-xl text-slate-500 font-medium leading-relaxed max-w-2xl">
            Spesifikasi premium dan dukungan operasional terbaik dari CV Elka Mandiri untuk efisiensi ekosistem kerja Anda.
        </p>
    </div>
</div>

<div class="bg-slate-50 py-12 md:py-20 border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="w-full md:max-w-xl aspect-video bg-slate-200 ring-1 ring-slate-200 overflow-hidden mb-10 md:mb-12">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop" alt="{{ $judul_layanan }}" class="w-full h-full object-cover">
        </div>

        <div>
            <h3 class="text-2xl md:text-3xl font-bold text-slate-900 tracking-tight mb-6">Kualitas Tanpa Kompromi</h3>
            <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-6">
                Melalui layanan <strong class="text-slate-900">{{ $judul_layanan }}</strong>, kami memastikan bahwa setiap entitas bisnis mendapatkan dukungan operasional dengan spesifikasi tertinggi di kelasnya. Pemilihan produk dilakukan melalui proses kurasi yang ketat, berorientasi pada daya tahan, efisiensi energi, dan desain ergonomis.
            </p>
            <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-10">
                Tidak hanya sekadar mendistribusikan produk, tim ahli kami akan memberikan panduan mendalam—mulai dari proses instalasi, penyesuaian tata letak ruangan, hingga layanan perawatan berkelanjutan (maintenance) untuk mencegah <i>downtime</i> operasional.
            </p>
            
            <div class="bg-white ring-1 ring-slate-200 p-6 md:p-8">
                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-widest mb-6 border-b border-slate-100 pb-4">
                    Nilai Tambah Layanan Ini
                </h4>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="w-1.5 h-1.5 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 font-medium text-base">Garansi resmi distributor dan dukungan teknis prioritas.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-1.5 h-1.5 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 font-medium text-base">Konsultasi pra-pembelian untuk menyesuaikan dengan anggaran perusahaan.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-1.5 h-1.5 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 font-medium text-base">Pengiriman dan proses instalasi profesional secara gratis di area jangkauan.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-20 text-center">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight mb-6">
            Tertarik dengan layanan ini?
        </h2>
        <p class="text-lg text-slate-500 mb-10 font-medium leading-relaxed">
            Tingkatkan efisiensi bisnis Anda hari ini. Tim spesialis kami siap menyusun penawaran terbaik dan harga khusus untuk kebutuhan operasional perusahaan Anda.
        </p>
        <a href="#" class="inline-flex h-14 items-center justify-center bg-blue-800 px-10 text-sm md:text-base font-bold text-white uppercase tracking-widest hover:bg-blue-900 transition duration-300">
            Minta Penawaran
        </a>
    </div>
</div>
@endsection