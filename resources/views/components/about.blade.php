@props(['data' => []])

@php
$label = $data['label'] ?? 'Profil perusahaan';
$headline = $data['headline'] ?? 'Membangun reputasi perdagangan global dengan integritas tertinggi';
$description = $data['description'] ?? 'Altara Niaga Indonesia beroperasi sebagai trading house dan integrator logistik maritim yang menghubungkan komoditas unggulan ke pasar internasional dengan standar kepatuhan tertinggi.';

$defaultPillars = [
    [
        'icon' => 'shield-check',
        'badge' => 'Akreditasi pabean',
        'title' => 'Kepabeanan Jalur Hijau Prioritas (AEO)',
        'desc' => 'Pelepasan kargo cepat dan efisien dengan integrasi data elektronik langsung ke sistem pabean pelabuhan utama.',
    ],
    [
        'icon' => 'badge-check',
        'badge' => 'Jaminan kualitas',
        'title' => 'Inspeksi Surveyor & Uji Laboratorium',
        'desc' => 'Verifikasi pra-pengapalan resmi bersama SGS dan Sucofindo memastikan komoditas sesuai klausul kontrak internasional.',
    ],
    [
        'icon' => 'ship',
        'badge' => 'Kontrak pelayaran',
        'title' => 'Alokasi Ruang Kapal Tier-1',
        'desc' => 'Slot kontainer terjamin bersama aliansi pelayaran global serta proteksi kargo asuransi maritim komprehensif.',
    ],
];

$rawPillars = $data['pillars'] ?? $data['features'] ?? [];
$pillars = [];

if (!empty($rawPillars)) {
    foreach ($rawPillars as $idx => $p) {
        $fallback = $defaultPillars[$idx % count($defaultPillars)];
        $pillars[] = [
            'icon' => $p['icon'] ?? $fallback['icon'],
            'badge' => $p['badge'] ?? $fallback['badge'],
            'title' => $p['title'] ?? $fallback['title'],
            'desc' => $p['desc'] ?? $p['description'] ?? $fallback['desc'],
        ];
    }
} else {
    $pillars = $defaultPillars;
}
@endphp

<section id="about" class="relative border-t border-white/10 bg-black py-24 text-white lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Header: judul di kiri, penjelasan di kanan --}}
        <div data-animate class="mb-16 grid gap-8 lg:mb-20 lg:grid-cols-12 lg:items-end">
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

        <div data-animate class="grid items-start gap-12 lg:grid-cols-12 lg:gap-16">

            {{-- Kiri: foto bersih, tanpa overlay --}}
            <div class="lg:sticky lg:top-28 lg:col-span-5">
                <div class="overflow-hidden rounded-3xl border border-white/10 bg-neutral-950">
                    <x-placeholder-graphic
                        type="vessel"
                        ratio="aspect-[4/5]"
                        label="Operasional logistik maritim"
                        :image="'https://placehold.co/800x1000/171717/a3a3a3?text=Operasional+Logistik+Maritim'" />
                </div>
                <p class="mt-4 flex items-center gap-2 text-sm text-neutral-500">
                    <x-icon name="ship" class="h-4 w-4 flex-shrink-0 text-sky-300" />
                    <span>Armada kapal kargo samudera di pelabuhan laut internasional</span>
                </p>
            </div>

            {{-- Kanan: tiga keunggulan sebagai daftar bergaris, bukan kartu terpisah --}}
            <div class="lg:col-span-7">
                <ul class="divide-y divide-white/10 border-y border-white/10">
                    @foreach ($pillars as $pillar)
                    <li class="group flex gap-5 py-8 sm:gap-6 sm:py-10">
                        <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 text-sky-300 transition-colors duration-300 group-hover:border-sky-400/50 sm:h-14 sm:w-14">
                            <x-icon :name="$pillar['icon']" class="h-6 w-6 text-sky-300" />
                        </div>
                        <div>
                            <p class="text-sm font-medium text-sky-300">{{ $pillar['badge'] }}</p>
                            <h3 class="mt-1.5 text-xl font-bold text-white sm:text-2xl">{{ $pillar['title'] }}</h3>
                            <p class="mt-2 max-w-xl text-base leading-relaxed text-neutral-400">{{ $pillar['desc'] }}</p>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</section>

