@props(['data' => []])

@php
$label = $data['label'] ?? 'Divisi komoditas';
$headline = $data['headline'] ?? 'Portofolio komoditas ekspor & impor unggulan';
$description = $data['description'] ?? 'Pasokan komoditas bersertifikasi laboratorium independen dengan standar kepatuhan ekspor global.';

$defaultImages = [
asset('images/commodity-agri.jpg'),
asset('images/commodity-mineral.jpg'),
asset('images/commodity-chemical.jpg'),
asset('images/commodity-manufacture.jpg'),
];

$defaultTypes = ['container', 'vessel', 'container', 'warehouse'];

$defaultItems = [
[
'sector' => 'Agrikultur & Rempah Pangan',
'code' => 'HS 07 - 18',
'desc' => 'Biji kopi specialty, rempah kering pilihan, dan produk kelapa dengan sertifikasi phytosanitary.',
'packaging' => 'Jute Bags 60 KG / Flexibag FCL',
'type' => 'container',
'label' => 'Komoditas agrikultur',
'badge' => 'Phytosanitary Certified',
'image' => asset('images/commodity-agri.jpg'),
],
[
'sector' => 'Mineral & Energi Industri',
'code' => 'HS 25 - 28',
'desc' => 'Pasir silika murni, batubara metalurgi, dan mineral industri dengan sertifikat assay Sucofindo.',
'packaging' => 'Jumbo Bags 1.5 MT / Bulk Vessel',
'type' => 'vessel',
'label' => 'Komoditas mineral & energi',
'badge' => 'Assay Sucofindo',
'image' => asset('images/commodity-mineral.jpg'),
],
[
'sector' => 'Bahan Kimia & Oleokimia',
'code' => 'HS 29 - 38',
'desc' => 'Asam lemak murni, gliserin teknis, dan turunan sawit industri berstandar mutu MSDS & COA.',
'packaging' => 'ISO Tank 24,000L / Steel Drums',
'type' => 'container',
'label' => 'Komoditas oleokimia',
'badge' => 'MSDS & COA Compliant',
'image' => asset('images/commodity-chemical.jpg'),
],
[
'sector' => 'Manufaktur & Komponen OEM',
'code' => 'HS 60 - 84',
'desc' => 'Komponen logam presisi, fastener industri, dan suku cadang berstandar kemasan ekspor ISPM-15.',
'packaging' => 'Pallet Kayu ISPM-15 / 40ft HC',
'type' => 'warehouse',
'label' => 'Komoditas manufaktur',
'badge' => 'ISPM-15 Certified',
'image' => asset('images/commodity-manufacture.jpg'),
],
];

$rawItems = !empty($data['items']) ? $data['items'] : [];
$items = [];

if (!empty($rawItems)) {
foreach ($rawItems as $index => $item) {
$fallback = $defaultItems[$index % count($defaultItems)];
$items[] = [
'sector' => $item['sector'] ?? $fallback['sector'],
'code' => $item['code'] ?? $fallback['code'],
'desc' => $item['desc'] ?? $fallback['desc'],
'packaging' => $item['packaging'] ?? $fallback['packaging'],
'badge' => $item['badge'] ?? $fallback['badge'],
'type' => $item['type'] ?? $fallback['type'],
'label' => $item['label'] ?? $fallback['label'],
'image' => $item['image'] ?? ($defaultImages[$index % count($defaultImages)] ?? null),
];
}
} else {
$items = $defaultItems;
}
@endphp

<section id="commodities" class="relative border-t border-white/[0.08] bg-black py-24 text-white lg:py-32">
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

        {{-- Modern 2x2 Commodity Grid --}}
        <div data-animate class="grid grid-cols-1 gap-6 md:grid-cols-2">
            @foreach ($items as $item)
            <article class="group relative flex flex-col justify-between overflow-hidden rounded-3xl border border-white/[0.08] bg-neutral-950/70 p-6 backdrop-blur-sm transition-all duration-300 hover:border-sky-400/30 hover:bg-neutral-900/60 sm:p-7">
                <div>
                    {{-- Clean Media Frame --}}
                    <div class="overflow-hidden rounded-2xl border border-white/10 bg-neutral-900 [&_img]:transition-transform [&_img]:duration-700 group-hover:[&_img]:scale-105">
                        <x-placeholder-graphic
                            :type="$item['type'] ?? 'container'"
                            ratio="aspect-[16/10]"
                            :label="$item['label'] ?? $item['sector'] ?? 'Komoditas'"
                            :image="$item['image'] ?? null" />
                    </div>

                    {{-- Badges Row --}}
                    <div class="mt-6 flex items-center gap-2">
                        <span class="inline-flex items-center rounded-full border border-sky-400/20 bg-sky-400/10 px-3 py-1 text-xs font-semibold text-sky-300">
                            {{ $item['code'] ?? 'HS Chapter' }}
                        </span>
                        <span class="inline-flex items-center rounded-full border border-white/10 px-3 py-1 text-xs font-medium text-neutral-300">
                            {{ $item['badge'] ?? 'Standar Ekspor' }}
                        </span>
                    </div>

                    {{-- Title & Short Copy --}}
                    <h3 class="font-display mt-3 text-xl font-bold tracking-tight text-white transition-colors duration-200 group-hover:text-sky-100 sm:text-2xl">
                        {{ $item['sector'] ?? '' }}
                    </h3>
                    <p class="mt-2 text-sm leading-relaxed text-neutral-400 sm:text-base">
                        {{ $item['desc'] ?? '' }}
                    </p>
                </div>

                {{-- Footer Spec Row --}}
                <div class="mt-6 flex items-center justify-between border-t border-white/[0.06] pt-4 text-xs">
                    <span class="text-neutral-500">
                        Kemasan: <strong class="font-semibold text-neutral-300">{{ $item['packaging'] ?? 'Standar Ekspor' }}</strong>
                    </span>
                    <a href="#rfq" class="inline-flex items-center gap-1 font-semibold text-sky-300 transition hover:text-white">
                        <span>Sampel &amp; RFQ</span>
                        <x-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        {{-- Simple, Modern Callout Banner --}}
        <div data-animate class="mt-10 flex flex-col items-start justify-between gap-5 rounded-3xl border border-white/[0.08] bg-neutral-950/50 p-6 backdrop-blur-sm sm:flex-row sm:items-center sm:p-8">
            <div>
                <h4 class="text-base font-bold text-white sm:text-lg">Pengadaan komoditas terstruktur atau spesifikasi kustom?</h4>
                <p class="mt-1 text-sm text-neutral-400">
                    Tim sourcing kami siap memfasilitasi pencocokan spesifikasi teknis dan pengapalan uji coba ke destinasi Anda.
                </p>
            </div>
            <a href="#rfq"
                class="group inline-flex flex-shrink-0 items-center gap-2 rounded-full bg-white px-7 py-3 text-sm font-bold text-black transition hover:bg-neutral-200 active:scale-95">
                <span>Konsultasi komoditas</span>
                <x-icon name="arrow-right" class="h-4 w-4 transition-transform group-hover:translate-x-1" />
            </a>
        </div>

    </div>
</section>