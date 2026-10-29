@props(['data' => []])

@php
$label = $data['label'] ?? 'Divisi komoditas';
$headline = $data['headline'] ?? 'Sektor komoditas ekspor & impor unggulan';
$description = $data['description'] ?? 'Portofolio komoditas perdagangan dengan jaminan sertifikat surveyor independen dan kepatuhan standar ekspor internasional.';

$defaultImages = [
    asset('images/commodity-agri.jpg'),
    asset('images/commodity-mineral.jpg'),
    asset('images/commodity-chemical.jpg'),
    asset('images/commodity-manufacture.jpg'),
];

$defaultTypes = ['container', 'vessel', 'container', 'warehouse'];

$defaultBadges = [
    'Sertifikat Phytosanitary',
    'Sertifikat Assay Sucofindo',
    'Kepatuhan MSDS & COA',
    'Standar Kemasan ISPM-15',
];

$rawItems = !empty($data['items']) ? $data['items'] : [];
$items = [];

if (!empty($rawItems)) {
    foreach ($rawItems as $index => $item) {
        $items[] = [
            'sector'    => $item['sector'] ?? 'Komoditas Unggulan',
            'code'      => $item['code'] ?? 'HS Chapter',
            'desc'      => $item['desc'] ?? $item['description'] ?? '',
            'packaging' => $item['packaging'] ?? 'Standar Ekspor Internasional',
            'badge'     => $item['badge'] ?? $item['inspections'] ?? ($defaultBadges[$index % count($defaultBadges)] ?? 'Standar Ekspor'),
            'type'      => $item['type'] ?? ($defaultTypes[$index % count($defaultTypes)] ?? 'container'),
            'label'     => $item['label'] ?? $item['sector'] ?? 'Komoditas',
            'image'     => $item['image'] ?? ($defaultImages[$index % count($defaultImages)] ?? null),
        ];
    }
} else {
    $items = [
        [
            'sector'    => 'Agrikultur & Rempah Pangan',
            'code'      => 'Kategori HS 07 - 18',
            'desc'      => 'Biji kopi premium, rempah kering pilihan, dan produk kelapa dengan sertifikasi phytosanitary dan uji laboratorium independen.',
            'packaging' => 'Jute Bags 60 KG / Flexibag FCL',
            'type'      => 'container',
            'label'     => 'Komoditas agrikultur & rempah',
            'badge'     => 'Sertifikat Phytosanitary',
            'image'     => asset('images/commodity-agri.jpg'),
        ],
        [
            'sector'    => 'Mineral & Energi Industri',
            'code'      => 'Kategori HS 25 - 28',
            'desc'      => 'Pasir silika, batubara metalurgi, dan mineral industri dengan sertifikat assay resmi Sucofindo dan Bureau Veritas.',
            'packaging' => 'Jumbo Bags 1.5 MT / Bulk Vessel',
            'type'      => 'vessel',
            'label'     => 'Komoditas mineral & logam',
            'badge'     => 'Sertifikat Assay Sucofindo',
            'image'     => asset('images/commodity-mineral.jpg'),
        ],
        [
            'sector'    => 'Bahan Kimia & Oleokimia',
            'code'      => 'Kategori HS 29 - 38',
            'desc'      => 'Asam lemak murni, gliserin teknis, dan turunan sawit industri dengan kepatuhan penuh standar MSDS dan sertifikat analisis.',
            'packaging' => 'ISO Tank 24,000L / Steel Drums',
            'type'      => 'container',
            'label'     => 'Komoditas oleokimia & bio-industri',
            'badge'     => 'Kepatuhan MSDS & COA',
            'image'     => asset('images/commodity-chemical.jpg'),
        ],
        [
            'sector'    => 'Manufaktur & Suku Cadang OEM',
            'code'      => 'Kategori HS 60 - 84',
            'desc'      => 'Komponen logam presisi, fastener industri, dan perlengkapan manufaktur berstandar kemasan kayu ekspor ISPM-15.',
            'packaging' => 'Pallet Kayu ISPM-15 / 40ft High-Cube',
            'type'      => 'warehouse',
            'label'     => 'Komoditas produk manufaktur',
            'badge'     => 'Standar Kemasan ISPM-15',
            'image'     => asset('images/commodity-manufacture.jpg'),
        ],
    ];
}
@endphp

