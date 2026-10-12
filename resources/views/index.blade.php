@extends('layouts.app')

@section('content')
<x-hero-banner 
        image="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop"
       
        title="Solusi Lengkap untuk Kebutuhan Operasional dan Ruang Kerja"
        subtitle="Solusi terpercaya untuk kebutuhan mesin kantor, komputer, perangkat lunak, dan furnitur. Membangun ekosistem kerja profesional untuk bisnis Anda."
    >
        <!-- Isi dari "Slot" (Bagian ini akan muncul di bawah subtitle) -->
        <a href="{{ url('/layanan') }}" class="inline-flex h-12 items-center justify-center bg-blue-800 px-10 text-sm font-bold text-white uppercase tracking-widest ring-1 ring-blue-800 hover:bg-transparent hover:text-white transition-all duration-300 ease-in-out">
            Lihat Layanan Kami
        </a>
    </x-hero-banner>

<div id="layanan" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
    <div class="flex flex-col md:flex-row justify-between items-end mb-12">
        <div class="max-w-2xl">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight">Layanan Kami</h2>
            <p class="mt-4 text-lg text-slate-500">Beragam pilihan produk berkualitas untuk memenuhi segala kebutuhan operasional dan tata ruang perusahaan Anda.</p>
        </div>
    </div>

    
     <div class="grid grid-cols-1 md:grid-cols-2 border-t border-l border-slate-300 bg-white">
            
            <!-- Modul 1 -->
            <a href="{{ url('/layanan/komputer') }}" class="block border-b border-r border-slate-300 p-12 hover:bg-slate-50 transition-colors duration-300 group cursor-pointer relative">
                <span class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-8 block">01 / IT & Perangkat Lunak</span>
                <h3 class="text-3xl font-semibold text-slate-900 mb-4 tracking-tight">Infrastruktur Digital</h3>
                <p class="text-slate-600 text-lg font-light leading-relaxed mb-8 max-w-sm">Pengadaan PC, laptop, server, serta instalasi dan konfigurasi jaringan tingkat lanjut.</p>
                <div class="absolute bottom-10 right-10 text-blue-600 transform group-hover:translate-x-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </a>

            <!-- Modul 2 -->
            <a href="{{ url('/layanan/mesin-kantor') }}" class="block border-b border-r border-slate-300 p-12 hover:bg-slate-50 transition-colors duration-300 group cursor-pointer relative">
                <span class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-8 block">02 / Mesin Kantor</span>
                <h3 class="text-3xl font-semibold text-slate-900 mb-4 tracking-tight">Efisiensi Dokumen</h3>
                <p class="text-slate-600 text-lg font-light leading-relaxed mb-8 max-w-sm">Perangkat cetak skala besar, mesin fotokopi, dan sistem absensi biometrik.</p>
                <div class="absolute bottom-10 right-10 text-blue-600 transform group-hover:translate-x-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </a>

            <!-- Modul 3 -->
            <a href="{{ url('/layanan/furniture') }}" class="block border-b border-r border-slate-300 p-12 hover:bg-slate-50 transition-colors duration-300 group cursor-pointer relative">
                <span class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-8 block">03 / Furnitur</span>
                <h3 class="text-3xl font-semibold text-slate-900 mb-4 tracking-tight">Ruang Kerja Ergonomis</h3>
                <p class="text-slate-600 text-lg font-light leading-relaxed mb-8 max-w-sm">Desain dan suplai partisi ruangan, meja, kursi direksi, serta penyimpanan arsip.</p>
                <div class="absolute bottom-10 right-10 text-blue-600 transform group-hover:translate-x-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </a>

            <!-- Modul 4 (DIUBAH MENJADI LINK CALL TO ACTION KE HALAMAN LAYANAN) -->
            <a href="/layanan" class="border-b border-r border-slate-300 p-12 bg-blue-800 hover:bg-blue-700 transition-colors duration-300 group cursor-pointer relative flex flex-col justify-between min-h-[350px]">
                <div>
                    <span class="text-blue-200 text-sm font-semibold uppercase tracking-wider mb-8 block">Eksplorasi Katalog</span>
                    <h3 class="text-4xl font-semibold text-white mb-4 tracking-tight leading-tight">Lihat layanan<br>lainnya</h3>
                </div>
                <!-- Panah yang meluncur saat di-hover -->
                <div class="absolute bottom-10 right-10 text-white transform group-hover:translate-x-4 transition-transform duration-300">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </a>

        </div>
    </div>

