@props(['data'])

<section id="about" class="py-24 lg:py-32 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-start">
            {{-- Left Column --}}
            <div>
                {{-- Section Label --}}
                @if(!empty($data['label']))
                    <span
                        data-animate
                        class="inline-block text-sm uppercase tracking-widest text-[#C8A962] font-semibold mb-4"
                    >
                        {{ $data['label'] }}
                    </span>
                @endif

                {{-- Headline --}}
                <h2
                    data-animate
                    class="text-3xl md:text-4xl font-bold text-[#1B2A4A] leading-tight"
                >
                    {{ $data['headline'] ?? 'About Us' }}
                </h2>

                {{-- Gold Divider --}}
                <div data-animate class="mt-6 mb-6">
                    <div class="w-16 h-0.5 bg-[#C8A962]"></div>
                </div>

                {{-- Description --}}
                @if(!empty($data['description']))
                    <p
                        data-animate
                        class="text-base md:text-lg text-gray-500 leading-relaxed"
                    >
                        {{ $data['description'] }}
                    </p>
                @endif
            </div>

            {{-- Right Column: Features --}}
            @if(!empty($data['features']))
                <div class="mt-12 lg:mt-0 space-y-10">
                    @foreach($data['features'] as $feature)
                        <div
                            data-animate
                            class="border-l-2 border-[#C8A962] pl-6"
                        >
                            <h3 class="text-lg font-semibold text-[#1A1A2E] mb-2">
                                {{ $feature['title'] ?? '' }}
                            </h3>
                            <p class="text-gray-500 leading-relaxed">
                                {{ $feature['description'] ?? '' }}
                            </p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