<section id="commodities" class="relative border-t border-white/10 bg-black py-24 text-white lg:py-32">
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

        {{-- Katalog: satu komoditas per baris, foto kiri, spesifikasi kanan --}}
        <div class="divide-y divide-white/10 border-y border-white/10">
            @foreach ($items as $item)
            <article data-animate class="group grid items-center gap-8 py-10 lg:grid-cols-12 lg:gap-14 lg:py-14">

                <div class="lg:col-span-5">
                    <div class="overflow-hidden rounded-3xl border border-white/10 bg-neutral-950 [&_img]:transition-transform [&_img]:duration-700 group-hover:[&_img]:scale-105">
                        <x-placeholder-graphic
                            :type="$item['type'] ?? 'container'"
                            ratio="aspect-[16/10]"
                            :label="$item['label'] ?? $item['sector'] ?? 'Komoditas'"
                            :image="$item['image'] ?? null" />
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <div class="mb-4 flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center rounded-full border border-sky-400/30 bg-sky-400/10 px-3 py-1 text-xs font-semibold text-sky-300">
                            {{ $item['code'] ?? 'HS Chapter' }}
                        </span>
                        <span class="inline-flex items-center rounded-full border border-white/10 px-3 py-1 text-xs font-medium text-neutral-300">
                            {{ $item['badge'] ?? 'Standar Ekspor' }}
                        </span>
                    </div>

                    <h3 class="font-display text-2xl font-extrabold tracking-tight text-white [font-stretch:112%] sm:text-3xl">
                        {{ $item['sector'] ?? '' }}
                    </h3>
                    <p class="mt-3 max-w-xl text-base leading-relaxed text-neutral-400">
                        {{ $item['desc'] ?? '' }}
                    </p>

                    <dl class="mt-7 flex flex-wrap gap-x-12 gap-y-4 border-t border-white/10 pt-6 text-sm">
                        <div>
                            <dt class="text-neutral-500">Kemasan</dt>
                            <dd class="mt-1 font-semibold text-neutral-100">{{ $item['packaging'] ?? 'Standar Ekspor' }}</dd>
                        </div>
                        <div>
                            <dt class="text-neutral-500">Status</dt>
                            <dd class="mt-1 flex items-center gap-1.5 font-semibold text-sky-300">
                                <x-icon name="badge-check" class="h-4 w-4" />
                                Standar ekspor
                            </dd>
                        </div>
                    </dl>
                </div>

            </article>
            @endforeach
        </div>

        {{-- Ajakan konsultasi --}}
        <div data-animate class="mt-14 flex flex-col items-start justify-between gap-6 rounded-3xl border border-white/10 bg-neutral-950 p-8 sm:flex-row sm:items-center sm:p-10">
            <div>
                <h4 class="text-lg font-bold text-white sm:text-xl">Butuh komoditas khusus atau pengadaan terstruktur?</h4>
                <p class="mt-1.5 max-w-xl text-sm text-neutral-400 sm:text-base">
                    Kami memfasilitasi pengadaan komoditas khusus, pencocokan spesifikasi teknis, serta pengapalan uji coba ke seluruh dunia.
                </p>
            </div>
            <a href="#rfq"
                class="group inline-flex flex-shrink-0 items-center gap-2 rounded-full bg-white px-8 py-3.5 text-sm font-bold text-black transition hover:bg-neutral-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-950 active:scale-95">
                <span>Minta sampel &amp; RFQ</span>
                <x-icon name="arrow-right" class="h-4 w-4 transition-transform group-hover:translate-x-1" />
            </a>
        </div>

    </div>
</section>