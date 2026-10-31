<section id="simulator" class="relative border-t border-white/[0.08] bg-black py-24 text-white lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}
        <div data-animate class="mb-14 grid gap-8 lg:mb-18 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="mb-4 flex items-center gap-3 text-sm font-medium text-neutral-400">
                    <span class="h-px w-10 bg-sky-400"></span>Koridor maritim samudera
                </p>
                <h2 class="font-display text-3xl font-extrabold leading-[1.1] tracking-tight text-white [font-stretch:112%] sm:text-4xl lg:text-5xl">
                    Konektivitas rute pengapalan global
                </h2>
            </div>
            <p class="text-base leading-relaxed text-neutral-400 sm:text-lg lg:col-span-5">
                Jadwal pelayaran maritim langsung dan alokasi ruang kontainer terjamin dari pelabuhan utama Indonesia ke pasar dunia.
            </p>
        </div>

        {{-- Cinematic Route Corridor Showcase Frame --}}
        <div data-animate class="group relative overflow-hidden rounded-3xl border border-white/[0.08] bg-neutral-950 p-4 transition-all duration-300 hover:border-white/20 sm:p-6">

            {{-- Clean Route Header Bar --}}
            <div class="mb-5 flex flex-col items-center justify-between gap-4 rounded-2xl border border-white/[0.06] bg-black/60 px-6 py-4 md:flex-row">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-neutral-900 text-sky-300">
                        <x-icon name="map-pin" class="h-5 w-5" />
                    </div>
                    <div>
                        <span class="block text-[11px] font-semibold uppercase tracking-wider text-neutral-500">Pelabuhan Muat Asal</span>
                        <span class="text-base font-bold text-white">Tanjung Priok, Jakarta (IDJKT)</span>
                    </div>
                </div>

                {{-- Connector --}}
                <div class="flex items-center gap-3 text-xs font-semibold text-sky-300">
                    <span class="hidden h-px w-12 bg-white/10 sm:block"></span>
                    <span class="inline-flex items-center gap-1.5 rounded-full border border-sky-400/20 bg-sky-400/10 px-3 py-1">
                        <x-icon name="ship" class="h-3.5 w-3.5" />
                        <span>Estimasi Transit 18 - 22 Hari</span>
                    </span>
                    <span class="hidden h-px w-12 bg-white/10 sm:block"></span>
                </div>

                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-neutral-900 text-sky-300">
                        <x-icon name="anchor" class="h-5 w-5" />
                    </div>
                    <div>
                        <span class="block text-[11px] font-semibold uppercase tracking-wider text-neutral-500">Pelabuhan Tujuan</span>
                        <span class="text-base font-bold text-white">Port of Rotterdam (NLRTM)</span>
                    </div>
                </div>
            </div>

            {{-- Clean Showcase Photo (Zero Text Over Image) --}}
            <div class="overflow-hidden rounded-2xl border border-white/10 bg-neutral-900 [&_img]:transition-transform [&_img]:duration-700 group-hover:[&_img]:scale-105">
                <x-placeholder-graphic
                    type="vessel"
                    ratio="aspect-[21/9]"
                    label="Dokumentasi pelayaran jalur maritim samudera"
                    :image="asset('images/route-corridor.jpg')"
                />
            </div>

            {{-- 3 Clean Key Specs Row --}}
            <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-3">
                <div class="rounded-2xl border border-white/[0.06] bg-black/60 p-4">
                    <span class="block text-[11px] font-semibold uppercase tracking-wider text-neutral-500">Kapasitas Muat</span>
                    <span class="mt-1 block text-sm font-bold text-white">Ocean FCL 40ft High-Cube &amp; Bulk</span>
                </div>
                <div class="rounded-2xl border border-white/[0.06] bg-black/60 p-4">
                    <span class="block text-[11px] font-semibold uppercase tracking-wider text-neutral-500">Standar Penyerahan</span>
                    <span class="mt-1 block text-sm font-bold text-white">Incoterms® 2020 (CIF / FOB)</span>
                </div>
                <div class="rounded-2xl border border-white/[0.06] bg-black/60 p-4">
                    <span class="block text-[11px] font-semibold uppercase tracking-wider text-neutral-500">Proteksi Muatan</span>
                    <span class="mt-1 flex items-center gap-1.5 text-sm font-bold text-sky-300">
                        <x-icon name="shield-check" class="h-4 w-4" />
                        All-Risk Cargo Clauses (A)
                    </span>
                </div>
            </div>

        </div>

    </div>
</section>

