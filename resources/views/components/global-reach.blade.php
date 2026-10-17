@props(['data' => []])

@php
    $label = $data['label'] ?? '';
    $headline = $data['headline'] ?? '';
    $description = $data['description'] ?? '';
    $regions = $data['regions'] ?? [];
@endphp

<section id="reach" class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            @if($label)
                <span class="text-xs font-semibold uppercase tracking-widest text-[#C8A962]">{{ $label }}</span>
            @endif
            @if($headline)
                <h2 class="text-3xl md:text-4xl font-bold text-[#1B2A4A] mt-3">{{ $headline }}</h2>
            @endif
            @if($description)
                <p class="text-gray-500 mt-4 text-base leading-relaxed">{{ $description }}</p>
            @endif
        </div>

        {{-- Regions Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($regions as $region)
                <div class="p-6 border border-gray-200 hover:border-[#C8A962] transition duration-300" data-animate>
                    {{-- Region Name --}}
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 bg-[#C8A962] inline-block flex-shrink-0"></span>
                        <h3 class="font-semibold text-[#1B2A4A]">{{ $region['name'] ?? '' }}</h3>
                    </div>
                    {{-- Countries --}}
                    @if(!empty($region['countries']))
                        <p class="text-sm text-gray-500 mt-1 ml-4">{{ is_array($region['countries']) ? implode(', ', $region['countries']) : $region['countries'] }}</p>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
</section>
