@props(['blocks'])

{{-- Menyajikan blok dari Service::detailBlocks(). Semua teks di-escape oleh Blade. --}}
<div class="flex flex-col">
    @foreach($blocks as $block)
        @if($block['type'] === 'heading')
            <h2 class="w-fit text-lg font-bold text-slate-900 uppercase tracking-widest mb-4 border-b-2 border-blue-800 pb-1 {{ $loop->first ? '' : 'mt-8' }}">{{ $block['text'] }}</h2>
        @elseif($block['type'] === 'list')
            <ul class="space-y-4">
                @foreach($block['items'] as $item)
                    <li class="flex items-start">
                        <span class="w-1.5 h-1.5 bg-blue-800 mt-2.5 mr-4 flex-shrink-0"></span>
                        <span class="text-slate-600 font-medium">{{ $item }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-slate-600 font-medium leading-relaxed text-justify {{ $loop->first ? '' : 'mt-4' }}">{{ $block['text'] }}</p>
        @endif
    @endforeach
</div>
