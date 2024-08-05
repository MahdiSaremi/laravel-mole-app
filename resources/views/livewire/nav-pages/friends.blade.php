<?php

use function Livewire\Volt\{state};

$refresh = function () {};

?>

<div class="grow flex flex-col p-4 gap-4">
    <div class="space-y-2">
        <h1 class="text-center font-bold text-2xl">دوستات رو دعوت کن!</h1>
        <p class="text-center text-gray-500">تا خودت و دوستات جایزه بگیرین :)</p>
    </div>

    <div class="space-y-2">
        <a class="bg-gray-100 rounded-lg border shadow-lg grid grid-cols-6 p-4 gap-4" href="#">
            <img src="{{ asset('images/friends/gift-box.png') }}" class="aspect-square">
            <div class="col-span-5">
                <p class="text-xl mb-2">یک دوست رو دعوت کن</p>
                <span class="inline-flex items-center text-gray-600 text-sm gap-1">
                    <span>به ازای هر دعوت، خودت و دوستت </span>
                    <x-coin value="5,000" class="text-yellow-600" plus />
                    <span>میگیرین</span>
                </span>
            </div>
        </a>
    </div>

    <div class="space-y-2">
        <div class="flex place-content-between items-center">
            <span>لیست دوستات (4)</span>
            <x-button icon="s-arrow-path" class="btn-ghost" spinner wire:click="refresh" />
        </div>
        <div class="flex flex-col gap-2">
            <div class="bg-gray-200 rounded-lg grid grid-cols-8 px-4 py-2 gap-4 items-center">
                <img src="{{ asset('images/friends/whack-a-mole.png') }}">
                <div class="col-span-6 flex flex-col gap-1 border-e border-gray-300">
                    <span>سبحان</span>
                    <div class="flex items-center text-xs gap-1">
                        <span class="text-gray-600">لیگ حماسی - </span>
                        <x-coin value="2.22K" />
                        <span class="text-gray-600">(5.22K)</span>
                    </div>
                </div>
                <x-coin value="95K" plus />
            </div>
            <div class="bg-gray-200 rounded-lg grid grid-cols-8 px-4 py-2 gap-4 items-center">
                <img src="{{ asset('images/friends/whack-a-mole.png') }}">
                <div class="col-span-6 flex flex-col gap-1 border-e border-gray-300">
                    <span>سبحان</span>
                    <div class="flex items-center text-xs gap-1">
                        <span class="text-gray-600">لیگ حماسی - </span>
                        <x-coin value="2.22K" />
                        <span class="text-gray-600">(5.22K)</span>
                    </div>
                </div>
                <x-coin value="95K" plus />
            </div>
            <div class="bg-gray-200 rounded-lg grid grid-cols-8 px-4 py-2 gap-4 items-center">
                <img src="{{ asset('images/friends/whack-a-mole.png') }}">
                <div class="col-span-6 flex flex-col gap-1 border-e border-gray-300">
                    <span>سبحان</span>
                    <div class="flex items-center text-xs gap-1">
                        <span class="text-gray-600">لیگ حماسی - </span>
                        <x-coin value="2.22K" />
                        <span class="text-gray-600">(5.22K)</span>
                    </div>
                </div>
                <x-coin value="95K" plus />
            </div>
        </div>
    </div>
</div>
