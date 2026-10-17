@props(['data' => []])

@php
    $headline = $data['headline'] ?? 'Institutional Scale & Reliability';
    $items = $data['items'] ?? [];
@endphp

<section class="py-20 lg:py-24 bg-black border-t border-neutral-900">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        {{-- Enclosing Rounded Container --}}
        <div class="rounded-3xl border border-neutral-800/90 bg-neutral-950/80 p-8 sm:p-12 lg:p-14" data-animate>
            {{-- Headline --}}
            @if($headline)
                <div class="text-center mb-12">
                    <span class="text-xs font-semibold uppercase tracking-widest text-neutral-400">Verified Scale</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mt-2">{{ $headline }}</h2>
                </div>
            @endif

            {{-- Stats Grid --}}
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-4 divide-y lg:divide-y-0 lg:divide-x divide-neutral-800/80">
                @foreach($items as $item)
                    <div class="text-center pt-6 lg:pt-0 lg:px-6 first:pt-0">
                        <div class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight">
                            {{ $item['value'] ?? '' }}
                        </div>
                        <div class="text-neutral-400 text-xs uppercase tracking-wider font-medium mt-2">
                            {{ $item['label'] ?? '' }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
