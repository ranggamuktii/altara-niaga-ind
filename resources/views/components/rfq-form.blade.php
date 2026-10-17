@props(['company', 'data'])

@php
    $tradeTypes = $data['trade_types'] ?? [
        'export' => 'Export Shipment',
        'import' => 'Import Shipment',
        'freight_only' => 'Freight Forwarding',
        'consulting' => 'Customs Brokerage',
    ];
    $incoterms = $data['incoterms_options'] ?? ['FOB', 'CIF', 'CFR', 'EXW', 'DDP'];
    $divisions = $data['commodity_divisions'] ?? [];
@endphp

<section id="rfq" class="py-24 lg:py-32 bg-[#1B2A4A] text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            {{-- Left Column: Direct Trade Desk Info & Compliance Credentials --}}
            <div class="lg:col-span-5" data-animate>
                <span class="inline-block text-xs font-semibold uppercase tracking-widest text-[#C8A962] mb-3">
                    {{ $data['label'] ?? 'Request For Quotation' }}
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight leading-tight">
                    {{ $data['headline'] ?? 'Initiate Cargo Inquiries' }}
                </h2>
                <div class="w-16 h-0.5 bg-[#C8A962] mt-5 mb-6"></div>
                <p class="text-sm text-white/70 leading-relaxed mb-10">
                    {{ $data['description'] ?? 'Submit your cargo volume, port of loading/discharge, and target delivery term.' }}
                </p>

                {{-- Institutional Verification Box --}}
                <div class="border border-white/10 bg-white/5 p-6 mb-8 space-y-4">
                    <h4 class="text-xs uppercase tracking-widest font-semibold text-[#C8A962]">
                        Institutional Compliance
                    </h4>
                    <div class="space-y-3 text-xs">
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-white/50">Customs Broker ID:</span>
                            <span class="text-white font-mono font-medium">{{ $company['customs_code'] ?? 'EDI IDJKT / Verified' }}</span>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-white/50">Business ID (NIB):</span>
                            <span class="text-white font-mono font-medium">{{ $company['registration_no'] ?? '9120004812391' }}</span>
                        </div>
                        <div class="flex items-start justify-between gap-4">
                            <span class="text-white/50">Standard Response:</span>
                            <span class="text-white font-medium">Under 24 Hours (Business Days)</span>
                        </div>
                    </div>
                </div>

                {{-- Direct Contact Box --}}
                <div class="space-y-4 text-xs text-white/70">
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-[#C8A962]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                        </svg>
                        <span>{{ $company['email'] ?? 'trade-desk@vanguardtrade.com' }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-[#C8A962]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                        </svg>
                        <span>{{ $company['phone'] ?? '+62 21 5088 9200' }}</span>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-[#C8A962]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                        <span>{{ $company['address'] ?? 'Menara Trade Center, Jakarta' }}</span>
                    </div>
                </div>
            </div>

            {{-- Right Column: Interactive RFQ Form --}}
            <div class="lg:col-span-7 bg-white text-[#1A1A2E] p-8 sm:p-10 border border-gray-200" data-animate>
                @if (session('success'))
                    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-300 text-emerald-800 text-sm">
                        <div class="font-semibold mb-1">Inquiry Submitted Successfully</div>
                        {{ session('success') }}
                    </div>
                @endif

                @if (isset($errors) && $errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-300 text-red-800 text-sm">
                        <div class="font-semibold mb-1">Please review the following errors:</div>
                        <ul class="list-disc list-inside text-xs space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                    @csrf

                    {{-- Step 1: Trade Operation Selector --}}
                    <div>
                        <label class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-2">
                            1. Select Trade Operation <span class="text-red-500">*</span>
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                            @foreach ($tradeTypes as $key => $label)
                                <label class="cursor-pointer">
                                    <input
                                        type="radio"
                                        name="trade_type"
                                        value="{{ $key }}"
                                        {{ old('trade_type', 'export') === $key ? 'checked' : '' }}
                                        class="peer sr-only"
                                    >
                                    <span class="block text-center py-2.5 px-2 text-xs font-medium border border-gray-200 peer-checked:border-[#1B2A4A] peer-checked:bg-[#1B2A4A] peer-checked:text-white transition duration-150">
                                        {{ $label }}
                                    </span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    {{-- Step 2: Contact Information --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                                Contact Name <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                required
                                placeholder="e.g. Marcus Vance"
                                class="w-full text-sm border border-gray-300 px-3.5 py-2.5 focus:border-[#1B2A4A] focus:outline-none"
                            >
                        </div>
                        <div>
                            <label for="email" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                                Corporate Email <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                required
                                placeholder="name@company.com"
                                class="w-full text-sm border border-gray-300 px-3.5 py-2.5 focus:border-[#1B2A4A] focus:outline-none"
                            >
                        </div>
                        <div>
                            <label for="company_name" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                                Company / Legal Entity
                            </label>
                            <input
                                type="text"
                                name="company_name"
                                id="company_name"
                                value="{{ old('company_name') }}"
                                placeholder="e.g. Vance Trading GmbH"
                                class="w-full text-sm border border-gray-300 px-3.5 py-2.5 focus:border-[#1B2A4A] focus:outline-none"
                            >
                        </div>
                        <div>
                            <label for="phone" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                                Phone / WhatsApp
                            </label>
                            <input
                                type="text"
                                name="phone"
                                id="phone"
                                value="{{ old('phone') }}"
                                placeholder="+1 (555) 019-2834"
                                class="w-full text-sm border border-gray-300 px-3.5 py-2.5 focus:border-[#1B2A4A] focus:outline-none"
                            >
                        </div>
                    </div>

                    {{-- Step 3: Cargo & Incoterm Parameters --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="commodity_division" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                                Commodity Division
                            </label>
                            <select
                                name="commodity_division"
                                id="commodity_division"
                                class="w-full text-sm border border-gray-300 px-3.5 py-2.5 bg-white focus:border-[#1B2A4A] focus:outline-none"
                            >
                                <option value="">Select Target Commodity Sector</option>
                                @foreach ($divisions as $div)
                                    <option value="{{ $div }}" {{ old('commodity_division') === $div ? 'selected' : '' }}>
                                        {{ $div }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="incoterm" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                                Preferred Incoterms 2020
                            </label>
                            <select
                                name="incoterm"
                                id="incoterm"
                                class="w-full text-sm border border-gray-300 px-3.5 py-2.5 bg-white focus:border-[#1B2A4A] focus:outline-none"
                            >
                                <option value="">Select Delivery Term</option>
                                @foreach ($incoterms as $term)
                                    <option value="{{ $term }}" {{ old('incoterm', 'FOB') === $term ? 'selected' : '' }}>
                                        {{ $term }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="origin_port" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                                Port of Loading (POL)
                            </label>
                            <input
                                type="text"
                                name="origin_port"
                                id="origin_port"
                                value="{{ old('origin_port') }}"
                                placeholder="e.g. Port of Tanjung Priok (IDJKT)"
                                class="w-full text-sm border border-gray-300 px-3.5 py-2.5 focus:border-[#1B2A4A] focus:outline-none"
                            >
                        </div>
                        <div>
                            <label for="destination_port" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                                Port of Discharge (POD)
                            </label>
                            <input
                                type="text"
                                name="destination_port"
                                id="destination_port"
                                value="{{ old('destination_port') }}"
                                placeholder="e.g. Port of Rotterdam (NLRTM)"
                                class="w-full text-sm border border-gray-300 px-3.5 py-2.5 focus:border-[#1B2A4A] focus:outline-none"
                            >
                        </div>
                    </div>

                    {{-- Estimated Volume --}}
                    <div>
                        <label for="cargo_volume" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                            Estimated Cargo Volume / Container Spec
                        </label>
                        <input
                            type="text"
                            name="cargo_volume"
                            id="cargo_volume"
                            value="{{ old('cargo_volume') }}"
                            placeholder="e.g. 5x 40ft High Cube FCL / 500 Metric Tons"
                            class="w-full text-sm border border-gray-300 px-3.5 py-2.5 focus:border-[#1B2A4A] focus:outline-none"
                        >
                    </div>

                    {{-- Additional Specifications / Notes --}}
                    <div>
                        <label for="notes" class="block text-xs uppercase tracking-wider font-semibold text-[#1B2A4A] mb-1">
                            Specifications &amp; Target Shipment Date
                        </label>
                        <textarea
                            name="notes"
                            id="notes"
                            rows="3"
                            placeholder="Detail your quality grade, moisture content, packaging preference, target laycan date, or special customs handling requirements."
                            class="w-full text-sm border border-gray-300 px-3.5 py-2.5 focus:border-[#1B2A4A] focus:outline-none"
                        >{{ old('notes') }}</textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div>
                        <button
                            type="submit"
                            class="w-full py-4 text-xs font-semibold uppercase tracking-widest text-[#1B2A4A] bg-[#C8A962] hover:bg-[#b89a55] transition duration-150 flex items-center justify-center gap-2"
                        >
                            <span>Transmit Request for Quotation</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                        <p class="text-[11px] text-gray-500 text-center mt-3">
                            Direct transmission to trade desk. Encrypted, NDA compliant, and zero brokerage spam.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