<div class="bg-white border-t border-slate-200 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16">
            <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-widest uppercase mb-4 font-mon">Kualitas. Keandalan. Pelayanan.</h2>
            <p class="text-lg text-slate-500 max-w-2xl font-medium">Temukan alasan mengapa berbagai instansi dan perusahaan di Bali mempercayakan kebutuhan operasional dan ruang kerja mereka kepada CV Elka Mandiri.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="group relative flex flex-col justify-end h-[450px] overflow-hidden ring-1 ring-slate-200 bg-white">
                
                <div class="absolute top-6 right-6 w-12 h-12 z-20 pointer-events-none">
                    <div class="absolute top-0 right-0 w-0 h-[3px] bg-blue-800 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute top-0 right-0 w-[3px] h-0 bg-blue-800 group-hover:h-full transition-all duration-300 ease-out"></div>
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <img src="https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=2070&auto=format&fit=crop" alt="Solusi Terpadu" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>
                
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
                
                <div class="relative z-10 p-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-800 transition-colors uppercase tracking-wide">Solusi Terpadu</h3>
                    <p class="text-slate-600 font-medium leading-relaxed">Satu pintu untuk semua kebutuhan. Dari instalasi piranti lunak, penyediaan komputer, hingga furnitur dalam satu ekosistem yang selaras.</p>
                </div>
            </div>

            <div class="group relative flex flex-col justify-end h-[450px] overflow-hidden ring-1 ring-slate-200 bg-white">
                
                <div class="absolute top-6 right-6 w-12 h-12 z-20 pointer-events-none">
                    <div class="absolute top-0 right-0 w-0 h-[3px] bg-blue-800 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute top-0 right-0 w-[3px] h-0 bg-blue-800 group-hover:h-full transition-all duration-300 ease-out"></div>
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <img src="https://images.unsplash.com/photo-1637073849563-5b0ac780ec34?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D    " alt="Kualitas Profesional" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>
                
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
                
                <div class="relative z-10 p-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-800 transition-colors uppercase tracking-wide">Standar Profesional</h3>
                    <p class="text-slate-600 font-medium leading-relaxed">Kami hanya menyediakan produk dengan standar industri terbaik untuk memastikan keawetan, keamanan, dan efisiensi jangka panjang.</p>
                </div>
            </div>

            <div class="group relative flex flex-col justify-end h-[450px] overflow-hidden ring-1 ring-slate-200 bg-white">
                
                <div class="absolute top-6 right-6 w-12 h-12 z-20 pointer-events-none">
                    <div class="absolute top-0 right-0 w-0 h-[3px] bg-blue-800 group-hover:w-full transition-all duration-300 ease-out"></div>
                    <div class="absolute top-0 right-0 w-[3px] h-0 bg-blue-800 group-hover:h-full transition-all duration-300 ease-out"></div>
                </div>

                <div class="absolute inset-0 w-full h-full">
                    <img src="https://images.unsplash.com/photo-1766066014237-00645c74e9c6?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Dukungan Penuh" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out">
                </div>
                
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>
                
                <div class="relative z-10 p-8">
                    <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-800 transition-colors uppercase tracking-wide">Dukungan Responsif</h3>
                    <p class="text-slate-600 font-medium leading-relaxed">Layanan pelanggan dan purna jual yang selalu siap membantu Anda menangani segala masalah teknis maupun konsultasi produk.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<x-cta-banner 
    title="Siap Membangun Ruang Kerja Ideal Anda?"
    desc="Tim ahli kami siap memberikan konsultasi dan penawaran terbaik sesuai dengan anggaran dan spesifikasi perusahaan Anda."
    buttonText="Konsultasi Sekarang"
    buttonUrl="/tentang-kami#kontak"
/>


@endsection