@props(['company', 'navigation'])

<nav
    data-navbar
    class="fixed top-0 left-0 right-0 z-50 bg-[#1B2A4A] border-b border-white/10 transition-all duration-300"
>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            {{-- Brand / Company Logo --}}
            <a href="#home" class="flex items-center gap-3 group">
                <span class="w-9 h-9 bg-[#C8A962] text-[#1B2A4A] flex items-center justify-center font-bold text-base tracking-wider">
                    {{ substr($company['name'] ?? 'T', 0, 1) }}
                </span>
                <div class="flex flex-col">
                    <span class="text-xl font-bold tracking-tight text-white group-hover:text-[#C8A962] transition duration-150">
                        {{ $company['name'] ?? 'TradeCorp' }}
                    </span>
                    @if(!empty($company['tagline']))
                        <span class="text-[10px] text-white/50 font-medium tracking-widest uppercase">
                            {{ $company['tagline'] }}
                        </span>
                    @endif
                </div>
            </a>

            {{-- Desktop Navigation --}}
            <div class="hidden lg:flex items-center space-x-8">
                @foreach($navigation as $item)
                    <a
                        href="{{ $item['href'] }}"
                        class="text-sm font-medium text-white/80 hover:text-[#C8A962] transition-colors duration-150 tracking-wide"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <a
                    href="#contact"
                    class="ml-4 inline-flex items-center px-5 py-2.5 text-xs font-semibold uppercase tracking-wider text-[#1B2A4A] bg-[#C8A962] hover:bg-[#b89a55] transition-colors duration-150"
                >
                    Request Quote
                </a>
            </div>

            {{-- Mobile Hamburger Button --}}
            <button
                data-mobile-toggle
                type="button"
                class="lg:hidden inline-flex items-center justify-center w-10 h-10 text-white hover:text-[#C8A962] focus:outline-none"
                aria-label="Toggle navigation"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
    </div>

    {{-- Mobile Menu Dropdown --}}
    <div
        data-mobile-menu
        class="lg:hidden hidden bg-[#142038] border-t border-white/10"
    >
        <div class="max-w-7xl mx-auto px-6 py-6 space-y-4">
            @foreach($navigation as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="block text-base font-medium text-white/80 hover:text-[#C8A962] transition-colors duration-150"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach

            <div class="pt-4 border-t border-white/10">
                <a
                    href="#contact"
                    class="block w-full text-center px-6 py-3 text-xs font-semibold uppercase tracking-wider text-[#1B2A4A] bg-[#C8A962] hover:bg-[#b89a55] transition-colors duration-150"
                >
                    Request Quote
                </a>
            </div>
        </div>
    </div>
</nav>
