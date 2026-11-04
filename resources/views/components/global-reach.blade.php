@props(['data' => []])

@php
$label = $data['label'] ?? 'Jaringan pelabuhan';
$headline = $data['headline'] ?? 'Koridor maritim & konektivitas pelabuhan dunia';
$description = $data['description'] ?? 'Kontrak keagenan resmi dan mitra pergudangan berikat kami menghubungkan arus komoditas secara langsung di pelabuhan tersibuk dunia.';
$home = $data['home'] ?? ['name' => 'Tanjung Priok', 'lat' => -6.10, 'lng' => 106.88];

// Setiap pelabuhan: [nama, lat, lng]. Jika 'ports' tidak diisi, 'countries' (teks) tetap tampil sebagai daftar, tanpa titik di peta.
$regions = $data['regions'] ?? [
['name' => 'Hub Asia Tenggara', 'badge' => 'Home Hub', 'icon' => 'anchor', 'ports' => [['Tanjung Priok (ID)', -6.10, 106.88], ['Port Klang (MY)', 3.00, 101.39], ['Jurong Port (SG)', 1.30, 103.70], ['Laem Chabang (TH)', 13.08, 100.90]]],
['name' => 'Koridor Asia Timur', 'badge' => 'Direct Liner', 'icon' => 'ship', 'ports' => [['Shanghai', 31.20, 121.50], ['Ningbo-Zhoushan', 29.90, 121.90], ['Busan', 35.10, 129.00], ['Yokohama', 35.40, 139.60], ['Kaohsiung', 22.60, 120.30]]],
['name' => 'Pelabuhan Utama Eropa', 'badge' => 'Trans-Oceanic', 'icon' => 'globe', 'ports' => [['Rotterdam (NL)', 51.95, 4.10], ['Antwerp-Bruges (BE)', 51.30, 4.40], ['Hamburg (DE)', 53.50, 9.97], ['Genoa (IT)', 44.40, 8.90]]],
['name' => 'Timur Tengah & Teluk', 'badge' => 'Gulf Transit', 'icon' => 'compass', 'ports' => [['Jebel Ali (Dubai)', 25.00, 55.00], ['Dammam', 26.50, 50.20], ['Hamad Port (Qatar)', 25.00, 51.60], ['Khalifa Port', 24.80, 54.60]]],
['name' => 'Amerika Utara & Selatan', 'badge' => 'Pacific & Atlantic', 'icon' => 'globe', 'ports' => [['Los Angeles / Long Beach', 33.75, -118.20], ['Houston', 29.70, -95.00], ['Santos (Brasil)', -23.95, -46.30], ['Manzanillo', 19.05, -104.30]]],
['name' => 'Afrika & Mediterania', 'badge' => 'Suez Corridor', 'icon' => 'anchor', 'ports' => [['Durban (Afrika Selatan)', -29.90, 31.00], ['Port Said (Mesir)', 31.25, 32.30], ['Mombasa', -4.05, 39.70], ['Tangier Med', 35.90, -5.50]]],
];

// Normalisasi: tiap wilayah punya _ports (bertitik di peta) dan _chips (nama untuk daftar)
$regions = array_values(array_map(function ($r) {
    $ports = $r['ports'] ?? [];
    $text = $r['countries'] ?? '';
    $text = is_array($text) ? implode(',', $text) : $text;
    $chips = $ports ? array_column($ports, 0) : array_values(array_filter(array_map('trim', explode(',', $text))));
    return $r + ['_ports' => $ports, '_chips' => $chips];
}, $regions));
$portTotal = array_sum(array_map(fn ($r) => count($r['_chips']), $regions));

// Proyeksi equirectangular: viewBox 1000 x 395 (lat 84 sampai -58)
$X = fn ($lng) => round(($lng + 180) * 1000 / 360, 1);
$Y = fn ($lat) => round((84 - $lat) * 1000 / 360, 1);
$toPath = function (string $s) use ($X, $Y) {
    $pts = array_map(fn ($p) => explode(',', $p), preg_split('/\s+/', trim($s)));
    return 'M' . implode('L', array_map(fn ($p) => $X($p[0]) . ' ' . $Y($p[1]), $pts)) . 'Z';
};

