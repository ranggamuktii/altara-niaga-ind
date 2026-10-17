@props(['data' => []])

@php
    $items = $data['items'] ?? [];
@endphp

<section class="py-24 lg:py-32 bg-black border-t border-neutral-900">
    <div class="max-w-5xl mx-auto px-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-12" data-animate>
            @foreach($items as $item)
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-white tracking-tight">
                        {{ $item['value'] ?? '' }}
                    </div>
                    <div class="text-neutral-500 text-xs uppercase tracking-wider mt-2">
                        {{ $item['label'] ?? '' }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
