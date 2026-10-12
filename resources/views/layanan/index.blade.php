@extends('layouts.app')

@section('content')
<x-hero-banner
        image="https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=2069&auto=format&fit=crop"
        badge="Katalog layanan"
        title="Solusi Ekosistem Kerja"
        subtitle=" Dari perangkat keras berkinerja tinggi hingga tata ruang presisi. Kami menyediakan produk berkualitas unggul untuk memastikan setiap aspek operasional Anda berjalan tanpa hambatan."
    />

<!-- Tiap layanan memiliki section sendiri -->
@foreach($services as $index => $service)
<section class="bg-slate-100 py-6 md:py-2 {{ $loop->first ? 'pt-12 md:pt-20' : '' }} {{ $loop->last ? 'pb-12 md:pb-20' : '' }}">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-justify">
        <x-service-card
            :title="$service->title"
            :desc="$service->summary"
            :image="$service->image_url"
            :url="route('layanan.show', $service)"
            :imagePosition="$index % 2 == 0 ? 'left' : 'right'"
        />
    </div>
</section>
@endforeach

<x-cta-banner
    title="Tertarik Dengan Layanan Kami?"
    desc="Tim ahli kami siap memberikan konsultasi dan penawaran terbaik sesuai dengan anggaran dan spesifikasi perusahaan Anda."
    buttonText="Konsultasi Sekarang"
    buttonUrl="/tentang-kami#kontak"
/>
@endsection
