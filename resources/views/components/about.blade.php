@props(['data'])

<section id="about" class="py-28 lg:py-36 bg-black border-t border-neutral-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="max-w-3xl mb-16" data-animate>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-neutral-800 bg-neutral-900/70 text-xs font-semibold text-neutral-300 mb-5">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                <span>{{ $data['label'] ?? 'PROFIL PERUSAHAAN' }}</span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15]">
                {{ $data['headline'] ?? 'Membangun Reputasi Perdagangan Global dengan Integritas dan Standar Kepatuhan Tertinggi' }}
            </h2>

            <p class="mt-6 text-base sm:text-lg text-neutral-400 leading-relaxed font-normal">
                {{ $data['description'] ?? 'PT Vanguard Maritime & Trade Corp beroperasi sebagai trading house dan integrator logistik maritim yang menghubungkan komoditas unggulan dengan jaringan pembeli global terpercaya.' }}
            </p>
        </div>

        {{-- Visi & Misi Bento Grid (Essential Company Profile Pillars) --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-16" data-animate>
            {{-- Vision Card --}}
            <div class="lg:col-span-5 rounded-3xl border border-neutral-800 bg-neutral-950 p-8 sm:p-10 flex flex-col justify-between hover:border-neutral-700 transition-all duration-200">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-neutral-900 border border-neutral-800 flex items-center justify-center text-white mb-6">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <span class="text-xs uppercase tracking-widest font-semibold text-neutral-500 block mb-2">Visi Perusahaan</span>
                    <h3 class="text-xl font-bold text-white mb-4">Menjadi Integrator Rantai Pasok Terdepan di Asia Tenggara</h3>
                    <p class="text-neutral-400 text-sm leading-relaxed">
                        {{ $data['vision'] ?? 'Menjadi perusahaan perdagangan internasional dan manajemen logistik ekspor-impor terkemuka yang diakui atas keunggulan operasional, kepatuhan hukum, dan integritas tanpa kompromi.' }}
                    </p>
                </div>
                <div class="mt-8 pt-6 border-t border-neutral-900 flex items-center gap-3 text-xs text-neutral-500">
                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                    <span>Standar Mutu &amp; Kepatuhan WTO / ICC</span>
                </div>
            </div>

            {{-- Mission Card --}}
            <div class="lg:col-span-7 rounded-3xl border border-neutral-800 bg-neutral-950 p-8 sm:p-10 flex flex-col justify-between hover:border-neutral-700 transition-all duration-200">
                <div>
                    <div class="w-10 h-10 rounded-xl bg-neutral-900 border border-neutral-800 flex items-center justify-center text-white mb-6">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <span class="text-xs uppercase tracking-widest font-semibold text-neutral-500 block mb-2">Misi Strategis</span>
                    <h3 class="text-xl font-bold text-white mb-6">Komitmen Nyata Akselerasi Perdagangan Lintas Batas</h3>
                    <div class="space-y-4">
                        @php
                            $missions = $data['mission'] ?? [
                                'Memfasilitasi akses pasar ekspor yang adil, efisien, dan transparan bagi produk komoditas unggulan.',
                                'Memberikan kepastian pengiriman tepat waktu dengan mitigasi risiko rantai pasok berstandar internasional.',
                                'Mengintegrasikan teknologi data EDI pabean dan sertifikasi surveyor untuk jaminan mutu tanpa cela.',
                            ];
                        @endphp
                        @foreach($missions as $idx => $m)
                            <div class="flex items-start gap-4">
                                <span class="w-6 h-6 rounded-full bg-neutral-900 border border-neutral-800 flex items-center justify-center text-xs font-bold text-white flex-shrink-0 mt-0.5">
                                    {{ $idx + 1 }}
                                </span>
                                <p class="text-sm text-neutral-300 leading-relaxed">{{ $m }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t border-neutral-900 flex items-center gap-3 text-xs text-neutral-500">
                    <span class="w-2 h-2 rounded-full bg-white"></span>
                    <span>Fokus pada Efisiensi Rantai Nilai Global</span>
                </div>
            </div>
        </div>

        {{-- Core Values Strip --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16" data-animate>
            <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 p-6">
                <span class="text-xs uppercase tracking-wider font-semibold text-neutral-400 block mb-1">Nilai Inti 01</span>
                <h4 class="text-base font-bold text-white mb-2">Integritas Kontrak Mutlak</h4>
                <p class="text-xs text-neutral-400 leading-relaxed">
                    Transparansi penuh dalam spesifikasi produk, klausul Incoterms, dan kepatuhan perpajakan ekspor impor.
                </p>
            </div>
            <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 p-6">
                <span class="text-xs uppercase tracking-wider font-semibold text-neutral-400 block mb-1">Nilai Inti 02</span>
                <h4 class="text-base font-bold text-white mb-2">Keandalan Operasional</h4>
                <p class="text-xs text-neutral-400 leading-relaxed">
                    Disiplin jadwal pengapalan kapal dengan aliansi pelayaran Tier-1 dan pencegahan demurrage proaktif.
                </p>
            </div>
            <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/30 p-6">
                <span class="text-xs uppercase tracking-wider font-semibold text-neutral-400 block mb-1">Nilai Inti 03</span>
                <h4 class="text-base font-bold text-white mb-2">Jaminan Mutu Teruji</h4>
                <p class="text-xs text-neutral-400 leading-relaxed">
                    Sertifikasi surveyor independen (SGS, Sucofindo, BV) memastikan komoditas sesuai kontrak internasional.
                </p>
            </div>
        </div>

        {{-- Institutional Accreditation Badges --}}
        @if(!empty($data['features']))
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-animate>
                @foreach($data['features'] as $index => $feature)
                    <div class="rounded-2xl border border-neutral-800/80 bg-neutral-900/20 p-7 hover:border-neutral-700 transition">
                        <span class="text-neutral-500 text-xs font-semibold mb-2 block">
                            STANDAR OPERASIONAL 0{{ $index + 1 }}
                        </span>
                        <h4 class="text-base font-bold text-white mb-2">
                            {{ $feature['title'] ?? '' }}
                        </h4>
                        <p class="text-sm text-neutral-400 leading-relaxed">
                            {{ $feature['description'] ?? '' }}
                        </p>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
</section>
