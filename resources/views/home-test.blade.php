@extends('layouts.app')

@section('content')

<!-- 1. HERO SECTION -->
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



<!-- 3. LAYANAN UTAMA -->
<section class="py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="mb-12">
            <h2 class="text-4xl font-light text-slate-900 tracking-tight mb-2">Layanan Terintegrasi</h2>
            <p class="text-xl text-slate-600 font-light max-w-2xl">Pendekatan satu pintu untuk seluruh kebutuhan infrastruktur teknis dan ruang kerja Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 border-t border-l border-slate-300 bg-white">
            
            <!-- Modul 1 -->
            <div class="border-b border-r border-slate-300 p-12 hover:bg-slate-50 transition-colors duration-300 group cursor-pointer relative">
                <span class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-8 block">01 / IT & Perangkat Lunak</span>
                <h3 class="text-3xl font-semibold text-slate-900 mb-4 tracking-tight">Infrastruktur Digital</h3>
                <p class="text-slate-600 text-lg font-light leading-relaxed mb-8 max-w-sm">Pengadaan PC, laptop, server, serta instalasi dan konfigurasi jaringan tingkat lanjut.</p>
                <div class="absolute bottom-10 right-10 text-blue-600 transform group-hover:translate-x-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>

            <!-- Modul 2 -->
            <div class="border-b border-r border-slate-300 p-12 hover:bg-slate-50 transition-colors duration-300 group cursor-pointer relative">
                <span class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-8 block">02 / Mesin Kantor</span>
                <h3 class="text-3xl font-semibold text-slate-900 mb-4 tracking-tight">Efisiensi Dokumen</h3>
                <p class="text-slate-600 text-lg font-light leading-relaxed mb-8 max-w-sm">Perangkat cetak skala besar, mesin fotokopi, dan sistem absensi biometrik.</p>
                <div class="absolute bottom-10 right-10 text-blue-600 transform group-hover:translate-x-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>

            <!-- Modul 3 -->
            <div class="border-b border-r border-slate-300 p-12 hover:bg-slate-50 transition-colors duration-300 group cursor-pointer relative">
                <span class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-8 block">03 / Furnitur</span>
                <h3 class="text-3xl font-semibold text-slate-900 mb-4 tracking-tight">Ruang Kerja Ergonomis</h3>
                <p class="text-slate-600 text-lg font-light leading-relaxed mb-8 max-w-sm">Desain dan suplai partisi ruangan, meja, kursi direksi, serta penyimpanan arsip.</p>
                <div class="absolute bottom-10 right-10 text-blue-600 transform group-hover:translate-x-2 transition-transform">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </div>
            </div>

            <!-- Modul 4 (DIUBAH MENJADI LINK CALL TO ACTION KE HALAMAN LAYANAN) -->
            <a href="/layanan" class="border-b border-r border-slate-300 p-12 bg-blue-600 hover:bg-blue-700 transition-colors duration-300 group cursor-pointer relative flex flex-col justify-between min-h-[350px]">
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
</section>

<!-- 4. KEUNGGULAN (Ditambahkan Gambar Arsitektural) -->
<section class="py-24 bg-white border-t border-slate-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row gap-12 lg:gap-16">
        
        <!-- Sisi Kiri: Judul dan Gambar Baru -->
        <div class="md:w-5/12 flex flex-col">
            <h2 class="text-4xl font-light text-slate-900 tracking-tight mb-8">Komitmen Kami</h2>
            
            <!-- Gambar pendukung dengan efek grayscale ala IBM -->
            <div class="w-full h-64 md:flex-1 relative bg-slate-100 overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" 
                     alt="Tim Profesional CV Elka Mandiri" 
                     class="absolute inset-0 w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 ease-in-out group-hover:scale-105">
                <!-- Elemen garis IBM di sudut -->
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-blue-600"></div>
            </div>
        </div>

        <!-- Sisi Kanan: Daftar List Keunggulan -->
        <div class="md:w-7/12 border-t border-slate-300">
            <!-- List 1 -->
            <div class="py-8 border-b border-slate-300 flex flex-col sm:flex-row gap-6 sm:gap-10 hover:bg-slate-50 transition-colors">
                <div class="text-blue-600 font-bold text-sm tracking-widest uppercase mt-1 sm:w-1/4">Orisinal</div>
                <div class="sm:w-3/4">
                    <h4 class="text-2xl font-semibold text-slate-900 mb-3">Jaminan Orisinalitas & Garansi Resmi</h4>
                    <p class="text-slate-600 font-light text-lg">Unit yang didistribusikan dijamin orisinalitasnya dan didukung perlindungan garansi penuh dari manufaktur.</p>
                </div>
            </div>
            
            <!-- List 2 -->
            <div class="py-8 border-b border-slate-300 flex flex-col sm:flex-row gap-6 sm:gap-10 hover:bg-slate-50 transition-colors">
                <div class="text-blue-600 font-bold text-sm tracking-widest uppercase mt-1 sm:w-1/4">Responsif</div>
                <div class="sm:w-3/4">
                    <h4 class="text-2xl font-semibold text-slate-900 mb-3">Administrasi & Logistik Presisi</h4>
                    <p class="text-slate-600 font-light text-lg">Pengerjaan dengan jadwal operasional yang ketat untuk memastikan tidak ada penundaan dalam alur kerja Anda.</p>
                </div>
            </div>

            <!-- List 3 -->
            <div class="py-8 border-b border-slate-300 flex flex-col sm:flex-row gap-6 sm:gap-10 hover:bg-slate-50 transition-colors">
                <div class="text-blue-600 font-bold text-sm tracking-widest uppercase mt-1 sm:w-1/4">Expertise</div>
                <div class="sm:w-3/4">
                    <h4 class="text-2xl font-semibold text-slate-900 mb-3">Dukungan Teknisi Profesional</h4>
                    <p class="text-slate-600 font-light text-lg">Meliputi instalasi perangkat, kalibrasi sistem, hingga pemeliharaan berkala secara profesional.</p>
                </div>
            </div>
        </div>

    </div>
</section>



<!-- 6. CALL TO ACTION -->
<x-cta-banner 
    title="Siap Membangun Ruang Kerja Ideal Anda?"
    desc="Tim ahli kami siap memberikan konsultasi dan penawaran terbaik sesuai dengan anggaran dan spesifikasi perusahaan Anda."
    buttonText="Konsultasi Sekarang"
    buttonUrl="/tentang-kami#kontak"
/>

@endsection