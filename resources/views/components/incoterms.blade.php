@props(['data' => []])

@php
    $label = $data['label'] ?? 'Contract Standards';
    $headline = $data['headline'] ?? 'Supported Incoterms 2020 Delivery Terms';
    $description = $data['description'] ?? '';
    $terms = $data['terms'] ?? [];
@endphp

<section id="incoterms" class="py-24 lg:py-32 bg-black border-t border-neutral-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="max-w-3xl mb-16" data-animate>
            @if($label)
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs font-semibold text-neutral-400 mb-4">
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

        {{-- Terms Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($terms as $term)
                <div
                    data-animate
                    class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 hover:border-neutral-700 hover:bg-neutral-900/60 p-7 transition-all duration-200 flex flex-col justify-between"
                >
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="rounded-lg bg-neutral-800 border border-neutral-700 px-3 py-1 text-base font-bold text-white tracking-wider">
                                {{ $term['code'] ?? '' }}
                            </span>
                            <span class="text-[10px] uppercase tracking-wider font-semibold px-2.5 py-1 rounded-full bg-neutral-800/80 text-neutral-400 border border-neutral-700/60">
                                Global Standard
                            </span>
                        </div>

                        <h3 class="text-base font-semibold text-white mb-2">
                            {{ $term['name'] ?? '' }}
                        </h3>

                        <p class="text-xs text-neutral-400 leading-relaxed mb-6 font-normal">
                            {{ $term['description'] ?? '' }}
                        </p>
                    </div>

                    <div class="rounded-xl bg-neutral-950/80 border border-neutral-800/80 p-3.5">
                        <span class="text-[10px] uppercase tracking-wider font-medium text-neutral-400 block mb-0.5">
                            Risk Transfer Milestone:
                        </span>
                        <span class="text-xs font-medium text-neutral-200">
                            {{ $term['risk_point'] ?? 'Origin Vessel' }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
