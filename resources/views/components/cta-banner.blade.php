@props([
    'title',
    'desc',
    'buttonText',
    'buttonUrl',
    'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop' // Gambar latar
])

<div class="relative overflow-hidden bg-blue-900 py-16 md:py-20">
    <!-- Gambar latar -->
    <img src="{{ $image }}" alt="" class="absolute inset-0 w-full h-full object-cover object-center">
    <!-- Gradasi biru dari kiri ke kanan, memudar -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-900/85 to-blue-900/10"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white tracking-tight mb-4 md:mb-6">
            {{ $title }}
        </h2>
        <p class="text-blue-200 text-base md:text-lg lg:text-xl max-w-2xl mx-auto mb-8 md:mb-10">
            {{ $desc }}
        </p>
        <a href="{{ url($buttonUrl) }}" class="inline-flex h-12 items-center justify-center bg-white px-10 text-base font-bold text-blue-900 hover:bg-slate-50 transition duration-200 ring-1 ring-white uppercase tracking-wide">
            {{ $buttonText }}
        </a>
    </div>
</div>