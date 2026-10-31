@props(['data' => []])

@php
$label = $data['label'] ?? 'Standar kontrak internasional';
$headline = $data['headline'] ?? 'Kerangka termin penyerahan barang (Incoterms® 2020)';
$description = $data['description'] ?? 'Transparansi penetapan pembagian biaya angkut, asuransi muatan, dan titik peralihan risiko berstandar ICC.';

$defaultTerms = [
    [
        'code' => 'FOB',
        'name' => 'Free On Board',
        'risk' => 'Geladak Kapal Muat',
        'desc' => 'Barang diserahkan di atas kapal pelabuhan muat; biaya angkut laut ditanggung pembeli.',
    ],
    [
        'code' => 'CIF',
        'name' => 'Cost, Insurance & Freight',
        'risk' => 'Pelabuhan Bongkar Tujuan',
        'desc' => 'Biaya freight dan asuransi maritim dikelola penuh oleh Altara hingga pelabuhan tujuan.',
    ],
    [
        'code' => 'CFR',
        'name' => 'Cost and Freight',
        'risk' => 'Pelabuhan Asal Muat',
        'desc' => 'Biaya angkut laut ditanggung penjual; asuransi kargo ditutup mandiri oleh pembeli.',
    ],
    [
        'code' => 'EXW',
        'name' => 'Ex Works / FCA',
        'risk' => 'Pintu Pabrik / Hub',
        'desc' => 'Penyerahan di pintu pabrik; ideal bagi mitra yang memiliki kontrak liner langsung.',
    ],
    [
        'code' => 'DDP',
        'name' => 'Delivered Duty Paid',
        'risk' => 'Pintu Gudang Pembeli',
        'desc' => 'Solusi end-to-end lengkap mencakup freight, bea masuk, pajak impor, hingga pintu gudang.',
    ],
];

$rawTerms = !empty($data['terms']) ? $data['terms'] : [];
$terms = [];

if (!empty($rawTerms)) {
    foreach ($rawTerms as $idx => $t) {
        $fallback = $defaultTerms[$idx % count($defaultTerms)];
        $terms[] = [
            'code' => $t['code'] ?? $fallback['code'],
            'name' => $t['name'] ?? $fallback['name'],
            'risk' => $t['risk'] ?? $t['risk_point'] ?? $fallback['risk'],
            'desc' => $fallback['desc'],
        ];
    }
} else {
    $terms = $defaultTerms;
}
@endphp

<section id="incoterms" class="relative border-t border-white/[0.08] bg-black py-24 text-white lg:py-32">
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

        {{-- 5-Column Clean Incoterms Cards --}}
        <div data-animate class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-5">
            @foreach($terms as $term)
                <div class="group relative flex flex-col justify-between rounded-3xl border border-white/[0.08] bg-neutral-950/70 p-6 backdrop-blur-sm transition-all duration-300 hover:border-sky-400/30 hover:bg-neutral-900/60 sm:p-7">
                    <div>
                        {{-- Term Code Badge --}}
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-black font-display text-lg font-black tracking-tight text-white transition-colors duration-300 group-hover:border-sky-400/50 group-hover:text-sky-300">
                            {{ $term['code'] }}
                        </div>

                        <h3 class="font-display text-base font-bold text-white transition-colors duration-200 group-hover:text-sky-100">
                            {{ $term['name'] }}
                        </h3>

                        <p class="mt-2.5 text-xs leading-relaxed text-neutral-400 sm:text-sm">
                            {{ $term['desc'] }}
                        </p>
                    </div>

                    <div class="mt-6 border-t border-white/[0.06] pt-4">
                        <span class="block text-[11px] font-semibold uppercase tracking-wider text-neutral-500">Titik Risiko:</span>
                        <span class="mt-1 block text-xs font-semibold text-sky-300 sm:text-sm">{{ $term['risk'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

