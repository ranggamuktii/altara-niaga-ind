@props(['data'])

<section id="contact" class="py-24 lg:py-32 bg-black border-t border-neutral-900" data-animate>
    <div class="max-w-5xl mx-auto px-6 lg:px-8 text-center">
        {{-- Enclosing Rounded Bento Card --}}
        <div class="rounded-3xl border border-neutral-800 bg-neutral-950/80 p-10 sm:p-16 shadow-2xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs font-mono text-neutral-400 mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                <span>Immediate Capacity</span>
            </div>

            {{-- Headline --}}
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-[1.15] max-w-3xl mx-auto">
                {{ $data['headline'] ?? 'Ready to Scale Your Cross-Border Trade Operations?' }}
            </h2>

            {{-- Description --}}
            <p class="mt-6 text-sm sm:text-base text-neutral-400 max-w-2xl mx-auto leading-relaxed font-normal">
                {{ $data['description'] ?? 'Whether you need chartered bulk vessel logistics or containerized FCL freight, our specialists are ready to architect your supply chain.' }}
            </p>

            {{-- Button --}}
            <div class="mt-10">
                <a
                    href="{{ $data['button']['href'] ?? '#rfq' }}"
                    class="inline-flex items-center justify-center px-8 py-4 rounded-full bg-white text-black hover:bg-neutral-200 font-semibold text-xs uppercase tracking-widest transition-all duration-150 shadow-sm"
                >
                    {{ $data['button']['label'] ?? 'Submit RFQ Now' }}
                    <svg class="ml-2 w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
