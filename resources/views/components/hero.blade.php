@props(['data'])

<section id="home" class="relative min-h-screen flex items-center justify-center bg-black overflow-hidden pt-32 pb-20">
    {{-- Subtle Architectural Grid lines - ZERO GRADIENT, pure crisp solid geometric lines --}}
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
        {{-- Micro-badge / Industry Status --}}
        <div data-animate class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-neutral-800 bg-neutral-900/70 text-neutral-300 text-xs font-medium mb-8 shadow-sm">
            <span class="w-2 h-2 rounded-full bg-emerald-400 inline-block"></span>
            <span class="text-neutral-400 text-[11px] font-semibold tracking-wider">LIVE DISPATCH</span>
            <span class="text-neutral-600">&bull;</span>
            <span>40+ Global Trade Corridors Active</span>
        </div>

        {{-- Headline --}}
        <h1
            data-animate
            class="text-4xl sm:text-6xl lg:text-7xl font-bold text-white leading-[1.08] max-w-4xl mx-auto tracking-tight">
            {{ $data['headline'] ?? 'Premier Gateway for Cross-Border Bulk Trade' }}
        </h1>

        {{-- Subheadline --}}
        <p
            data-animate
            class="mt-6 text-base sm:text-lg md:text-xl text-neutral-400 max-w-2xl mx-auto leading-relaxed font-normal">
            {{ $data['subheadline'] ?? '' }}
        </p>

        {{-- CTA Buttons --}}
        <div data-animate class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-3">
            @if(!empty($data['cta_primary']))
            <a
                href="{{ $data['cta_primary']['href'] ?? '#rfq' }}"
                class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3.5 text-xs font-semibold uppercase tracking-wider text-black bg-white hover:bg-neutral-200 rounded-full transition-all duration-150 shadow-sm">
                {{ $data['cta_primary']['label'] ?? 'Request Quotation (RFQ)' }}
                <svg class="ml-2 w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
            @endif

            @if(!empty($data['cta_secondary']))
            <a
                href="{{ $data['cta_secondary']['href'] ?? '#commodities' }}"
                class="w-full sm:w-auto inline-flex items-center justify-center px-7 py-3.5 text-xs font-medium uppercase tracking-wider text-neutral-300 border border-neutral-800 bg-neutral-900/50 hover:bg-neutral-800 hover:border-neutral-700 rounded-full transition-all duration-150">
                {{ $data['cta_secondary']['label'] ?? 'Trading Divisions' }}
            </a>
            @endif
        </div>

        {{-- Key Trust Metrics Cards --}}
        <div data-animate class="mt-20 grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 p-5 text-left hover:border-neutral-700 transition">
                <span class="block text-[11px] uppercase tracking-wider font-medium text-neutral-400">Customs Brokerage</span>
                <span class="text-sm font-semibold text-white mt-1.5 block">100% AEO Compliant</span>
                <span class="text-[11px] text-neutral-400 mt-1 block">Priority Green-Lane EDI</span>
            </div>
            <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 p-5 text-left hover:border-neutral-700 transition">
                <span class="block text-[11px] uppercase tracking-wider font-medium text-neutral-400">Ocean Freight</span>
                <span class="text-sm font-semibold text-white mt-1.5 block">Tier-1 Shipping Alliances</span>
                <span class="text-[11px] text-neutral-400 mt-1 block">FCL, LCL &amp; Breakbulk</span>
            </div>
            <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 p-5 text-left hover:border-neutral-700 transition">
                <span class="block text-[11px] uppercase tracking-wider font-medium text-neutral-400">Contract Standards</span>
                <span class="text-sm font-semibold text-white mt-1.5 block">Incoterms 2020 Ready</span>
                <span class="text-[11px] text-neutral-400 mt-1 block">FOB, CIF, CFR, EXW, DDP</span>
            </div>
            <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 p-5 text-left hover:border-neutral-700 transition">
                <span class="block text-[11px] uppercase tracking-wider font-medium text-neutral-400">Cargo Quality</span>
                <span class="text-sm font-semibold text-white mt-1.5 block">SGS &amp; Sucofindo Assay</span>
                <span class="text-[11px] text-neutral-400 mt-1 block">Certified Origin Guarantee</span>
            </div>
        </div>
    </div>
</section>