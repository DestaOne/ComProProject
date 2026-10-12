@extends('layouts.app')

@section('content')
<x-hero-banner 
        image="https://images.unsplash.com/photo-1606836576983-8b458e75221d?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        badge="Tentang Perusahaan"
        title="CV. Elka Mandiri"
        subtitle="Mitra terpercaya dan penyedia solusi ekosistem ruang kerja profesional berpusat di Denpasar, Bali."
    >

        <
    </x-hero-banner>


<!-- Bagian Latar Belakang & Foto -->
<div class="bg-slate-50 py-20 md:py-28 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            
            <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=2069&auto=format&fit=crop" alt="Fasilitas Kantor" class="w-full h-full object-cover">
            </div>
            
            <div class="flex flex-col">
                <div class="inline-flex items-center space-x-3 mb-4">
                    <span class="w-6 h-[2px] bg-blue-800"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-800">Latar Belakang</span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-snug mb-8">
                    Dedikasi untuk Efisiensi dan Kemajuan Bisnis Anda
                </h2>
                
                <div class="flex flex-col space-y-6">
                    <p class="text-slate-600 text-base md:text-lg leading-relaxed font-medium text-justify">
                        CV Elka Mandiri adalah perusahaan penyedia solusi terpadu yang berpusat di Denpasar, Bali. Kami hadir untuk menjawab tantangan dunia bisnis modern yang menuntut efisiensi, kecepatan, dan kenyamanan dalam setiap aspek operasional ruang kerja.
                    </p>
                    <p class="text-slate-600 text-base md:text-lg leading-relaxed font-medium text-justify">
                        Berbekal komitmen pelayanan tinggi, kami mengkhususkan diri pada perdagangan eceran mesin kantor, komputer dan perlengkapannya, peralatan listrik dan penerangan, piranti lunak (software), hingga penyediaan furnitur premium guna memastikan ekosistem kerja perusahaan Anda berjalan optimal.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>



<div class="bg-white py-20 md:py-28 border-b border-slate-200 text-justify">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-4">Landasan & Tujuan</h2>
            <p class="text-slate-500 text-lg font-medium">Prinsip dasar yang mengarahkan setiap langkah pelayanan kami kepada para mitra korporat.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 border-t border-l border-slate-300 bg-white">
            
            
            <x-feature-card title="Visi Perusahaan">
                <p class="text-slate-600 text-lg leading-relaxed font-light">
                    Menjadi perusahaan penyedia kebutuhan operasional kantor dan ruang kerja terdepan di Bali yang dikenal luas akan kualitas produk unggulan, keandalan layanan, dan solusi inovatif bagi setiap mitra bisnis.
                </p>
            </x-feature-card>

           
           <x-feature-card title="Misi Utama">
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="w-2 h-2 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 text-base md:text-lg leading-relaxed font-light">Menyediakan rangkaian produk mesin kantor, komputer, dan furnitur dengan standar kualitas terbaik.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-2 h-2 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 text-base md:text-lg leading-relaxed font-light">Memberikan layanan purna jual yang responsif dan solutif demi kepuasan pelanggan secara konsisten.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-2 h-2 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 text-base md:text-lg leading-relaxed font-light">Membangun kemitraan jangka panjang yang didasari pada kepercayaan, kejujuran, dan profesionalisme.</span>
                    </li>
                </ul>
            </x-feature-card>
        </div>
    </div>
</div>



<<div id="kontak" class="scroll-mt-4 py-20 md:py-28 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-stretch">
            
          

            <div class="flex flex-col">
    
  
    <div class="inline-flex items-center space-x-3 mb-4">
        <span class="w-6 h-[2px] bg-blue-800"></span>
        <span class="text-xs font-bold uppercase tracking-widest text-blue-800">Informasi Kantor</span>
    </div>
    
    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 tracking-tight mb-4">Kontak dan Lokasi</h2>
    <p class="text-slate-600 text-lg mb-10">Kawasan strategis yang memudahkan koordinasi dan konsultasi langsung mengenai kebutuhan operasional bisnis Anda.</p>

    <!-- Kotak Besar Bergaris (Container Kontak) -->
    <div class="border border-slate-200 p-6 md:p-8 bg-white">
        
        <!-- divide-y akan otomatis membuat garis tipis di antara item, tapi tidak di atas/bawahnya -->
        <div class="flex flex-col divide-y divide-slate-100">
            
            <x-contact-item 
                type="location" 
                label="Alamat Kantor" 
                value="Jl. Tukad Batanghari Blok B No. 1, Panjer, Denpasar Selatan, Bali" 
                url="https://maps.google.com/maps?q=Jalan%20Tukad%20Batanghari%20Blok%20B%20Nomor%201,%20Panjer,%20Denpasar&t=&z=15&ie=UTF8&iwloc=&output=embed"
            />

            <x-contact-item 
                type="whatsapp" 
                label="WhatsApp" 
                value="08113383679" 
                url="https://wa.me/628113383679?text=halo%20elkamandiri,%20saya%20ingin%20berkonsultasi%20terkaitan%20layanan%20yang%20disediakan" 
            />

            <x-contact-item 
                type="email" 
                label="Email" 
                value="elkamandiri.cv@gmail.com" 
                url="mailto:elkamandiri.cv@gmail.com" 
            />
            
        </div>
    </div>
</div>

            <div class="relative w-full h-[350px] lg:h-auto bg-slate-200 ring-1 ring-slate-200 overflow-hidden shadow-sm">
                <iframe 
                    src="https://maps.google.com/maps?q=Jalan%20Tukad%20Batanghari%20Blok%20B%20Nomor%201,%20Panjer,%20Denpasar&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                    class="absolute inset-0 w-full h-full" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</div>



@endsection