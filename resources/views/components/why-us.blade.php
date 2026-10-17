@props(['data'])

<section id="why-us" class="py-24 lg:py-32 bg-black border-t border-neutral-900" data-animate>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
            {{-- Left Column: Label + Headline --}}
            <div class="lg:col-span-5 lg:sticky lg:top-28 lg:self-start">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs font-mono text-neutral-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                    <span>{{ $data['label'] }}</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                    {{ $data['headline'] }}
                </h2>
                <p class="mt-6 text-sm text-neutral-400 leading-relaxed font-normal">
                    Institutional traders depend on predictable cargo schedules, zero demurrage surprises, and uncompromising compliance guarantees.
                </p>
            </div>

            {{-- Right Column: Items List --}}
            <div class="lg:col-span-7 space-y-4">
                @foreach ($data['items'] as $index => $item)
                    <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 hover:border-neutral-700 hover:bg-neutral-900/60 p-7 transition-all duration-200" data-animate>
                        <div class="flex items-start gap-4">
                            {{-- Number Badge --}}
                            <span class="rounded-lg bg-neutral-800 border border-neutral-700/80 px-2.5 py-1 text-xs font-mono font-bold text-white flex-shrink-0 mt-0.5">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            {{-- Content --}}
                            <div>
                                <h3 class="font-semibold text-white text-base mb-2">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="text-sm text-neutral-400 leading-relaxed font-normal">
                                    {{ $item['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
