@props(['data' => []])

@php
    $label = $data['label'] ?? 'Trade Corridors';
    $headline = $data['headline'] ?? 'Active Trade Routes Across 5 Continents';
    $description = $data['description'] ?? '';
    $regions = $data['regions'] ?? [];
@endphp

<section id="reach" class="py-24 lg:py-32 bg-black border-t border-neutral-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Header --}}
        <div class="max-w-3xl mb-16" data-animate>
            @if($label)
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs font-medium text-neutral-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                    <span>{{ $label }}</span>
                </div>
            @endif
            @if($headline)
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                    {{ $headline }}
                </h2>
            @endif
            @if($description)
                <p class="mt-4 text-sm sm:text-base text-neutral-400 leading-relaxed font-normal">
                    {{ $description }}
                </p>
            @endif
        </div>

        {{-- Regions Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($regions as $region)
                <div
                    data-animate
                    class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 hover:border-neutral-700 hover:bg-neutral-900/60 p-6 transition-all duration-200"
                >
                    {{-- Region Header --}}
                    <div class="flex items-center gap-2.5 mb-3">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 inline-block flex-shrink-0"></span>
                        <h3 class="font-semibold text-white text-base">{{ $region['name'] ?? '' }}</h3>
                    </div>
                    {{-- Countries / Ports --}}
                    @if(!empty($region['countries']))
                        <p class="text-xs text-neutral-400 leading-relaxed font-normal">
                            {{ is_array($region['countries']) ? implode(' • ', $region['countries']) : $region['countries'] }}
                        </p>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
</section>
