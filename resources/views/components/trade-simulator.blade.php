<section id="simulator" class="relative border-t border-white/10 bg-black py-24 text-white lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Section Header --}}
        <div data-animate class="mb-12 grid gap-8 lg:mb-16 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="mb-5 flex items-center gap-3 text-sm font-medium text-neutral-400">
                    <span class="h-px w-10 bg-sky-400"></span>Rute &amp; koridor pengapalan
                </p>
                <h2 class="font-display text-3xl font-extrabold leading-[1.1] tracking-tight text-white [font-stretch:112%] sm:text-4xl lg:text-5xl">
                    Konektivitas rute pengapalan global
                </h2>
            </div>
            <p class="text-base leading-relaxed text-neutral-400 sm:text-lg lg:col-span-5">
                Jadwal pelayaran maritim langsung dan alokasi ruang kontainer terjamin dari pelabuhan utama Indonesia ke destinasi perdagangan internasional.
            </p>
        </div>

        {{-- Route Overview Showcase Card --}}
        <div data-animate class="mb-8 rounded-3xl border border-white/10 bg-neutral-950 p-6 sm:p-10 transition-colors duration-300 hover:border-white/20">

            {{-- Departure ➔ Vessel ➔ Arrival Visual Route Bar --}}
            <div class="mb-8 flex flex-col items-center justify-between gap-6 rounded-2xl border border-white/10 bg-black/60 p-6 md:flex-row">
                {{-- Origin Port --}}
                <div class="flex items-center gap-4 text-left">
                    <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 text-sky-300">
                        <x-icon name="map-pin" class="h-6 w-6 text-sky-300" />
                    </div>
                    <div>
                        <span class="block text-xs font-semibold uppercase tracking-wider text-neutral-500">Pelabuhan muat asal</span>
                        <span class="mt-0.5 block text-lg font-bold text-white">Tanjung Priok, Jakarta (IDJKT)</span>
                    </div>
                </div>

                {{-- Transit Connector --}}
                <div class="flex flex-col items-center justify-center px-4">
                    <span class="mb-2 inline-flex items-center gap-1.5 rounded-full border border-sky-400/30 bg-sky-400/10 px-3 py-1 text-xs font-semibold text-sky-300">
                        <x-icon name="clock" class="h-3.5 w-3.5 text-sky-300" />
                        <span>Estimasi transit 18 - 22 hari</span>
                    </span>
                    <div class="flex items-center gap-3 text-neutral-600">
                        <span class="h-px w-12 bg-white/20"></span>
                        <div class="flex h-9 w-9 items-center justify-center rounded-full border border-white/10 bg-black text-sky-300">
                            <x-icon name="ship" class="h-4 w-4 text-sky-300" />
                        </div>
                        <span class="h-px w-12 bg-white/20"></span>
                    </div>
                </div>

                {{-- Destination Port --}}
                <div class="flex items-center gap-4 text-left">
                    <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 text-sky-300">
                        <x-icon name="anchor" class="h-6 w-6 text-sky-300" />
                    </div>
                    <div>
                        <span class="block text-xs font-semibold uppercase tracking-wider text-neutral-500">Pelabuhan tujuan</span>
                        <span class="mt-0.5 block text-lg font-bold text-white">Port of Rotterdam (NLRTM)</span>
                    </div>
                </div>
            </div>

            {{-- Visual Showcase Media Frame (Clean Route Photo, Zero Text Over Image) --}}
            <div class="mb-8 overflow-hidden rounded-2xl border border-white/10 bg-neutral-900 [&_img]:transition-transform [&_img]:duration-700 hover:[&_img]:scale-105">
                <x-placeholder-graphic
                    type="vessel"
                    ratio="aspect-[21/9]"
                    label="Dokumentasi pelayaran jalur maritim samudera"
                    :image="asset('images/route-corridor.jpg')"
                />
            </div>

            {{-- 3 Key Specs (Claude 1px Border Grid) --}}
            <div class="grid grid-cols-1 gap-px overflow-hidden rounded-2xl border border-white/10 bg-white/10 sm:grid-cols-3">
                <div class="bg-black p-5">
                    <span class="mb-1 block text-xs font-semibold uppercase tracking-wider text-neutral-500">Kapasitas muat</span>
                    <span class="block text-base font-bold text-white">Ocean FCL 40ft High-Cube</span>
                </div>
                <div class="bg-black p-5">
                    <span class="mb-1 block text-xs font-semibold uppercase tracking-wider text-neutral-500">Standar penyerahan</span>
                    <span class="block text-base font-bold text-white">Incoterms® 2020 (CIF / FOB)</span>
                </div>
                <div class="bg-black p-5">
                    <span class="mb-1 block text-xs font-semibold uppercase tracking-wider text-neutral-500">Proteksi asuransi</span>
                    <span class="flex items-center gap-1.5 text-base font-bold text-sky-300">
                        <x-icon name="shield-check" class="h-4 w-4 text-sky-300" />
                        All-Risk Cargo Clauses (A)
                    </span>
                </div>
            </div>

        </div>

        {{-- Direct Action Bar --}}
        <div data-animate class="flex flex-col items-start justify-between gap-6 rounded-3xl border border-white/10 bg-neutral-950 p-6 sm:flex-row sm:items-center sm:p-8">
            <div class="flex items-center gap-3">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-sky-400 opacity-60"></span>
                    <span class="relative inline-flex h-2.5 w-2.5 rounded-full bg-sky-400"></span>
                </span>
                <span class="text-sm font-semibold text-neutral-300">Tersedia alokasi ruang kapal mingguan menuju Rotterdam, Shanghai, &amp; Los Angeles</span>
            </div>

            <a
                href="#rfq"
                class="group inline-flex items-center gap-2 rounded-full bg-white px-8 py-3.5 text-sm font-bold text-black transition hover:bg-neutral-200 active:scale-95">
                <span>Cek jadwal pengapalan</span>
                <x-icon name="arrow-right" class="h-4 w-4 transition-transform group-hover:translate-x-1" />
            </a>
        </div>

    </div>
</section>

