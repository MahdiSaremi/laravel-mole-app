@props([
    'value',
    'plus' => false,
])

<div {{ $attributes->class("flex items-center gap-1") }}>
    <span class="text-xs font-bold">{{ $value . ($plus ? '+' : '') }}</span>
    <img src="{{ asset('icons/coin.png') }}" class="size-5">
</div>
