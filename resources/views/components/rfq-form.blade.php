@props(['company', 'data'])

@php
    $tradeTypes = $data['trade_types'] ?? [
        'export'      => 'Ekspor Komoditas',
        'import'      => 'Impor & Pabean',
        'freight_only'=> 'Freight Forwarding',
        'consulting'  => 'Konsultasi Dagang',
    ];
    $incoterms = $data['incoterms_options'] ?? ['FOB', 'CIF', 'CFR', 'EXW', 'DDP'];
    $divisions = $data['commodity_divisions'] ?? [
        'Agrikultur, Rempah & Bahan Makanan',
        'Mineral, Logam & Energi',
        'Bahan Kimia & Bio-Industri',
        'Produk Manufaktur & Komponen Industri',
        'Komoditas Khusus Lainnya',
    ];
@endphp

<section id="rfq" class="py-28 lg:py-36 bg-black border-t border-neutral-900 text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            {{-- Left Column: Direct Trade Desk Info & Compliance Credentials --}}
            <div class="lg:col-span-5" data-animate>
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-neutral-800 bg-neutral-900/70 text-xs font-semibold text-neutral-300 mb-5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    <span>{{ $data['label'] ?? 'KONSULTASI & PERMINTAAN PENAWARAN (RFQ)' }}</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                    {{ $data['headline'] ?? 'Mulai Diskusi Kebutuhan Perdagangan & Pengapalan Kargo Anda' }}
                </h2>
                <p class="mt-4 text-base text-neutral-400 leading-relaxed font-normal mb-8">
                    {{ $data['description'] ?? 'Sampaikan spesifikasi komoditas, estimasi volume, pelabuhan muat/bongkar, dan termin penyerahan yang diinginkan. Tim trade desk kami akan memverifikasi dan memberikan pro-forma kalkulasi terperinci.' }}
                </p>

                {{-- Institutional Verification Box --}}
                <div class="rounded-3xl border border-neutral-800 bg-neutral-950 p-6 sm:p-7 mb-6 space-y-4">
                    <h4 class="text-xs uppercase tracking-widest text-neutral-400 font-semibold">
                        Legalitas &amp; Akreditasi Pabean
                    </h4>
                    <div class="space-y-3 text-xs">
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-neutral-500 font-medium">Nomor Induk Berusaha (NIB):</span>
                            <span class="text-white font-medium">{{ $company['registration_no'] ?? '9120004812391' }}</span>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-neutral-500 font-medium">Registrasi Kepabeanan (EDI):</span>
                            <span class="text-white font-medium">{{ $company['customs_code'] ?? 'EDI IDJKT / Verified' }}</span>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-neutral-500 font-medium">Nomor Pokok Wajib Pajak:</span>
                            <span class="text-white font-medium">{{ $company['tax_id'] ?? 'NPWP Terdaftar DJP' }}</span>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-neutral-500 font-medium">Target Respon Penawaran:</span>
                            <span class="text-emerald-400 font-semibold">&le; 24 Jam Kerja</span>
                        </div>
                    </div>
                </div>

                {{-- Direct Contact Box --}}
                <div class="rounded-3xl border border-neutral-800 bg-neutral-950 p-6 sm:p-7 space-y-4 text-xs text-neutral-400">
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span class="text-neutral-300 font-medium">{{ $company['email'] ?? 'trade-desk@vanguardtrade.com' }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <span class="text-neutral-300 font-medium">{{ $company['phone'] ?? '+62 21 5088 9200' }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                        <span class="text-neutral-300 font-medium leading-relaxed">{{ $company['address'] ?? 'SCBD Jakarta Selatan' }}</span>
                    </div>
                </div>
            </div>

            {{-- Right Column: Interactive RFQ Form --}}
            <div class="lg:col-span-7 rounded-3xl border border-neutral-800 bg-neutral-950 p-7 sm:p-10 shadow-2xl" data-animate>
                @if (session('success'))
                <div class="mb-6 p-4 rounded-xl bg-emerald-950/60 border border-emerald-700/60 text-emerald-300 text-sm">
                    <div class="font-semibold mb-1 flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        Permintaan Penawaran Berhasil Dikirim
                    </div>
                    {{ session('success') }}
                </div>
                @endif

                @if (isset($errors) && $errors->any())
                <div class="mb-6 p-4 rounded-xl bg-red-950/60 border border-red-700/60 text-red-300 text-sm">
                    <div class="font-semibold mb-1">Periksa isian formulir:</div>
                    <ul class="list-disc list-inside text-xs space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                    @csrf

                    {{-- Step 1: Jenis Transaksi Perdagangan --}}
                    <div>
                        <label class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-2.5">
                            1. Jenis Operasi Perdagangan <span class="text-red-400">*</span>
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                            @foreach ($tradeTypes as $key => $label)
                            <label class="cursor-pointer">
                                <input
                                    type="radio"
                                    name="trade_type"
                                    value="{{ $key }}"
                                    {{ old('trade_type', 'export') === $key ? 'checked' : '' }}
                                    class="peer sr-only">
                                <span class="block text-center py-2.5 px-2 rounded-xl text-xs font-medium border border-neutral-800 bg-neutral-900/60 text-neutral-300 peer-checked:border-white peer-checked:bg-white peer-checked:text-black transition-all duration-150">
                                    {{ $label }}
                                </span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Step 2: Kontak Perusahaan --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                                Nama Lengkap Kontak <span class="text-red-400">*</span>
                            </label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                required
                                placeholder="Contoh: Budi Santoso"
                                class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white placeholder-neutral-500 focus:border-white focus:outline-none transition">
                        </div>
                        <div>
                            <label for="email" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                                Email Bisnis Korporat <span class="text-red-400">*</span>
                            </label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="nama@perusahaan.com"
                                class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white placeholder-neutral-500 focus:border-white focus:outline-none transition">
                        </div>
                        <div>
                            <label for="company_name" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                                Nama Perusahaan / Badan Usaha
                            </label>
                            <input
                                type="text"
                                name="company_name"
                                id="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="PT / CV / Corp Name"
                                class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white placeholder-neutral-500 focus:border-white focus:outline-none transition">
                        </div>
                        <div>
                            <label for="phone" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                                No. Telepon / WhatsApp
                            </label>
                            <input
                                type="text"
                                name="phone"
                                id="phone"
                                value="{{ old('phone') }}"
                                placeholder="+62 812 3456 7890"
                                class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white placeholder-neutral-500 focus:border-white focus:outline-none transition">
                        </div>
                    </div>

                    {{-- Step 3: Parameter Komoditas & Kontrak --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="commodity_division" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                                Divisi Komoditas
                            </label>
                            <select
                                name="commodity_division"
                                id="commodity_division"
                                class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white focus:border-white focus:outline-none transition">
                                <option value="" class="bg-neutral-900 text-neutral-400">Pilih Kategori Komoditas</option>
                                @foreach ($divisions as $div)
                                <option value="{{ $div }}" {{ old('commodity_division') === $div ? 'selected' : '' }} class="bg-neutral-900 text-white">
                                    {{ $div }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="incoterm" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                                Termin Incoterms® 2020
                            </label>
                            <select
                                name="incoterm"
                                id="incoterm"
                                class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white focus:border-white focus:outline-none transition">
                                <option value="" class="bg-neutral-900 text-neutral-400">Pilih Termin Penyerahan</option>
                                @foreach ($incoterms as $term)
                                <option value="{{ $term }}" {{ old('incoterm', 'FOB') === $term ? 'selected' : '' }} class="bg-neutral-900 text-white">
                                    {{ $term }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="origin_port" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                                Pelabuhan Muat (POL)
                            </label>
                            <input
                                type="text"
                                name="origin_port"
                                id="origin_port"
                                value="{{ old('origin_port') }}"
                                placeholder="Contoh: Tanjung Priok (IDJKT)"
                                class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white placeholder-neutral-500 focus:border-white focus:outline-none transition">
                        </div>
                        <div>
                            <label for="destination_port" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                                Pelabuhan Tujuan (POD)
                            </label>
                            <input
                                type="text"
                                name="destination_port"
                                id="destination_port"
                                value="{{ old('destination_port') }}"
                                placeholder="Contoh: Port of Rotterdam (NLRTM)"
                                class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white placeholder-neutral-500 focus:border-white focus:outline-none transition">
                        </div>
                    </div>

                    {{-- Estimated Volume --}}
                    <div>
                        <label for="cargo_volume" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                            Estimasi Volume Kargo / Tipe Kontainer
                        </label>
                        <input
                            type="text"
                            name="cargo_volume"
                            id="cargo_volume"
                            value="{{ old('cargo_volume') }}"
                            placeholder="Contoh: 5x 40ft High Cube FCL / 500 Metrik Ton Curah"
                            class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-2.5 text-white placeholder-neutral-500 focus:border-white focus:outline-none transition">
                    </div>

                    {{-- Additional Specifications / Notes --}}
                    <div>
                        <label for="notes" class="block text-xs uppercase tracking-wider font-semibold text-neutral-400 mb-1.5">
                            Rincian Spesifikasi Kebutuhan &amp; Target Pengapalan
                        </label>
                        <textarea
                            name="notes"
                            id="notes"
                            rows="3"
                            placeholder="Tuliskan spesifikasi mutu, kemasan yang diminta, preferensi surveyor (SGS/Sucofindo), atau jadwal laycan kapal yang diinginkan."
                            class="w-full text-sm rounded-xl border border-neutral-800 bg-neutral-900/80 px-4 py-3 text-white placeholder-neutral-500 focus:border-white focus:outline-none transition">{{ old('notes') }}</textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div>
                        <button
                            type="submit"
                            class="w-full py-4 rounded-xl text-xs font-semibold uppercase tracking-widest text-black bg-white hover:bg-neutral-200 transition-all duration-150 flex items-center justify-center gap-2 shadow-sm">
                            <span>Kirim Permintaan Penawaran (RFQ)</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                        <p class="text-[11px] text-neutral-500 text-center mt-3 font-medium">
                            Data langsung terkirim ke divisi perdagangan ekspor impor. Terjamin kerahasiaan NDA institusi.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>