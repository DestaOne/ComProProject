@extends('layouts.app')

@section('content')
<div class="bg-white py-16 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center space-x-3 mb-4 md:mb-6">
            <span class="w-8 h-[2px] bg-blue-800"></span>
            <span class="text-xs font-bold uppercase tracking-widest text-blue-800">Katalog Layanan</span>
            <span class="w-8 h-[2px] bg-blue-800"></span>
        </div>
        <h1 class="text-3xl md:text-4xl lg:text-6xl font-extrabold text-slate-900 tracking-tight mb-4 md:mb-6">Solusi Ekosistem Kerja</h1>
        <p class="text-base md:text-lg lg:text-xl text-slate-500 max-w-3xl mx-auto font-medium leading-relaxed">
            Dari perangkat keras berkinerja tinggi hingga tata ruang presisi. Kami menyediakan produk berkualitas unggul untuk memastikan setiap aspek operasional Anda berjalan tanpa hambatan.
        </p>
    </div>
</div>

<!-- Mesin Kantor -->
<div class="bg-slate-50 py-12 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 lg:gap-24 items-center group">
            <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Mesin Kantor" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight mb-4 md:mb-6 group-hover:text-blue-800 transition-colors duration-300">
                    Mesin Kantor
                </h2>
                <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-8">
                    Menyediakan berbagai peralatan mekanis maupun elektronik berstandar korporat. Kami memastikan ketersediaan mesin fotokopi, printer, mesin penghancur kertas, hingga sistem presensi yang siap menunjang produktivitas dokumen dan administrasi perusahaan Anda.
                </p>
                <div class="flex items-center mb-6">
                    <a href="{{ url('/layanan/mesin-kantor') }}" class="inline-flex items-center justify-center h-10 px-6 text-sm font-bold text-blue-800 ring-1 ring-blue-800 hover:bg-blue-800 hover:text-white transition duration-200 uppercase tracking-wide">
                        Detail Layanan
                    </a>
                </div>
                <div class="w-12 h-[2px] bg-slate-300 group-hover:w-full group-hover:bg-blue-800 transition-all duration-500 ease-out"></div>
            </div>
        </div>
    </div>
</div>

<!-- Komputer & Perlengkapannya -->
<div class="bg-white py-12 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 lg:gap-24 items-center group">
            <div class="flex flex-col order-2 md:order-1">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight mb-4 md:mb-6 group-hover:text-blue-800 transition-colors duration-300">
                    Komputer & Perlengkapannya
                </h2>
                <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-8">
                    Solusi komputasi yang disesuaikan dengan skala kerja Anda. Mulai dari PC Desktop, laptop spesifikasi tinggi untuk profesional, hingga perangkat keras jaringan dan aksesori yang menjamin integrasi data yang stabil dan aman.
                </p>
                <div class="flex items-center mb-6">
                    <a href="{{ url('/layanan/komputer') }}" class="inline-flex items-center justify-center h-10 px-6 text-sm font-bold text-blue-800 ring-1 ring-blue-800 hover:bg-blue-800 hover:text-white transition duration-200 uppercase tracking-wide">
                        Detail Layanan
                    </a>
                </div>
                <div class="w-12 h-[2px] bg-slate-300 group-hover:w-full group-hover:bg-blue-800 transition-all duration-500 ease-out"></div>
            </div>
            <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden order-1 md:order-2">
                <img src="https://images.unsplash.com/photo-1551739440-5dd934d3a94a?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Komputer" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
            </div>
        </div>
    </div>
</div>

<!-- Peralatan Listrik -->
<div class="bg-slate-50 py-12 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 lg:gap-24 items-center group">
            <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1553873002-785d775854c9?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Peralatan Listrik dan Penerangan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight mb-4 md:mb-6 group-hover:text-blue-800 transition-colors duration-300">
                    Peralatan Listrik & Penerangan
                </h2>
                <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-8">
                    Kami memahami bahwa pencahayaan dan pasokan listrik adalah detak jantung operasional. Dapatkan solusi penerangan hemat energi, tata cahaya ruang kerja yang ergonomis, serta perangkat manajemen daya kelistrikan yang aman.
                </p>
                <div class="flex items-center mb-6">
                    <a href="{{ url('/layanan/peralatan-listrik') }}" class="inline-flex items-center justify-center h-10 px-6 text-sm font-bold text-blue-800 ring-1 ring-blue-800 hover:bg-blue-800 hover:text-white transition duration-200 uppercase tracking-wide">
                        Detail Layanan
                    </a>
                </div>
                <div class="w-12 h-[2px] bg-slate-300 group-hover:w-full group-hover:bg-blue-800 transition-all duration-500 ease-out"></div>
            </div>
        </div>
    </div>
</div>

<!-- Piranti Lunak -->
<div class="bg-white py-12 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 lg:gap-24 items-center group">
            <div class="flex flex-col order-2 md:order-1">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight mb-4 md:mb-6 group-hover:text-blue-800 transition-colors duration-300">
                    Piranti Lunak (Software)
                </h2>
                <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-8">
                    Menyediakan lisensi resmi untuk berbagai kebutuhan perangkat lunak. Mulai dari sistem operasi, aplikasi perkantoran, perlindungan antivirus korporat, hingga software desain spesifik yang memastikan operasional digital Anda legal dan efisien.
                </p>
                <div class="flex items-center mb-6">
                    <a href="{{ url('/layanan/software') }}" class="inline-flex items-center justify-center h-10 px-6 text-sm font-bold text-blue-800 ring-1 ring-blue-800 hover:bg-blue-800 hover:text-white transition duration-200 uppercase tracking-wide">
                        Detail Layanan
                    </a>
                </div>
                <div class="w-12 h-[2px] bg-slate-300 group-hover:w-full group-hover:bg-blue-800 transition-all duration-500 ease-out"></div>
            </div>
            <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden order-1 md:order-2">
                <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?q=80&w=1169&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Piranti Lunak" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
            </div>
        </div>
    </div>
</div>

<!-- Furnitur -->
<div class="bg-slate-50 py-12 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 lg:gap-24 items-center group">
            <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=958&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Furnitur" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight mb-4 md:mb-6 group-hover:text-blue-800 transition-colors duration-300">
                    Furnitur Perkantoran
                </h2>
                <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-8">
                    Merancang tata ruang yang memacu produktivitas dengan furnitur ergonomis berkualitas tinggi. Kami mendistribusikan meja kerja, kursi ortopedi, lemari arsip, hingga partisi modular yang memadukan estetika modern dengan ketahanan jangka panjang.
                </p>
                <div class="flex items-center mb-6">
                    <a href="{{ url('/layanan/furnitur') }}" class="inline-flex items-center justify-center h-10 px-6 text-sm font-bold text-blue-800 ring-1 ring-blue-800 hover:bg-blue-800 hover:text-white transition duration-200 uppercase tracking-wide">
                        Detail Layanan
                    </a>
                </div>
                <div class="w-12 h-[2px] bg-slate-300 group-hover:w-full group-hover:bg-blue-800 transition-all duration-500 ease-out"></div>
            </div>
        </div>
    </div>
</div>
@endsection