@extends('layouts.app')

@section('content')
<div class="bg-white py-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight mb-4">Tentang Kami</h1>
        <p class="text-lg text-slate-500 max-w-2xl mx-auto font-medium">Mengenal lebih dekat CV Elka Mandiri sebagai mitra strategis dalam memenuhi segala kebutuhan operasional perusahaan Anda.</p>
    </div>
</div>

<div class="bg-slate-50 py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <div class="relative w-full aspect-[4/3] bg-slate-200 ring-1 ring-slate-200 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?q=80&w=2069&auto=format&fit=crop" alt="Ruang Kerja Modern" class="w-full h-full object-cover">
            </div>
            
            <div class="flex flex-col">
                <div class="inline-flex items-center space-x-3 mb-6">
                    <span class="w-8 h-[2px] bg-blue-800"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-800">Latar Belakang</span>
                </div>
                
                <h2 class="text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight mb-8">
                    Dedikasi untuk Efisiensi dan Kemajuan Bisnis Anda
                </h2>
                
                <div class="flex flex-col space-y-6">
                    <p class="text-slate-600 text-lg leading-relaxed font-medium">
                        CV Elka Mandiri adalah perusahaan penyedia solusi terpadu yang berpusat di Denpasar, Bali. Kami hadir untuk menjawab tantangan dunia bisnis modern yang menuntut efisiensi, kecepatan, dan kenyamanan dalam setiap aspek operasional ruang kerja.
                    </p>
                    <p class="text-slate-600 text-lg leading-relaxed font-medium">
                        Berbekal komitmen pelayanan tinggi, kami mengkhususkan diri pada perdagangan eceran mesin kantor, komputer dan perlengkapannya, peralatan listrik dan penerangan, piranti lunak (software), hingga penyediaan furnitur premium guna memastikan ekosistem kerja perusahaan Anda berjalan optimal.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="p-10 ring-1 ring-slate-200 bg-white relative group transition-all duration-300 hover:shadow-xl">
                <div class="absolute top-0 left-0 w-full h-[3px] bg-blue-800 transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out"></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6 tracking-tight uppercase">Visi</h3>
                <p class="text-slate-600 text-lg leading-relaxed font-medium">
                    Menjadi perusahaan penyedia kebutuhan operasional kantor dan ruang kerja terdepan di Bali yang dikenal luas akan kualitas produk unggulan, keandalan layanan, dan solusi inovatif bagi setiap mitra bisnis.
                </p>
            </div>

            <div class="p-10 ring-1 ring-slate-200 bg-white relative group transition-all duration-300 hover:shadow-xl">
                <div class="absolute top-0 left-0 w-full h-[3px] bg-blue-800 transform origin-left scale-x-0 group-hover:scale-x-100 transition-transform duration-500 ease-out"></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-6 tracking-tight uppercase">Misi</h3>
                <ul class="space-y-5">
                    <li class="flex items-start">
                        <span class="w-2 h-2 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 text-lg leading-relaxed font-medium">Menyediakan rangkaian produk mesin kantor, komputer, dan furnitur dengan standar kualitas terbaik.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-2 h-2 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 text-lg leading-relaxed font-medium">Memberikan layanan purna jual yang responsif dan solutif demi kepuasan pelanggan secara konsisten.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="w-2 h-2 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 text-lg leading-relaxed font-medium">Membangun kemitraan jangka panjang yang didasari pada kepercayaan, kejujuran, dan profesionalisme.</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="bg-slate-50 border-t border-slate-200 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-stretch">
            
            <div class="flex flex-col justify-center">
                <div class="inline-flex items-center space-x-3 mb-4">
                    <span class="w-6 h-[2px] bg-blue-800"></span>
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-800">Lokasi Kantor</span>
                </div>
                
                <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 tracking-tight mb-3">
                    Akses Strategis di Pusat Kota Denpasar
                </h2>
                
                <p class="text-base text-slate-600 mb-6 leading-relaxed font-medium">
                    Kawasan strategis yang memudahkan koordinasi dan konsultasi langsung mengenai kebutuhan operasional bisnis Anda.
                </p>

                <div class="bg-white ring-1 ring-slate-200 p-6 flex flex-col">
                    
                    <div class="flex gap-4 items-start pb-4">
                        <div class="mt-0.5">
                            <svg class="w-5 h-5 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-900 uppercase tracking-widest mb-1">Alamat Kantor</h4>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Golden Jl. Tukad Batanghari Blok B No. 1,<br>
                                Panjer, Denpasar Selatan, Bali
                            </p>
                        </div>
                    </div>

                    <div class="w-full h-[1px] bg-slate-100"></div>

                    <div class="flex gap-4 items-center py-4">
                        <div>
                            <svg class="w-5 h-5 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-900 uppercase tracking-widest mb-1">Telepon / WhatsApp</h4>
                            <p class="text-slate-600 text-sm">08113383679</p>
                        </div>
                    </div>

                    <div class="w-full h-[1px] bg-slate-100"></div>

                    <div class="flex gap-4 items-center pt-4">
                        <div>
                            <svg class="w-5 h-5 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-slate-900 uppercase tracking-widest mb-1">Email</h4>
                            <p class="text-slate-600 text-sm">elkamandiri.cv@gmail.com</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="relative w-full h-[300px] lg:h-auto bg-slate-200 ring-1 ring-slate-200 overflow-hidden">
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