// Daratan disederhanakan (lng,lat). Elemen pertama = garis luar, sisanya = lubang (Laut Hitam, Kaspia)
$land = [
['-168,66 -157,71 -141,69.5 -125,70 -110,68 -95,71 -85,69 -82,66 -90,63 -94,59 -88,56 -82,55 -79,52 -78,58 -72,61 -65,60 -62,57 -56,52 -60,50 -66,50 -62,46 -66,44.5 -70,43.5 -74,40.5 -76,36 -81,31.5 -80,26 -83,27.5 -85,30 -90,29.5 -94,29.5 -97.5,26 -97.5,22 -95.5,19 -91,18.8 -90.5,21 -87,21.5 -88,16 -84,15.8 -83,11 -79.5,9.5 -77.5,8.5 -80,7.4 -85.5,10 -88,13.2 -92,14.5 -96,15.8 -101,17.5 -105.3,20.4 -106,23 -109.5,26.5 -114.7,31.7 -112,27 -110,23 -113,26 -115,29 -117,32.5 -120.5,34.5 -122,37 -124,40.5 -124,46.5 -124.7,48.4 -128,51 -131,54.5 -135,58 -141,60 -148,60.5 -152,59 -158,56.5 -164,54.8 -160,58.5 -165,62 -161,64 -166,64.5'],
['-73,78 -60,82 -35,83.5 -20,82 -18,76 -22,70 -32,68 -40,65 -43,60 -48,61 -53,66 -55,70 -60,76'],
['-120,74 -105,77.5 -85,77 -75,74 -80,70 -100,72'],
['-90,73 -78,73.5 -68,70 -62,66.5 -66,62.5 -75,64.5 -73,68 -85,70'],
['-77.5,8.5 -72,12 -63,10.5 -60,8.5 -52,5 -50,0 -44,-2.5 -35,-5.5 -35,-9 -39,-14 -39,-18 -41,-22 -45,-23.5 -48.5,-26 -49,-29 -53,-34 -57,-35 -57.5,-38 -62,-39 -65,-42 -64.5,-45 -67.5,-46.5 -66,-48 -69,-51 -68.5,-53 -71,-54.5 -74,-51 -75,-46 -73.5,-40 -72,-33 -71.5,-28 -70.3,-18 -76,-14 -81,-6 -80.5,-2 -80,0.5 -78.5,2 -77.5,6.5'],
['-17,21 -13,27.5 -9.5,30 -6,35.8 -2,35.2 3,36.8 10,37.3 11,33.5 15,32.3 20,31 24,32 30,31.3 32.5,30 35,24 37.3,19 39,15.5 43,12.5 51,12 51,10.5 47,4.5 41,-1.5 39.7,-5 40.5,-10.5 40.5,-15 35,-20 35.5,-24 32.8,-26 32.8,-28.5 31,-30 28,-33 25.7,-34 20,-34.8 18.4,-34 17.5,-30 15,-27 14,-22 11.8,-17 13.5,-12 13,-8 12,-5 9,-1 9.5,3.5 8,4.5 5,6 1.5,6 -2,5 -7.5,4.4 -12,7.5 -15,11 -17.2,14.7 -16.5,19'],
['49.3,-12 50.5,-15.5 47.5,-24.5 45,-25.5 43.3,-22 44.4,-16.5 47,-14.5'],
['-9,43 -9,37 -6,36.3 -2,36.7 0,38.7 3,42 6,43.2 9,44.3 12,42 15.5,40 15.8,38 17,39 16.5,40.5 18.5,40.2 16,41.5 14,42.5 12.5,44 13.5,45.7 14,44.5 16.5,43 19.5,41.5 21,38.5 23,36.5 24,38.5 23,40.5 26,40.8 29,41 27,36.7 30.5,36.3 36,36.5 35,33 34.3,31.3 34.9,29.5 36,27 39,21 42.5,16 43.5,12.7 45,12.8 52,16 56,17.8 59.5,22.5 56.5,24.5 56,26 54,24.2 51.5,24.5 51.5,26 50,26.5 48,29.5 50,30 52,27.5 56.5,27 57.5,25.5 61.5,25.2 66.5,25.4 70,21 72.8,20 73.5,16 76.5,9 78,8.3 80,10.5 80,15.5 82,17 86,20 87,21.5 90,22 92,20.5 94,18 94.5,16 97.5,16.5 98.5,13 98,8 100,6 101.5,3 103.5,1.5 103.5,4 102.5,6.5 100.5,9.5 99.5,11 100,13.5 102,12.5 103,10.8 105,8.6 106.5,10 109,11.5 108.5,15 106.5,17.5 106,20 108,21.5 110.5,21 113,22 117,23.5 120,26 122,30 121,32 119.5,34.5 122,37 119,37.5 118,39 121,40.5 122,40 124.5,39.8 126,37 126.5,34.5 129,35.2 129.5,37 128,39 130,42 133,43 138,47 140.5,50 141,52.5 137,54 140,54 143,59 150,59.5 155,59 156,57 156,51 158,53 162,56 163,59.5 170,60 179,62.5 180,65 180,69 170,70 160,69.5 150,71.5 140,72.5 130,71 125,73.5 113,73.8 105,77.5 100,76.5 95,76 87,75 80,73 70,73 65,69 55,68.5 44,68.5 41,66 34,66.5 33,69.2 25,71 20,70 15,68 12,65 8,62.5 5,60 6,58.2 10,59 11.5,58.5 13,55.4 16,56.2 18.5,60 17.5,62.5 21.5,65.5 25,65.5 22,63 21.5,61 23,60 30,60.2 28,59.5 24,59.3 23.5,57 21,56.2 19,54.5 14,54 10.5,54 8.5,57 8,54.5 5,53.2 3.5,51.3 1.5,50.9 -1.5,49.7 -4.5,48.5 -1.5,46 -1.5,43.5', '28,41.5 28.5,44 30,46 33,46 35,45 38,47 41.5,42 36,41.5 31,41.2', '47,45 49,46.5 53,45 51,41 54,37 50,37 49,39.5 47.5,42'],
['-5,50 1.5,51 1.7,52.8 -0.5,54.5 -2,56 -2,57.6 -3.5,58.6 -5,58.5 -6,56.5 -5,55 -3,54 -4.5,53.2 -5,51.7'],
['-10,52 -6,52.2 -6,54.2 -8.3,55 -10,54'],
['-24,65.5 -18,66.3 -13.5,65 -15,63.5 -22,63.5'],
['130.8,33.8 133,34.3 135,34 137,34.5 139.8,35 141,38 141.5,41.2 140,40 139.5,38 137,37 136,35.7 132.5,35.5'],
['129.8,33.5 131.8,33.5 131.5,31.2 130.2,31.2'],
['140,41.5 141.5,45.4 145.5,43.3 143,42 141.5,42.5'],
['120.2,22.5 121,25.2 121.9,24.5 120.9,22'],
['120,18.5 122.2,18.5 121.5,14.2 124,13 120.6,14.2 120,16'],
['95.3,5.6 98.7,3.8 103.5,-0.8 106,-3.2 105.7,-5.9 101.5,-3.5 98.5,0.5 95.5,3'],
['105.2,-6.8 108.5,-6.5 112.5,-6.9 114.5,-7.8 114.4,-8.7 108,-7.8 105.5,-7'],
['109,1.8 113,3.3 116.5,7 119.2,5.2 117.5,1 118.2,-0.5 116.5,-3.5 114.5,-4 111.5,-3.2 110,-1.8'],
['119.5,0.5 124.8,1.4 121.8,-0.9 123.2,-4.2 120.5,-5.6 119.4,-3.5'],
['131,-1 134,-0.8 138,-1.7 144.5,-3.7 148,-6.5 150.5,-10.5 147,-10 143,-9 141,-9 138,-8 137.5,-5 133,-4 132,-2.5'],
['113.5,-22 114,-26 115,-34 118,-35 123.5,-34 129,-31.7 131.5,-31.5 135.5,-34.8 138,-34.5 140,-38 144,-38.3 147,-38.5 150,-37 153,-31 153.5,-26 150,-22 146,-18.8 145.5,-14.5 143.5,-14 142.5,-10.8 141.5,-12.5 140.5,-17.5 136.8,-15.7 135.5,-12 132,-11.5 130,-12.5 129,-15 126,-14 123,-17 121,-19.5 117,-20.7'],
['172.7,-34.5 176,-37.5 178.5,-37.7 175.5,-41.5 174.8,-41 174.5,-39 173,-36'],
['172.7,-40.5 174.3,-41.7 171,-44.5 169,-46.5 166.5,-46 168,-44 171,-42'],
];

