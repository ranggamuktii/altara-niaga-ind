@props(['data' => []])

@php
$defaultStats = [
    ['value' => '40+',    'label' => 'Jaringan Pelabuhan Dunia',    'icon' => 'globe'],
    ['value' => '250K+',  'label' => 'Metrik Ton Komoditas',         'icon' => 'ship'],
    ['value' => '100%',   'label' => 'Kepatuhan Jalur Hijau AEO',   'icon' => 'shield-check'],
    ['value' => '≤ 24 Jam','label' => 'Respon Penawaran RFQ',        'icon' => 'clock'],
];

$rawItems = !empty($data['items']) ? $data['items'] : [];
$statIcons = ['globe', 'ship', 'shield-check', 'clock'];
$items = [];

if (!empty($rawItems)) {
    foreach ($rawItems as $idx => $item) {
        $fallback = $defaultStats[$idx % count($defaultStats)];
        $items[] = [
            'value' => $item['value'] ?? $fallback['value'],
            'label' => $item['label'] ?? $fallback['label'],
            'icon'  => $item['icon'] ?? $statIcons[$idx % count($statIcons)],
        ];
    }
} else {
    $items = $defaultStats;
}
@endphp

<section class="relative border-t border-white/[0.08] bg-black py-20 text-white lg:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div data-animate class="grid grid-cols-2 gap-6 sm:gap-8 lg:grid-cols-4">
            @foreach($items as $item)
                <div class="group flex flex-col items-center text-center">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 text-sky-300 transition-colors duration-300 group-hover:border-sky-400/50">
                        <x-icon :name="$item['icon']" class="h-5 w-5 text-sky-300" />
                    </div>
                    <span class="font-display block text-3xl font-extrabold tracking-tight text-white transition-colors duration-200 group-hover:text-sky-200 sm:text-4xl lg:text-5xl [font-stretch:112%]">
                        {{ $item['value'] }}
                    </span>
                    <span class="mt-2 block text-xs font-medium text-neutral-400 sm:text-sm">
                        {{ $item['label'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>

