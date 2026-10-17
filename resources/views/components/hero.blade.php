@props(['data'])

<section id="home" class="relative min-h-screen flex items-center justify-center bg-black overflow-hidden pt-28 pb-20">
    {{-- Subtle Architectural Grid lines - ZERO GRADIENT, pure crisp solid lines --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.03]">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
            <defs>
                <pattern id="grid-pattern" width="56" height="56" patternUnits="userSpaceOnUse">
                    <path d="M 56 0 L 0 0 0 56" fill="none" stroke="#FFFFFF" stroke-width="1" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid-pattern)" />
        </svg>
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
        {{-- Corporate Status Badge --}}
        <div data-animate class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full border border-neutral-800 bg-neutral-900/70 text-neutral-300 text-xs font-medium mb-8">
            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
            <span class="text-neutral-400 font-semibold tracking-wider uppercase text-[11px]">PT VANGUARD PERDANA MARITIM</span>
            <span class="text-neutral-600">&bull;</span>
            <span class="text-neutral-300">Global Trade House &amp; Logistics</span>
        </div>

        {{-- Headline --}}
        <h1
            data-animate
            class="text-4xl sm:text-6xl lg:text-7xl font-bold text-white tracking-tight leading-[1.1] max-w-4xl mx-auto"
        >
            {{ $data['headline'] ?? 'Menghubungkan Komoditas Unggulan ke Pasar Internasional' }}
        </h1>

        {{-- Thin Line Divider --}}
        <div class="w-16 h-px bg-neutral-700 mx-auto my-8"></div>

        {{-- Subheadline --}}
        <p
            data-animate
            class="text-base sm:text-lg md:text-xl text-neutral-400 max-w-3xl mx-auto leading-relaxed font-normal"
        >
            {{ $data['subheadline'] ?? 'Mitra institusional terpercaya dalam tata kelola ekspor-impor komoditas, kepabeanan jalur hijau prioritas (AEO), dan manajemen logistik multimoda ke lebih dari 40 pelabuhan utama dunia.' }}
        </p>

        {{-- CTA Buttons --}}
        <div data-animate class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            @if(!empty($data['cta_primary']))
            <a
                href="{{ $data['cta_primary']['href'] ?? '#rfq' }}"
                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-xs font-semibold uppercase tracking-wider text-black bg-white hover:bg-neutral-200 rounded-full transition-all duration-150 shadow-sm"
            >
                {{ $data['cta_primary']['label'] ?? 'Konsultasi Ekspor Impor' }}
                <svg class="ml-2 w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
            @endif

            @if(!empty($data['cta_secondary']))
            <a
                href="{{ $data['cta_secondary']['href'] ?? '#about' }}"
                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-xs font-semibold uppercase tracking-wider text-neutral-300 border border-neutral-800 bg-neutral-900/60 hover:bg-neutral-800 hover:border-neutral-700 rounded-full transition-all duration-150"
            >
                {{ $data['cta_secondary']['label'] ?? 'Profil Perusahaan' }}
            </a>
            @endif
        </div>

        {{-- Clean Corporate Credential Strip --}}
        <div data-animate class="mt-16 pt-10 border-t border-neutral-900/80 grid grid-cols-2 sm:grid-cols-4 gap-4 text-left max-w-4xl mx-auto">
            <div class="p-3.5 rounded-2xl bg-neutral-950/60 border border-neutral-900">
                <span class="text-[11px] uppercase tracking-wider text-neutral-500 font-medium block">Kepabeanan</span>
                <span class="text-xs font-bold text-white mt-1 block">AEO Jalur Hijau</span>
                <span class="text-[10px] text-neutral-400 mt-0.5 block">EDI Pabean Prioritas</span>
            </div>
            <div class="p-3.5 rounded-2xl bg-neutral-950/60 border border-neutral-900">
                <span class="text-[11px] uppercase tracking-wider text-neutral-500 font-medium block">Pelayaran</span>
                <span class="text-xs font-bold text-white mt-1 block">Aliansi Tier-1</span>
                <span class="text-[10px] text-neutral-400 mt-0.5 block">Kontainer FCL &amp; Curah</span>
            </div>
            <div class="p-3.5 rounded-2xl bg-neutral-950/60 border border-neutral-900">
                <span class="text-[11px] uppercase tracking-wider text-neutral-500 font-medium block">Kontrak Dagang</span>
                <span class="text-xs font-bold text-white mt-1 block">Incoterms® 2020</span>
                <span class="text-[10px] text-neutral-400 mt-0.5 block">FOB, CIF, CFR, DDP</span>
            </div>
            <div class="p-3.5 rounded-2xl bg-neutral-950/60 border border-neutral-900">
                <span class="text-[11px] uppercase tracking-wider text-neutral-500 font-medium block">Jaminan Mutu</span>
                <span class="text-xs font-bold text-white mt-1 block">SGS &amp; Sucofindo</span>
                <span class="text-[10px] text-neutral-400 mt-0.5 block">Assay Pra-Pengapalan</span>
            </div>
        </div>
    </div>

    {{-- Subtle Animated Cargo Truck at bottom --}}
    <div class="absolute bottom-4 left-0 w-full pointer-events-none overflow-hidden" style="animation: truck-ltr 28s linear infinite;">
        <svg class="w-[64px] h-auto text-neutral-800" viewBox="0 0 120 50" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <rect x="0" y="8" width="72" height="28" rx="2" />
            <path d="M72 16 L72 36 L100 36 L100 24 L88 16 Z" />
            <rect x="100" y="28" width="6" height="8" rx="1" />
            <circle cx="18" cy="40" r="6" />
            <circle cx="52" cy="40" r="6" />
            <circle cx="90" cy="40" r="6" />
            <circle cx="18" cy="40" r="2.5" class="text-black" fill="currentColor" />
            <circle cx="52" cy="40" r="2.5" class="text-black" fill="currentColor" />
            <circle cx="90" cy="40" r="2.5" class="text-black" fill="currentColor" />
            <line x1="24" y1="8" x2="24" y2="36" stroke="black" stroke-width="1" opacity="0.4" />
            <line x1="48" y1="8" x2="48" y2="36" stroke="black" stroke-width="1" opacity="0.4" />
        </svg>
    </div>

    <style>
        @keyframes truck-ltr {
            0% { transform: translateX(-90px); }
            100% { transform: translateX(100vw); }
        }
    </style>
</section>