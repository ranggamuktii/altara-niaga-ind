@props(['data' => []])

@php
$fleet = !empty($data) ? $data : config('site.fleet', []);
$label = $fleet['label'] ?? 'Armada & logistik darat';
$headline = $fleet['headline'] ?? 'Kekuatan armada darat & konektivitas pelabuhan';
$description = $fleet['description'] ?? 'Dukungan lebih dari 150 unit armada modern berstandar Euro 5/6, fasilitas pendingin presisi (Cold-Chain), dan kepatuhan pabean jalur hijau prioritas.';

$stats = $fleet['stats'] ?? [
['icon' => 'truck', 'value' => '150+', 'label' => 'Unit armada aktif'],
['icon' => 'clock', 'value' => '99,4%', 'label' => 'Ketepatan waktu tiba'],
['icon' => 'scale', 'value' => '100%', 'label' => 'Lolos uji muatan ODOL'],
['icon' => 'compass', 'value' => '24/7', 'label' => 'Pemantauan satelit GPS'],
];

$statIcons = ['truck', 'clock', 'scale', 'compass'];

$imgZoom = '[&_img]:transition-transform [&_img]:duration-700 group-hover:[&_img]:scale-105';
@endphp

<section id="fleet-dispatch" data-fleet-showcase class="relative border-t border-white/10 bg-black py-24 text-white lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}
        <div data-animate class="mb-14 grid gap-8 lg:mb-16 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="mb-5 flex items-center gap-3 text-sm font-medium text-neutral-400">
                    <span class="h-px w-10 bg-sky-400"></span>{{ $label }}
                </p>
                <h2 class="font-display text-3xl font-extrabold leading-[1.1] tracking-tight text-white [font-stretch:112%] sm:text-4xl lg:text-5xl">
                    {{ $headline }}
                </h2>
            </div>
            <p class="text-base leading-relaxed text-neutral-400 sm:text-lg lg:col-span-5">
                {{ $description }}
            </p>
        </div>

        {{-- Angka kunci: satu panel, sel dipisah garis tipis --}}
        <div data-animate class="mb-14 grid grid-cols-2 gap-px overflow-hidden rounded-3xl border border-white/10 bg-white/10 lg:grid-cols-4">
            @foreach ($stats as $stat)
            <div class="bg-black p-6 sm:p-8">
                <div class="bg-black p-5 sm:p-8">
                    <x-icon :name="$stat['icon'] ?? ($statIcons[$loop->index % 4] ?? 'truck')" class="mb-6 h-5 w-5 text-sky-300" />
                    <span class="font-display block text-4xl font-extrabold tracking-tight text-white [font-stretch:112%] sm:text-5xl lg:text-6xl">{{ $stat['value'] }}</span>
                    <span class="mt-2 block text-sm font-medium text-neutral-400">{{ $stat['label'] }}</span>
                </div>
                @endforeach
            </div>

            <div data-animate class="grid grid-cols-1 gap-8 lg:grid-cols-12">

                {{-- Kartu utama: Prime Mover --}}
                <div class="group flex flex-col justify-between rounded-3xl border border-white/10 bg-neutral-950 p-6 transition-colors duration-300 hover:border-white/25 sm:p-8 lg:col-span-7">
                    <div>
                        <div class="mb-6 overflow-hidden rounded-2xl {{ $imgZoom }}">
                            <x-placeholder-graphic
                                type="truck"
                                ratio="aspect-[16/9]"
                                label="Armada Prime Mover 40ft High-Cube"
                                :image="asset('images/fleet-mover.jpg')" />
                        </div>

                        <div class="mb-3 flex flex-wrap items-center gap-2">
                            <span class="inline-flex items-center rounded-full border border-sky-400/30 bg-sky-400/10 px-3 py-1 text-xs font-semibold text-sky-300">
                                Kapasitas hingga 34 metrik ton
                            </span>
                            <span class="inline-flex items-center rounded-full border border-white/10 px-3 py-1 text-xs font-medium text-neutral-300">
                                Pabean AEO Jalur Hijau
                            </span>
                        </div>

                        <h3 class="font-display text-xl font-extrabold tracking-tight text-white [font-stretch:112%] sm:text-2xl">Traktor Prime Mover &amp; Sasis Kontainer</h3>
                        <p class="mt-2 mb-6 max-w-xl text-base leading-relaxed text-neutral-400">
                            Pengangkutan kontainer ekspor-impor 20ft dan 40ft High-Cube dari kawasan industri langsung menuju dermaga pelabuhan tanpa hambatan regulasi muatan.
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center justify-between gap-4 border-t border-white/10 pt-5">
                        <span class="flex items-center gap-1.5 text-sm font-medium text-neutral-400">
                            <x-icon name="badge-check" class="h-4 w-4 text-sky-300" />
                            Mesin 540 HP Diesel Euro 6
                        </span>
                        <button
                            type="button"
                            data-fleet-apply="Prime Mover 40ft (34.0 MT)"
                            class="group/btn inline-flex items-center gap-2 rounded-full bg-white px-6 py-2.5 text-sm font-bold text-black transition hover:bg-neutral-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-950 active:scale-95">
                            <span>Terapkan ke RFQ</span>
                            <x-icon name="arrow-right" class="h-3.5 w-3.5 transition-transform group-hover/btn:translate-x-1" />
                        </button>
                    </div>
                </div>

                {{-- Dua kartu pendamping --}}
                <div class="flex flex-col gap-8 lg:col-span-5">
                    <div class="group rounded-3xl border border-white/10 bg-neutral-950 p-6 transition-colors duration-300 hover:border-white/25 sm:p-7">
                        <div class="mb-5 overflow-hidden rounded-2xl {{ $imgZoom }}">
                            <x-placeholder-graphic
                                type="container"
                                ratio="aspect-[21/9]"
                                label="Truk box pendingin cold-chain"
                                :image="asset('images/fleet-reefer.jpg')" />
                            <div class="group flex flex-col justify-between rounded-3xl border border-white/10 bg-neutral-950 p-6 transition-colors duration-300 hover:border-white/25 sm:p-7">
                                <div>
                                    <div class="mb-5 overflow-hidden rounded-2xl {{ $imgZoom }}">
                                        <x-placeholder-graphic
                                            type="container"
                                            ratio="aspect-[21/9]"
                                            label="Truk box pendingin cold-chain"
                                            :image="asset('images/fleet-reefer.jpg')" />
                                    </div>
                                    <p class="text-sm font-medium text-sky-300">Thermo King HACCP Certified</p>
                                    <h4 class="font-display mt-1.5 text-lg font-bold tracking-tight text-white [font-stretch:112%] sm:text-xl">Armada Reefer Khusus Rantai Dingin</h4>
                                    <p class="mt-1.5 text-sm leading-relaxed text-neutral-400">
                                        Pengiriman produk beku seafood, daging, dan komoditas farmasi dengan pemantauan suhu otomatis digital 24 jam.
                                    </p>
                                </div>
                                <p class="text-sm font-medium text-sky-300">Thermo King HACCP Certified</p>
                                <h4 class="mt-1.5 text-lg font-bold text-white">Armada Reefer Khusus Rantai Dingin</h4>
                                <p class="mt-1.5 text-sm leading-relaxed text-neutral-400">
                                    Pengiriman produk beku seafood, daging, dan komoditas farmasi dengan pemantauan suhu otomatis digital 24 jam.
                                </p>

                                <div class="mt-5 flex items-center justify-between border-t border-white/10 pt-4">
                                    <span class="text-xs font-medium text-neutral-400">Suhu terkontrol -25°C</span>
                                    <button
                                        type="button"
                                        data-fleet-apply="Armada Reefer Cold-Chain (-25°C)"
                                        class="group/btn inline-flex items-center gap-1.5 text-xs font-semibold text-white transition hover:text-sky-300">
                                        <span>Terapkan ke RFQ</span>
                                        <x-icon name="arrow-right" class="h-3 w-3 transition-transform group-hover/btn:translate-x-0.5" />
                                    </button>
                                </div>
                            </div>

                            <div class="group rounded-3xl border border-white/10 bg-neutral-950 p-6 transition-colors duration-300 hover:border-white/25 sm:p-7">
                                <div class="mb-5 overflow-hidden rounded-2xl {{ $imgZoom }}">
                                    <x-placeholder-graphic
                                        type="port"
                                        ratio="aspect-[21/9]"
                                        label="Konektivitas dermaga & kereta api"
                                        :image="asset('images/fleet-multimodal.jpg')" />
                                    <div class="group flex flex-col justify-between rounded-3xl border border-white/10 bg-neutral-950 p-6 transition-colors duration-300 hover:border-white/25 sm:p-7">
                                        <div>
                                            <div class="mb-5 overflow-hidden rounded-2xl {{ $imgZoom }}">
                                                <x-placeholder-graphic
                                                    type="port"
                                                    ratio="aspect-[21/9]"
                                                    label="Konektivitas dermaga & kereta api"
                                                    :image="asset('images/fleet-multimodal.jpg')" />
                                            </div>
                                            <p class="text-sm font-medium text-sky-300">Integrasi Cikarang Dry Port</p>
                                            <h4 class="font-display mt-1.5 text-lg font-bold tracking-tight text-white [font-stretch:112%] sm:text-xl">Konektivitas Multimoda Rel &amp; Pelabuhan</h4>
                                            <p class="mt-1.5 text-sm leading-relaxed text-neutral-400">
                                                Kombinasi multimoda darat melalui jalur Kereta Api Logistik (Kalog) langsung ke terminal petikemas tanpa hambatan jalan raya.
                                            </p>
                                        </div>
                                        <p class="text-sm font-medium text-sky-300">Integrasi Cikarang Dry Port</p>
                                        <h4 class="mt-1.5 text-lg font-bold text-white">Konektivitas Multimoda Rel &amp; Pelabuhan</h4>
                                        <p class="mt-1.5 text-sm leading-relaxed text-neutral-400">
                                            Kombinasi multimoda darat melalui jalur Kereta Api Logistik (Kalog) langsung ke terminal petikemas tanpa hambatan jalan raya.
                                        </p>

                                        <div class="mt-5 flex items-center justify-between border-t border-white/10 pt-4">
                                            <span class="text-xs font-medium text-neutral-400">Jalur Kereta Api Kontainer</span>
                                            <button
                                                type="button"
                                                data-fleet-apply="Multimoda Rel & Pelabuhan"
                                                class="group/btn inline-flex items-center gap-1.5 text-xs font-semibold text-white transition hover:text-sky-300">
                                                <span>Terapkan ke RFQ</span>
                                                <x-icon name="arrow-right" class="h-3 w-3 transition-transform group-hover/btn:translate-x-0.5" />
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
</section>