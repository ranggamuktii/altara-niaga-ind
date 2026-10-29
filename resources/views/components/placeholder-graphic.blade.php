@props([
'type' => 'container',
'ratio' => 'aspect-[16/9]',
'label' => 'Dokumentasi aset operasional',
'image' => null,
'frame' => false,
])

@php
$iconMap = [
'vessel' => 'ship',
'truck' => 'truck',
'warehouse' => 'warehouse',
'port' => 'anchor',
'container' => 'package',
'plane' => 'plane',
];
$iconName = $iconMap[$type] ?? 'package';
@endphp

{{-- Tanpa border/radius secara default: pembungkus di tiap section yang mengatur bingkai.
     Pakai :frame="true" bila komponen dipakai sendirian. --}}
<div class="group relative w-full {{ $ratio }} select-none overflow-hidden bg-neutral-950 {{ $frame ? 'rounded-3xl border border-white/10' : '' }}">

    {{-- Fallback: selalu ada di bawah foto, terlihat bila foto belum diunggah atau gagal dimuat --}}
    <div class="absolute inset-0 flex flex-col items-center justify-center bg-neutral-900 p-6 text-center">
        <div class="mb-3 flex h-14 w-14 items-center justify-center rounded-2xl border border-white/10 bg-black text-sky-300 sm:h-16 sm:w-16">
            <x-icon :name="$iconName" class="h-7 w-7 text-sky-300 sm:h-8 sm:w-8" />
        </div>
        <span class="text-sm font-semibold text-neutral-300 sm:text-base">{{ $label }}</span>
        <span class="mt-1 text-xs text-neutral-500">Dokumentasi aset operasional</span>
    </div>

    @if ($image)
    {{-- Foto bersih tanpa teks di atasnya; disembunyikan otomatis jika file tidak ditemukan --}}
    <img
        src="{{ $image }}"
        alt="{{ $label }}"
        loading="lazy"
        onerror="this.style.display='none'"
        class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-700 ease-out group-hover:scale-105" />
    @endif
</div>