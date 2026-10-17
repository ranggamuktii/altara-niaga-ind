@props(['data' => []])

@php
    $headline = $data['headline'] ?? '';
    $items = $data['items'] ?? [];
    $totalItems = count($items);
@endphp

<section class="py-20 lg:py-24 bg-[#1B2A4A]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Headline --}}
        @if($headline)
            <h2 class="text-2xl font-semibold text-white text-center mb-16">{{ $headline }}</h2>
        @endif

        {{-- Stats Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:gap-0">
            @foreach($items as $index => $item)
                <div class="text-center {{ !$loop->last ? 'lg:border-r lg:border-white/10' : '' }}" data-animate>
                    <div class="text-4xl md:text-5xl font-bold text-[#C8A962]">{{ $item['value'] ?? '' }}</div>
                    <div class="text-white/60 text-sm uppercase tracking-wider mt-2">{{ $item['label'] ?? '' }}</div>
                </div>
            @endforeach
        </div>

    </div>
</section>
