@props(['data'])

<section id="home" class="relative min-h-screen flex items-center justify-center bg-[#1B2A4A] overflow-hidden pt-20">
    {{-- Subtle Architectural Grid lines - ZERO GRADIENT, pure crisp solid geometric lines --}}
    <div class="absolute inset-0 pointer-events-none opacity-5">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
            <defs>
                <pattern id="grid-pattern" width="64" height="64" patternUnits="userSpaceOnUse">
                    <path d="M 64 0 L 0 0 0 64" fill="none" stroke="#FFFFFF" stroke-width="1" />
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid-pattern)" />
        </svg>
    </div>

    {{-- Content --}}
    <div class="relative z-10 max-w-5xl mx-auto px-6 py-24 text-center">
        {{-- Micro-badge / Industry Tag --}}
        <div data-animate class="inline-flex items-center gap-2 px-3.5 py-1.5 border border-[#C8A962]/40 bg-[#1B2A4A] text-[#C8A962] text-xs font-semibold uppercase tracking-widest mb-8">
            <span class="w-1.5 h-1.5 bg-[#C8A962] inline-block"></span>
            International Trade &amp; Freight Infrastructure
        </div>

        {{-- Headline --}}
        <h1
            data-animate
            class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight max-w-4xl mx-auto tracking-tight"
        >
            {{ $data['headline'] ?? 'Your Trusted Partner in Global Trade' }}
        </h1>

        {{-- Gold Accent Divider --}}
        <div data-animate class="flex justify-center mt-8 mb-8">
            <div class="w-20 h-0.5 bg-[#C8A962]"></div>
        </div>

        {{-- Subheadline --}}
        <p
            data-animate
            class="text-base sm:text-lg md:text-xl text-white/70 max-w-2xl mx-auto leading-relaxed"
        >
            {{ $data['subheadline'] ?? '' }}
        </p>

        {{-- CTA Buttons --}}
        <div data-animate class="mt-12 flex flex-col sm:flex-row items-center justify-center gap-4">
            @if(!empty($data['cta_primary']))
                <a
                    href="{{ $data['cta_primary']['href'] ?? '#contact' }}"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-sm font-semibold uppercase tracking-wider text-[#1B2A4A] bg-[#C8A962] hover:bg-[#b89a55] transition duration-200"
                >
                    {{ $data['cta_primary']['label'] ?? 'Request a Quote' }}
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            @endif

            @if(!empty($data['cta_secondary']))
                <a
                    href="{{ $data['cta_secondary']['href'] ?? '#services' }}"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 text-sm font-medium uppercase tracking-wider text-white border border-white/20 hover:border-white/50 hover:bg-white/5 transition duration-200"
                >
                    {{ $data['cta_secondary']['label'] ?? 'Our Capabilities' }}
                </a>
            @endif
        </div>

        {{-- Key Trust Indicators --}}
        <div data-animate class="mt-16 pt-12 border-t border-white/10 grid grid-cols-2 md:grid-cols-4 gap-6 text-left">
            <div>
                <span class="block text-xs uppercase tracking-wider text-white/40 font-medium">Clearance</span>
                <span class="text-sm font-semibold text-white mt-1 block">100% Customs Compliant</span>
            </div>
            <div>
                <span class="block text-xs uppercase tracking-wider text-white/40 font-medium">Logistics</span>
                <span class="text-sm font-semibold text-white mt-1 block">Multi-Modal Freight</span>
            </div>
            <div>
                <span class="block text-xs uppercase tracking-wider text-white/40 font-medium">Terms</span>
                <span class="text-sm font-semibold text-white mt-1 block">Full Incoterms Coverage</span>
            </div>
            <div>
                <span class="block text-xs uppercase tracking-wider text-white/40 font-medium">Network</span>
                <span class="text-sm font-semibold text-white mt-1 block">Global Port Reach</span>
            </div>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
        <span class="text-[10px] text-white/40 uppercase tracking-widest font-semibold">Explore</span>
        <div class="animate-bounce">
            <svg class="w-4 h-4 text-white/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </div>
</section>
