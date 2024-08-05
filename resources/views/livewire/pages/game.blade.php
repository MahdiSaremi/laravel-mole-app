<?php

use function Livewire\Volt\
{layout, state, title};

layout('layouts.app');

state(['page' => 2]);

?>

<div class="min-h-screen flex flex-col">
    <div class="p-4 flex items-center gap-2">
        <img src="{{ asset('icons/user.png') }}" class="size-8">
        <span>مهدی صارمی</span>
        <div class="mx-auto"></div>
        <div class="bg-gray-200 px-8 py-2 rounded-lg flex flex-col items-center justify-center gap-1">
            <span class="text-xs text-gray-500">درآمد در ساعت</span>
            <div class="flex items-center gap-1">
                <span class="text-sm">2.44M+</span>
                <img src="{{ asset('icons/coin.png') }}" class="size-4">
            </div>
        </div>
    </div>

    <hr>

    @if ($page >= 0 && $page <= 4)
        <livewire:dynamic-component :is="'nav-pages.'.['home', 'mine', 'friends', 'earn', 'airdrop'][$page]" :key="$page" />
    @endif

    <div class="h-16"></div>
    <div class="fixed bottom-0 h-16 w-full bg-gray-50 border-t">
        <div class="grid grid-cols-5">
            <div class="px-4 py-1 w-full @if($page == 0) bg-gray-300 @endif">
                <a class="flex flex-col items-center gap-1" href="#" @click.prevent="$wire.set('page', 0, true)">
                    <img src="{{ asset('icons/home.png') }}" class="size-8">
                    <span class="text-sm font-medium text-gray-700">خانه</span>
                </a>
            </div>
            <div class="px-4 py-1 w-full @if($page == 1) bg-gray-300 @endif">
                <a class="flex flex-col items-center gap-1" href="#" @click.prevent="$wire.set('page', 1, true)">
                    <img src="{{ asset('icons/mining-cart.png') }}" class="size-8">
                    <span class="text-sm font-medium text-gray-700">ماین</span>
                </a>
            </div>
            <div class="px-4 py-1 w-full @if($page == 2) bg-gray-300 @endif">
                <a class="flex flex-col items-center gap-1" href="#" @click.prevent="$wire.set('page', 2, true)">
                    <img src="{{ asset('icons/friends.png') }}" class="size-8">
                    <span class="text-sm font-medium text-gray-700">دوستان</span>
                </a>
            </div>
            <div class="px-4 py-1 w-full @if($page == 3) bg-gray-300 @endif">
                <a class="flex flex-col items-center gap-1" href="#" @click.prevent="$wire.set('page', 3, true)">
                    <img src="{{ asset('icons/profit.png') }}" class="size-8">
                    <span class="text-sm font-medium text-gray-700">سکه رایگان</span>
                </a>
            </div>
            <div class="px-4 py-1 w-full @if($page == 4) bg-gray-300 @endif">
                <a class="flex flex-col items-center gap-1" href="#" @click.prevent="$wire.set('page', 4, true)">
                    <img src="{{ asset('icons/airdrop.png') }}" class="size-8">
                    <span class="text-sm font-medium text-gray-700">ایردراپ</span>
                </a>
            </div>
        </div>
    </div>
</div>
