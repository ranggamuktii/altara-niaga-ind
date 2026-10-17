@props(['data'])

<section id="why-us" class="py-24 lg:py-32 bg-[#F7F8FA]" data-animate>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-20">
            {{-- Left Column: Label + Headline --}}
            <div class="lg:sticky lg:top-32 lg:self-start">
                <span class="text-sm uppercase tracking-widest text-[#C8A962] font-semibold mb-4 block">
                    {{ $data['label'] }}
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-[#1B2A4A] leading-tight">
                    {{ $data['headline'] }}
                </h2>
            </div>

            {{-- Right Column: Items --}}
            <div class="space-y-8">
                @foreach ($data['items'] as $index => $item)
                    <div class="flex gap-6" data-animate>
                        {{-- Number Indicator --}}
                        <div class="flex-shrink-0 flex flex-col items-center">
                            <span class="text-[#C8A962] font-bold text-lg">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>
                            <div class="w-px h-full bg-gray-200 mt-3"></div>
                        </div>

                        {{-- Content --}}
                        <div class="pb-8">
                            <h3 class="font-semibold text-[#1B2A4A] text-lg mb-2">
                                {{ $item['title'] }}
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                {{ $item['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
