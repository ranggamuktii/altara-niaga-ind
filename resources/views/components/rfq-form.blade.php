@props(['company' => [], 'data' => []])

@php
$tradeTypes = $data['trade_types'] ?? [
    'export' => 'Ekspor',
    'import' => 'Impor',
    'freight_only' => 'Freight',
    'consulting' => 'Konsultasi',
];
$incoterms = $data['incoterms_options'] ?? ['FOB', 'CIF', 'CFR', 'EXW', 'DDP'];
$divisions = $data['commodity_divisions'] ?? [
    'Agrikultur, Rempah & Bahan Makanan',
    'Mineral, Logam & Energi',
    'Bahan Kimia & Bio-Industri',
    'Produk Manufaktur & Komponen Industri',
    'Komoditas Khusus Lainnya',
];
$email = $company['email'] ?? 'trade-desk@altaraniaga.com';
$phone = $company['phone'] ?? '+62 21 5088 9200';
$address = $company['address'] ?? 'SCBD Jakarta Selatan';
@endphp

<section id="rfq">
    <div class="rfq-wrap">
        <div class="rfq-grid">

            {{-- Kiri: pengantar + kontak --}}
            <div data-animate class="rfq-side">
                <p class="rfq-label">{{ $data['label'] ?? 'Permintaan Penawaran (RFQ)' }}</p>
                <h2 class="rfq-title font-display">{{ $data['headline'] ?? 'Konsultasikan Kargo Anda' }}</h2>
                <p class="rfq-lead">{{ $data['description'] ?? 'Sampaikan kebutuhan pengapalan Anda. Tim trade desk kami merespons dalam 1x24 jam kerja.' }}</p>

                <dl class="rfq-contact">
                    <div><dt>Email</dt><dd><a href="mailto:{{ $email }}">{{ $email }}</a></dd></div>
                    <div><dt>Telepon</dt><dd><a href="tel:{{ preg_replace('/[^\d+]/', '', $phone) }}">{{ $phone }}</a></dd></div>
                    <div><dt>Alamat</dt><dd>{{ $address }}</dd></div>
                </dl>
            </div>

            {{-- Kanan: form --}}
            <div data-animate class="rfq-card">
                @if (session('success'))
                <div class="rfq-alert rfq-ok">
                    <strong>Permintaan penawaran berhasil dikirim</strong>
                    {{ session('success') }}
                </div>
                @endif

                @if (isset($errors) && $errors->any())
                <div class="rfq-alert rfq-err">
                    <strong>Periksa kembali data formulir</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('inquiry.store') }}" method="POST" class="rfq-form">
                    @csrf

                    <div class="rfq-full">
                        <span class="rfq-lbl">Jenis transaksi <i class="rfq-req">*</i></span>
                        <div class="rfq-seg">
                            @foreach ($tradeTypes as $key => $tradeLabel)
                            <label>
                                <input type="radio" name="trade_type" value="{{ $key }}" {{ old('trade_type', 'export') === $key ? 'checked' : '' }}>
                                <span class="rfq-opt">{{ $tradeLabel }}</span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="rfq-field">
                        <label for="name" class="rfq-lbl">Nama lengkap <i class="rfq-req">*</i></label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Budi Santoso" class="rfq-in">
                    </div>
                    <div class="rfq-field">
                        <label for="email" class="rfq-lbl">Email korporat <i class="rfq-req">*</i></label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="budi@perusahaan.com" class="rfq-in">
                    </div>
                    <div class="rfq-field">
                        <label for="company_name" class="rfq-lbl">Nama perusahaan</label>
                        <input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}" placeholder="PT / CV Perusahaan" class="rfq-in">
                    </div>
                    <div class="rfq-field">
                        <label for="phone" class="rfq-lbl">Telepon / WhatsApp</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" placeholder="+62 812 3456 7890" class="rfq-in">
                    </div>

                    <hr class="rfq-sep rfq-full">

                    <div class="rfq-field">
                        <label for="commodity_division" class="rfq-lbl">Komoditas</label>
                        <select name="commodity_division" id="commodity_division" class="rfq-in">
                            <option value="">Pilih komoditas</option>
                            @foreach ($divisions as $div)
                            <option value="{{ $div }}" {{ old('commodity_division') === $div ? 'selected' : '' }}>{{ $div }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="rfq-field">
                        <label for="incoterm" class="rfq-lbl">Incoterms®</label>
                        <select name="incoterm" id="incoterm" class="rfq-in">
                            @foreach ($incoterms as $term)
                            <option value="{{ $term }}" {{ old('incoterm', 'FOB') === $term ? 'selected' : '' }}>{{ $term }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="rfq-field">
                        <label for="origin_port" class="rfq-lbl">Pelabuhan asal</label>
                        <input type="text" name="origin_port" id="origin_port" value="{{ old('origin_port') }}" placeholder="Tanjung Priok (IDJKT)" class="rfq-in">
                    </div>
                    <div class="rfq-field">
                        <label for="destination_port" class="rfq-lbl">Pelabuhan tujuan</label>
                        <input type="text" name="destination_port" id="destination_port" value="{{ old('destination_port') }}" placeholder="Port of Rotterdam (NLRTM)" class="rfq-in">
                    </div>
                    <div class="rfq-field rfq-full">
                        <label for="cargo_volume" class="rfq-lbl">Volume kargo</label>
                        <input type="text" name="cargo_volume" id="cargo_volume" value="{{ old('cargo_volume') }}" placeholder="4x 40ft HC / 500 MT Curah" class="rfq-in">
                    </div>
                    <div class="rfq-field rfq-full">
                        <label for="notes" class="rfq-lbl">Catatan tambahan</label>
                        <textarea name="notes" id="notes" rows="3" placeholder="Spesifikasi komoditas atau kebutuhan khusus." class="rfq-in">{{ old('notes') }}</textarea>
                    </div>

                    <button type="submit" class="rfq-btn rfq-full">
                        <span>Kirim Permintaan (RFQ)</span>
                        <x-icon name="arrow-right" />
                    </button>
                </form>
            </div>

        </div>
    </div>

    {{-- CSS komponen ini berdiri sendiri: tidak perlu rebuild Tailwind --}}
    <style>
        #rfq, #rfq *, #rfq *::before, #rfq *::after { box-sizing: border-box; }
        #rfq { position: relative; background: #000; color: #fff; border-top: 1px solid rgba(255,255,255,.1); padding: 96px 0; }
        #rfq p, #rfq h2, #rfq dl, #rfq dd, #rfq ul { margin: 0; padding: 0; }
        #rfq .rfq-wrap { max-width: 80rem; margin: 0 auto; padding: 0 24px; }
        #rfq .rfq-grid { display: grid; gap: 48px; align-items: start; }

        #rfq .rfq-label { display: flex; align-items: center; gap: 12px; margin-bottom: 20px; font-size: 14px; font-weight: 500; color: #a3a3a3; }
        #rfq .rfq-label::before { content: ""; width: 40px; height: 1px; background: #38bdf8; }
        #rfq .rfq-title { font-size: 30px; line-height: 1.1; font-weight: 800; letter-spacing: -.025em; font-stretch: 112%; color: #fff; }
        #rfq .rfq-lead { margin-top: 16px; font-size: 16px; line-height: 1.625; color: #a3a3a3; }

        #rfq .rfq-contact { margin-top: 32px; border-top: 1px solid rgba(255,255,255,.1); }
        #rfq .rfq-contact > div { display: grid; grid-template-columns: 80px 1fr; gap: 16px; padding: 14px 0; border-bottom: 1px solid rgba(255,255,255,.1); font-size: 15px; }
        #rfq .rfq-contact dt { color: #737373; }
        #rfq .rfq-contact dd { min-width: 0; overflow-wrap: anywhere; font-weight: 500; color: #fff; }
        #rfq .rfq-contact a { color: inherit; text-decoration: none; transition: color .2s; }
        #rfq .rfq-contact a:hover { color: #7dd3fc; }

        #rfq .rfq-card { padding: 24px; background: #0a0a0a; border: 1px solid rgba(255,255,255,.1); border-radius: 24px; }
        #rfq .rfq-form { display: grid; gap: 18px; }
        #rfq .rfq-field { min-width: 0; }
        #rfq .rfq-lbl { display: block; margin-bottom: 6px; font-size: 13px; font-weight: 500; color: #a3a3a3; }
        #rfq .rfq-req { font-style: normal; color: #38bdf8; }

        #rfq .rfq-in { display: block; width: 100%; height: 46px; padding: 0 14px; font: inherit; font-size: 16px; color: #fff; background-color: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.1); border-radius: 12px; outline: none; transition: border-color .2s, box-shadow .2s, background-color .2s; }
        #rfq .rfq-in::placeholder { color: #737373; }
        #rfq .rfq-in:focus { border-color: #38bdf8; background-color: rgba(56,189,248,.05); box-shadow: 0 0 0 3px rgba(56,189,248,.15); }
        #rfq textarea.rfq-in { height: auto; min-height: 96px; padding: 12px 14px; line-height: 1.5; resize: vertical; }
        #rfq select.rfq-in { appearance: none; -webkit-appearance: none; padding-right: 40px; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='none' stroke='%23a3a3a3' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M5 8l5 5 5-5'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 14px center; background-size: 16px; }
        #rfq select.rfq-in option { background: #171717; color: #fff; }
        #rfq .rfq-sep { margin: 6px 0; border: 0; border-top: 1px solid rgba(255,255,255,.08); }

        #rfq .rfq-seg { display: grid; grid-template-columns: repeat(2, 1fr); gap: 4px; padding: 4px; background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.1); border-radius: 14px; }
        #rfq .rfq-seg label { position: relative; cursor: pointer; }
        #rfq .rfq-seg input { position: absolute; opacity: 0; pointer-events: none; }
        #rfq .rfq-opt { display: block; padding: 10px 4px; text-align: center; font-size: 14px; font-weight: 500; color: #a3a3a3; border-radius: 10px; transition: background-color .2s, color .2s; }
        #rfq .rfq-seg label:hover input:not(:checked) + .rfq-opt { color: #fff; }
        #rfq .rfq-seg input:checked + .rfq-opt { background: #fff; color: #000; font-weight: 600; }
        #rfq .rfq-seg input:focus-visible + .rfq-opt { outline: 2px solid #38bdf8; outline-offset: 2px; }

        #rfq .rfq-btn { display: flex; align-items: center; justify-content: center; gap: 8px; width: 100%; height: 52px; margin-top: 6px; font: inherit; font-size: 15px; font-weight: 700; color: #000; background: #fff; border: 0; border-radius: 999px; cursor: pointer; transition: background-color .2s, transform .1s; }
        #rfq .rfq-btn:hover { background: #e5e5e5; }
        #rfq .rfq-btn:active { transform: scale(.98); }
        #rfq .rfq-btn:focus-visible { outline: 2px solid #38bdf8; outline-offset: 3px; }
        #rfq .rfq-btn svg { width: 16px; height: 16px; transition: transform .2s; }
        #rfq .rfq-btn:hover svg { transform: translateX(4px); }

        #rfq .rfq-alert { margin-bottom: 20px; padding: 14px 16px; border-radius: 12px; font-size: 14px; line-height: 1.5; }
        #rfq .rfq-alert strong { display: block; font-weight: 600; color: #fff; }
        #rfq .rfq-ok { background: rgba(56,189,248,.08); border: 1px solid rgba(56,189,248,.35); color: #bae6fd; }
        #rfq .rfq-err { background: rgba(239,68,68,.08); border: 1px solid rgba(239,68,68,.35); color: #fca5a5; }
        #rfq .rfq-err ul { margin-top: 6px; padding-left: 18px; list-style: disc; }

        @media (min-width: 480px) {
            #rfq .rfq-seg { grid-template-columns: repeat(4, 1fr); }
        }
        @media (min-width: 640px) {
            #rfq .rfq-title { font-size: 36px; }
            #rfq .rfq-lead { font-size: 18px; }
            #rfq .rfq-card { padding: 32px; }
            #rfq .rfq-form { grid-template-columns: 1fr 1fr; gap: 18px 16px; }
            #rfq .rfq-full { grid-column: 1 / -1; }
        }
        @media (min-width: 1024px) {
            #rfq { padding: 128px 0; }
            #rfq .rfq-wrap { padding: 0 32px; }
            #rfq .rfq-title { font-size: 48px; }
            #rfq .rfq-grid { grid-template-columns: repeat(12, 1fr); gap: 64px; }
            #rfq .rfq-side { grid-column: span 5; position: sticky; top: 112px; }
            #rfq .rfq-card { grid-column: span 7; }
        }
    </style>
</section>