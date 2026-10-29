@props(['data' => []])

@php
$label = $data['label'] ?? 'Standar kontrak internasional';
$headline = $data['headline'] ?? 'Kerangka termin penyerahan barang (Incoterms® 2020)';
$description = $data['description'] ?? 'Transparansi penetapan pembagian biaya angkut, asuransi muatan, dan titik peralihan risiko berstandar International Chamber of Commerce (ICC).';

$defaultTerms = [
    [
        'code' => 'FOB',
        'name' => 'Free On Board',
        'risk' => 'Geladak Kapal Pelabuhan Asal',
        'desc' => 'Barang diserahkan setelah melewati rel kapal pelabuhan muat. Eksportir menyelesaikan izin pabean ekspor.',
    ],
    [
        'code' => 'CIF',
        'name' => 'Cost, Insurance & Freight',
        'risk' => 'Pelabuhan Bongkar Tujuan',
        'desc' => 'Pengapalan laut dan asuransi maritim kami kelola penuh hingga tiba di pelabuhan tujuan pembeli.',
    ],
    [
        'code' => 'CFR',
        'name' => 'Cost and Freight',
        'risk' => 'Pelabuhan Muat Asal',
        'desc' => 'Biaya angkut laut ditanggung hingga pelabuhan tujuan. Pembeli menutup asuransi muatan secara mandiri.',
    ],
    [
        'code' => 'EXW',
        'name' => 'Ex Works / FCA',
        'risk' => 'Pintu Pabrik / Hub Forwarder',
        'desc' => 'Cocok bagi pembeli multinasional yang telah memiliki alokasi ruang langsung dengan operator pelayaran.',
    ],
    [
        'code' => 'DDP',
        'name' => 'Delivered Duty Paid',
        'risk' => 'Pintu Gudang Pembeli',
        'desc' => 'Solusi lengkap di mana seluruh biaya freight, bea masuk, pajak impor, dan truk lokal dikelola penuh.',
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
            'desc' => $t['desc'] ?? $t['description'] ?? $fallback['desc'],
        ];
    }
} else {
    $terms = $defaultTerms;
}
@endphp

<section id="incoterms" class="relative border-t border-white/10 bg-black py-24 text-white lg:py-32">
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

        {{-- 5-Column Incoterms Grid (Claude Unified 1px Border Pattern) --}}
        <div data-animate class="grid grid-cols-1 gap-px overflow-hidden rounded-3xl border border-white/10 bg-white/10 md:grid-cols-2 lg:grid-cols-5">
            @foreach($terms as $term)
                <div class="group flex flex-col justify-between bg-black p-6 transition-colors duration-300 hover:bg-neutral-950 sm:p-7">
                    <div>
                        {{-- Term Code Frame --}}
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 font-display text-lg font-black tracking-tight text-white transition-colors duration-300 group-hover:border-sky-400/50 group-hover:text-sky-300">
                            {{ $term['code'] }}
                        </div>

                        <h3 class="font-display text-base font-bold text-white">
                            {{ $term['name'] }}
                        </h3>

                        <p class="mt-2 text-sm leading-relaxed text-neutral-400">
                            {{ $term['desc'] }}
                        </p>
                    </div>

                    <div class="mt-6 border-t border-white/10 pt-4">
                        <span class="block text-xs font-semibold uppercase tracking-wider text-neutral-500">Titik risiko:</span>
                        <span class="mt-1 block text-sm font-semibold text-sky-300">{{ $term['risk'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

