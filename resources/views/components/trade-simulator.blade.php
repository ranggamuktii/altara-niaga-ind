<section id="simulator" class="py-24 lg:py-32 bg-black border-t border-neutral-900 text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Live Maritime Telemetry Marquee Banner --}}
        <div class="mb-12 rounded-2xl border border-neutral-800/80 bg-neutral-950 p-3 overflow-hidden" data-animate>
            <div class="flex items-center gap-3 text-xs font-medium">
                <span class="flex-shrink-0 inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-950/80 border border-emerald-700/60 text-emerald-300 font-semibold text-[10px]">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                    LIVE AIS DISPATCH
                </span>
                <div class="overflow-hidden whitespace-nowrap w-full">
                    <div class="animate-ticker text-neutral-400 text-xs">
                        <span class="mr-12">🚢 MV VANGUARD GLORY • IDJKT &rarr; NLRTM • AT SEA (MALACCA STRAIT) • SPEED 19.4 KNOTS • ETA 14 DAYS • ON SCHEDULE</span>
                        <span class="mr-12">🚢 PACIFIC VOYAGER • IDSUB &rarr; CNSHA • TRANSIT TAIWAN STRAIT • SPEED 18.2 KNOTS • CAPACITY 100%</span>
                        <span class="mr-12">✈️ AIR FREIGHT AF-902 • CGK &rarr; FRA • DEPARTED • DIRECT CARGO CHARTER • ON TIME</span>
                        <span class="mr-12">🚢 ATLANTIC PIONEER • MYPKG &rarr; USLAX • MID-PACIFIC CORRIDOR • SPEED 21.0 KNOTS • SLOT ALLOCATION CONFIRMED</span>
                        <span class="mr-12">🚢 MV VANGUARD GLORY • IDJKT &rarr; NLRTM • AT SEA (MALACCA STRAIT) • SPEED 19.4 KNOTS • ETA 14 DAYS • ON SCHEDULE</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Section Header --}}
        <div class="max-w-3xl mb-14" data-animate>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs font-medium text-neutral-400 mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                <span>INTERACTIVE MARITIME CONSOLE</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                Global Trade Route &amp; Freight Simulator
            </h2>
            <p class="mt-4 text-sm sm:text-base text-neutral-400 leading-relaxed font-normal">
                Test and calibrate your cross-border cargo routing in real time. Simulate voyage days, container capacities, and Incoterms risk allocation before committing to shipment orders.
            </p>
        </div>

        {{-- Simulator Grid Container --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start" data-trade-simulator>

            {{-- 1. Left Controls Panel (7 Cols) --}}
            <div class="lg:col-span-7 space-y-6">

                {{-- Mode Switcher --}}
                <div class="rounded-2xl border border-neutral-800 bg-neutral-950 p-6 space-y-3">
                    <label class="block text-xs uppercase font-semibold tracking-wider text-neutral-400">
                        1. Select Freight Mode
                    </label>
                    <div class="grid grid-cols-3 gap-2" data-mode-group>
                        <button
                            type="button"
                            data-mode="ocean"
                            class="py-2.5 px-3 rounded-xl border border-white bg-white text-black font-semibold text-xs flex items-center justify-center gap-2 transition"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918"/>
                            </svg>
                            <span>Ocean FCL</span>
                        </button>
                        <button
                            type="button"
                            data-mode="air"
                            class="py-2.5 px-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs flex items-center justify-center gap-2 transition"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
                            </svg>
                            <span>Air Express</span>
                        </button>
                        <button
                            type="button"
                            data-mode="multimodal"
                            class="py-2.5 px-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs flex items-center justify-center gap-2 transition"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25m-2.25 0V5.625c0-.621-.504-1.125-1.125-1.125H5.25c-.621 0-1.125.504-1.125 1.125v12.249M12 14.25h-1.5m-6-6h9"/>
                            </svg>
                            <span>Multimodal</span>
                        </button>
                    </div>
                </div>

                {{-- Origin & Destination Port Selector --}}
                <div class="rounded-2xl border border-neutral-800 bg-neutral-950 p-6 space-y-5">
                    <div>
                        <div class="flex items-center justify-between mb-2.5">
                            <label class="block text-xs uppercase font-semibold tracking-wider text-neutral-400">
                                2. Port of Loading (POL) &bull; Origin
                            </label>
                            <span class="text-[11px] font-medium text-emerald-400 font-semibold" data-origin-label>Tanjung Priok (IDJKT)</span>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2" data-origin-group>
                            <button
                                type="button"
                                data-port-id="IDJKT"
                                data-port-name="Port of Tanjung Priok (IDJKT)"
                                data-lat="-6.1"
                                data-lng="106.8"
                                class="py-2.5 px-3 rounded-xl border border-white bg-white text-black font-semibold text-xs text-left transition"
                            >
                                <span class="block font-bold">Jakarta</span>
                                <span class="block text-[10px] font-medium opacity-70">IDJKT</span>
                            </button>
                            <button
                                type="button"
                                data-port-id="IDSUB"
                                data-port-name="Port of Tanjung Perak, Surabaya (IDSUB)"
                                data-lat="-7.2"
                                data-lng="112.7"
                                class="py-2.5 px-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs text-left transition"
                            >
                                <span class="block font-bold">Surabaya</span>
                                <span class="block text-[10px] font-medium opacity-70">IDSUB</span>
                            </button>
                            <button
                                type="button"
                                data-port-id="MYPKG"
                                data-port-name="Port Klang (MYPKG)"
                                data-lat="3.0"
                                data-lng="101.4"
                                class="py-2.5 px-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs text-left transition"
                            >
                                <span class="block font-bold">Port Klang</span>
                                <span class="block text-[10px] font-medium opacity-70">MYPKG</span>
                            </button>
                            <button
                                type="button"
                                data-port-id="SGSIN"
                                data-port-name="Jurong Port Singapore (SGSIN)"
                                data-lat="1.3"
                                data-lng="103.8"
                                class="py-2.5 px-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs text-left transition"
                            >
                                <span class="block font-bold">Singapore</span>
                                <span class="block text-[10px] font-medium opacity-70">SGSIN</span>
                            </button>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-neutral-800/80">
                        <div class="flex items-center justify-between mb-2.5">
                            <label class="block text-xs uppercase font-semibold tracking-wider text-neutral-400">
                                3. Port of Discharge (POD) &bull; Destination
                            </label>
                            <span class="text-[11px] font-medium text-emerald-400 font-semibold" data-dest-label>Rotterdam (NLRTM)</span>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-5 gap-2" data-dest-group>
                            <button
                                type="button"
                                data-port-id="NLRTM"
                                data-port-name="Port of Rotterdam (NLRTM)"
                                data-days="18 - 22"
                                data-miles="8,450"
                                data-corridor="Malacca-Suez Maritime Corridor"
                                class="py-2.5 px-2.5 rounded-xl border border-white bg-white text-black font-semibold text-xs text-left transition"
                            >
                                <span class="block font-bold">Rotterdam</span>
                                <span class="block text-[10px] font-medium opacity-70">NLRTM</span>
                            </button>
                            <button
                                type="button"
                                data-port-id="CNSHA"
                                data-port-name="Port of Shanghai (CNSHA)"
                                data-days="6 - 8"
                                data-miles="2,820"
                                data-corridor="East Asia Direct Corridor"
                                class="py-2.5 px-2.5 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs text-left transition"
                            >
                                <span class="block font-bold">Shanghai</span>
                                <span class="block text-[10px] font-medium opacity-70">CNSHA</span>
                            </button>
                            <button
                                type="button"
                                data-port-id="USLAX"
                                data-port-name="Port of Los Angeles (USLAX)"
                                data-days="24 - 28"
                                data-miles="8,100"
                                data-corridor="Trans-Pacific Freight Route"
                                class="py-2.5 px-2.5 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs text-left transition"
                            >
                                <span class="block font-bold">Los Angeles</span>
                                <span class="block text-[10px] font-medium opacity-70">USLAX</span>
                            </button>
                            <button
                                type="button"
                                data-port-id="AEDXB"
                                data-port-name="Jebel Ali Port Dubai (AEDXB)"
                                data-days="11 - 13"
                                data-miles="4,200"
                                data-corridor="Indian Ocean &amp; Gulf Route"
                                class="py-2.5 px-2.5 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs text-left transition"
                            >
                                <span class="block font-bold">Jebel Ali</span>
                                <span class="block text-[10px] font-medium opacity-70">AEDXB</span>
                            </button>
                            <button
                                type="button"
                                data-port-id="DEHAM"
                                data-port-name="Port of Hamburg (DEHAM)"
                                data-days="20 - 24"
                                data-miles="8,700"
                                data-corridor="Northern European Hub Corridor"
                                class="py-2.5 px-2.5 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:text-white hover:border-neutral-700 font-medium text-xs text-left transition"
                            >
                                <span class="block font-bold">Hamburg</span>
                                <span class="block text-[10px] font-medium opacity-70">DEHAM</span>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Container Spec & Capacity Selector --}}
                <div class="rounded-2xl border border-neutral-800 bg-neutral-950 p-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <label class="block text-xs uppercase font-semibold tracking-wider text-neutral-400">
                            4. Cargo Container Allocation
                        </label>
                        <span class="text-[11px] font-medium text-neutral-400" data-container-metric>76.4 CBM &bull; 28,800 kg max</span>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2" data-container-group>
                        <button
                            type="button"
                            data-container="20ft Standard Dry Box"
                            data-metric="33.2 CBM • 28,200 kg max"
                            data-fill="45%"
                            class="p-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-left transition"
                        >
                            <span class="block text-xs font-bold">20' Dry Box</span>
                            <span class="block text-[10px] font-medium text-neutral-500 mt-0.5">33.2 CBM</span>
                        </button>
                        <button
                            type="button"
                            data-container="40ft High-Cube FCL (76.4 CBM / 28.8 MT)"
                            data-metric="76.4 CBM • 28,800 kg max"
                            data-fill="88%"
                            class="p-3 rounded-xl border border-white bg-white text-black text-left font-bold transition"
                        >
                            <span class="block text-xs font-bold">40' High-Cube</span>
                            <span class="block text-[10px] font-medium opacity-70 mt-0.5">76.4 CBM</span>
                        </button>
                        <button
                            type="button"
                            data-container="40ft Cold-Chain Reefer (-30C to +30C)"
                            data-metric="67.0 CBM • Cold-Chain Sensor"
                            data-fill="75%"
                            class="p-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-left transition"
                        >
                            <span class="block text-xs font-bold">40' Reefer</span>
                            <span class="block text-[10px] font-medium text-neutral-500 mt-0.5">Cold-Chain</span>
                        </button>
                        <button
                            type="button"
                            data-container="Flexibag Bulk Liquid (24,000 Liters)"
                            data-metric="24,000 L • Food-Grade ISO"
                            data-fill="60%"
                            class="p-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-left transition"
                        >
                            <span class="block text-xs font-bold">Flexibag Liquid</span>
                            <span class="block text-[10px] font-medium text-neutral-500 mt-0.5">24,000 L</span>
                        </button>
                    </div>

                    {{-- Container Volume Visual Meter --}}
                    <div class="pt-2">
                        <div class="flex justify-between text-[10px] font-medium text-neutral-500 mb-1">
                            <span>Volumetric Fill Level</span>
                            <span data-fill-text>High-Cube Standard (88%)</span>
                        </div>
                        <div class="w-full h-1.5 rounded-full bg-neutral-900 overflow-hidden">
                            <div class="h-full bg-white transition-all duration-300" style="width: 88%;" data-fill-bar></div>
                        </div>
                    </div>
                </div>

                {{-- Incoterm Switcher --}}
                <div class="rounded-2xl border border-neutral-800 bg-neutral-950 p-6 space-y-3">
                    <div class="flex items-center justify-between">
                        <label class="block text-xs uppercase font-semibold tracking-wider text-neutral-400">
                            5. Incoterms 2020 Risk Allocation
                        </label>
                        <span class="text-[11px] font-medium text-neutral-400" data-incoterm-desc>Carriage &amp; Insurance Included</span>
                    </div>
                    <div class="grid grid-cols-4 gap-2" data-incoterm-group>
                        <button
                            type="button"
                            data-incoterm="FOB"
                            data-seller-risk="35"
                            data-buyer-risk="65"
                            data-desc="Free On Board (Port Rail Transfer)"
                            class="py-2.5 px-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-xs font-bold text-center transition"
                        >
                            FOB
                        </button>
                        <button
                            type="button"
                            data-incoterm="CIF"
                            data-seller-risk="75"
                            data-buyer-risk="25"
                            data-desc="Cost, Insurance &amp; Freight Covered"
                            class="py-2.5 px-3 rounded-xl border border-white bg-white text-black text-xs font-bold text-center transition"
                        >
                            CIF
                        </button>
                        <button
                            type="button"
                            data-incoterm="CFR"
                            data-seller-risk="60"
                            data-buyer-risk="40"
                            data-desc="Cost and Freight (Buyer Insured)"
                            class="py-2.5 px-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-xs font-bold text-center transition"
                        >
                            CFR
                        </button>
                        <button
                            type="button"
                            data-incoterm="DDP"
                            data-seller-risk="95"
                            data-buyer-risk="5"
                            data-desc="Delivered Duty Paid (Door-to-Door)"
                            class="py-2.5 px-3 rounded-xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-xs font-bold text-center transition"
                        >
                            DDP
                        </button>
                    </div>
                </div>

            </div>

            {{-- 2. Right Visual Simulator & Telemetry Dashboard (5 Cols) --}}
            <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-28">

                {{-- Interactive Radar & Trajectory SVG Canvas --}}
                <div class="rounded-2xl border border-neutral-800 bg-[#0A0A0A] p-6 shadow-2xl relative">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-radar-beacon"></span>
                            <span class="text-xs font-medium uppercase tracking-wider text-neutral-300">AIS Trajectory Radar</span>
                        </div>
                        <span class="text-[10px] font-medium text-neutral-500" data-route-corridor>Malacca-Suez Maritime Corridor</span>
                    </div>

                    {{-- Animated Maritime SVG Vector Graphic (ZERO GRADIENT) --}}
                    <div class="h-48 w-full rounded-xl bg-black border border-neutral-900 relative flex items-center justify-center overflow-hidden">
                        {{-- Background Grid --}}
                        <div class="absolute inset-0 opacity-[0.07] pointer-events-none">
                            <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <pattern id="sim-grid" width="24" height="24" patternUnits="userSpaceOnUse">
                                        <path d="M 24 0 L 0 0 0 24" fill="none" stroke="#FFFFFF" stroke-width="1" />
                                    </pattern>
                                </defs>
                                <rect width="100%" height="100%" fill="url(#sim-grid)" />
                            </svg>
                        </div>

                        {{-- Radar Compass Rings --}}
                        <div class="absolute w-36 h-36 rounded-full border border-neutral-800/80 pointer-events-none"></div>
                        <div class="absolute w-20 h-20 rounded-full border border-neutral-800/60 pointer-events-none"></div>

                        {{-- Dynamic Trajectory Line --}}
                        <svg class="w-full h-full relative z-10 px-8 py-6" viewBox="0 0 320 120" fill="none">
                            {{-- Trajectory Background Path --}}
                            <path
                                id="route-track"
                                d="M 40 90 Q 150 20 280 40"
                                stroke="#262626"
                                stroke-width="2"
                                stroke-linecap="round"
                            />
                            {{-- Animated Dashed Trajectory --}}
                            <path
                                d="M 40 90 Q 150 20 280 40"
                                stroke="#10B981"
                                stroke-width="2"
                                stroke-linecap="round"
                                class="animate-maritime-route"
                            />

                            {{-- Origin Anchor Marker --}}
                            <circle cx="40" cy="90" r="5" fill="#10B981" />
                            <circle cx="40" cy="90" r="9" stroke="#10B981" stroke-width="1" stroke-opacity="0.5" />
                            <text x="32" y="112" fill="#EDEDED" font-size="10" font-family="Inter, sans-serif" font-weight="bold" data-svg-origin>IDJKT</text>

                            {{-- Destination Anchor Marker --}}
                            <circle cx="280" cy="40" r="5" fill="#FFFFFF" />
                            <circle cx="280" cy="40" r="9" stroke="#FFFFFF" stroke-width="1" stroke-opacity="0.5" />
                            <text x="264" y="24" fill="#EDEDED" font-size="10" font-family="Inter, sans-serif" font-weight="bold" data-svg-dest>NLRTM</text>

                            {{-- Animated Ship Beacon Icon on Path --}}
                            <g class="transform transition-transform duration-700" style="transform: translate(150px, 46px);">
                                <rect x="-8" y="-8" width="16" height="16" rx="4" fill="#0A0A0A" stroke="#10B981" stroke-width="1.5" />
                                <circle cx="0" cy="0" r="3" fill="#10B981" />
                            </g>
                        </svg>

                        {{-- Dynamic Coordinates Badge --}}
                        <div class="absolute bottom-2.5 right-3 text-[9px] font-medium text-neutral-500 z-10">
                            COORD: <span class="text-neutral-300" data-coords>06°06'S, 106°52'E &rarr; 51°55'N, 04°29'E</span>
                        </div>
                    </div>

                    {{-- Live Calculated Telemetry Metrics --}}
                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div class="rounded-xl border border-neutral-800 bg-neutral-950 p-3.5">
                            <span class="block text-[10px] font-semibold uppercase text-neutral-500">Est. Ocean Transit</span>
                            <span class="text-xl font-bold font-sans text-white mt-1 block" data-transit-days>18 - 22 Days</span>
                            <span class="text-[10px] text-neutral-500 font-sans mt-0.5 block">Direct Liner Service</span>
                        </div>
                        <div class="rounded-xl border border-neutral-800 bg-neutral-950 p-3.5">
                            <span class="block text-[10px] font-semibold uppercase text-neutral-500">Nautical Distance</span>
                            <span class="text-xl font-bold font-sans text-white mt-1 block" data-transit-miles>8,450 NM</span>
                            <span class="text-[10px] text-neutral-500 font-sans mt-0.5 block">&plusmn; 15,650 Kilometers</span>
                        </div>
                    </div>

                    {{-- Incoterm Risk & Liability Dynamic Meter --}}
                    <div class="mt-4 p-4 rounded-xl border border-neutral-800 bg-neutral-950 space-y-2.5">
                        <div class="flex items-center justify-between text-xs font-medium">
                            <span class="text-neutral-400">Seller Allocation</span>
                            <span class="text-neutral-400">Buyer Allocation</span>
                        </div>
                        <div class="flex h-2 rounded-full overflow-hidden bg-neutral-900 border border-neutral-800">
                            <div class="bg-emerald-400 transition-all duration-300" style="width: 75%;" data-seller-bar></div>
                            <div class="bg-white transition-all duration-300" style="width: 25%;" data-buyer-bar></div>
                        </div>
                        <div class="flex items-center justify-between text-[11px] font-sans">
                            <span class="text-emerald-400 font-bold" data-seller-percent>75% Responsibility</span>
                            <span class="text-white font-bold" data-buyer-percent>25% Responsibility</span>
                        </div>
                    </div>

                    {{-- Gamified One-Click Apply to RFQ --}}
                    <div class="mt-6 pt-4 border-t border-neutral-800">
                        <button
                            type="button"
                            data-apply-rfq
                            class="w-full py-4 rounded-xl text-xs font-semibold uppercase tracking-widest text-black bg-white hover:bg-neutral-200 transition-all duration-150 flex items-center justify-center gap-2 shadow-sm active:scale-[0.98]"
                        >
                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span data-apply-rfq-text>Transfer Configuration to RFQ Form</span>
                        </button>
                        <p class="text-[10px] font-medium text-neutral-500 text-center mt-2.5">
                            Instantly syncs route, container spec &amp; Incoterm into the quotation engine below.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

