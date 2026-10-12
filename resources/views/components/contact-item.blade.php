@props([
    'type',  // 'location', 'whatsapp', atau 'email'
    'label', // Contoh: "ALAMAT KANTOR"
    'value', // Contoh: "Jl. Tukad Batanghari..."
    'url'    // Tautan klik
])

<!-- py-6 memberikan jarak atas-bawah, group untuk efek hover teks -->
<div class="flex items-start py-6 group">
    
    <!-- Ikon (Tanpa kotak background, langsung ikon biru) -->
    <div class="flex-shrink-0 mt-0.5">
        @if($type === 'location')
            <svg class="w-5 h-5 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.243-4.243a8 8 0 1111.314 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
        @elseif($type === 'whatsapp')
            <svg class="w-5 h-5 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
        @elseif($type === 'email')
            <svg class="w-5 h-5 text-blue-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
        @endif
    </div>

    <!-- Teks (Label dan Value) -->
    <div class="ml-5 flex flex-col">
        <span class="text-[11px] md:text-xs font-bold uppercase tracking-widest text-slate-900 mb-1.5">{{ $label }}</span>
        <a href="{{ $url }}" class="text-sm md:text-base text-slate-600 group-hover:text-blue-800 transition-colors leading-relaxed" target="_blank" rel="noopener noreferrer">
            {{ $value }}
        </a>
    </div>

</div>