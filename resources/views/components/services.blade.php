@props(['data' => []])

@php
$label = $data['label'] ?? 'Layanan & solusi';
$headline = $data['headline'] ?? 'Solusi terpadu rantai pasok ekspor impor';
$description = $data['description'] ?? 'Eksekusi rantai pasok terintegrasi dari hulu pergudangan hingga pelepasan kargo di pelabuhan tujuan internasional.';

$defaultItems = [
    [
        'title' => 'Manajemen Ekspor Terpadu',
        'desc'  => 'Pengurusan dokumen ekspor, Certificate of Origin (COO), izin surveyor, dan penerbitan Bill of Lading (B/L) resmi.',
        'icon'  => 'package',
        'badge' => 'Dokumen COO & B/L',
    ],
    [
        'title' => 'Kepabeanan & Customs Clearance',
        'desc'  => 'Klasifikasi tarif HS Code akurat, persetujuan impor (PI), dan fasilitas pabean jalur hijau prioritas (AEO).',
        'icon'  => 'shield-check',
        'badge' => 'Fasilitas AEO Hijau',
    ],
    [
        'title' => 'Freight Forwarding Maritim',
        'desc'  => 'Alokasi ruang kontainer FCL, LCL, dan kargo curah bersama aliansi pelayaran Tier-1 (Maersk, MSC, CMA CGM).',
        'icon'  => 'ship',
        'badge' => 'Aliansi Tier-1 Global',
    ],
    [
        'title' => 'Air Freight & Kargo Ekspres',
        'desc'  => 'Layanan kargo udara terjadwal dan carter pesawat langsung untuk muatan bernilai tinggi atau membutuhkan waktu cepat.',
        'icon'  => 'plane',
        'badge' => 'Express Air Cargo',
    ],
    [
        'title' => 'Gudang Berikat & Cold Chain',
        'desc'  => 'Fasilitas pergudangan berpendingin dan kering dengan sistem manajemen gudang modern yang terhubung ke pelabuhan.',
        'icon'  => 'warehouse',
        'badge' => 'Suhu Terkontrol -25°C',
    ],
    [
        'title' => 'Konsultasi Kontrak Perdagangan',
        'desc'  => 'Penyusunan kontrak jual-beli internasional berbasis Incoterms® 2020, mitigasi risiko kurs, dan pengelolaan L/C.',
        'icon'  => 'file-text',
        'badge' => 'Incoterms® 2020 & L/C',
    ],
];

$iconMap = [
    'export' => 'package',
    'import' => 'shield-check',
    'logistics' => 'ship',
    'compliance' => 'badge-check',
    'warehouse' => 'warehouse',
    'consulting' => 'file-text',
];

$rawItems = !empty($data['items']) ? $data['items'] : [];
$items = [];

if (!empty($rawItems)) {
    foreach ($rawItems as $idx => $item) {
        $rawIcon = $item['icon'] ?? 'package';
        $resolvedIcon = $iconMap[$rawIcon] ?? $rawIcon;
        $fallback = $defaultItems[$idx % count($defaultItems)];
        $items[] = [
            'title' => $item['title'] ?? $fallback['title'],
            'desc'  => $item['desc'] ?? $item['description'] ?? $fallback['desc'],
            'icon'  => $resolvedIcon,
            'badge' => $item['badge'] ?? $fallback['badge'],
        ];
    }
} else {
    $items = $defaultItems;
}
@endphp

<section id="services" class="relative border-t border-white/10 bg-black py-24 text-white lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}
        <div data-animate class="mb-12 grid gap-8 lg:mb-16 lg:grid-cols-12 lg:items-end">
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

        {{-- 3-Column Services Grid (Claude Unified 1px Border Pattern) --}}
        <div data-animate class="grid grid-cols-1 gap-px overflow-hidden rounded-3xl border border-white/10 bg-white/10 md:grid-cols-2 lg:grid-cols-3">
            @foreach($items as $item)
                <div class="group flex flex-col justify-between bg-black p-8 transition-colors duration-300 hover:bg-neutral-950 sm:p-9">
                    <div>
                        {{-- Top Header: Icon & Badge --}}
                        <div class="mb-6 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 text-sky-300 transition-colors duration-300 group-hover:border-sky-400/50 sm:h-14 sm:w-14">
                                <x-icon :name="$item['icon']" class="h-6 w-6 text-sky-300" />
                            </div>
                            <span class="inline-flex items-center rounded-full border border-sky-400/30 bg-sky-400/10 px-3 py-1 text-xs font-semibold text-sky-300">
                                {{ $item['badge'] }}
                            </span>
                        </div>

                        <h3 class="font-display text-xl font-bold tracking-tight text-white sm:text-2xl">
                            {{ $item['title'] }}
                        </h3>

                        <p class="mt-3 text-base leading-relaxed text-neutral-400">
                            {{ $item['desc'] }}
                        </p>
                    </div>

                    <div class="mt-8 flex items-center justify-between border-t border-white/10 pt-5 text-sm">
                        <span class="flex items-center gap-1.5 font-medium text-neutral-400">
                            <x-icon name="badge-check" class="h-4 w-4 text-sky-300" />
                            Standar kepatuhan resmi
                        </span>
                        <a href="#rfq" class="group/link inline-flex items-center gap-1.5 text-xs font-semibold text-neutral-300 transition hover:text-white">
                            <span>Konsultasi</span>
                            <x-icon name="arrow-up-right" class="h-3.5 w-3.5 transition-transform group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5" />
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

