<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Elka Mandiri</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-blue-100 selection:text-blue-900">
    
 <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                
                <div class="flex-shrink-0 flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Elka Mandiri" class="h-8 w-auto">
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="relative text-sm font-medium text-slate-500 hover:text-slate-900 transition-colors duration-200 after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-[2px] after:bg-blue-800 after:transition-all after:duration-300 hover:after:w-full">Beranda</a>
                    <a href="#" class="relative text-sm font-medium text-slate-500 hover:text-slate-900 transition-colors duration-200 after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-[2px] after:bg-blue-800 after:transition-all after:duration-300 hover:after:w-full">Layanan</a>
                    <a href="/tentang-kami" class="relative text-sm font-medium text-slate-500 hover:text-slate-900 transition-colors duration-200 after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-[2px] after:bg-blue-800 after:transition-all after:duration-300 hover:after:w-full">Tentang Kami</a>
                    <a href="#" class="relative text-sm font-medium text-slate-500 hover:text-slate-900 transition-colors duration-200 after:content-[''] after:absolute after:-bottom-1 after:left-0 after:w-0 after:h-[2px] after:bg-blue-800 after:transition-all after:duration-300 hover:after:w-full">Kontak</a>

                    <a href="#" class="relative inline-flex h-9 items-center justify-center rounded-full bg-blue-800 px-5 text-sm font-medium text-white hover:bg-blue-900 transition duration-200 ease-in-out">
                        Hubungi Kami
                    </a>
                </div>

                <div class="flex items-center md:hidden">
                    <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="inline-flex items-center justify-center p-2 text-slate-500 hover:text-slate-900 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-800 transition-colors">
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <div class="hidden md:hidden bg-white border-t border-slate-200 absolute w-full shadow-lg" id="mobile-menu">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="#" class="block px-3 py-3 text-base font-medium text-slate-900 bg-slate-50 border-l-2 border-blue-800">Beranda</a>
                <a href="#" class="block px-3 py-3 text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 hover:border-l-2 hover:border-blue-800 transition-all">Layanan</a>
                <a href="#" class="block px-3 py-3 text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 hover:border-l-2 hover:border-blue-800 transition-all">Tentang Kami</a>
                <a href="#" class="block px-3 py-3 text-base font-medium text-slate-600 hover:text-slate-900 hover:bg-slate-50 hover:border-l-2 hover:border-blue-800 transition-all">Kontak</a>

                <div class="pt-4">
                    <a href="#" class="flex w-full items-center justify-center h-12 bg-blue-800 text-white text-base font-medium hover:bg-blue-900 transition duration-200">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-white pt-16 pb-8 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12">
                <div class="md:col-span-4">
                    <img src="{{ asset('images/elkamandiri.jpeg') }}" alt="Logo Elka Mandiri" class="h-8 w-auto">
                    <p class="text-sm text-slate-400 leading-relaxed mb-6">
                        Solusi terpercaya untuk kebutuhan mesin kantor, komputer, perangkat lunak, dan furnitur.
                    </p>
                </div>
                
                <div class="md:col-span-4">
                    <h3 class="text-xs font-semibold text-white tracking-wider uppercase mb-4">Kontak Kami</h3>
                    <ul class="space-y-3">
                        <li class="text-sm text-slate-400 leading-relaxed">
                            Golden Jalan Tukad Batanghari Blok B Nomor 1, Kelurahan Panjer Kec, Denpasar Selatan, Kota Denpasar Provinsi Bali
                        </li>
                        <li class="text-sm text-slate-400">
                            Email: elkamandiri.cv@gmail.com
                        </li>
                        <li class="text-sm text-slate-400">
                            Telepon: 08113383679
                        </li>
                    </ul>
                </div>

                <div class="md:col-span-4">
                    <h3 class="text-xs font-semibold text-white tracking-wider uppercase mb-4">Layanan</h3>
                    <ul class="space-y-3">
                        <li class="text-sm text-slate-400">Mesin Kantor</li>
                        <li class="text-sm text-slate-400">Komputer & Perlengkapannya</li>
                        <li class="text-sm text-slate-400">Peralatan Listrik & Penerangan</li>
                        <li class="text-sm text-slate-400">Piranti Lunak (Software)</li>
                        <li class="text-sm text-slate-400">Furnitur</li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-16 border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-xs text-slate-500">
                    &copy; 2026 CV Elka Mandiri. Hak cipta dilindungi undang-undang.
                </p>
            </div>
        </div>
    </footer>

</body>
</html>