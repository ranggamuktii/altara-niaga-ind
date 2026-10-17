@props(['data' => []])

@php
    $label = $data['label'] ?? 'Full-Scope Capabilities';
    $headline = $data['headline'] ?? 'Engineered for Flawless Trade Execution';
    $items = $data['items'] ?? [];
@endphp

<section id="services" class="py-32 lg:py-40 bg-[#0A0A0A] border-t border-neutral-900">
    <div class="max-w-6xl mx-auto px-6">

        {{-- Header --}}
        <div data-animate class="mb-16">
            @if($label)
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-neutral-800 bg-neutral-900/60 text-xs text-neutral-400 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                    <span>{{ $label }}</span>
                </div>
            @endif
            @if($headline)
                <h2 class="text-3xl sm:text-4xl font-bold text-white tracking-tight">
                    {{ $headline }}
                </h2>
            @endif
        </div>

        {{-- Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16">
            @foreach($items as $item)
                <div
                    data-animate
                    class="rounded-2xl border border-neutral-800/80 bg-neutral-900/20 p-8 hover:border-neutral-700 transition-all duration-200"
                >
                    {{-- Icon --}}
                    <div class="w-10 h-10 rounded-xl bg-neutral-800 flex items-center justify-center text-white">
                        @switch($item['icon'] ?? '')
                            @case('export')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 17L17 7M17 7H8M17 7V16" />
                                </svg>
                                @break
                            @case('import')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 7L7 17M7 17H16M7 17V8" />
                                </svg>
                                @break
                            @case('logistics')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25m-2.25 0V5.625c0-.621-.504-1.125-1.125-1.125H5.25c-.621 0-1.125.504-1.125 1.125v12.249M12 14.25h-1.5m-6-6h9" />
                                </svg>
                                @break
                            @case('compliance')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                </svg>
                                @break
                            @case('consulting')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                </svg>
                                @break
                            @case('warehouse')
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>
                                @break
                            @default
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                </svg>
                        @endswitch
                    </div>

                    {{-- Title --}}
                    <h3 class="text-base font-semibold text-white mt-5">{{ $item['title'] ?? '' }}</h3>

                    {{-- Description --}}
                    <p class="text-sm text-neutral-400 mt-2 leading-relaxed">{{ $item['description'] ?? '' }}</p>
                </div>
            @endforeach
        </div>

    </div>
</section>
