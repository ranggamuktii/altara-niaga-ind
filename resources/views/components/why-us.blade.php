@props(['data' => []])

@php
$label = $data['label'] ?? 'Keunggulan kompetitif';
$headline = $data['headline'] ?? 'Mengapa mempercayakan perdagangan global kepada kami';
$description = $data['description'] ?? 'Disiplin jadwal pengapalan kapal, kalkulasi pro-forma transparan tanpa biaya demurrage tersembunyi, dan kepatuhan penuh regulasi pabean lintas batas.';

$defaultBenefits = [
    [
        'title' => 'Transparansi Biaya & Bebas Demurrage Tersembunyi',
        'desc'  => 'Kalkulasi pro-forma transparan mencakup ocean freight, Terminal Handling Charge (THC), dan buffer masa tinggal kontainer yang aman.',
        'icon'  => 'shield-check',
        'badge' => 'Zero Hidden Fee',
    ],
    [
        'title' => 'Jaminan Slot Kontainer Jalur Pelayaran Tier-1',
        'desc'  => 'Alokasi ruang prioritas bahkan pada periode puncak musim ekspor melalui kontrak volume jangka panjang bersama operator pelayaran global.',
        'icon'  => 'ship',
        'badge' => 'Tier-1 Priority Space',
    ],
    [
        'title' => 'Ketertelusuran Uji Karantina & Mutu Resmi',
        'desc'  => 'Pemeriksaan laboratorium resmi pra-pengapalan untuk mencegah penolakan karantina atau demurrage fumigasi di pelabuhan negara tujuan.',
        'icon'  => 'badge-check',
        'badge' => 'Lab Pre-Inspection',
    ],
    [
        'title' => 'Pelacakan Posisi Kargo & Dokumen Digital Real-Time',
        'desc'  => 'Akses mudah salinan Bill of Lading, invoice terverifikasi, dan posisi kontainer melalui integrasi sistem pelacakan terpadu.',
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
            'title' => $item['title'] ?? $fallback['title'],
            'desc'  => $item['desc'] ?? $item['description'] ?? $fallback['desc'],
            'icon'  => $item['icon'] ?? $fallback['icon'],
            'badge' => $item['badge'] ?? $fallback['badge'],
        ];
    }
} else {
    $benefits = $defaultBenefits;
}
@endphp

<section id="why-us" class="relative border-t border-white/10 bg-black py-24 text-white lg:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12 lg:gap-16">

            {{-- Left Column: Header + Credential Showcase Box --}}
            <div class="lg:sticky lg:top-28 lg:col-span-5" data-animate>
                <p class="mb-5 flex items-center gap-3 text-sm font-medium text-neutral-400">
                    <span class="h-px w-10 bg-sky-400"></span>{{ $label }}
                </p>
                <h2 class="font-display text-3xl font-extrabold leading-[1.1] tracking-tight text-white [font-stretch:112%] sm:text-4xl lg:text-5xl">
                    {{ $headline }}
                </h2>
                <p class="mt-4 text-base leading-relaxed text-neutral-400 sm:text-lg">
                    {{ $description }}
                </p>

                {{-- Credential Showcase Card (Claude Style 1px Border Pattern) --}}
                <div class="mt-8 rounded-3xl border border-white/10 bg-neutral-950 p-6 space-y-4">
                    <div class="flex items-center gap-2.5">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-sky-400 opacity-60"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-sky-400"></span>
                        </span>
                        <span class="text-sm font-bold text-white">Standar Operasional Tertinggi</span>
                    </div>

                    <div class="grid grid-cols-2 gap-px overflow-hidden rounded-2xl border border-white/10 bg-white/10 text-xs">
                        <div class="bg-black p-3.5">
                            <span class="block text-neutral-500 font-semibold uppercase mb-1">Pabean</span>
                            <span class="block text-white font-bold">AEO Jalur Hijau</span>
                        </div>
                        <div class="bg-black p-3.5">
                            <span class="block text-neutral-500 font-semibold uppercase mb-1">Asuransi</span>
                            <span class="block text-white font-bold">ICC All-Risk</span>
                        </div>
                        <div class="bg-black p-3.5">
                            <span class="block text-neutral-500 font-semibold uppercase mb-1">Surveyor</span>
                            <span class="block text-white font-bold">SGS &amp; Sucofindo</span>
                        </div>
                        <div class="bg-black p-3.5">
                            <span class="block text-neutral-500 font-semibold uppercase mb-1">Pelacakan</span>
                            <span class="block text-sky-300 font-bold">AIS Satelit 24/7</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: 4 Divided List Items (Claude Signature Divided Pattern) --}}
            <div class="lg:col-span-7" data-animate>
                <ul class="divide-y divide-white/10 border-y border-white/10">
                    @foreach ($benefits as $item)
                        <li class="group flex gap-5 py-7 transition-colors duration-300 hover:bg-white/[0.03] sm:gap-6 sm:py-8">
                            <div class="flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 text-sky-300 transition-colors duration-300 group-hover:border-sky-400/50 sm:h-14 sm:w-14">
                                <x-icon :name="$item['icon']" class="h-6 w-6 text-sky-300" />
                            </div>

                            <div>
                                <span class="inline-flex items-center rounded-full border border-sky-400/30 bg-sky-400/10 px-2.5 py-0.5 text-xs font-semibold text-sky-300">
                                    {{ $item['badge'] }}
                                </span>
                                <h3 class="mt-2 text-xl font-bold text-white sm:text-2xl">
                                    {{ $item['title'] }}
                                </h3>
                                <p class="mt-2 text-base leading-relaxed text-neutral-400">
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

