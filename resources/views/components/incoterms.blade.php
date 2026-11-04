@props(['data' => []])

@php
$label = $data['label'] ?? 'Standar Kontrak';
$headline = $data['headline'] ?? 'Kerangka Incoterms® 2020';
$description = $data['description'] ?? 'Transparansi penetapan pembagian biaya angkut, asuransi, dan titik peralihan risiko berstandar ICC.';

// Urut dari beban penjual paling ringan ke paling berat
$defaultTerms = [
    ['code' => 'EXW', 'name' => 'Ex Works', 'risk' => 'Gudang penjual', 'desc' => 'Barang diserahkan di gudang penjual. Pembeli mengurus semua pengangkutan, termasuk izin ekspor.'],
    ['code' => 'FOB', 'name' => 'Free On Board', 'risk' => 'Atas kapal di pelabuhan asal', 'desc' => 'Penjual memuat barang ke kapal. Pembeli menanggung freight laut dan semua biaya setelahnya.'],
    ['code' => 'CFR', 'name' => 'Cost and Freight', 'risk' => 'Atas kapal di pelabuhan asal', 'desc' => 'Penjual membayar freight laut sampai pelabuhan tujuan. Asuransi ditutup pembeli.'],
    ['code' => 'CIF', 'name' => 'Cost, Insurance & Freight', 'risk' => 'Atas kapal di pelabuhan asal', 'desc' => 'Seperti CFR, ditambah asuransi laut dari penjual. Risiko tetap beralih di atas kapal.'],
    ['code' => 'DDP', 'name' => 'Delivered Duty Paid', 'risk' => 'Gudang pembeli', 'desc' => 'Penjual menanggung semuanya, termasuk bea masuk dan pajak, sampai gudang pembeli.'],
];

// Profil perjalanan per kode. legs = penanggung biaya: [darat asal, laut, darat tujuan] (s = penjual, b = pembeli)
// at = posisi titik risiko di jalur (% dari kiri). Kode yang tidak ada di sini tetap tampil, tanpa jalur.
$profiles = [
    'EXW' => ['legs' => ['b', 'b', 'b'], 'at' => 0, 'mode' => 'Semua moda angkutan'],
    'FOB' => ['legs' => ['s', 'b', 'b'], 'at' => 28, 'mode' => 'Khusus angkutan laut'],
    'CFR' => ['legs' => ['s', 's', 'b'], 'at' => 28, 'mode' => 'Khusus angkutan laut'],
    'CIF' => ['legs' => ['s', 's', 'b'], 'at' => 28, 'mode' => 'Khusus angkutan laut', 'ins' => true],
    'DDP' => ['legs' => ['s', 's', 's'], 'at' => 100, 'mode' => 'Semua moda angkutan'],
];
$who = ['s' => 'Penjual', 'b' => 'Pembeli'];

$byCode = array_column($defaultTerms, null, 'code');
$terms = [];
foreach (!empty($data['terms']) ? $data['terms'] : $defaultTerms as $t) {
    $fallback = $byCode[strtoupper($t['code'] ?? '')] ?? ['code' => '', 'name' => '', 'risk' => '', 'desc' => ''];
    $terms[] = [
        'code' => $t['code'] ?? $fallback['code'],
        'name' => $t['name'] ?? $fallback['name'],
        'risk' => $t['risk_point'] ?? $t['risk'] ?? $fallback['risk'],
        'desc' => $t['description'] ?? $t['desc'] ?? $fallback['desc'],
    ];
}
@endphp

