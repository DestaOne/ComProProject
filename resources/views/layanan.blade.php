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

@foreach($allServices as $index => $service)
<div class="{{ $service['bg'] }} py-12 md:py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 lg:gap-24 items-center group">
            
            <!-- Jika indeks ganjil/genap untuk mengatur posisi gambar selang-seling -->
            @if($index % 2 == 0)
                <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden">
                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>
                <div class="flex flex-col">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight mb-4 md:mb-6 group-hover:text-blue-800 transition-colors duration-300">
                        {{ $service['title'] }}
                    </h2>
                    <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-8">
                        {{ $service['desc'] }}
                    </p>
                    <div class="flex items-center mb-6">
                        <a href="{{ $service['url'] }}" class="inline-flex items-center justify-center h-10 px-6 text-sm font-bold text-blue-800 ring-1 ring-blue-800 hover:bg-blue-800 hover:text-white transition duration-200 uppercase tracking-wide">
                            Detail Layanan
                        </a>
                    </div>
                    <div class="w-12 h-[2px] bg-slate-300 group-hover:w-full group-hover:bg-blue-800 transition-all duration-500 ease-out"></div>
                </div>
            @else
                <div class="flex flex-col order-2 md:order-1">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 tracking-tight mb-4 md:mb-6 group-hover:text-blue-800 transition-colors duration-300">
                        {{ $service['title'] }}
                    </h2>
                    <p class="text-base md:text-lg text-slate-600 leading-relaxed font-medium mb-8">
                        {{ $service['desc'] }}
                    </p>
                    <div class="flex items-center mb-6">
                        <a href="{{ $service['url'] }}" class="inline-flex items-center justify-center h-10 px-6 text-sm font-bold text-blue-800 ring-1 ring-blue-800 hover:bg-blue-800 hover:text-white transition duration-200 uppercase tracking-wide">
                            Detail Layanan
                        </a>
                    </div>
                    <div class="w-12 h-[2px] bg-slate-300 group-hover:w-full group-hover:bg-blue-800 transition-all duration-500 ease-out"></div>
                </div>
                <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden order-1 md:order-2">
                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>
            @endif

        </div>
    </div>
</div>
@endforeach

<div class="bg-blue-900 py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white tracking-tight mb-4 md:mb-6">Siap Membangun Ruang Kerja Ideal Anda?</h2>
        <p class="text-blue-200 text-base md:text-lg lg:text-xl max-w-2xl mx-auto mb-8 md:mb-10">Tim ahli kami siap memberikan konsultasi dan penawaran terbaik sesuai dengan anggaran dan spesifikasi perusahaan Anda.</p>
        <a href="#" class="inline-flex h-12 items-center justify-center bg-white px-10 text-base font-bold text-blue-900 hover:bg-slate-50 transition duration-200 ring-1 ring-white uppercase tracking-wide">
            Konsultasi Sekarang
        </a>
    </div>
</div>
@endsection