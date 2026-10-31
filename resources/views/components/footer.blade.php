@props(['company' => [], 'data' => []])

@php
$companyName = $company['name'] ?? 'Altara Niaga Indonesia';

// Kata pertama nama perusahaan (tanpa "PT") dipakai sebagai wordmark besar di dasar footer.
$wordmark = strtoupper(strtok(preg_replace('/^PT\.?\s+/i', '', $companyName), ' ') ?: 'ALTARA');

$links = !empty($data['links']) ? $data['links'] : [
'Perusahaan' => [
['label' => 'Tentang kami', 'href' => '#about'],
['label' => 'Komoditas', 'href' => '#commodities'],
['label' => 'Armada & logistik', 'href' => '#fleet-dispatch'],
['label' => 'Jaringan pelabuhan', 'href' => '#reach'],
],
];
@endphp

<footer class="relative overflow-hidden border-t border-white/10 bg-black text-neutral-400">
    <style>
        .anj-wordmark {
            font-size: clamp(4.5rem, 19vw, 19rem);
            line-height: .85;
            padding-bottom: 0.05em;
            white-space: nowrap;
            background: linear-gradient(180deg, rgba(255, 255, 255, .18) 0%, rgba(255, 255, 255, 0) 88%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>

    <div class="mx-auto max-w-7xl px-6 pt-16 lg:px-8">
        <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-12 lg:gap-8">

            {{-- Profil perusahaan --}}
            <div class="lg:col-span-4">
                <div class="mb-4 flex items-center gap-3">
                    <span class="font-display flex h-9 w-9 items-center justify-center rounded-xl bg-white text-base font-black text-black">
                        {{ strtoupper(substr($companyName, 0, 1)) }}
                    </span>
                    <h3 class="text-base font-bold tracking-tight text-white">{{ $companyName }}</h3>
                </div>
                <p class="mb-6 max-w-sm text-sm font-normal leading-relaxed text-neutral-400">
                    {{ $data['description'] ?? 'Badan usaha perdagangan internasional dan integrator logistik maritim multimoda yang menyediakan layanan sourcing komoditas terverifikasi, kepabeanan prioritas, dan freight forwarding global.' }}
                </p>

                @if (!empty($data['socials']))
                <div class="flex items-center gap-2">
                    @foreach ($data['socials'] as $social)
                    @php
                    $platform = strtolower($social['platform'] ?? $social['name'] ?? '');
                    $href = $social['href'] ?? '#';
                    @endphp
                    <a href="{{ $href }}"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="{{ ucfirst($platform) }}"
                        class="flex h-9 w-9 items-center justify-center rounded-xl border border-white/10 text-neutral-400 transition duration-150 hover:border-white/30 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300">
                        @if ($platform === 'linkedin')
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                        @elseif ($platform === 'twitter' || $platform === 'x')
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                        @elseif ($platform === 'instagram')
                        <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                        </svg>
                        @endif
                    </a>
                    @endforeach
                </div>
                @endif
            </div>

            {{-- Grup tautan --}}
            @foreach ($links as $key => $value)
            @php
            $groupTitle = is_string($key) ? $key : ($value['title'] ?? 'Tautan');
            $groupItems = is_array($value) && isset($value['items']) ? $value['items'] : (is_array($value) ? $value : []);
            @endphp
            <div class="lg:col-span-2">
                <h4 class="mb-4 text-sm font-semibold text-white">{{ $groupTitle }}</h4>
                <ul class="space-y-2.5">
                    @foreach ($groupItems as $link)
                    <li>
                        <a href="{{ $link['href'] ?? '#' }}" class="text-sm text-neutral-400 transition duration-150 hover:text-white">
                            {{ $link['label'] ?? '' }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach

            {{-- Kontak --}}
            <div class="sm:col-span-2 lg:col-span-4">
                <h4 class="mb-4 text-sm font-semibold text-white">Kantor pusat</h4>
                <ul class="space-y-3 text-sm">
                    @if (!empty($company['email']))
                    <li class="flex items-start gap-2.5">
                        <span class="font-medium text-neutral-500">Email</span>
                        <a href="mailto:{{ $company['email'] }}" class="text-neutral-300 transition duration-150 hover:text-white">{{ $company['email'] }}</a>
                    </li>
                    @endif
                    @if (!empty($company['phone']))
                    <li class="flex items-start gap-2.5">
                        <span class="font-medium text-neutral-500">Telepon</span>
                        <a href="tel:{{ $company['phone'] }}" class="text-neutral-300 transition duration-150 hover:text-white">{{ $company['phone'] }}</a>
                    </li>
                    @endif
                    @if (!empty($company['address']))
                    <li class="flex items-start gap-2.5">
                        <span class="font-medium text-neutral-500">Alamat</span>
                        <span class="leading-relaxed text-neutral-300">{{ $company['address'] }}</span>
                    </li>
                    @endif
                </ul>
            </div>
        </div>

        {{-- Baris bawah --}}
        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 sm:flex-row">
            <p class="text-sm font-medium text-neutral-500">
                &copy; {{ date('Y') }} {{ $companyName }}. Seluruh hak cipta dilindungi.
            </p>
            <div class="flex items-center gap-6 text-sm font-medium text-neutral-500">
                <a href="#about" class="transition hover:text-neutral-200">Tentang kami</a>
                <a href="#commodities" class="transition hover:text-neutral-200">Komoditas</a>
                <a href="#contact" class="transition hover:text-neutral-200">Kontak</a>
            </div>
        </div>
    </div>

    {{-- Wordmark besar: elemen penutup yang tegas, dekoratif saja --}}
    <div aria-hidden="true" class="pointer-events-none mt-10 select-none overflow-hidden text-center">
        <div class="anj-wordmark font-display font-black tracking-tighter [font-stretch:112%]">{{ $wordmark }}</div>
    </div>
</footer>