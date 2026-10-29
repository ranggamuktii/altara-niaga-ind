@props(['data' => []])

@php
$label = $data['label'] ?? 'Jaringan pelabuhan';
$headline = $data['headline'] ?? 'Koridor maritim & konektivitas pelabuhan dunia';
$description = $data['description'] ?? 'Kontrak keagenan resmi dan mitra pergudangan berikat kami menghubungkan arus komoditas secara langsung di pelabuhan tersibuk dunia.';
$regions = $data['regions'] ?? [
['name' => 'Hub Asia Tenggara', 'badge' => 'Home Hub', 'icon' => 'anchor', 'countries' => 'Tanjung Priok (ID), Port Klang (MY), Jurong Port (SG), Laem Chabang (TH)'],
['name' => 'Koridor Asia Timur', 'badge' => 'Direct Liner', 'icon' => 'ship', 'countries' => 'Shanghai, Ningbo-Zhoushan, Busan, Yokohama, Kaohsiung'],
['name' => 'Pelabuhan Utama Eropa', 'badge' => 'Trans-Oceanic', 'icon' => 'globe', 'countries' => 'Rotterdam (NL), Antwerp-Bruges (BE), Hamburg (DE), Genoa (IT)'],
['name' => 'Timur Tengah & Teluk', 'badge' => 'Gulf Transit', 'icon' => 'compass', 'countries' => 'Jebel Ali (Dubai), Dammam, Hamad Port (Qatar), Khalifa Port'],
['name' => 'Amerika Utara & Selatan', 'badge' => 'Pacific & Atlantic', 'icon' => 'globe', 'countries' => 'Los Angeles / Long Beach, Houston, Santos (Brasil), Manzanillo'],
['name' => 'Afrika & Mediterania', 'badge' => 'Suez Corridor', 'icon' => 'anchor', 'countries' => 'Durban (Afrika Selatan), Port Said (Mesir), Mombasa, Tangier Med'],
];
@endphp

<section id="reach" class="relative border-t border-white/10 bg-black py-24 text-white lg:py-32">
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

        {{-- Daftar koridor: satu wilayah per baris, seperti jadwal pelayaran --}}
        <ul data-animate class="border-t border-white/10">
            @foreach ($regions as $region)
            @php
            $ports = $region['countries'] ?? '';
            $ports = is_array($ports) ? implode(', ', $ports) : $ports;
            @endphp
            <li class="group grid gap-4 border-b border-white/10 py-7 transition-colors duration-300 hover:bg-white/[0.03] lg:grid-cols-12 lg:items-center lg:gap-8 lg:px-6">
                <div class="flex items-center gap-4 lg:col-span-4">
                    <span class="flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-xl border border-white/10 bg-neutral-950 text-sky-300 transition-colors duration-300 group-hover:border-sky-400/50">
                        <x-icon :name="$region['icon'] ?? 'globe'" class="h-5 w-5 text-sky-300" />
                    </span>
                    <h3 class="text-lg font-bold text-white sm:text-xl">{{ $region['name'] ?? '' }}</h3>
                </div>

                <p class="text-base leading-relaxed text-neutral-400 transition-colors duration-300 group-hover:text-neutral-200 lg:col-span-6">
                    {{ $ports }}
                </p>

                <div class="lg:col-span-2 lg:text-right">
                    <span class="inline-flex items-center rounded-full border border-white/10 px-3 py-1 text-xs font-medium text-neutral-300 transition-colors duration-300 group-hover:border-sky-400/40 group-hover:text-sky-300">
                        {{ $region['badge'] ?? 'Verified port' }}
                    </span>
                </div>
            </li>
            @endforeach
        </ul>

        <p data-animate class="mt-6 flex items-center gap-2 text-sm text-neutral-500">
            <x-icon name="badge-check" class="h-4 w-4 text-sky-300" />
            Seluruh koridor didukung alokasi ruang kontainer aktif dengan direct berth.
        </p>

    </div>
</section>