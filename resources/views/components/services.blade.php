@props(['data' => []])

@php
$label = $data['label'] ?? 'Layanan terpadu';
$headline = $data['headline'] ?? 'Solusi rantai pasok ekspor impor dari hulu ke hilir';
$description = $data['description'] ?? 'Integrasi tata kelola kepabeanan, freight forwarding maritim, dan pergudangan berstandar internasional.';

$defaultServices = [
    [
        'title' => 'Manajemen Ekspor Terpadu',
        'desc'  => 'Penerbitan dokumen ekspor PEB, legalitas COO resmi, inspeksi surveyor, dan Bill of Lading.',
        'icon'  => 'package',
        'badge' => 'COO & B/L Legal',
    ],
    [
        'title' => 'Kepabeanan & Jalur Hijau (AEO)',
        'desc'  => 'Klasifikasi tarif HS Code presisi dengan fasilitas clearance prioritas tanpa pemeriksaan fisik.',
        'icon'  => 'shield-check',
        'badge' => 'AEO Prioritas',
    ],
    [
        'title' => 'Freight Forwarding Multimoda',
        'desc'  => 'Alokasi ruang kontainer FCL, LCL, dan kargo curah terjamin bersama aliansi pelayaran Tier-1 dunia.',
        'icon'  => 'ship',
        'badge' => 'Tier-1 Ocean Liner',
    ],
    [
        'title' => 'Kepatuhan Regulasi Perdagangan',
        'desc'  => 'Audit kepatuhan perjanjian perdagangan bebas (FTA), karantina hayati, dan sertifikasi lintas batas.',
        'icon'  => 'file-text',
        'badge' => 'Audit Perdagangan',
    ],
    [
        'title' => 'Gudang Berikat & Cold Chain',
        'desc'  => 'Fasilitas gudang berikat kering dan pendingin suhu terkontrol yang terhubung ke terminal pelabuhan.',
        'icon'  => 'warehouse',
        'badge' => 'Suhu Terkontrol',
    ],
    [
        'title' => 'Kontrak Dagang & Mitigasi Risiko',
        'desc'  => 'Penyusunan kesepakatan jual-beli internasional berbasis Incoterms® 2020 dan instrumen L/C.',
        'icon'  => 'badge-check',
        'badge' => 'Incoterms® 2020',
    ],
];

$iconMap = [
    'export' => 'package',
    'import' => 'shield-check',
    'logistics' => 'ship',
    'compliance' => 'file-text',
    'warehouse' => 'warehouse',
    'consulting' => 'badge-check',
];

$rawItems = !empty($data['items']) ? $data['items'] : [];
$items = [];

if (!empty($rawItems)) {
    foreach ($rawItems as $idx => $item) {
        $fallback = $defaultServices[$idx % count($defaultServices)];
        $rawIcon = $item['icon'] ?? $fallback['icon'];
        $resolvedIcon = $iconMap[$rawIcon] ?? $rawIcon;
        
        $items[] = [
            'title' => $item['title'] ?? $fallback['title'],
            'desc'  => $item['desc'] ?? $item['description'] ?? $fallback['desc'],
            'icon'  => $resolvedIcon,
            'badge' => $item['badge'] ?? $fallback['badge'],
        ];
    }
} else {
    $items = $defaultServices;
}
@endphp

<section id="services" class="relative border-t border-white/[0.08] bg-black py-24 text-white lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header --}}
        <div data-animate class="mb-14 grid gap-8 lg:mb-18 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="mb-4 flex items-center gap-3 text-sm font-medium text-neutral-400">
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

        {{-- Modern 3-Column Services Grid --}}
        <div data-animate class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
            @foreach($items as $item)
                <div class="group relative flex flex-col justify-between rounded-3xl border border-white/[0.08] bg-neutral-950/70 p-8 backdrop-blur-sm transition-all duration-300 hover:border-sky-400/30 hover:bg-neutral-900/60 sm:p-9">
                    <div>
                        {{-- Top: Icon & Badge --}}
                        <div class="mb-6 flex items-center justify-between">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-black text-sky-300 transition-colors duration-300 group-hover:border-sky-400/50">
                                <x-icon :name="$item['icon']" class="h-6 w-6 text-sky-300" />
                            </div>
                            <span class="inline-flex items-center rounded-full border border-sky-400/20 bg-sky-400/10 px-3 py-1 text-xs font-semibold text-sky-300">
                                {{ $item['badge'] }}
                            </span>
                        </div>

                        <h3 class="font-display text-xl font-bold tracking-tight text-white transition-colors duration-200 group-hover:text-sky-100 sm:text-2xl">
                            {{ $item['title'] }}
                        </h3>

                        <p class="mt-3 text-sm leading-relaxed text-neutral-400 sm:text-base">
                            {{ $item['desc'] }}
                        </p>
                    </div>

                    <div class="mt-8 flex items-center justify-between border-t border-white/[0.06] pt-5 text-sm">
                        <span class="flex items-center gap-1.5 text-xs font-medium text-neutral-400">
                            <x-icon name="badge-check" class="h-4 w-4 text-sky-300" />
                            Terverifikasi ISO &amp; AEO
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

