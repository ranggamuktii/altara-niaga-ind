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
['label' => 'Incoterms', 'href' => '#incoterms'],
];
@endphp

<header class="pointer-events-none fixed inset-x-0 top-0 z-50 px-4 pt-4">
    <nav
        data-navbar
        aria-label="Navigasi utama"
        class="pointer-events-auto mx-auto max-w-6xl rounded-[28px] border border-white/10 bg-black/70 px-5 py-3 shadow-[0_20px_60px_-20px_rgba(0,0,0,0.9)] backdrop-blur-xl transition-all duration-300">
        <div class="flex items-center justify-between gap-4">

            {{-- Merek --}}
            <a href="#home" class="group flex items-center gap-3 rounded-full focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300">
                <span class="font-display flex h-8 w-8 items-center justify-center rounded-xl bg-white text-sm font-black text-black">
                    {{ $initial }}
                </span>
                <span class="text-sm font-semibold tracking-tight text-white transition group-hover:text-neutral-300">
                    {{ $brand }}
                </span>
            </a>

            {{-- Tautan desktop --}}
            <div class="hidden items-center gap-1 lg:flex">
                @foreach ($menu as $item)
                <a
                    href="{{ $item['href'] }}"
                    class="rounded-full px-3.5 py-1.5 text-sm font-medium text-neutral-400 transition-colors duration-150 hover:bg-white/5 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300">
                    {{ $item['label'] }}
                </a>
                @endforeach
            </div>

            {{-- Tombol aksi --}}
            <div class="hidden items-center lg:flex">
                <a
                    href="#rfq"
                    class="inline-flex items-center rounded-full bg-white px-5 py-2 text-sm font-semibold text-black transition hover:bg-neutral-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 focus-visible:ring-offset-2 focus-visible:ring-offset-black active:scale-95">
                    Hubungi Kami
                </a>
            </div>

            {{-- Hamburger mobile --}}
            <button
                data-mobile-toggle
                type="button"
                class="inline-flex h-9 w-9 items-center justify-center rounded-full text-neutral-400 transition hover:bg-white/5 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 lg:hidden"
                aria-label="Buka atau tutup menu navigasi">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path class="hamburger-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    <path class="hamburger-close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Menu mobile --}}
        <div data-mobile-menu class="mt-4 hidden space-y-1 border-t border-white/10 pt-4 lg:hidden">
            @foreach ($menu as $item)
            <a
                href="{{ $item['href'] }}"
                class="block rounded-xl px-3 py-2.5 text-sm font-medium text-neutral-300 transition hover:bg-white/5 hover:text-white">
                {{ $item['label'] }}
            </a>
            @endforeach

            <div class="pt-3">
                <a
                    href="#rfq"
                    class="block w-full rounded-full bg-white py-3 text-center text-sm font-semibold text-black transition hover:bg-neutral-200 active:scale-95">
                    Konsultasi &amp; RFQ
                </a>
            </div>
        </div>
    </nav>
</header>