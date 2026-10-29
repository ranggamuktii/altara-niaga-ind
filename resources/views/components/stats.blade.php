@props(['data' => []])

@php
$defaultStats = [
    ['value' => '40+',    'label' => 'Jaringan pelabuhan internasional', 'icon' => 'globe'],
    ['value' => '250K+',  'label' => 'Metrik ton komoditas terkirim',    'icon' => 'ship'],
    ['value' => '100%',   'label' => 'Kepatuhan kepabeanan jalur hijau', 'icon' => 'shield-check'],
    ['value' => '24 Jam', 'label' => 'Respon cepat kuotasi RFQ dagang',  'icon' => 'clock'],
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

<section class="relative border-t border-white/10 bg-black py-20 text-white lg:py-28">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div data-animate class="grid grid-cols-2 gap-px overflow-hidden rounded-3xl border border-white/10 bg-white/10 lg:grid-cols-4">
            @foreach($items as $item)
                <div class="group flex flex-col items-center justify-center bg-black p-6 text-center transition-colors duration-300 hover:bg-neutral-950 sm:p-10">
                    <div class="mb-5 flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-neutral-950 text-sky-300 transition-colors duration-300 group-hover:border-sky-400/50">
                        <x-icon :name="$item['icon']" class="h-6 w-6 text-sky-300" />
                    </div>
                    <span class="font-display block text-3xl font-extrabold tracking-tight text-white [font-stretch:112%] sm:text-5xl lg:text-6xl">
                        {{ $item['value'] }}
                    </span>
                    <span class="mt-2.5 block text-sm font-medium text-neutral-400 sm:text-base">
                        {{ $item['label'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>

