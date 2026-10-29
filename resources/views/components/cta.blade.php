@props(['data' => []])

<section id="contact" data-animate class="relative overflow-hidden border-t border-white/10 bg-black py-24 text-white lg:py-36">
    <style>
        .anj-cta-glow {
            background: radial-gradient(ellipse 55% 65% at 50% 130%, rgba(56, 189, 248, .20), rgba(56, 189, 248, 0) 70%);
        }
    </style>
    <div aria-hidden="true" class="anj-cta-glow pointer-events-none absolute inset-0"></div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-12 lg:items-end">

            <div class="lg:col-span-8">
                <p class="mb-6 flex items-center gap-3 text-sm font-medium text-neutral-400">
                    <span class="relative flex h-2 w-2">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-sky-400 opacity-60"></span>
                        <span class="relative inline-flex h-2 w-2 rounded-full bg-sky-400"></span>
                    </span>
                    Konsultasi ekspor impor
                </p>

                <h2 class="font-display text-4xl font-extrabold leading-[1.05] tracking-tight text-white [font-stretch:112%] sm:text-5xl lg:text-6xl">
                    {{ $data['headline'] ?? 'Siap mengembangkan ekspansi perdagangan internasional Anda?' }}
                </h2>

                <p class="mt-6 max-w-2xl text-base leading-relaxed text-neutral-400 sm:text-lg">
                    {{ $data['description'] ?? 'Konsultasikan alokasi kontainer FCL, carter kapal kargo curah, atau pembebasan pabean jalur hijau bersama tim spesialis perdagangan kami.' }}
                </p>
            </div>

            <div class="lg:col-span-4 lg:flex lg:justify-end">
                <a href="{{ $data['button']['href'] ?? '#rfq' }}"
                    class="group inline-flex w-full items-center justify-center gap-3 rounded-full bg-white px-10 py-5 text-base font-bold text-black transition hover:bg-neutral-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 focus-visible:ring-offset-2 focus-visible:ring-offset-black active:scale-95 sm:w-auto">
                    <span>{{ $data['button']['label'] ?? 'Mulai konsultasi (RFQ)' }}</span>
                    <x-icon name="arrow-right" class="h-5 w-5 transition-transform group-hover:translate-x-1" />
                </a>
            </div>

        </div>
    </div>
</section>