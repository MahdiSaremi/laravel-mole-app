<?php

use function Livewire\Volt\{state};

?>

<div class="grow flex flex-col place-content-around p-4" x-data="{
    mineClick()
    {
        user.coin++
        $wire.dispatch('mineClick')
    },
}">
    <div class="flex items-center justify-center gap-2">
        <span class="text-2xl font-bold" x-text="user.coin"></span>
        <img src="{{ asset('icons/coin.png') }}" class="size-12">
    </div>

    <div class="flex justify-center my-8">
        <div class="relative w-2/3 cursor-pointer" @click="mineClick()">
            <img src="{{ asset('images/coin-bg.png') }}" class="rounded-full">
            <div class="absolute top-0 w-full h-full flex items-center justify-center">
                <img src="{{ asset('images/character/1.png') }}" class="w-3/4">
            </div>
        </div>
    </div>

    <div></div>

    <div class="flex items-center place-content-between">
        <x-button class="btn-ghost">
            <img src="{{ asset('icons/lightning.png') }}" class="size-6">
            <span>9000/9000</span>
        </x-button>
        <x-button class="btn-ghost">
            <img src="{{ asset('icons/shuttle.png') }}" class="size-6">
            <span>تقویت</span>
        </x-button>
    </div>
</div>
