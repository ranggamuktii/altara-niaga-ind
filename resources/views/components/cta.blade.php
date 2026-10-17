@props(['data'])

<section id="contact" class="py-24 lg:py-32 bg-white" data-animate>
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center">
        {{-- Headline --}}
        <h2 class="text-3xl md:text-4xl font-bold text-[#1B2A4A]">
            {{ $data['headline'] }}
        </h2>

        {{-- Gold Divider --}}
        <div class="w-16 h-0.5 bg-[#C8A962] mx-auto my-6"></div>

        {{-- Description --}}
        <p class="text-lg text-gray-500 max-w-2xl mx-auto leading-relaxed">
            {{ $data['description'] }}
        </p>

        {{-- Button --}}
        <a href="{{ $data['button']['href'] }}"
           class="inline-block mt-8 bg-[#1B2A4A] text-white px-10 py-4 font-semibold text-sm uppercase tracking-wider hover:bg-[#243658] transition">
            {{ $data['button']['label'] }}
        </a>
    </div>
</section>
