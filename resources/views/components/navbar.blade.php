@props(['company' => [], 'navigation' => []])

@php
$brand = $company['short_name'] ?? $company['name'] ?? 'Altara Niaga Indonesia';
$initial = strtoupper(substr(preg_replace('/^PT\.?\s+/i', '', $company['name'] ?? $brand), 0, 1));

$menu = !empty($navigation) ? $navigation : [
    ['label' => 'Tentang', 'href' => '#about'],
    ['label' => 'Layanan', 'href' => '#services'],
    ['label' => 'Komoditas', 'href' => '#commodities'],
    ['label' => 'Armada', 'href' => '#fleet-dispatch'],
    ['label' => 'Jaringan', 'href' => '#reach'],
];
@endphp

<header class="pointer-events-none fixed inset-x-0 top-0 z-50 px-4 pt-5 sm:px-6">
    <nav
        data-navbar
        aria-label="Navigasi utama"
        class="pointer-events-auto mx-auto max-w-5xl rounded-full border border-white/10 bg-neutral-950/80 px-6 py-3 shadow-[0_20px_50px_-20px_rgba(0,0,0,0.8)] backdrop-blur-xl transition-all duration-300">
        <div class="flex items-center justify-between gap-6">

            {{-- Brand / Identitas Perusahaan --}}
            <a href="#home" class="group flex items-center gap-3 rounded-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300">
                <span class="font-display flex h-8 w-8 items-center justify-center rounded-xl bg-white text-xs font-black tracking-wider text-black transition-transform duration-200 group-hover:scale-105">
                    {{ $initial }}
                </span>
                <span class="text-sm font-semibold tracking-tight text-white transition-colors duration-200 group-hover:text-neutral-300">
                    Altara Niaga<span class="hidden xl:inline text-neutral-400 font-normal"> Indonesia</span>
                </span>
            </a>

            {{-- Navigasi Desktop: Bersih, Renggang & Minimalis --}}
            <div class="hidden items-center gap-7 lg:flex xl:gap-9">
                @foreach ($menu as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="text-[13px] font-medium tracking-wide text-neutral-400 transition-colors duration-200 hover:text-white focus-visible:outline-none focus-visible:text-white">
                    {{ $item['label'] }}
                </a>
                @endforeach
            </div>

            {{-- Aksi Utama: Tombol Kontak yang Elegan --}}
            <div class="hidden items-center lg:flex">
                <a
                    href="#rfq"
                    class="group inline-flex items-center gap-1.5 rounded-full bg-white px-4 py-2 text-xs font-semibold tracking-wide text-black transition-all duration-200 hover:bg-neutral-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 focus-visible:ring-offset-2 focus-visible:ring-offset-black active:scale-95">
                    <span>Hubungi Kami</span>
                    <svg class="h-3 w-3 text-black/70 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            {{-- Toggle Menu Mobile --}}
            <button
                data-mobile-toggle
                type="button"
                class="inline-flex h-9 w-9 items-center justify-center rounded-full text-neutral-400 transition hover:bg-white/10 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 lg:hidden"
                aria-label="Buka atau tutup menu navigasi">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path class="hamburger-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    <path class="hamburger-close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Dropdown Menu Mobile: Lebih Lega & Terstruktur --}}
        <div data-mobile-menu class="mt-4 hidden border-t border-white/10 pt-4 lg:hidden">
            <div class="flex flex-col space-y-1">
                @foreach ($menu as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="rounded-xl px-4 py-3 text-sm font-medium text-neutral-300 transition duration-150 hover:bg-white/5 hover:text-white">
                    {{ $item['label'] }}
                </a>
                @endforeach
            </div>

            <div class="mt-3 border-t border-white/10 pt-4 pb-2">
                <a
                    href="#rfq"
                    class="flex w-full items-center justify-center gap-2 rounded-full bg-white py-3 text-center text-sm font-semibold text-black transition hover:bg-neutral-200 active:scale-95">
                    <span>Konsultasi &amp; RFQ</span>
                    <svg class="h-3.5 w-3.5 text-black/70" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </nav>
</header>

