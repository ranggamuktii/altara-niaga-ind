@props(['data' => []])

@php
    $label = $data['label'] ?? 'Product Divisions';
    $headline = $data['headline'] ?? 'Core Commodity & Manufactured Sectors';
    $description = $data['description'] ?? '';
    $items = $data['items'] ?? [];
@endphp

<section id="commodities" class="py-24 lg:py-32 bg-black border-t border-neutral-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="max-w-3xl mb-16" data-animate>
            @if($label)
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs font-mono text-neutral-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                    <span>{{ $label }}</span>
                </div>
            @endif
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                {{ $headline }}
            </h2>
            @if($description)
                <p class="mt-4 text-sm sm:text-base text-neutral-400 leading-relaxed font-normal">
                    {{ $description }}
                </p>
            @endif
        </div>

        {{-- Commodities Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($items as $item)
                <div
                    data-animate
                    class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 hover:border-neutral-700 hover:bg-neutral-900/60 p-8 transition-all duration-200 flex flex-col justify-between"
                >
                    <div>
                        {{-- Top Code Pill --}}
                        <div class="flex items-center justify-between gap-4 mb-5">
                            <span class="rounded-full border border-neutral-800 bg-neutral-800/80 px-3.5 py-1 text-[11px] font-mono font-semibold tracking-wider text-neutral-300">
                                {{ $item['code'] ?? 'COMMODITY CODE' }}
                            </span>
                            <span class="w-2 h-2 rounded-full bg-emerald-400 inline-block"></span>
                        </div>

                        {{-- Sector Title --}}
                        <h3 class="text-xl font-bold text-white mb-3">
                            {{ $item['sector'] ?? '' }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-sm text-neutral-400 leading-relaxed mb-6 font-normal">
                            {{ $item['description'] ?? '' }}
                        </p>
                    </div>

                    {{-- Specs & Packaging Box --}}
                    <div class="rounded-xl bg-neutral-950/80 border border-neutral-800/70 p-4 space-y-2 text-xs">
                        <div class="flex items-start gap-2">
                            <span class="font-semibold text-neutral-300 min-w-[90px]">Packaging:</span>
                            <span class="text-neutral-400">{{ $item['packaging'] ?? 'Custom FCL / Bulk' }}</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="font-semibold text-neutral-300 min-w-[90px]">Verification:</span>
                            <span class="text-neutral-400">{{ $item['inspections'] ?? 'SGS / Accredited Surveyor' }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Bottom Guidance Box --}}
        <div data-animate class="mt-12 p-8 rounded-2xl border border-neutral-800 bg-neutral-950 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h4 class="font-semibold text-base text-white">Looking to Trade Specific Goods or Raw Materials?</h4>
                <p class="text-xs text-neutral-400 mt-1">We facilitate tailor-made commodity sourcing, specifications matching, and trial shipments worldwide.</p>
            </div>
            <a
                href="#rfq"
                class="flex-shrink-0 px-6 py-3 rounded-full text-xs font-semibold uppercase tracking-wider bg-white text-black hover:bg-neutral-200 transition-all shadow-sm"
            >
                Inquire Specific Cargo
            </a>
        </div>
    </div>
</section>
