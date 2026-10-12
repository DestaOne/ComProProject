@props(['title', 'label' => null])

<!-- Sel kartu bergaya grid berbingkai (sama seperti layanan di beranda) -->
<div class="border-b border-r border-slate-300 p-8 md:p-12 hover:bg-slate-50 transition-colors duration-300 group">
    @if($label)
    <span class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-8 block">{{ $label }}</span>
    @endif

    <h3 class="text-3xl font-semibold text-slate-900 mb-6 tracking-tight">
        {{ $title }}
    </h3>

    <div class="w-full">
        {{ $slot }}
    </div>
</div>
