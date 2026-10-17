@props(['data'])

<section id="about" class="py-24 lg:py-32 bg-black border-t border-neutral-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-start">
            {{-- Left Column --}}
            <div class="lg:col-span-5 mb-12 lg:mb-0">
                {{-- Section Label --}}
                @if(!empty($data['label']))
                    <div data-animate class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs font-semibold text-neutral-400 mb-6">
                        <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                        <span>{{ $data['label'] }}</span>
                    </div>
                @endif

                {{-- Headline --}}
                <h2
                    data-animate
                    class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]"
                >
                    {{ $data['headline'] ?? 'Built on Integrity, Verified by Global Customs Standards' }}
                </h2>

                {{-- Description --}}
                @if(!empty($data['description']))
                    <p
                        data-animate
                        class="mt-6 text-sm sm:text-base text-neutral-400 leading-relaxed font-normal"
                    >
                        {{ $data['description'] }}
                    </p>
                @endif

                {{-- Quick Badge Pill --}}
                <div data-animate class="mt-8 pt-8 border-t border-neutral-900 flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-neutral-900 border border-neutral-800 flex items-center justify-center text-white font-bold text-xs">
                        EDI
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-white block">Direct Port Integration</span>
                        <span class="text-[11px] text-neutral-500 block">Automated Customs Release Documentation</span>
                    </div>
                </div>
            </div>

            {{-- Right Column: Features Bento List --}}
            @if(!empty($data['features']))
                <div class="lg:col-span-7 space-y-4">
                    @foreach($data['features'] as $index => $feature)
                        <div
                            data-animate
                            class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 hover:border-neutral-700 hover:bg-neutral-900/60 p-6 sm:p-7 transition-all duration-200"
                        >
                            <div class="flex items-start gap-4">
                                <span class="w-7 h-7 rounded-lg bg-neutral-800 border border-neutral-700/80 flex items-center justify-center text-xs font-bold text-white flex-shrink-0 mt-0.5">
                                    0{{ $index + 1 }}
                                </span>
                                <div>
                                    <h3 class="text-base font-semibold text-white mb-1.5">
                                        {{ $feature['title'] ?? '' }}
                                    </h3>
                                    <p class="text-sm text-neutral-400 leading-relaxed">
                                        {{ $feature['description'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>
