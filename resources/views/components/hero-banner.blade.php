@props([
    'image',           // Link gambar background
    'badge' => null,   // Teks kecil di atas judul (opsional)
    'title',           // Judul utama
    'subtitle' => null // Teks paragraf (opsional)
])

<div class="relative py-24 md:py-36 lg:py-45 flex items-center justify-center overflow-hidden">
    <!-- Gambar Latar Belakang -->
    <img src="{{ $image }}" alt="{{ $title }}" class="absolute inset-0 w-full h-full object-cover object-center">
    
    <!-- Lapisan Gelap (Overlay) -->
    <div class="absolute inset-0 bg-slate-900/75"></div>

    <!-- Konten Teks -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        
        <!-- Badge (Ditampilkan hanya jika diisi) -->
        @if($badge)
        <div class="inline-flex items-center space-x-3 mb-4 md:mb-6">
            <span class="w-8 h-[2px] bg-blue-400"></span>
            <span class="text-xs font-bold uppercase tracking-widest text-blue-400">{{ $badge }}</span>
            <span class="w-8 h-[2px] bg-blue-400"></span>
        </div>
        @endif

        <!-- Judul Utama -->
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white tracking-tight mb-4 md:mb-6">
            {{ $title }}
        </h1>
        
        <!-- Subtitle / Deskripsi (Ditampilkan hanya jika diisi) -->
        @if($subtitle)
        <p class="text-base md:text-lg lg:text-2xl text-slate-300 max-w-3xl mx-auto font-normal leading-relaxed mb-8 md:mb-10">
            {{ $subtitle }}
        </p>
        @endif

        <!-- Slot untuk Tombol (Jika ada) -->
        <div>
            {{ $slot }}
        </div>
        
    </div>
</div>