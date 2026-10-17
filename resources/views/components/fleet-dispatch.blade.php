<section id="fleet-dispatch" class="py-24 lg:py-32 bg-black border-t border-neutral-900 text-white relative overflow-hidden" data-fleet-simulator>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="max-w-3xl mb-14" data-animate>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs font-medium text-neutral-400 mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                <span>FIRST-MILE PORT DRAYAGE SIMULATOR</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                Simulasi &amp; Gamifikasi Mobil Truk Kontainer
            </h2>
            <p class="mt-4 text-sm sm:text-base text-neutral-400 leading-relaxed font-normal">
                Kendalikan mobil pengangkut kontainer ekspor-impor dari pabrik manufaktur, lewati jembatan timbang gandar, validasi gerbang pabean Bea Cukai (AEO Fast Track), hingga tiba di dermaga gantry crane pelabuhan internasional.
            </p>
        </div>

        {{-- Main Simulator Bento Box --}}
        <div class="rounded-3xl border border-neutral-800 bg-neutral-950 p-6 lg:p-10 shadow-2xl relative">

            {{-- 1. Vehicle Selection Bar --}}
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <span class="text-xs font-semibold uppercase tracking-wider text-neutral-400">
                        1. Pilih Mobil Armada Kontainer
                    </span>
                    <span class="text-xs font-semibold text-emerald-400" data-active-vehicle-title>
                        Heavy Prime Mover 40ft (Gandeng Kontainer)
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3" data-vehicle-selector-group>
                    {{-- Vehicle Option 1 --}}
                    <button
                        type="button"
                        data-vehicle="prime-mover"
                        data-name="Heavy Prime Mover 40ft"
                        data-power="540 HP Diesel Euro 6"
                        data-payload="40ft High-Cube • 32.4 MT"
                        data-speed-max="90"
                        class="p-4 rounded-2xl border border-white bg-white text-black text-left transition-all duration-150 flex items-start gap-4 active:scale-[0.99]"
                    >
                        <div class="w-10 h-10 rounded-xl bg-neutral-900 text-white flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25m-2.25 0V5.625c0-.621-.504-1.125-1.125-1.125H5.25c-.621 0-1.125.504-1.125 1.125v12.249M12 14.25h-1.5m-6-6h9"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold leading-tight">Prime Mover 40ft</div>
                            <div class="text-xs text-neutral-600 font-medium mt-1">Truk Gandeng Gandar 3 Poros</div>
                            <div class="text-[11px] font-semibold text-emerald-700 mt-1">40' High-Cube (32.4 MT)</div>
                        </div>
                    </button>

                    {{-- Vehicle Option 2 --}}
                    <button
                        type="button"
                        data-vehicle="reefer-truck"
                        data-name="Mobil Truk Box Pendingin"
                        data-power="300 HP Thermo King (-25°C)"
                        data-payload="20ft Cold-Chain • 14.2 MT"
                        data-speed-max="105"
                        class="p-4 rounded-2xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-left transition-all duration-150 flex items-start gap-4 active:scale-[0.99]"
                    >
                        <div class="w-10 h-10 rounded-xl bg-neutral-800 text-neutral-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006A2.25 2.25 0 0118.75 16.5H5.25a2.25 2.25 0 01-2.25-2.25m16.5 0c.264 0 .52-.047.75-.133M3 14.15a2.18 2.18 0 01-.75-1.661V8.706c0-1.081.768-2.015 1.837-2.175a48.114 48.114 0 013.413-.387m-4.5 8.006A2.25 2.25 0 005.25 16.5h13.5a2.25 2.25 0 002.25-2.25m-18 0c-.264 0-.52-.047-.75-.133"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white leading-tight">Truk Box Cold-Chain</div>
                            <div class="text-xs text-neutral-500 font-medium mt-1">Pendingin Termo Suhu Konstan</div>
                            <div class="text-[11px] font-semibold text-neutral-400 mt-1">20' Reefer (14.2 MT)</div>
                        </div>
                    </button>

                    {{-- Vehicle Option 3 --}}
                    <button
                        type="button"
                        data-vehicle="ev-drayage"
                        data-name="Mobil Truk Listrik Pelabuhan (EV)"
                        data-power="600 kW Dual Electric Motor"
                        data-payload="40ft Intermodal • 30.0 MT"
                        data-speed-max="95"
                        class="p-4 rounded-2xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-left transition-all duration-150 flex items-start gap-4 active:scale-[0.99]"
                    >
                        <div class="w-10 h-10 rounded-xl bg-neutral-800 text-neutral-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white leading-tight">Truk Listrik EV Drayage</div>
                            <div class="text-xs text-neutral-500 font-medium mt-1">Zero-Carbon Port Shifter</div>
                            <div class="text-[11px] font-semibold text-neutral-400 mt-1">40' Intermodal (30.0 MT)</div>
                        </div>
                    </button>
                </div>
            </div>

            {{-- 2. Animated Road Track & Truck Graphic Arena (ZERO GRADIENT) --}}
            <div class="relative w-full rounded-2xl bg-[#050505] border border-neutral-800 overflow-hidden mb-8 shadow-inner select-none">

                {{-- Overhead Highway Indicator Banner --}}
                <div class="absolute top-3 left-4 right-4 z-20 flex items-center justify-between text-xs font-semibold">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-neutral-900/90 border border-neutral-700/80 text-neutral-200">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span>Jalur Tol Pelabuhan Tanjung Priok &bull; KM 14.8</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="px-2.5 py-1 rounded-md bg-neutral-900 border border-neutral-800 text-[11px] text-neutral-400">
                            Batas Kecepatan: <span class="text-white font-bold">100 KM/H</span>
                        </span>
                        <span class="px-2.5 py-1 rounded-md bg-neutral-900 border border-neutral-800 text-[11px] text-neutral-400">
                            Status Jalur: <span class="text-emerald-400 font-bold">LANCAR</span>
                        </span>
                    </div>
                </div>

                {{-- Visual Horn Blast Ripple (Hidden by default, triggered on Klakson) --}}
                <div
                    id="horn-blast-effect"
                    class="absolute top-1/2 left-[48%] -translate-y-1/2 -translate-x-1/2 pointer-events-none z-30 opacity-0 transition-opacity duration-150"
                >
                    <div class="relative flex items-center justify-center">
                        <div class="w-24 h-24 rounded-full border-2 border-white animate-horn-wave"></div>
                        <div class="w-16 h-16 rounded-full border-2 border-emerald-400 animate-horn-wave"></div>
                        <span class="absolute px-3 py-1 rounded-full bg-white text-black font-extrabold text-xs tracking-wider shadow-lg">
                            BEEP BEEP! 📢
                        </span>
                    </div>
                </div>

                {{-- Road Surface & Animated Striping Canvas --}}
                <div class="h-64 sm:h-72 w-full relative flex items-center overflow-hidden">

                    {{-- Distant Sky / Industrial Port Skyline Silhouette --}}
                    <div class="absolute top-0 left-0 right-0 h-28 opacity-20 pointer-events-none">
                        <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 800 120" fill="none">
                            <path d="M0 120 L0 80 L30 80 L40 60 L70 60 L80 80 L120 80 L130 50 L160 50 L170 80 L220 80 L230 40 L260 40 L280 80 L350 80 L370 70 L400 70 L420 80 L500 80 L520 30 L550 30 L580 80 L650 80 L670 60 L710 60 L730 80 L800 80 L800 120 Z" fill="#404040"/>
                            {{-- Port STS Crane Silhouette in Background --}}
                            <path d="M680 80 L690 20 L730 20 L720 80 M690 35 L750 35 M710 35 L710 50" stroke="#606060" stroke-width="2"/>
                            <path d="M740 80 L750 15 L790 15 L780 80 M750 30 L800 30" stroke="#606060" stroke-width="2"/>
                        </svg>
                    </div>

                    {{-- Upper Highway Guardrail --}}
                    <div class="absolute top-24 left-0 right-0 h-1.5 bg-neutral-800 border-b border-neutral-700/80"></div>

                    {{-- Asphalt Roadbed --}}
                    <div class="absolute bottom-0 left-0 right-0 h-40 sm:h-44 bg-[#0A0A0A] border-t-2 border-neutral-800">

                        {{-- Moving Dashed Centerline (Animated via CSS) --}}
                        <div class="absolute top-1/2 -translate-y-1/2 left-0 w-[200%] h-2.5 overflow-hidden flex items-center" id="road-lane-container">
                            <div class="w-full h-1.5 border-b-2 border-dashed border-neutral-400/80" id="road-lane-stripes"></div>
                        </div>

                        {{-- Lower Highway Shoulder & Rumble Strip --}}
                        <div class="absolute bottom-0 left-0 right-0 h-2 bg-neutral-900 border-t border-neutral-800"></div>
                    </div>

                    {{-- Detailed Vector Mobil Truk Kontainer (CSS Controlled Position & Animation) --}}
                    <div
                        id="truck-vehicle-container"
                        class="absolute bottom-8 sm:bottom-10 left-[18%] sm:left-[22%] z-20 transition-transform duration-300"
                    >
                        {{-- Truck Graphic Body with Suspension Bounce --}}
                        <div id="truck-body" class="relative">

                            {{-- SVG Vector Mobil Truk Kontainer --}}
                            <svg class="w-64 sm:w-80 h-auto" viewBox="0 0 340 140" fill="none" xmlns="http://www.w3.org/2000/svg">

                                {{-- Headlight Beam shining forward onto the road --}}
                                <polygon points="315,92 340,82 340,118 315,104" fill="#FFFFFF" opacity="0.12" id="headlight-beam" />

                                {{-- PRIME MOVER TRUCK VARIANT --}}
                                <g id="vehicle-art-prime">
                                    {{-- 40ft Shipping Container Mounted on Trailer --}}
                                    <rect x="15" y="24" width="210" height="76" rx="4" fill="#171717" stroke="#333333" stroke-width="2" id="container-box-body"/>
                                    {{-- Corrugated Container Ridges --}}
                                    <line x1="35" y1="26" x2="35" y2="98" stroke="#262626" stroke-width="2"/>
                                    <line x1="55" y1="26" x2="55" y2="98" stroke="#262626" stroke-width="2"/>
                                    <line x1="75" y1="26" x2="75" y2="98" stroke="#262626" stroke-width="2"/>
                                    <line x1="95" y1="26" x2="95" y2="98" stroke="#262626" stroke-width="2"/>
                                    <line x1="115" y1="26" x2="115" y2="98" stroke="#262626" stroke-width="2"/>
                                    <line x1="135" y1="26" x2="135" y2="98" stroke="#262626" stroke-width="2"/>
                                    <line x1="155" y1="26" x2="155" y2="98" stroke="#262626" stroke-width="2"/>
                                    <line x1="175" y1="26" x2="175" y2="98" stroke="#262626" stroke-width="2"/>
                                    <line x1="195" y1="26" x2="195" y2="98" stroke="#262626" stroke-width="2"/>

                                    {{-- Brand Monogram on Container Side --}}
                                    <rect x="70" y="48" width="100" height="26" rx="3" fill="#000000" stroke="#404040" stroke-width="1" id="container-brand-badge"/>
                                    <text x="120" y="65" fill="#FFFFFF" font-size="11" font-weight="800" text-anchor="middle" font-family="Inter, sans-serif" letter-spacing="1" id="container-brand-text">VANGUARD FCL</text>

                                    {{-- ISO Container Corner Castings --}}
                                    <rect x="16" y="25" width="8" height="8" fill="#404040"/>
                                    <rect x="216" y="25" width="8" height="8" fill="#404040"/>
                                    <rect x="16" y="91" width="8" height="8" fill="#404040"/>
                                    <rect x="216" y="91" width="8" height="8" fill="#404040"/>

                                    {{-- Trailer Steel Chassis / Flatbed --}}
                                    <rect x="10" y="100" width="220" height="8" rx="2" fill="#262626"/>

                                    {{-- Mudguards Trailer --}}
                                    <path d="M 30 102 A 16 16 0 0 1 70 102" stroke="#404040" stroke-width="3" fill="none"/>
                                    <path d="M 70 102 A 16 16 0 0 1 110 102" stroke="#404040" stroke-width="3" fill="none"/>

                                    {{-- Prime Mover Cabin Body --}}
                                    <path d="M 230 100 L 230 38 L 285 38 L 305 65 L 315 95 L 315 106 L 230 106 Z" fill="#FFFFFF" stroke="#D4D4D4" stroke-width="2" id="truck-cabin-body"/>

                                    {{-- Cabin Windshield Glass --}}
                                    <path d="M 278 44 L 298 67 L 270 67 L 270 44 Z" fill="#0A0A0A" stroke="#262626" stroke-width="1.5"/>

                                    {{-- Front Chrome Bumper & Air Grill --}}
                                    <rect x="295" y="78" width="18" height="24" rx="2" fill="#171717" stroke="#404040" stroke-width="1"/>
                                    <line x1="298" y1="84" x2="310" y2="84" stroke="#737373" stroke-width="1.5"/>
                                    <line x1="298" y1="90" x2="310" y2="90" stroke="#737373" stroke-width="1.5"/>
                                    <line x1="298" y1="96" x2="310" y2="96" stroke="#737373" stroke-width="1.5"/>

                                    {{-- Headlight --}}
                                    <rect x="310" y="88" width="5" height="12" rx="1.5" fill="#FFFFFF" />

                                    {{-- Cabin Side Step & Fuel Tank --}}
                                    <rect x="236" y="94" width="30" height="10" rx="3" fill="#404040"/>

                                    {{-- Rear Tail Brake Light --}}
                                    <rect x="10" y="96" width="3" height="10" rx="1" fill="#EF4444" id="brake-light-rear"/>
                                </g>

                                {{-- Trailer Wheels --}}
                                <g class="truck-wheel" transform="translate(50, 114)">
                                    <circle cx="0" cy="0" r="14" fill="#0A0A0A" stroke="#404040" stroke-width="4"/>
                                    <circle cx="0" cy="0" r="7" fill="#262626"/>
                                    <line x1="-5" y1="0" x2="5" y2="0" stroke="#FFFFFF" stroke-width="2" class="wheel-spoke"/>
                                    <line x1="0" y1="-5" x2="0" y2="5" stroke="#FFFFFF" stroke-width="2" class="wheel-spoke"/>
                                </g>
                                <g class="truck-wheel" transform="translate(90, 114)">
                                    <circle cx="0" cy="0" r="14" fill="#0A0A0A" stroke="#404040" stroke-width="4"/>
                                    <circle cx="0" cy="0" r="7" fill="#262626"/>
                                    <line x1="-5" y1="0" x2="5" y2="0" stroke="#FFFFFF" stroke-width="2" class="wheel-spoke"/>
                                    <line x1="0" y1="-5" x2="0" y2="5" stroke="#FFFFFF" stroke-width="2" class="wheel-spoke"/>
                                </g>

                                {{-- Drive Axle Wheels --}}
                                <g class="truck-wheel" transform="translate(245, 114)">
                                    <circle cx="0" cy="0" r="14" fill="#0A0A0A" stroke="#404040" stroke-width="4"/>
                                    <circle cx="0" cy="0" r="7" fill="#262626"/>
                                    <line x1="-5" y1="0" x2="5" y2="0" stroke="#FFFFFF" stroke-width="2" class="wheel-spoke"/>
                                    <line x1="0" y1="-5" x2="0" y2="5" stroke="#FFFFFF" stroke-width="2" class="wheel-spoke"/>
                                </g>

                                {{-- Front Steering Wheels --}}
                                <g class="truck-wheel" transform="translate(295, 114)">
                                    <circle cx="0" cy="0" r="14" fill="#0A0A0A" stroke="#404040" stroke-width="4"/>
                                    <circle cx="0" cy="0" r="7" fill="#262626"/>
                                    <line x1="-5" y1="0" x2="5" y2="0" stroke="#FFFFFF" stroke-width="2" class="wheel-spoke"/>
                                    <line x1="0" y1="-5" x2="0" y2="5" stroke="#FFFFFF" stroke-width="2" class="wheel-spoke"/>
                                </g>

                            </svg>
                        </div>
                    </div>

                    {{-- Checkpoint Flag Post Moving across the Road Track --}}
                    <div
                        id="checkpoint-marker-post"
                        class="absolute bottom-10 right-[-100px] z-10 flex flex-col items-center pointer-events-none transition-all duration-700 opacity-0"
                    >
                        <div class="px-3 py-1.5 rounded-xl bg-white text-black text-[11px] font-bold shadow-lg border border-neutral-300 whitespace-nowrap flex items-center gap-1.5" id="checkpoint-tag-text">
                            <span>⚖️ Jembatan Timbang</span>
                        </div>
                        <div class="w-1 h-16 bg-neutral-600 mt-1"></div>
                        <div class="w-6 h-2 rounded-full bg-neutral-800"></div>
                    </div>

                </div>

                {{-- Track Status Footer Strip --}}
                <div class="px-6 py-3 bg-neutral-900/80 border-t border-neutral-800 flex flex-wrap items-center justify-between text-xs gap-3">
                    <div class="flex items-center gap-4">
                        <span class="text-neutral-400">
                            Spesifikasi Armada: <strong class="text-white font-semibold" data-vehicle-spec-power>540 HP Diesel Euro 6</strong>
                        </span>
                        <span class="text-neutral-700">|</span>
                        <span class="text-neutral-400">
                            Muatan Kargo: <strong class="text-emerald-400 font-semibold" data-vehicle-spec-payload>40ft High-Cube • 32.4 MT</strong>
                        </span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-neutral-500">Transmisi:</span>
                        <div class="flex items-center gap-1 text-[11px] font-bold">
                            <span class="px-1.5 py-0.5 rounded bg-neutral-800 text-neutral-500" data-gear-p>P</span>
                            <span class="px-1.5 py-0.5 rounded bg-neutral-800 text-neutral-500" data-gear-r>R</span>
                            <span class="px-1.5 py-0.5 rounded bg-neutral-800 text-neutral-500" data-gear-n>N</span>
                            <span class="px-1.5 py-0.5 rounded bg-emerald-500 text-black font-extrabold" data-gear-d>D</span>
                        </div>
                    </div>
                </div>

            </div>

            {{-- 3. Game Cockpit Controls & Telemetry Gauge --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch mb-8">

                {{-- Left: Pedal Controls & Horn --}}
                <div class="lg:col-span-5 rounded-2xl border border-neutral-800 bg-neutral-900/40 p-6 flex flex-col justify-between space-y-6">
                    <div>
                        <span class="text-xs font-semibold uppercase tracking-wider text-neutral-400 block mb-3">
                            2. Kendali Pedal &amp; Klakson Mobil
                        </span>
                        <p class="text-xs text-neutral-400 leading-relaxed font-normal mb-5">
                            Tekan tombol <strong>GAS MOBIL</strong> untuk melaju ke dermaga pelabuhan. Gunakan <strong>REM</strong> untuk deselerasi dan <strong>KLAKSON</strong> untuk membunyikan sirine jalur steril.
                        </p>

                        <div class="grid grid-cols-2 gap-3">
                            {{-- Gas Pedal Button --}}
                            <button
                                type="button"
                                id="btn-gas-pedal"
                                class="py-4 px-5 rounded-2xl bg-white hover:bg-neutral-200 text-black font-bold text-sm uppercase tracking-wider flex items-center justify-center gap-2.5 transition active:scale-[0.96] shadow-sm select-none"
                            >
                                <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 5l7 7-7 7M5 5l7 7-7 7"/>
                                </svg>
                                <span>GAS MOBIL!</span>
                            </button>

                            {{-- Brake Pedal Button --}}
                            <button
                                type="button"
                                id="btn-brake-pedal"
                                class="py-4 px-5 rounded-2xl bg-neutral-800 hover:bg-neutral-700 text-white font-bold text-sm uppercase tracking-wider flex items-center justify-center gap-2 transition active:scale-[0.96] border border-neutral-700 select-none"
                            >
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span>REM</span>
                            </button>
                        </div>
                    </div>

                    {{-- Horn & Fast Autopilot --}}
                    <div class="grid grid-cols-2 gap-3 pt-4 border-t border-neutral-800/80">
                        <button
                            type="button"
                            id="btn-horn"
                            class="py-3 px-4 rounded-xl border border-neutral-700 bg-neutral-800 hover:bg-neutral-700/80 text-white text-xs font-semibold flex items-center justify-center gap-2 transition active:scale-95"
                        >
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/>
                            </svg>
                            <span>KLAKSON TRUK</span>
                        </button>

                        <button
                            type="button"
                            id="btn-cruise-dispatch"
                            class="py-3 px-4 rounded-xl border border-emerald-500/50 bg-emerald-950/40 hover:bg-emerald-900/50 text-emerald-300 text-xs font-semibold flex items-center justify-center gap-2 transition active:scale-95"
                        >
                            <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <span id="btn-cruise-label">AUTOPILOT RUN</span>
                        </button>
                    </div>
                </div>

                {{-- Center: Speedometer Digital Instrument Cluster --}}
                <div class="lg:col-span-4 rounded-2xl border border-neutral-800 bg-neutral-900/40 p-6 flex flex-col justify-between">
                    <div>
                        <span class="text-xs font-semibold uppercase tracking-wider text-neutral-400 block mb-4 text-center">
                            Speedometer &bull; Digital Cluster
                        </span>

                        <div class="flex flex-col items-center justify-center py-2">
                            <div class="relative w-36 h-36 rounded-full border-4 border-neutral-800 flex flex-col items-center justify-center bg-black">
                                {{-- Speed value --}}
                                <span class="text-4xl font-extrabold text-white tracking-tight leading-none" id="speed-meter-value">0</span>
                                <span class="text-[11px] font-semibold text-neutral-500 uppercase mt-1">KM / H</span>
                                {{-- RPM Arc Indicator --}}
                                <div class="absolute inset-1 rounded-full border border-neutral-800/80 pointer-events-none"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-t border-neutral-800/80 grid grid-cols-2 gap-2 text-center text-xs">
                        <div class="rounded-lg bg-neutral-950 p-2 border border-neutral-800/60">
                            <span class="text-neutral-500 block text-[10px]">JARAK TEMPUH</span>
                            <span class="font-bold text-white text-sm mt-0.5 block" id="odometer-value">0.0 KM</span>
                        </div>
                        <div class="rounded-lg bg-neutral-950 p-2 border border-neutral-800/60">
                            <span class="text-neutral-500 block text-[10px]">ESTIMASI TIBA (ETA)</span>
                            <span class="font-bold text-emerald-400 text-sm mt-0.5 block" id="eta-value">28 MENIT</span>
                        </div>
                    </div>
                </div>

                {{-- Right: Checkpoint & Progress Status --}}
                <div class="lg:col-span-3 rounded-2xl border border-neutral-800 bg-neutral-900/40 p-6 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-xs font-semibold uppercase tracking-wider text-neutral-400">
                                Progres ke Dermaga
                            </span>
                            <span class="text-xs font-bold text-white" id="progress-percentage-label">0%</span>
                        </div>

                        {{-- Progress Bar --}}
                        <div class="w-full h-2.5 rounded-full bg-neutral-950 border border-neutral-800 overflow-hidden mb-5">
                            <div id="progress-bar-fill" class="h-full bg-emerald-400 transition-all duration-200" style="width: 0%;"></div>
                        </div>

                        <div class="space-y-3">
                            {{-- Checkpoint 1 --}}
                            <div class="flex items-center gap-2.5 text-xs text-neutral-400" id="step-checkpoint-1">
                                <span class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 border border-emerald-500/40 flex items-center justify-center font-bold text-[10px] flex-shrink-0">✓</span>
                                <span class="leading-tight">1. Segel Pabrik Asal</span>
                            </div>
                            {{-- Checkpoint 2 --}}
                            <div class="flex items-center gap-2.5 text-xs text-neutral-500" id="step-checkpoint-2">
                                <span class="w-5 h-5 rounded-full bg-neutral-800 text-neutral-400 border border-neutral-700 flex items-center justify-center font-bold text-[10px] flex-shrink-0">2</span>
                                <span class="leading-tight">2. Jembatan Timbang Tol</span>
                            </div>
                            {{-- Checkpoint 3 --}}
                            <div class="flex items-center gap-2.5 text-xs text-neutral-500" id="step-checkpoint-3">
                                <span class="w-5 h-5 rounded-full bg-neutral-800 text-neutral-400 border border-neutral-700 flex items-center justify-center font-bold text-[10px] flex-shrink-0">3</span>
                                <span class="leading-tight">3. Gerbang Bea Cukai (AEO)</span>
                            </div>
                            {{-- Checkpoint 4 --}}
                            <div class="flex items-center gap-2.5 text-xs text-neutral-500" id="step-checkpoint-4">
                                <span class="w-5 h-5 rounded-full bg-neutral-800 text-neutral-400 border border-neutral-700 flex items-center justify-center font-bold text-[10px] flex-shrink-0">4</span>
                                <span class="leading-tight">4. Dermaga Kapal Pelabuhan</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-t border-neutral-800/80">
                        <div class="text-[11px] text-neutral-400" id="current-checkpoint-status-text">
                            Status: <strong class="text-white">Menunggu keberangkatan armada di pabrik.</strong>
                        </div>
                    </div>
                </div>

            </div>

            {{-- 4. Mission Accomplished Banner (Hidden initially, shown when 100% reached) --}}
            <div id="mission-success-banner" class="hidden mt-6 p-6 sm:p-8 rounded-2xl border border-emerald-500/40 bg-neutral-900/90 text-white transition-all duration-300">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-500 text-black flex items-center justify-center font-bold text-2xl flex-shrink-0">
                            ✓
                        </div>
                        <div>
                            <div class="inline-flex items-center gap-2 px-2.5 py-0.5 rounded-full bg-emerald-950 border border-emerald-700 text-[10px] font-bold text-emerald-300 uppercase mb-1">
                                MISI DRAYAGE BERHASIL
                            </div>
                            <h3 class="text-xl sm:text-2xl font-bold text-white tracking-tight">
                                Truk &amp; Kontainer Telah Tiba di Dermaga Pelabuhan!
                            </h3>
                            <p class="text-xs sm:text-sm text-neutral-300 mt-1 max-w-xl font-normal leading-relaxed">
                                Kontainer telah diverifikasi timbangan gandar dan lolos pemeriksaan pabean Bea Cukai jalur hijau. STS Gantry Crane siap memindahkan kontainer ke kapal kargo internasional.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-2.5 w-full sm:w-auto">
                        <button
                            type="button"
                            id="btn-transfer-truck-to-rfq"
                            class="py-3.5 px-6 rounded-xl bg-white hover:bg-neutral-200 text-black font-bold text-xs uppercase tracking-wider transition active:scale-95 shadow-md flex items-center justify-center gap-2 whitespace-nowrap"
                        >
                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                            <span>Pindahkan Armada ke RFQ</span>
                        </button>
                        <button
                            type="button"
                            id="btn-replay-simulator"
                            class="py-3.5 px-4 rounded-xl border border-neutral-700 bg-neutral-800 hover:bg-neutral-700 text-white text-xs font-semibold transition active:scale-95 whitespace-nowrap"
                        >
                            Kemudikan Lagi 🔄
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

