<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'Dashboard') - Admin Elka Mandiri</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <style>body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }</style>
</head>
<body class="h-full bg-gray-50 text-gray-950 antialiased">

@php
    $navItem = 'group flex items-center gap-x-3 px-3 py-2 text-sm font-medium transition-colors';
    $navActive = 'bg-blue-50 text-blue-600';
    $navIdle = 'text-gray-700 hover:bg-gray-100';
    $initial = strtoupper(mb_substr(auth()->user()->name, 0, 1));
@endphp

<div class="min-h-full">

    <!-- Overlay (mobile) -->
    <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 z-30 hidden bg-gray-950/50 lg:hidden"></div>

    <!-- SIDEBAR -->
    <aside id="sidebar" class="fixed inset-y-0 left-0 z-40 flex w-72 -translate-x-full flex-col bg-white shadow-xl ring-1 ring-gray-950/5 transition-transform duration-200 lg:translate-x-0 lg:shadow-none">
        <div class="flex h-16 shrink-0 items-center px-6 ring-1 ring-gray-950/5">
            <img src="{{ asset('images/elkamandiri.jpeg') }}" alt="Elka Mandiri" class="h-8 w-auto">
        </div>

        <nav class="flex-1 space-y-1 overflow-y-auto px-6 py-8">
            <a href="{{ route('admin.dashboard') }}" class="{{ $navItem }} {{ request()->routeIs('admin.dashboard') ? $navActive : $navIdle }}">
                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955a1.126 1.126 0 0 1 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/></svg>
                Dashboard
            </a>

            <p class="px-3 pb-1 pt-6 text-xs font-semibold uppercase tracking-wider text-gray-400">Konten</p>

            <a href="{{ route('admin.services.index') }}" class="{{ $navItem }} {{ request()->routeIs('admin.services.*') ? $navActive : $navIdle }}">
                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"/></svg>
                Layanan
            </a>
            <span class="{{ $navItem }} cursor-not-allowed text-gray-400">
                <svg class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"/></svg>
                <span class="flex-1">Galeri</span>
                <span class="bg-gray-100 px-1.5 py-0.5 text-[10px] font-semibold text-gray-500">Segera</span>
            </span>
        </nav>
    </aside>

    <!-- MAIN -->
    <div class="lg:pl-72">

        <!-- TOPBAR -->
        <header class="sticky top-0 z-20 flex h-16 items-center gap-x-4 bg-white px-4 shadow-sm ring-1 ring-gray-950/5 sm:px-6 lg:px-8">
            <button type="button" onclick="toggleSidebar()" class="-ml-2 p-2 text-gray-500 hover:bg-gray-100 lg:hidden" aria-label="Buka menu">
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/></svg>
            </button>

            <div class="flex-1"></div>

            <a href="{{ url('/') }}" target="_blank" rel="noopener" class="hidden items-center gap-x-1.5 px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-100 sm:inline-flex">
                Lihat situs
                <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/></svg>
            </a>

            <!-- User menu -->
            <details class="relative">
                <summary class="flex cursor-pointer list-none items-center ring-2 ring-white [&::-webkit-details-marker]:hidden">
                    <span class="flex size-8 items-center justify-center bg-blue-100 text-sm font-semibold text-blue-700">{{ $initial }}</span>
                </summary>
                <div class="absolute right-0 mt-2 w-56 bg-white p-1 shadow-lg ring-1 ring-gray-950/5">
                    <div class="px-3 py-2">
                        <p class="truncate text-sm font-semibold text-gray-950">{{ auth()->user()->name }}</p>
                        <p class="truncate text-xs text-gray-500">{{ auth()->user()->email }}</p>
                    </div>
                    <div class="my-1 border-t border-gray-100"></div>
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="flex w-full items-center gap-x-2 px-3 py-2 text-sm text-gray-700 hover:bg-gray-50">
                            <svg class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9"/></svg>
                            Keluar
                        </button>
                    </form>
                </div>
            </details>
        </header>

        <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="mb-8 flex flex-wrap items-center justify-between gap-4">
                <h1 class="text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl">@yield('title', 'Dashboard')</h1>
                @yield('actions')
            </div>

            @if(session('success'))
                <div class="mb-6 border-l-4 border-green-600 bg-green-50 px-4 py-3 text-sm font-medium text-green-800" role="status">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
        document.getElementById('sidebar-overlay').classList.toggle('hidden');
    }
</script>
</body>
</html>
