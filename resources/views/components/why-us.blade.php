@props(['data' => []])

@php
$label = $data['label'] ?? 'Keunggulan kompetitif';
$headline = $data['headline'] ?? 'Mengapa mempercayakan perdagangan global kepada kami';
$description = $data['description'] ?? 'Kalkulasi pro-forma transparan tanpa demurrage tak terduga, dan kepatuhan penuh regulasi pabean lintas batas.';

$defaultBenefits = [
    [
        'title' => 'Transparansi Biaya Mutlak',
        'desc'  => 'Kalkulasi pro-forma menyeluruh mencakup ocean freight dan buffer masa tinggal kontainer tanpa biaya tersembunyi.',
        'icon'  => 'shield-check',
        'badge' => 'Zero Hidden Fee',
    ],
    [
        'title' => 'Prioritas Alokasi Ruang Tier-1',
        'desc'  => 'Jaminan slot kapal kargo bersama operator pelayaran maritim global bahkan pada periode puncak musim ekspor.',
        'icon'  => 'ship',
        'badge' => 'Tier-1 Priority Space',
    ],
    [
        'title' => 'Inspeksi & Sertifikasi Resmi',
        'desc'  => 'Verifikasi pra-pengapalan independen bersama SGS & Sucofindo guna menjamin kesesuaian spesifikasi kontrak pembeli.',
        'icon'  => 'badge-check',
        'badge' => 'Lab Certified',
    ],
    [
        'title' => 'Pelacakan Kargo Real-Time',
        'desc'  => 'Akses mudah posisi kontainer via satelit AIS serta kelengkapan dokumen pabean digital terintegrasi 24/7.',
        'icon'  => 'compass',
        'badge' => 'EDI Real-Time',
    ],
];

$rawItems = !empty($data['items']) ? $data['items'] : [];
$benefits = [];

if (!empty($rawItems)) {
    foreach ($rawItems as $idx => $item) {
        $fallback = $defaultBenefits[$idx % count($defaultBenefits)];
        $benefits[] = [
            'title' => $fallback['title'],
            'desc'  => $fallback['desc'],
            'icon'  => $item['icon'] ?? $fallback['icon'],
            'badge' => $item['badge'] ?? $fallback['badge'],
        ];
    }
} else {
    $benefits = $defaultBenefits;
}
@endphp

<section id="why-us" class="relative border-t border-white/[0.08] bg-black py-24 text-white lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12 lg:gap-16">

            {{-- Left Column: Header + Credential Showcase Box --}}
            <div class="lg:sticky lg:top-28 lg:col-span-5" data-animate>
                <p class="mb-4 flex items-center gap-3 text-sm font-medium text-neutral-400">
                    <span class="h-px w-10 bg-sky-400"></span>{{ $label }}
                </p>
                <h2 class="font-display text-3xl font-extrabold leading-[1.1] tracking-tight text-white [font-stretch:112%] sm:text-4xl lg:text-5xl">
                    {{ $headline }}
                </h2>
                <p class="mt-4 text-base leading-relaxed text-neutral-400 sm:text-lg">
                    {{ $description }}
                </p>

                {{-- Credential Showcase Card --}}
                <div class="mt-8 rounded-3xl border border-white/[0.08] bg-neutral-950/70 p-6 backdrop-blur-sm sm:p-7">
                    <div class="flex items-center gap-2.5">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-sky-400 opacity-60"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-sky-400"></span>
                        </span>
                        <span class="text-xs font-bold uppercase tracking-wider text-white">Standar Operasional Tertinggi</span>
                    </div>

                    <div class="mt-4 grid grid-cols-2 gap-2.5 text-xs">
                        <div class="rounded-2xl border border-white/[0.06] bg-black/60 p-3.5">
                            <span class="block text-neutral-500 font-semibold uppercase text-[10px]">Pabean</span>
                            <span class="mt-0.5 block text-white font-bold">AEO Jalur Hijau</span>
                        </div>
                        <div class="rounded-2xl border border-white/[0.06] bg-black/60 p-3.5">
                            <span class="block text-neutral-500 font-semibold uppercase text-[10px]">Asuransi</span>
                            <span class="mt-0.5 block text-white font-bold">ICC All-Risk (A)</span>
                        </div>
                        <div class="rounded-2xl border border-white/[0.06] bg-black/60 p-3.5">
                            <span class="block text-neutral-500 font-semibold uppercase text-[10px]">Surveyor</span>
                            <span class="mt-0.5 block text-white font-bold">SGS &amp; Sucofindo</span>
                        </div>
                        <div class="rounded-2xl border border-white/[0.06] bg-black/60 p-3.5">
                            <span class="block text-neutral-500 font-semibold uppercase text-[10px]">Pelacakan</span>
                            <span class="mt-0.5 block text-sky-300 font-bold">AIS Satelit 24/7</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: 4 Clean Divided Items --}}
            <div class="lg:col-span-7" data-animate>
                <ul class="divide-y divide-white/[0.08] border-y border-white/[0.08]">
                    @foreach ($benefits as $item)
                        <li class="group flex gap-5 py-7 transition-colors duration-300 hover:bg-white/[0.02] sm:gap-6 sm:py-8">
                            <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 text-sky-300 transition-colors duration-300 group-hover:border-sky-400/50 sm:h-14 sm:w-14">
                                <x-icon :name="$item['icon']" class="h-6 w-6 text-sky-300" />
                            </div>

                            <div>
                                <span class="inline-flex items-center rounded-full border border-sky-400/20 bg-sky-400/10 px-2.5 py-0.5 text-xs font-semibold text-sky-300">
                                    {{ $item['badge'] }}
                                </span>
                                <h3 class="mt-2 text-xl font-bold text-white transition-colors duration-200 group-hover:text-sky-100 sm:text-2xl">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="mt-1.5 text-sm leading-relaxed text-neutral-400 sm:text-base">
                                    {{ $item['desc'] }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

