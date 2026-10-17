@props(['data' => []])

@php
    $label = $data['label'] ?? 'Product Divisions';
    $headline = $data['headline'] ?? 'Core Commodity & Manufactured Sectors';
    $description = $data['description'] ?? '';
    $items = $data['items'] ?? [];
@endphp

<section id="commodities" class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="max-w-3xl mb-16" data-animate>
            @if($label)
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-[#C8A962] mb-3">
                    {{ $label }}
                </span>
            @endif
            <h2 class="text-3xl md:text-4xl font-bold text-[#1B2A4A] tracking-tight">
                {{ $headline }}
            </h2>
            <div class="w-16 h-0.5 bg-[#C8A962] mt-5 mb-5"></div>
            @if($description)
                <p class="text-base text-gray-500 leading-relaxed">
                    {{ $description }}
                </p>
            @endif
        </div>

        {{-- Commodities Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($items as $item)
                <div
                    data-animate
                    class="bg-[#F7F8FA] border border-gray-200 hover:border-[#1B2A4A] p-8 transition duration-200 flex flex-col justify-between"
                >
                    <div>
                        {{-- Top Badge --}}
                        <div class="flex items-center justify-between gap-4 mb-4">
                            <span class="text-[11px] font-mono font-semibold tracking-wider text-[#1B2A4A] bg-white border border-gray-200 px-3 py-1">
                                {{ $item['code'] ?? 'COMMODITY CODE' }}
                            </span>
                            <span class="w-2 h-2 bg-[#C8A962] inline-block"></span>
                        </div>

                        {{-- Sector Title --}}
                        <h3 class="text-xl font-bold text-[#1B2A4A] mb-3">
                            {{ $item['sector'] ?? '' }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-sm text-gray-600 leading-relaxed mb-6">
                            {{ $item['description'] ?? '' }}
                        </p>
                    </div>

                    {{-- Specs & Packaging Meta --}}
                    <div class="border-t border-gray-200/80 pt-5 space-y-2 text-xs">
                        <div class="flex items-start gap-2">
                            <span class="font-semibold text-[#1B2A4A] min-w-[90px]">Packaging:</span>
                            <span class="text-gray-500">{{ $item['packaging'] ?? 'Custom FCL / Bulk' }}</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="font-semibold text-[#1B2A4A] min-w-[90px]">Verification:</span>
                            <span class="text-gray-500">{{ $item['inspections'] ?? 'SGS / Accredited Surveyor' }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Bottom Guidance Box --}}
        <div data-animate class="mt-12 p-6 bg-[#1B2A4A] text-white flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h4 class="font-semibold text-base">Looking to Trade Specific Goods or Raw Materials?</h4>
                <p class="text-xs text-white/60 mt-1">We facilitate tailor-made commodity sourcing, specifications matching, and trial shipments.</p>
            </div>
            <a
                href="#rfq"
                class="flex-shrink-0 px-6 py-3 text-xs font-semibold uppercase tracking-wider bg-[#C8A962] text-[#1B2A4A] hover:bg-[#b89a55] transition"
            >
                Inquire Specific Cargo
            </a>
        </div>
    </div>
</section>
