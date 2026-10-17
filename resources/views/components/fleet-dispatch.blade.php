<section id="fleet-dispatch" class="py-28 lg:py-36 bg-black border-t border-neutral-900 text-white relative overflow-hidden" data-fleet-simulator>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="max-w-3xl mb-14" data-animate>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-neutral-800 bg-neutral-900/70 text-xs font-semibold text-neutral-300 mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                <span>MANAJEMEN ARMADA &amp; LOGISTIK DARAT</span>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                Simulasi Pergerakan Armada Kontainer &amp; Port Drayage
            </h2>
            <p class="mt-4 text-base text-neutral-400 leading-relaxed font-normal">
                Uji coba alur mobil pengangkut kontainer dari kawasan industri mitra, melewati penimbangan jembatan tol, validasi pabean jalur hijau, hingga tiba di dermaga pelabuhan ekspor.
            </p>
        </div>

        {{-- Main Enterprise Simulator Card --}}
        <div class="rounded-3xl border border-neutral-800 bg-neutral-950 p-6 sm:p-10 shadow-2xl relative" data-animate>

            {{-- 1. Vehicle Selector (Clean Corporate Cards) --}}
            <div class="mb-10">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4">
                    <span class="text-xs uppercase tracking-widest font-semibold text-neutral-400">
                        Pilihan Armada Pengangkut
                    </span>
                    <span class="text-xs font-semibold text-emerald-400" data-active-vehicle-title>
                        Heavy Prime Mover 40ft (Gandeng Kontainer)
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4" data-vehicle-selector-group>
                    {{-- Prime Mover --}}
                    <button
                        type="button"
                        data-vehicle="prime-mover"
                        data-name="Heavy Prime Mover 40ft"
                        data-power="540 HP Diesel Euro 6"
                        data-payload="40ft High-Cube • 32.4 MT"
                        data-speed-max="90"
                        class="p-5 rounded-2xl border border-white bg-white text-black text-left transition-all duration-150 flex items-start gap-4 active:scale-[0.99]"
                    >
                        <div class="w-10 h-10 rounded-xl bg-neutral-900 text-white flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25m-2.25 0V5.625c0-.621-.504-1.125-1.125-1.125H5.25c-.621 0-1.125.504-1.125 1.125v12.249M12 14.25h-1.5m-6-6h9"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold leading-tight">Prime Mover 40ft</div>
                            <div class="text-xs text-neutral-600 font-medium mt-1">Gandar 3 Poros Antar-Pelabuhan</div>
                            <div class="text-[11px] font-semibold text-emerald-700 mt-1">Kapasitas: 32.4 Metrik Ton</div>
                        </div>
                    </button>

                    {{-- Reefer Truck --}}
                    <button
                        type="button"
                        data-vehicle="reefer-truck"
                        data-name="Mobil Truk Box Pendingin"
                        data-power="300 HP Thermo King (-25°C)"
                        data-payload="20ft Cold-Chain • 14.2 MT"
                        data-speed-max="105"
                        class="p-5 rounded-2xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-left transition-all duration-150 flex items-start gap-4 active:scale-[0.99]"
                    >
                        <div class="w-10 h-10 rounded-xl bg-neutral-800 text-neutral-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006A2.25 2.25 0 0118.75 16.5H5.25a2.25 2.25 0 01-2.25-2.25m16.5 0c.264 0 .52-.047.75-.133M3 14.15a2.18 2.18 0 01-.75-1.661V8.706c0-1.081.768-2.015 1.837-2.175a48.114 48.114 0 013.413-.387m-4.5 8.006A2.25 2.25 0 005.25 16.5h13.5a2.25 2.25 0 002.25-2.25m-18 0c-.264 0-.52-.047-.75-.133"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white leading-tight">Truk Box Cold-Chain</div>
                            <div class="text-xs text-neutral-500 font-medium mt-1">Pendingin Suhu Stabil (-25°C)</div>
                            <div class="text-[11px] font-semibold text-neutral-400 mt-1">Kapasitas: 14.2 Metrik Ton</div>
                        </div>
                    </button>

                    {{-- EV Drayage --}}
                    <button
                        type="button"
                        data-vehicle="ev-drayage"
                        data-name="Mobil Truk Listrik Pelabuhan (EV)"
                        data-power="600 kW Dual Electric Motor"
                        data-payload="40ft Intermodal • 30.0 MT"
                        data-speed-max="95"
                        class="p-5 rounded-2xl border border-neutral-800 bg-neutral-900/60 text-neutral-400 hover:border-neutral-700 hover:text-white text-left transition-all duration-150 flex items-start gap-4 active:scale-[0.99]"
                    >
                        <div class="w-10 h-10 rounded-xl bg-neutral-800 text-neutral-300 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold text-white leading-tight">Truk Listrik Pelabuhan (EV)</div>
                            <div class="text-xs text-neutral-500 font-medium mt-1">Zero-Emission Terminal Drayage</div>
                            <div class="text-[11px] font-semibold text-neutral-400 mt-1">Kapasitas: 30.0 Metrik Ton</div>
                        </div>
                    </button>
                </div>
            </div>

            {{-- Hidden Spans for State Storage --}}
            <span class="sr-only" data-vehicle-spec-power>540 HP Diesel Euro 6</span>
            <span class="sr-only" data-vehicle-spec-payload>40ft High-Cube • 32.4 MT</span>
            <span class="sr-only" data-gear-p>P</span>
            <span class="sr-only" data-gear-r>R</span>
            <span class="sr-only" data-gear-n>N</span>
            <span class="sr-only" data-gear-d>D</span>

            {{-- 2. Visual Animation Road Canvas --}}
            <div class="rounded-2xl border border-neutral-800 bg-[#000000] p-6 lg:p-8 relative overflow-hidden mb-8">
                {{-- Road Top Corridor Info --}}
                <div class="flex items-center justify-between text-xs text-neutral-400 mb-6">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                        <span class="font-medium text-white">Rute Logistik:</span>
                        <span>Kawasan Industri MM2100 &rarr; Tol Pelabuhan &rarr; Dermaga Priok</span>
                    </div>
                    <div class="hidden sm:flex items-center gap-2">
                        <span class="text-neutral-500">Estimasi Tiba:</span>
                        <span class="text-white font-bold" id="eta-value">28 MENIT</span>
                    </div>
                </div>

                {{-- Interactive Animated Truck Track --}}
                <div class="relative py-12 flex items-center justify-center">
                    {{-- Checkpoint Tag Floating --}}
                    <div id="checkpoint-marker-post" class="absolute top-2 right-12 transition-opacity duration-300 opacity-0 pointer-events-none">
                        <div id="checkpoint-tag-text" class="px-3 py-1 rounded-full bg-neutral-900 border border-neutral-700 text-xs font-semibold text-white shadow-lg">
                            <span>Jembatan Timbang Tol</span>
                        </div>
                    </div>

                    {{-- Truck SVG Element --}}
                    <div id="truck-body" class="relative z-10 transition-transform duration-100 flex items-center justify-center">
                        <svg class="w-72 sm:w-96 h-auto drop-shadow-2xl" viewBox="0 0 340 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                            {{-- Container Trailer Box --}}
                            <rect id="container-box-body" x="10" y="24" width="210" height="66" rx="4" fill="#171717" stroke="#333333" stroke-width="2"/>
                            {{-- Brand Badge on Container --}}
                            <rect id="container-brand-badge" x="22" y="36" width="120" height="24" rx="3" fill="#000000" stroke="#404040" stroke-width="1.5"/>
                            <text id="container-brand-text" x="32" y="52" fill="#FFFFFF" font-size="9" font-weight="700" letter-spacing="1">VANGUARD FCL</text>
                            {{-- Container Vertical Ribs --}}
                            <line x1="80" y1="26" x2="80" y2="88" stroke="#262626" stroke-width="1.5"/>
                            <line x1="145" y1="26" x2="145" y2="88" stroke="#262626" stroke-width="1.5"/>
                            <line x1="190" y1="26" x2="190" y2="88" stroke="#262626" stroke-width="1.5"/>

                            {{-- Trailer Chassis & Mudguard --}}
                            <rect x="10" y="88" width="215" height="6" fill="#262626"/>

                            {{-- Truck Cabin --}}
                            <path id="truck-cabin-body" d="M228 32 C228 26 234 22 242 22 L280 22 C295 22 308 34 314 50 L322 72 C325 80 320 90 310 90 L228 90 Z" fill="#FFFFFF"/>
                            {{-- Cabin Window --}}
                            <path d="M246 28 L278 28 C288 28 296 36 300 48 L254 48 C248 48 244 44 244 38 Z" fill="#171717"/>
                            {{-- Headlight --}}
                            <rect x="318" y="70" width="6" height="8" rx="2" fill="#FACC15"/>
                            {{-- Rear Brake Light --}}
                            <rect id="brake-light-rear" x="8" y="74" width="4" height="10" rx="1" fill="#404040"/>

                            {{-- Wheels --}}
                            <g class="truck-wheel">
                                <circle cx="48" cy="98" r="14" fill="#0A0A0A" stroke="#404040" stroke-width="2"/>
                                <circle cx="48" cy="98" r="6" fill="#262626"/>
                            </g>
                            <g class="truck-wheel">
                                <circle cx="86" cy="98" r="14" fill="#0A0A0A" stroke="#404040" stroke-width="2"/>
                                <circle cx="86" cy="98" r="6" fill="#262626"/>
                            </g>
                            <g class="truck-wheel">
                                <circle cx="180" cy="98" r="14" fill="#0A0A0A" stroke="#404040" stroke-width="2"/>
                                <circle cx="180" cy="98" r="6" fill="#262626"/>
                            </g>
                            <g class="truck-wheel">
                                <circle cx="270" cy="98" r="14" fill="#0A0A0A" stroke="#404040" stroke-width="2"/>
                                <circle cx="270" cy="98" r="6" fill="#262626"/>
                            </g>

                            {{-- Horn Blast Wave Effect --}}
                            <circle id="horn-blast-effect" cx="324" cy="74" r="16" fill="none" stroke="#FFFFFF" stroke-width="2" class="opacity-0 transition-opacity duration-150"/>
                        </svg>
                    </div>

                    {{-- Road Surface --}}
                    <div class="absolute bottom-4 left-0 right-0">
                        <div class="w-full h-1 bg-neutral-800"></div>
                        <div id="road-lane-stripes" class="w-full h-1.5 border-b-2 border-dashed border-neutral-600 mt-2"></div>
                    </div>
                </div>

                {{-- Status Message --}}
                <div id="current-checkpoint-status-text" class="text-center text-xs text-neutral-400 mt-4">
                    <strong>Armada siap berangkat menuju pelabuhan. Tekan tombol kontrol di bawah.</strong>
                </div>
            </div>

            {{-- 3. Telemetry & Checkpoint Tracker --}}
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-8">
                <div class="p-4 rounded-2xl bg-neutral-900/40 border border-neutral-800 text-center">
                    <span class="text-[11px] uppercase tracking-wider text-neutral-500 font-medium block">Kecepatan Armada</span>
                    <span class="text-2xl font-bold text-white mt-1 block">
                        <span id="speed-meter-value">0</span> <span class="text-xs font-normal text-neutral-400">KM/H</span>
                    </span>
                </div>
                <div class="p-4 rounded-2xl bg-neutral-900/40 border border-neutral-800 text-center">
                    <span class="text-[11px] uppercase tracking-wider text-neutral-500 font-medium block">Jarak Tempuh</span>
                    <span class="text-2xl font-bold text-white mt-1 block" id="odometer-value">
                        0.0 KM
                    </span>
                </div>
                <div class="p-4 rounded-2xl bg-neutral-900/40 border border-neutral-800 text-center">
                    <span class="text-[11px] uppercase tracking-wider text-neutral-500 font-medium block">Progress Jalur</span>
                    <span class="text-2xl font-bold text-emerald-400 mt-1 block" id="progress-percentage-label">
                        0%
                    </span>
                </div>
                <div class="p-4 rounded-2xl bg-neutral-900/40 border border-neutral-800 text-center">
                    <span class="text-[11px] uppercase tracking-wider text-neutral-500 font-medium block">Status Bea Cukai</span>
                    <span class="text-xs font-bold text-white mt-2.5 block">
                        AEO Jalur Hijau
                    </span>
                </div>
            </div>

            {{-- Progress Bar --}}
            <div class="w-full bg-neutral-900 h-2 rounded-full overflow-hidden mb-8">
                <div id="progress-bar-fill" class="bg-white h-full transition-all duration-150" style="width: 0%;"></div>
            </div>

            {{-- Checkpoint Milestones Strip --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 mb-8">
                <div id="step-checkpoint-1" class="flex items-center gap-2.5 text-xs text-neutral-400">
                    <span class="w-5 h-5 rounded-full bg-neutral-900 border border-neutral-800 flex items-center justify-center font-bold text-[10px] text-white">1</span>
                    <span>1. Segel Pabrik Asal</span>
                </div>
                <div id="step-checkpoint-2" class="flex items-center gap-2.5 text-xs text-neutral-500">
                    <span class="w-5 h-5 rounded-full bg-neutral-900 border border-neutral-800 flex items-center justify-center font-bold text-[10px] text-neutral-400">2</span>
                    <span>2. Jembatan Timbang Tol</span>
                </div>
                <div id="step-checkpoint-3" class="flex items-center gap-2.5 text-xs text-neutral-500">
                    <span class="w-5 h-5 rounded-full bg-neutral-900 border border-neutral-800 flex items-center justify-center font-bold text-[10px] text-neutral-400">3</span>
                    <span>3. Bea Cukai AEO</span>
                </div>
                <div id="step-checkpoint-4" class="flex items-center gap-2.5 text-xs text-neutral-500">
                    <span class="w-5 h-5 rounded-full bg-neutral-900 border border-neutral-800 flex items-center justify-center font-bold text-[10px] text-neutral-400">4</span>
                    <span>4. Dermaga STS Crane</span>
                </div>
            </div>

            {{-- 4. Interactive Action Controls (Clean Corporate Buttons) --}}
            <div class="flex flex-wrap items-center justify-center gap-3 pt-6 border-t border-neutral-900">
                {{-- Dispatch Autopilot Button --}}
                <button
                    type="button"
                    id="btn-cruise-dispatch"
                    class="px-6 py-3.5 rounded-full bg-white text-black font-semibold text-xs uppercase tracking-wider hover:bg-neutral-200 transition-all flex items-center gap-2 shadow-sm"
                >
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    <span id="btn-cruise-label">Jalankan Armada Otomatis</span>
                </button>

                {{-- Manual Acceleration --}}
                <button
                    type="button"
                    id="btn-gas-pedal"
                    class="px-5 py-3.5 rounded-full bg-neutral-900 border border-neutral-800 text-white font-medium text-xs hover:border-neutral-700 transition"
                >
                    Akselerasi (+16 km/h)
                </button>

                {{-- Brake --}}
                <button
                    type="button"
                    id="btn-brake-pedal"
                    class="px-5 py-3.5 rounded-full bg-neutral-900 border border-neutral-800 text-neutral-300 font-medium text-xs hover:border-neutral-700 transition"
                >
                    Rem / Perlambat
                </button>

                {{-- Horn --}}
                <button
                    type="button"
                    id="btn-horn"
                    class="px-4 py-3.5 rounded-full bg-neutral-900 border border-neutral-800 text-neutral-400 font-medium text-xs hover:text-white transition"
                    title="Klakson Truk"
                >
                    Klakson
                </button>
            </div>

            {{-- 5. Mission Success Banner (When arrived at Port) --}}
            <div id="mission-success-banner" class="hidden mt-8 p-6 rounded-2xl bg-neutral-900 border border-emerald-600/70 text-center">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-950 text-emerald-300 text-xs font-semibold mb-3">
                    <span>✓ Kargo Tiba Sesuai Jadwal (On-Time Delivery)</span>
                </div>
                <h4 class="text-lg font-bold text-white mb-2">Muatan Berhasil Diantar ke Dermaga Pelabuhan Internasional!</h4>
                <p class="text-xs text-neutral-400 max-w-lg mx-auto mb-6">
                    Kontainer lolos penimbangan gandar dan validasi jalur hijau. Siap dimuat ke atas kapal kontainer menuju pelabuhan tujuan ekspor.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                    <button
                        type="button"
                        id="btn-transfer-truck-to-rfq"
                        class="px-6 py-3 rounded-full bg-white text-black font-semibold text-xs uppercase tracking-wider hover:bg-neutral-200 transition"
                    >
                        Terapkan Armada ke Permintaan Penawaran (RFQ)
                    </button>
                    <button
                        type="button"
                        id="btn-replay-simulator"
                        class="px-5 py-3 rounded-full bg-neutral-950 border border-neutral-800 text-neutral-400 font-medium text-xs hover:text-white transition"
                    >
                        Ulangi Rute
                    </button>
                </div>
            </div>

        </div>

    </div>
</section>
