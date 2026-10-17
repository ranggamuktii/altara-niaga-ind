@props(['company', 'navigation'])

<header class="fixed top-0 left-0 right-0 z-50 px-4 pt-4 pointer-events-none">
    <nav
        data-navbar
        class="max-w-6xl mx-auto pointer-events-auto rounded-full border border-neutral-800/90 bg-[#0A0A0A]/90 backdrop-blur-md px-5 py-3 shadow-2xl transition-all duration-300"
    >
        <div class="flex items-center justify-between">
            {{-- Brand / Company Logo --}}
            <a href="#home" class="flex items-center gap-3 group">
                <span class="w-8 h-8 rounded-full bg-white text-black flex items-center justify-center font-bold text-xs tracking-wider shadow-sm group-hover:scale-105 transition-transform">
                    {{ substr($company['name'] ?? 'V', 0, 1) }}
                </span>
                <span class="text-sm font-semibold tracking-tight text-white group-hover:text-neutral-300 transition">
                    {{ $company['short_name'] ?? $company['name'] ?? 'Vanguard Trade' }}
                </span>
            </a>

            {{-- Desktop Navigation Links --}}
            <div class="hidden lg:flex items-center space-x-1">
                @foreach($navigation as $item)
                    <a
                        href="{{ $item['href'] }}"
                        class="text-xs font-medium text-neutral-400 hover:text-white px-3 py-1.5 rounded-full hover:bg-neutral-900 transition-colors duration-150"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            {{-- Action Button --}}
            <div class="hidden lg:flex items-center">
                <a
                    href="#rfq"
                    class="inline-flex items-center rounded-full bg-white text-black font-semibold text-xs px-4 py-2 hover:bg-neutral-200 transition-all duration-150 shadow-sm"
                >
                    Hubungi Kami
                </a>
            </div>

            {{-- Mobile Hamburger Button --}}
            <button
                data-mobile-toggle
                type="button"
                class="lg:hidden inline-flex items-center justify-center w-9 h-9 rounded-full text-neutral-400 hover:text-white hover:bg-neutral-900 focus:outline-none transition"
                aria-label="Toggle navigation"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        class="hamburger-open"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                    <path
                        class="hamburger-close hidden"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.5"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>

        {{-- Mobile Dropdown Menu --}}
        <div
            data-mobile-menu
            class="lg:hidden hidden mt-4 pt-4 border-t border-neutral-800/80 space-y-2"
        >
            @foreach($navigation as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="block text-sm font-medium text-neutral-300 hover:text-white px-3 py-2 rounded-xl hover:bg-neutral-900 transition"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach

            <div class="pt-3 border-t border-neutral-800">
                <a
                    href="#rfq"
                    class="block w-full text-center py-2.5 rounded-xl text-xs font-semibold bg-white text-black hover:bg-neutral-200 transition"
                >
                    Konsultasi &amp; RFQ
                </a>
            </div>
        </div>
    </nav>
</header>