<section id="incoterms">
    <div class="ic-wrap">

        {{-- Header --}}
        <div data-animate class="ic-head">
            <div>
                <p class="ic-label">{{ $label }}</p>
                <h2 class="ic-title font-display">{{ $headline }}</h2>
            </div>
            <p class="ic-lead">{{ $description }}</p>
        </div>

        {{-- Cara membaca --}}
        <div data-animate class="ic-legend">
            <span><i class="ic-sw ic-sw-s"></i>Biaya ditanggung penjual</span>
            <span><i class="ic-sw ic-sw-b"></i>Biaya ditanggung pembeli</span>
            <span><i class="ic-dia"></i>Risiko beralih ke pembeli</span>
        </div>

        {{-- Sumbu perjalanan kiriman (desktop) --}}
        <div class="ic-axis">
            <p class="ic-k ic-c3">Istilah</p>
            <div class="ic-axis-track ic-c6">
                <span class="ic-ax" style="left:0">Gudang penjual</span>
                <span class="ic-ax" style="left:28%;transform:translateX(-50%)">Pelabuhan asal</span>
                <span class="ic-ax" style="left:72%;transform:translateX(-50%)">Pelabuhan tujuan</span>
                <span class="ic-ax" style="right:0">Gudang pembeli</span>
                <span class="ic-axis-line"></span>
                @foreach ([0, 28, 72, 100] as $stop)
                <span class="ic-axis-dot" style="left:{{ $stop }}%"></span>
                @endforeach
            </div>
            <p class="ic-k ic-c3">Risiko beralih di</p>
        </div>

        {{-- Satu istilah per baris --}}
        <ul data-animate class="ic-list">
            @foreach ($terms as $t)
            @php $pf = $profiles[strtoupper($t['code'])] ?? null; @endphp
            <li class="ic-row">

                <div class="ic-c3">
                    <p class="ic-code font-display">{{ $t['code'] }}</p>
                    <h3 class="ic-name">{{ $t['name'] }}</h3>
                    @if ($pf)
                    <p class="ic-mode">{{ $pf['mode'] }}</p>
                    @endif
                </div>

                <div class="ic-c6">
                    @if ($pf)
                    <div class="ic-track">
                        <div class="ic-legs">
                            @foreach ($pf['legs'] as $k => $side)
                            <div class="ic-leg ic-leg-{{ $side }}">{{ $who[$side] }}@if ($k === 1 && $side === 's' && !empty($pf['ins'])) + asuransi @endif</div>
                            @endforeach
                        </div>
                        <span class="ic-mark" style="left:{{ $pf['at'] }}%" aria-hidden="true"></span>
                        <span class="ic-sr">Risiko beralih di {{ $t['risk'] }}</span>
                    </div>
                    <div class="ic-legnames">
                        <span>Asal</span><span>Pelayaran laut</span><span>Tujuan</span>
                    </div>
                    @endif
                </div>

                <div class="ic-c3">
                    <p class="ic-k ic-k-m">Risiko beralih di</p>
                    <p class="ic-risk">{{ $t['risk'] }}</p>
                    <p class="ic-desc">{{ $t['desc'] }}</p>
                </div>
            </li>
            @endforeach
        </ul>

        <div data-animate class="ic-note">
            <p>Perhatikan CFR dan CIF: biaya ditanggung penjual sampai pelabuhan tujuan, tetapi risiko sudah beralih saat barang berada di atas kapal di pelabuhan asal.</p>
            <p class="ic-note-row">
                <x-icon name="badge-check" class="ic-ico" />
                <span>Pembagian bersifat umum menurut aturan ICC; biaya terminal dan dokumen dapat berbeda sesuai kontrak pengangkutan.</span>
            </p>
        </div>

    </div>

    {{-- CSS komponen ini berdiri sendiri: tidak perlu rebuild Tailwind --}}
    <style>
        #incoterms, #incoterms *, #incoterms *::before, #incoterms *::after { box-sizing: border-box; }
        #incoterms { position: relative; background: #000; color: #fff; border-top: 1px solid rgba(255,255,255,.1); padding: 96px 0; }
        #incoterms p, #incoterms h2, #incoterms h3, #incoterms ul { margin: 0; padding: 0; }
        #incoterms .ic-wrap { max-width: 80rem; margin: 0 auto; padding: 0 24px; }

        #incoterms .ic-head { display: grid; gap: 32px; margin-bottom: 40px; }
        #incoterms .ic-label { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; font-size: 14px; font-weight: 500; color: #a3a3a3; }
        #incoterms .ic-label::before { content: ""; width: 40px; height: 1px; background: #38bdf8; }
        #incoterms .ic-title { font-size: 30px; line-height: 1.1; font-weight: 800; letter-spacing: -.025em; font-stretch: 112%; color: #fff; }
        #incoterms .ic-lead { font-size: 16px; line-height: 1.625; color: #a3a3a3; }

        #incoterms .ic-legend { display: flex; flex-wrap: wrap; gap: 8px 24px; margin-bottom: 32px; font-size: 14px; color: #a3a3a3; }
        #incoterms .ic-legend span { display: flex; align-items: center; gap: 8px; }
        #incoterms .ic-sw { display: block; width: 24px; height: 12px; border-radius: 3px; }
        #incoterms .ic-sw-s { background: #38bdf8; }
        #incoterms .ic-sw-b { border: 1px dashed rgba(255,255,255,.3); }
        #incoterms .ic-dia { display: block; width: 10px; height: 10px; background: #fff; transform: rotate(45deg); }

        #incoterms .ic-axis { display: none; }
        #incoterms .ic-list { list-style: none; border-top: 1px solid rgba(255,255,255,.1); }
        #incoterms .ic-row { display: grid; gap: 20px; padding: 28px 0; border-bottom: 1px solid rgba(255,255,255,.1); transition: background .3s; }
        #incoterms .ic-row:hover { background: rgba(255,255,255,.03); }

        #incoterms .ic-code { font-size: 36px; line-height: 1; font-weight: 800; letter-spacing: -.025em; font-stretch: 112%; color: #fff; }
        #incoterms .ic-name { margin-top: 8px; font-size: 14px; font-weight: 500; color: #d4d4d4; }
        #incoterms .ic-mode { margin-top: 4px; font-size: 12px; color: #737373; }

        #incoterms .ic-track { position: relative; margin: 0 8px; padding: 18px 0; }
        #incoterms .ic-legs { display: grid; grid-template-columns: 28fr 44fr 28fr; gap: 4px; height: 40px; }
        #incoterms .ic-leg { display: flex; align-items: center; justify-content: center; padding: 0 4px; border-radius: 6px; text-align: center; font-size: 12px; font-weight: 600; line-height: 1.2; }
        #incoterms .ic-leg-s { background: #38bdf8; color: #000; }
        #incoterms .ic-leg-b { border: 1px dashed rgba(255,255,255,.2); color: #737373; }
        #incoterms .ic-mark { position: absolute; top: 0; bottom: 0; width: 2px; margin-left: -1px; background: #fff; box-shadow: 0 0 0 1px #000; pointer-events: none; }
        #incoterms .ic-mark::before { content: ""; position: absolute; top: 0; left: 50%; width: 12px; height: 12px; background: #fff; transform: translateX(-50%) rotate(45deg); box-shadow: 0 0 0 3px #000; }
        #incoterms .ic-legnames { display: grid; grid-template-columns: 28fr 44fr 28fr; gap: 4px; margin: 0 8px; text-align: center; font-size: 11px; color: #737373; }

        #incoterms .ic-k { font-size: 12px; color: #737373; }
        #incoterms .ic-risk { margin-top: 2px; font-size: 14px; font-weight: 600; color: #fff; transition: color .3s; }
        #incoterms .ic-row:hover .ic-risk { color: #7dd3fc; }
        #incoterms .ic-desc { margin-top: 8px; font-size: 14px; line-height: 1.6; color: #a3a3a3; }

        #incoterms .ic-note { display: grid; gap: 8px; margin-top: 24px; font-size: 14px; line-height: 1.6; color: #737373; }
        #incoterms .ic-note-row { display: flex; align-items: flex-start; gap: 8px; }
        #incoterms .ic-ico { flex: none; width: 16px; height: 16px; margin-top: 3px; color: #7dd3fc; }
        #incoterms .ic-sr { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0 0 0 0); white-space: nowrap; }

        @media (min-width: 640px) {
            #incoterms .ic-title { font-size: 36px; }
            #incoterms .ic-lead { font-size: 18px; }
        }
        @media (min-width: 1024px) {
            #incoterms { padding: 128px 0; }
            #incoterms .ic-wrap { padding: 0 32px; }
            #incoterms .ic-title { font-size: 48px; }
            #incoterms .ic-head { grid-template-columns: repeat(12, 1fr); align-items: end; margin-bottom: 48px; }
            #incoterms .ic-head > div { grid-column: span 7; }
            #incoterms .ic-head > p { grid-column: span 5; }

            #incoterms .ic-axis { display: grid; grid-template-columns: repeat(12, 1fr); gap: 32px; align-items: end; padding: 0 24px 16px; }
            #incoterms .ic-axis-track { position: relative; height: 36px; margin: 0 8px; font-size: 12px; color: #a3a3a3; }
            #incoterms .ic-ax { position: absolute; top: 0; white-space: nowrap; }
            #incoterms .ic-axis-line { position: absolute; left: 0; right: 0; bottom: 3px; height: 1px; background: rgba(255,255,255,.15); }
            #incoterms .ic-axis-dot { position: absolute; bottom: 0; width: 8px; height: 8px; margin-left: -4px; border-radius: 50%; background: #737373; }

            #incoterms .ic-row { grid-template-columns: repeat(12, 1fr); align-items: center; gap: 32px; padding: 28px 24px; }
            #incoterms .ic-c3 { grid-column: span 3; }
            #incoterms .ic-c6 { grid-column: span 6; }
            #incoterms .ic-legnames, #incoterms .ic-k-m { display: none; }
            #incoterms .ic-risk { margin-top: 0; }
        }
    </style>
</section>