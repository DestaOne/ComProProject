<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Masuk - Admin Elka Mandiri</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <style>body { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }</style>
</head>
<body class="h-full bg-gray-50 text-gray-950 antialiased">

<div class="flex min-h-full flex-col items-center justify-center px-4 py-12">
    <div class="w-full max-w-md">

        <div class="mb-8 flex flex-col items-center text-center">
            <img src="{{ asset('images/elkamandiri.jpeg') }}" alt="Elka Mandiri" class="mb-6 h-10 w-auto">
            <h1 class="text-2xl font-bold tracking-tight text-gray-950">Masuk ke akun Anda</h1>
            <p class="mt-2 text-sm text-gray-500">Panel admin CV Elka Mandiri</p>
        </div>

        <div class="bg-white p-6 shadow-sm ring-1 ring-gray-950/5 sm:p-8">
            <form method="POST" action="{{ route('admin.login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="mb-2 block text-sm font-medium text-gray-950">
                        Alamat email <span class="text-red-600">*</span>
                    </label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                           class="block w-full border-0 px-3 py-2 text-sm text-gray-950 shadow-sm ring-1 ring-inset {{ $errors->has('email') ? 'ring-red-500 focus:ring-red-600' : 'ring-gray-950/10 focus:ring-blue-600' }} focus:outline-none focus:ring-2">
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-medium text-gray-950">
                        Password <span class="text-red-600">*</span>
                    </label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                           class="block w-full border-0 px-3 py-2 text-sm text-gray-950 shadow-sm ring-1 ring-inset {{ $errors->has('password') ? 'ring-red-500 focus:ring-red-600' : 'ring-gray-950/10 focus:ring-blue-600' }} focus:outline-none focus:ring-2">
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <label class="flex items-center gap-x-2 text-sm text-gray-700">
                    <input type="checkbox" name="remember" class="size-4 border-gray-300 text-blue-600 focus:ring-blue-600">
                    Ingat saya
                </label>

                <button type="submit" class="w-full bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
                    Masuk
                </button>
            </form>
        </div>

        <p class="mt-6 text-center text-sm text-gray-500">
            <a href="{{ url('/') }}" class="font-medium text-blue-600 hover:text-blue-500">&larr; Kembali ke situs</a>
        </p>
    </div>
</div>

</body>
</html>