$hx = $X($home['lng']);
$hy = $Y($home['lat']);
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

        {{-- Peta jaringan --}}
        <div data-animate id="reach-net" class="overflow-hidden rounded-3xl border border-white/10 bg-neutral-950">

            <div class="relative">
                <svg viewBox="0 0 1000 395" class="block h-auto w-full" role="img" aria-label="Peta jaringan pelabuhan dunia dengan rute dari {{ $home['name'] }}">
                    <defs>
                        <pattern id="gn-dots" width="6.5" height="6.5" patternUnits="userSpaceOnUse">
                            <circle cx="3.25" cy="3.25" r="1.05" fill="#64748b" fill-opacity=".6" />
                        </pattern>
                        <radialGradient id="gn-glow" cx="55%" cy="50%" r="60%">
                            <stop offset="0" stop-color="#0369a1" stop-opacity=".28" />
                            <stop offset="1" stop-color="#000" stop-opacity="0" />
                        </radialGradient>
                    </defs>

                    <rect width="1000" height="395" fill="url(#gn-glow)" />

                    <g stroke="rgba(255,255,255,.05)" stroke-width="1">
                        @foreach (range(-150, 150, 30) as $g)
                        <line x1="{{ $X($g) }}" y1="0" x2="{{ $X($g) }}" y2="395" />
                        @endforeach
                        @foreach ([60, 30, 0, -30] as $g)
                        <line x1="0" y1="{{ $Y($g) }}" x2="1000" y2="{{ $Y($g) }}" />
                        @endforeach
                    </g>

                    {{-- Daratan --}}
                    <g fill="url(#gn-dots)" fill-rule="evenodd">
                        @foreach ($land as $shapes)
                        <path d="{{ implode('', array_map($toPath, $shapes)) }}" />
                        @endforeach
                    </g>

                    {{-- Rute dari home hub --}}
                    @foreach ($regions as $i => $r)
                    @foreach ($r['_ports'] as $p)
                    @php
                    $bx = $X($p[2]);
                    $by = $Y($p[1]);
                    $wrap = 0;
                    if ($bx - $hx < -500) { $bx += 1000; $wrap = -1000; } elseif ($bx - $hx > 500) { $bx -= 1000; $wrap = 1000; }
                    $dist = hypot($bx - $hx, $by - $hy);
                    $arc = 'M' . $hx . ' ' . $hy . 'Q' . round(($hx + $bx) / 2, 1) . ' ' . round(($hy + $by) / 2 - min($dist * 0.3, 110), 1) . ' ' . $bx . ' ' . $by;
                    @endphp
                    @continue($dist < 3)
                    <path class="gn-arc {{ $i === 0 ? 'is-active' : '' }}" data-region="{{ $i }}" d="{{ $arc }}" />
                    @if ($wrap)
                    <path class="gn-arc {{ $i === 0 ? 'is-active' : '' }}" data-region="{{ $i }}" d="{{ $arc }}" transform="translate({{ $wrap }} 0)" />
                    @endif
                    @endforeach
                    @endforeach

                    {{-- Titik pelabuhan + nama wilayah --}}
                    @foreach ($regions as $i => $r)
                    @foreach ($r['_ports'] as $p)
                    @continue(abs($X($p[2]) - $hx) < 1 && abs($Y($p[1]) - $hy) < 1)
                    <g class="gn-node {{ $i === 0 ? 'is-active' : '' }}" data-region="{{ $i }}">
                        <circle class="gn-halo" cx="{{ $X($p[2]) }}" cy="{{ $Y($p[1]) }}" r="3.5" />
                        <circle class="gn-dot" cx="{{ $X($p[2]) }}" cy="{{ $Y($p[1]) }}" r="2.4"><title>{{ $p[0] }}</title></circle>
                    </g>
                    @endforeach
                    @if ($r['_ports'])
                    @php
                    $lx = round(array_sum(array_map(fn ($p) => $X($p[2]), $r['_ports'])) / count($r['_ports']), 1);
                    $ly = max(min(array_map(fn ($p) => $Y($p[1]), $r['_ports'])) - 12, 12);
                    @endphp
                    <text class="gn-label {{ $i === 0 ? 'is-active' : '' }}" data-region="{{ $i }}" x="{{ $lx }}" y="{{ $ly }}" text-anchor="middle" font-size="11" font-weight="600" fill="#e0f2fe" stroke="#000" stroke-width="3" paint-order="stroke">{{ $r['name'] ?? '' }}</text>
                    @endif
                    @endforeach

                    {{-- Home hub --}}
                    <g>
                        <circle class="gn-home-ring" cx="{{ $hx }}" cy="{{ $hy }}" r="4" />
                        <circle class="gn-home-ring" cx="{{ $hx }}" cy="{{ $hy }}" r="4" style="animation-delay:1.4s" />
                        <circle cx="{{ $hx }}" cy="{{ $hy }}" r="4" fill="#38bdf8"><title>{{ $home['name'] }} (Home hub)</title></circle>
                        <circle cx="{{ $hx }}" cy="{{ $hy }}" r="1.5" fill="#fff" />
                    </g>
                </svg>

                <div class="pointer-events-none absolute left-5 top-5 hidden gap-8 sm:flex lg:left-8 lg:top-7">
                    <div>
                        <p class="font-display text-3xl font-extrabold text-white">{{ count($regions) }}</p>
                        <p class="text-sm text-neutral-400">koridor aktif</p>
                    </div>
                    <div>
                        <p class="font-display text-3xl font-extrabold text-white">{{ $portTotal }}</p>
                        <p class="text-sm text-neutral-400">pelabuhan mitra</p>
                    </div>
                </div>

                <div class="pointer-events-none absolute bottom-4 left-5 hidden items-center gap-5 text-xs text-neutral-400 sm:flex lg:bottom-6 lg:left-8">
                    <span class="flex items-center gap-2"><span class="h-2.5 w-2.5 rounded-full bg-sky-400 ring-4 ring-sky-400/20"></span>Home hub: {{ $home['name'] }}</span>
                    <span class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-sky-100"></span>Pelabuhan mitra</span>
                    <span class="flex items-center gap-2"><span class="w-5 border-t border-dashed border-sky-300"></span>Rute pelayaran</span>
                </div>
            </div>

            {{-- Detail koridor aktif --}}
            <div class="border-t border-white/10 px-5 py-5 lg:px-8">
                @foreach ($regions as $i => $r)
                <div data-panel="{{ $i }}" class="{{ $i === 0 ? '' : 'hidden' }} flex flex-col gap-4 lg:flex-row lg:items-center lg:justify-between lg:gap-8">
                    <div class="flex shrink-0 items-center gap-3">
                        <span class="inline-flex items-center rounded-full border border-sky-400/40 px-3 py-1 text-xs font-medium text-sky-300">{{ $r['badge'] ?? 'Verified port' }}</span>
                        <h3 class="text-lg font-bold text-white sm:text-xl">{{ $r['name'] ?? '' }}</h3>
                    </div>
                    <ul class="flex flex-wrap gap-2 lg:justify-end">
                        @foreach ($r['_chips'] as $chip)
                        <li class="rounded-full border border-white/10 bg-white/[0.03] px-3 py-1 text-sm text-neutral-300">{{ $chip }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>

            {{-- Pilih koridor --}}
            <div class="grid grid-cols-2 gap-px border-t border-white/10 bg-white/10 sm:grid-cols-3 lg:grid-cols-6">
                @foreach ($regions as $i => $r)
                <button type="button" data-btn="{{ $i }}" aria-pressed="{{ $i === 0 ? 'true' : 'false' }}" class="relative flex items-start gap-3 p-4 text-left transition-colors duration-300 hover:bg-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:-outline-offset-2 focus-visible:outline-sky-400 lg:p-5">
                    <span class="gn-bar absolute inset-x-0 top-0 h-px origin-left bg-sky-400"></span>
                    <span class="gn-ico flex h-9 w-9 shrink-0 items-center justify-center rounded-lg border border-white/10 text-neutral-400 transition-colors duration-300">
                        <x-icon :name="$r['icon'] ?? 'globe'" class="h-4 w-4" />
                    </span>
                    <span class="min-w-0">
                        <span class="block text-sm font-semibold leading-snug text-white">{{ $r['name'] ?? '' }}</span>
                        <span class="mt-0.5 block text-xs text-neutral-500">{{ count($r['_chips']) }} pelabuhan</span>
                    </span>
                </button>
                @endforeach
            </div>
        </div>

        <p data-animate class="mt-6 flex items-center gap-2 text-sm text-neutral-500">
            <x-icon name="badge-check" class="h-4 w-4 text-sky-300" />
            Seluruh koridor didukung alokasi ruang kontainer aktif dengan direct berth.
        </p>

    </div>

    <style>
        #reach-net .gn-arc { fill: none; stroke: rgba(56, 189, 248, .16); stroke-width: .9; transition: stroke .4s; }
        #reach-net .gn-arc.is-active { stroke: #7dd3fc; stroke-width: 1.5; stroke-dasharray: 5 5; animation: gn-flow 1s linear infinite; filter: drop-shadow(0 0 3px rgba(56, 189, 248, .8)); }
        #reach-net .gn-dot { fill: #475569; transition: fill .3s; }
        #reach-net .gn-node.is-active .gn-dot { fill: #e0f2fe; }
        #reach-net .gn-halo { fill: none; stroke: #38bdf8; stroke-width: 1; opacity: 0; transform-box: fill-box; transform-origin: center; pointer-events: none; }
        #reach-net .gn-node.is-active .gn-halo { animation: gn-ping 2.2s ease-out infinite; }
        #reach-net .gn-home-ring { fill: none; stroke: #38bdf8; stroke-width: 1.2; transform-box: fill-box; transform-origin: center; pointer-events: none; animation: gn-ping 2.8s ease-out infinite; }
        #reach-net .gn-label { opacity: 0; transition: opacity .3s; pointer-events: none; }
        #reach-net .gn-label.is-active { opacity: 1; }
        #reach-net [data-btn][aria-pressed="true"] { background: rgba(56, 189, 248, .09); }
        #reach-net [data-btn]:not([aria-pressed="true"]) { background: #0a0a0a; }
        #reach-net [data-btn][aria-pressed="true"] .gn-ico { border-color: rgba(56, 189, 248, .5); color: #7dd3fc; }
        #reach-net .gn-bar { transform: scaleX(0); transition: transform .4s; }
        #reach-net [data-btn][aria-pressed="true"] .gn-bar { transform: scaleX(1); }
        @keyframes gn-flow { to { stroke-dashoffset: -10; } }
        @keyframes gn-ping { 0% { transform: scale(.5); opacity: .9; } 100% { transform: scale(2.6); opacity: 0; } }
        @media (max-width: 640px) { #reach-net .gn-label { display: none; } }
        @media (prefers-reduced-motion: reduce) {
            #reach-net .gn-arc.is-active, #reach-net .gn-node.is-active .gn-halo, #reach-net .gn-home-ring { animation: none; }
            #reach-net .gn-node.is-active .gn-halo { opacity: .6; }
        }
    </style>

    <script>
        (function () {
            var root = document.getElementById('reach-net');
            if (!root) return;
            var items = root.querySelectorAll('[data-region]');
            var btns = root.querySelectorAll('[data-btn]');
            var panels = root.querySelectorAll('[data-panel]');
            var n = btns.length, cur = 0, timer = null;
            var reduce = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;

            function set(i) {
                cur = i;
                items.forEach(function (el) { el.classList.toggle('is-active', +el.getAttribute('data-region') === i); });
                btns.forEach(function (b) { b.setAttribute('aria-pressed', +b.getAttribute('data-btn') === i ? 'true' : 'false'); });
                panels.forEach(function (p) { p.classList.toggle('hidden', +p.getAttribute('data-panel') !== i); });
            }
            function stop() { clearInterval(timer); timer = null; }
            function play() {
                if (reduce || n < 2 || timer) return;
                timer = setInterval(function () { set((cur + 1) % n); }, 5000);
            }

            btns.forEach(function (b) {
                var i = +b.getAttribute('data-btn');
                b.addEventListener('mouseenter', function () { stop(); set(i); });
                b.addEventListener('focus', function () { stop(); set(i); });
                b.addEventListener('click', function () { stop(); set(i); });
            });
            root.addEventListener('mouseenter', stop);
            root.addEventListener('mouseleave', play);
            play();
        })();
    </script>
</section>