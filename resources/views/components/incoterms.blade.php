@props(['data' => []])

@php
    $label = $data['label'] ?? 'Contract Standards';
    $headline = $data['headline'] ?? 'Supported Incoterms 2020 Delivery Terms';
    $description = $data['description'] ?? '';
    $terms = $data['terms'] ?? [];
@endphp

<section id="incoterms" class="py-24 lg:py-32 bg-[#F7F8FA]">
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

        {{-- Terms Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($terms as $term)
                <div
                    data-animate
                    class="bg-white border border-gray-200 p-8 hover:border-[#C8A962] transition duration-200 flex flex-col justify-between"
                >
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-2xl font-bold font-mono text-[#1B2A4A]">
                                {{ $term['code'] ?? '' }}
                            </span>
                            <span class="text-[10px] uppercase tracking-wider font-semibold px-2 py-1 bg-gray-100 text-gray-700">
                                Standard Term
                            </span>
                        </div>

                        <h3 class="text-base font-semibold text-[#1B2A4A] mb-2">
                            {{ $term['name'] ?? '' }}
                        </h3>

                        <p class="text-xs text-gray-500 leading-relaxed mb-6">
                            {{ $term['description'] ?? '' }}
                        </p>
                    </div>

                    <div class="border-t border-gray-100 pt-4">
                        <span class="text-[11px] uppercase tracking-wider font-semibold text-gray-400 block mb-1">
                            Risk Transfer Point:
                        </span>
                        <span class="text-xs font-medium text-[#1B2A4A]">
                            {{ $term['risk_point'] ?? 'Origin Vessel' }}
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
