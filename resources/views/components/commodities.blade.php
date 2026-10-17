@props(['data' => []])

@php
    $label = $data['label'] ?? 'DIVISI KOMODITAS PERDAGANGAN';
    $headline = $data['headline'] ?? 'Sektor Komoditas Ekspor & Impor Unggulan';
    $description = $data['description'] ?? 'Portofolio komoditas perdagangan dengan jaminan sertifikat surveyor independen, kemasan standar ekspor, dan fleksibilitas termin kontrak.';
    $items = $data['items'] ?? [];
@endphp

<section id="commodities" class="py-28 lg:py-36 bg-black border-t border-neutral-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        {{-- Section Header --}}
        <div class="max-w-3xl mb-16" data-animate>
            @if($label)
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-neutral-800 bg-neutral-900/70 text-xs font-semibold text-neutral-300 mb-5">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                    <span>{{ $label }}</span>
                </div>
            @endif
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                {{ $headline }}
            </h2>
            @if($description)
                <p class="mt-4 text-base text-neutral-400 leading-relaxed font-normal">
                    {{ $description }}
                </p>
            @endif
        </div>

        {{-- Commodities Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($items as $item)
                <div
                    data-animate
                    class="rounded-3xl border border-neutral-800/90 bg-neutral-950 p-8 sm:p-9 hover:border-neutral-700 transition-all duration-200 flex flex-col justify-between"
                >
                    <div>
                        {{-- Top Code Pill --}}
                        <div class="flex items-center justify-between gap-4 mb-5">
                            <span class="rounded-full border border-neutral-800 bg-neutral-900 px-3.5 py-1 text-[11px] font-semibold tracking-wider text-neutral-300">
                                {{ $item['code'] ?? 'COMMODITY CODE' }}
                            </span>
                            <span class="w-2 h-2 rounded-full bg-emerald-400 inline-block"></span>
                        </div>

                        {{-- Sector Title --}}
                        <h3 class="text-xl font-bold text-white mb-3">
                            {{ $item['sector'] ?? '' }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-sm text-neutral-400 leading-relaxed mb-6 font-normal">
                            {{ $item['description'] ?? '' }}
                        </p>
                    </div>

                    {{-- Specs & Packaging Box --}}
                    <div class="rounded-2xl bg-neutral-900/40 border border-neutral-800/70 p-4 space-y-2 text-xs">
                        <div class="flex items-start gap-2">
                            <span class="font-semibold text-neutral-300 min-w-[95px]">Standar Kemas:</span>
                            <span class="text-neutral-400">{{ $item['packaging'] ?? 'Custom FCL / Bulk' }}</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="font-semibold text-neutral-300 min-w-[95px]">Uji Surveyor:</span>
                            <span class="text-neutral-400">{{ $item['inspections'] ?? 'SGS / Sucofindo Accredited' }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Bottom Guidance Box --}}
        <div data-animate class="mt-12 p-8 sm:p-10 rounded-3xl border border-neutral-800 bg-neutral-950 flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h4 class="font-bold text-base sm:text-lg text-white">Membutuhkan Komoditas Khusus atau Pengadaan Terstruktur?</h4>
                <p class="text-xs sm:text-sm text-neutral-400 mt-1 max-w-xl">Kami memfasilitasi pengadaan komoditas kustom, pencocokan spesifikasi teknis, serta pengapalan uji coba ke seluruh dunia.</p>
            </div>
            <a
                href="#rfq"
                class="flex-shrink-0 px-7 py-3.5 rounded-full text-xs font-semibold uppercase tracking-wider bg-white text-black hover:bg-neutral-200 transition-all shadow-sm"
            >
                Konsultasi Komoditas
            </a>
        </div>
    </div>
</section>
