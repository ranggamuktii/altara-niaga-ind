@props(['company' => [], 'data' => []])

@php
$tradeTypes = $data['trade_types'] ?? [
    'export' => 'Ekspor Komoditas',
    'import' => 'Impor & Pabean',
    'freight_only' => 'Freight Forwarding',
    'consulting' => 'Konsultasi Dagang',
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

<section id="rfq" class="relative border-t border-white/[0.08] bg-black py-24 text-white lg:py-36">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-12 lg:gap-16">

            {{-- Kolom Kiri: Kredensial Pabean & Kontak Langsung Trade Desk --}}
            <div class="lg:sticky lg:top-28 lg:col-span-5" data-animate>
                <p class="mb-4 flex items-center gap-3 text-sm font-medium text-neutral-400">
                    <span class="h-px w-10 bg-sky-400"></span>{{ $data['label'] ?? 'Permintaan penawaran (RFQ)' }}
                </p>
                <h2 class="font-display text-3xl font-extrabold leading-[1.1] tracking-tight text-white [font-stretch:112%] sm:text-4xl lg:text-5xl">
                    {{ $data['headline'] ?? 'Mulai Diskusi Kebutuhan Perdagangan & Pengapalan Kargo' }}
                </h2>
                <p class="mt-4 text-base leading-relaxed text-neutral-400 sm:text-lg">
                    {{ $data['description'] ?? 'Sampaikan spesifikasi komoditas, estimasi volume, dan termin pengapalan. Tim trade desk kami akan memverifikasi dan menyusun pro-forma kalkulasi terperinci.' }}
                </p>

                {{-- Kotak Kredensial & Akreditasi Pabean --}}
                <div class="mt-8 rounded-3xl border border-white/[0.08] bg-neutral-950/70 p-6 backdrop-blur-sm sm:p-7">
                    <h4 class="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-neutral-400">
                        <span class="h-1.5 w-1.5 rounded-full bg-sky-400"></span>
                        Legalitas &amp; Akreditasi Pabean
                    </h4>
                    <div class="mt-4 space-y-3 text-xs sm:text-sm">
                        <div class="flex items-center justify-between border-b border-white/[0.05] pb-2.5">
                            <span class="text-neutral-500">Nomor Induk Berusaha (NIB)</span>
                            <span class="font-medium text-white">{{ $company['registration_no'] ?? '9120004812391' }}</span>
                        </div>
                        <div class="flex items-center justify-between border-b border-white/[0.05] pb-2.5">
                            <span class="text-neutral-500">Registrasi EDI Pabean</span>
                            <span class="font-medium text-white">{{ $company['customs_code'] ?? 'EDI IDJKT / Verified' }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-neutral-500">Target Respon Kuotasi</span>
                            <span class="flex items-center gap-1.5 font-semibold text-sky-300">
                                <x-icon name="clock" class="h-3.5 w-3.5" />
                                &le; 24 Jam Kerja
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Kotak Kontak Langsung --}}
                <div class="mt-6 rounded-3xl border border-white/[0.08] bg-neutral-950/70 p-6 backdrop-blur-sm sm:p-7">
                    <h4 class="mb-4 text-xs font-bold uppercase tracking-wider text-neutral-400">
                        Kontak Langsung Trade Desk
                    </h4>
                    <div class="space-y-3.5 text-xs sm:text-sm text-neutral-400">
                        <div class="flex items-center gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded-xl border border-white/10 bg-black text-sky-300">
                                <x-icon name="mail" class="h-4 w-4" />
                            </div>
                            <span class="font-medium text-neutral-200">{{ $company['email'] ?? 'trade-desk@altaraniaga.com' }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded-xl border border-white/10 bg-black text-sky-300">
                                <x-icon name="phone" class="h-4 w-4" />
                            </div>
                            <span class="font-medium text-neutral-200">{{ $company['phone'] ?? '+62 21 5088 9200' }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded-xl border border-white/10 bg-black text-sky-300">
                                <x-icon name="map-pin" class="h-4 w-4" />
                            </div>
                            <span class="font-medium text-neutral-200">{{ $company['address'] ?? 'SCBD Jakarta Selatan' }}</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Kolom Kanan: Formulir RFQ Interaktif --}}
            <div class="lg:col-span-7 rounded-3xl border border-white/[0.08] bg-neutral-950/80 p-7 sm:p-10 backdrop-blur-sm shadow-2xl" data-animate>
                @if (session('success'))
                <div class="mb-6 rounded-2xl border border-sky-400/40 bg-sky-950/40 p-4 text-sm text-sky-200">
                    <div class="mb-1 flex items-center gap-2 font-semibold text-white">
                        <x-icon name="badge-check" class="h-4 w-4 text-sky-400" />
                        Permintaan Penawaran Berhasil Dikirim
                    </div>
                    {{ session('success') }}
                </div>
                @endif

                @if (isset($errors) && $errors->any())
                <div class="mb-6 rounded-2xl border border-red-500/40 bg-red-950/40 p-4 text-sm text-red-200">
                    <div class="mb-1 font-semibold text-white">Periksa isian formulir:</div>
                    <ul class="list-disc list-inside space-y-1 text-xs text-red-300">
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
                        <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                            Jenis Operasi Perdagangan <span class="text-sky-400">*</span>
                        </label>
                        <div class="grid grid-cols-2 gap-2 sm:grid-cols-4">
                            @foreach ($tradeTypes as $key => $tradeLabel)
                            <label class="cursor-pointer">
                                <input
                                    type="radio"
                                    name="trade_type"
                                    value="{{ $key }}"
                                    {{ old('trade_type', 'export') === $key ? 'checked' : '' }}
                                    class="peer sr-only">
                                <span class="block rounded-xl border border-white/10 bg-black/60 px-2 py-2.5 text-center text-xs font-semibold text-neutral-300 transition-all duration-150 peer-checked:border-sky-400 peer-checked:bg-white peer-checked:text-black">
                                    {{ $tradeLabel }}
                                </span>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Step 2: Kontak Perusahaan --}}
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="name" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Nama Lengkap <span class="text-sky-400">*</span>
                            </label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                required
                                placeholder="Contoh: Budi Santoso"
                                class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white placeholder-neutral-500 transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                        </div>
                        <div>
                            <label for="email" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Email Korporat <span class="text-sky-400">*</span>
                            </label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="nama@perusahaan.com"
                                class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white placeholder-neutral-500 transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                        </div>
                        <div>
                            <label for="company_name" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Nama Perusahaan
                            </label>
                            <input
                                type="text"
                                name="company_name"
                                id="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="PT / CV / Corp Name"
                                class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white placeholder-neutral-500 transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                        </div>
                        <div>
                            <label for="phone" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Telepon / WhatsApp
                            </label>
                            <input
                                type="text"
                                name="phone"
                                id="phone"
                                value="{{ old('phone') }}"
                                placeholder="+62 812 3456 7890"
                                class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white placeholder-neutral-500 transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                        </div>
                    </div>

                    {{-- Step 3: Parameter Komoditas & Kontrak --}}
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        <div>
                            <label for="commodity_division" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Divisi Komoditas
                            </label>
                            <select
                                name="commodity_division"
                                id="commodity_division"
                                class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                                <option value="" class="bg-neutral-900 text-neutral-400">Pilih Kategori Komoditas</option>
                                @foreach ($divisions as $div)
                                <option value="{{ $div }}" {{ old('commodity_division') === $div ? 'selected' : '' }} class="bg-neutral-900 text-white">
                                    {{ $div }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="incoterm" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Termin Incoterms® 2020
                            </label>
                            <select
                                name="incoterm"
                                id="incoterm"
                                class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                                <option value="" class="bg-neutral-900 text-neutral-400">Pilih Termin Penyerahan</option>
                                @foreach ($incoterms as $term)
                                <option value="{{ $term }}" {{ old('incoterm', 'FOB') === $term ? 'selected' : '' }} class="bg-neutral-900 text-white">
                                    {{ $term }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="origin_port" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Pelabuhan Muat (POL)
                            </label>
                            <input
                                type="text"
                                name="origin_port"
                                id="origin_port"
                                value="{{ old('origin_port') }}"
                                placeholder="Contoh: Tanjung Priok (IDJKT)"
                                class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white placeholder-neutral-500 transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                        </div>
                        <div>
                            <label for="destination_port" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Pelabuhan Tujuan (POD)
                            </label>
                            <input
                                type="text"
                                name="destination_port"
                                id="destination_port"
                                value="{{ old('destination_port') }}"
                                placeholder="Contoh: Port of Rotterdam (NLRTM)"
                                class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white placeholder-neutral-500 transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                        </div>
                    </div>

                    {{-- Estimated Volume --}}
                    <div>
                        <label for="cargo_volume" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                            Estimasi Volume Kargo / Tipe Kontainer
                        </label>
                        <input
                            type="text"
                            name="cargo_volume"
                            id="cargo_volume"
                            value="{{ old('cargo_volume') }}"
                            placeholder="Contoh: 5x 40ft High Cube FCL / 500 MT Curah"
                            class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white placeholder-neutral-500 transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">
                    </div>

                    {{-- Additional Specifications / Notes --}}
                    <div>
                        <label for="notes" class="mb-1.5 block text-xs font-semibold uppercase tracking-wider text-neutral-400">
                            Rincian Spesifikasi Kebutuhan &amp; Jadwal
                        </label>
                        <textarea
                            name="notes"
                            id="notes"
                            rows="3"
                            placeholder="Tuliskan spesifikasi mutu komoditas, preferensi surveyor (SGS/Sucofindo), atau jadwal laycan kapal."
                            class="w-full rounded-xl border border-white/10 bg-black/60 px-4 py-3 text-sm text-white placeholder-neutral-500 transition focus:border-sky-400 focus:outline-none focus:ring-1 focus:ring-sky-400">{{ old('notes') }}</textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div>
                        <button
                            type="submit"
                            class="group flex w-full items-center justify-center gap-2 rounded-full bg-white py-4 text-sm font-bold tracking-wide text-black shadow-md transition-all duration-150 hover:bg-neutral-200 active:scale-98">
                            <span>Kirim Permintaan Penawaran (RFQ)</span>
                            <x-icon name="arrow-right" class="h-4 w-4 transition-transform group-hover:translate-x-1" />
                        </button>
                        <p class="mt-3 text-center text-xs font-medium text-neutral-500">
                            Data langsung terkirim ke divisi perdagangan ekspor impor. Terjamin kerahasiaan NDA institusi.
                        </p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

