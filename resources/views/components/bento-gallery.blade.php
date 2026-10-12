@php
    // Daftar gambar dikelola sepenuhnya di dalam komponen
    $images = [
        'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1000',
        'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=1000',
        'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1000',
        'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&q=80&w=1000',
        'https://images.unsplash.com/photo-1497215728101-856f4ea42174?auto=format&fit=crop&q=80&w=1000',
        'https://images.unsplash.com/photo-1631679706909-1844bbd07221?q=80&w=1092&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&q=80&w=1000',
        'https://images.unsplash.com/photo-1600210492493-0946911123ea?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'https://images.unsplash.com/photo-1791042146049-655617114644?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        'https://images.unsplash.com/photo-1791134903828-8a30787cbda2?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
    ];

    // Pola ukuran kotak (Bento Grid) berulang setiap 8 gambar
    $gridPattern = [
        'md:col-span-5 md:row-span-2', 
        'md:col-span-7 md:row-span-1', 
        'md:col-span-4 md:row-span-1', 
        'md:col-span-3 md:row-span-1', 
        'md:col-span-3 md:row-span-1', 
        'md:col-span-5 md:row-span-1', 
        'md:col-span-4 md:row-span-2', 
        'md:col-span-8 md:row-span-1', 
    ];
@endphp

<div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-6 auto-rows-[250px] md:auto-rows-[280px]">
    @foreach($images as $index => $image)
        <div class="{{ $gridPattern[$index % 8] }} relative overflow-hidden group bg-slate-200 ring-1 ring-slate-200">
            <img src="{{ $image }}" 
                 class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" 
                 alt="Galeri Proyek {{ $index + 1 }}">

            <!-- Gradasi gelap muncul saat hover -->
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <!-- Aksen sudut biru -->
            <div class="absolute top-4 left-4 w-8 h-8 border-t-[3px] border-l-[3px] border-blue-400 opacity-0 group-hover:opacity-100 group-hover:w-12 group-hover:h-12 transition-all duration-500 ease-out pointer-events-none"></div>

            <!-- Keterangan -->
            <div class="absolute inset-x-0 bottom-0 p-5 md:p-6 translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 ease-out">

                <span class="block text-base md:text-lg font-semibold text-white tracking-tight">Proyek & Kegiatan</span>
            </div>
        </div>
    @endforeach
</div>
