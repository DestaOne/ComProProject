@extends('layouts.app')

@section('content')
<div class="bg-slate-50 py-16 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <a href="{{ url('/layanan') }}" class="inline-flex items-center text-sm font-bold text-slate-500 hover:text-blue-800 transition-colors duration-200 uppercase tracking-widest mb-8">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Katalog
        </a>
        <h1 class="text-3xl md:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight mb-6">Komputer & Perlengkapannya</h1>
        <p class="text-lg md:text-xl text-slate-600 max-w-3xl font-medium leading-relaxed">
            Infrastruktur komputasi berkinerja tinggi untuk mendukung kelancaran pemrosesan data, konektivitas jaringan, dan workstation profesional.
        </p>
    </div>
</div>

<div class="bg-white py-16 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            <div class="lg:col-span-8 relative w-full aspect-video bg-slate-200 ring-1 ring-slate-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1551739440-5dd934d3a94a?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Komputer" class="w-full h-full object-cover">
            </div>
            <div class="lg:col-span-4 flex flex-col space-y-8">
                <div>
                    <h3 class="text-lg font-bold text-slate-900 uppercase tracking-widest mb-3 border-b-2 border-blue-800 inline-block pb-1">Cakupan Perangkat</h3>
                    <ul class="mt-4 space-y-4">
                        <li class="flex items-start">
                            <span class="w-1.5 h-1.5 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                            <span class="text-slate-600 font-medium">PC Desktop & Laptop Korporat</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-1.5 h-1.5 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                            <span class="text-slate-600 font-medium">Perangkat Jaringan (Router, Switch, Hub)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="w-1.5 h-1.5 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                            <span class="text-slate-600 font-medium">Aksesori & Periferal Pendukung Kerja</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-slate-900 uppercase tracking-widest mb-3 border-b-2 border-blue-800 inline-block pb-1">Standar Teknologi</h3>
                    <p class="text-slate-600 font-medium leading-relaxed mt-4">
                        Kami menyediakan spesifikasi perangkat keras terkini yang dapat disesuaikan secara khusus dengan skala beban kerja instansi maupun perusahaan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-blue-900 py-16 md:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight mb-6">Tertarik dengan layanan ini?</h2>
        <p class="text-blue-200 text-lg mb-10 max-w-2xl font-medium">
            Konsultasikan spesifikasi komputer dan perangkat jaringan yang Anda butuhkan. Dapatkan penawaran khusus untuk pengadaan skala besar.
        </p>
        <a href="#" class="inline-flex h-12 items-center justify-center bg-white px-10 text-base font-bold text-blue-900 hover:bg-slate-100 transition duration-200 ring-1 ring-white uppercase tracking-wide">
            Minta Penawaran
        </a>
    </div>
</div>
@endsection