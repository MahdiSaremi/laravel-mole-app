<?php

use function Livewire\Volt\{state};

//

?>

<div class="grid grid-cols-2 gap-4">
    <a href="#" class="bg-gray-100 rounded-lg shadow-lg border">
        <div class="flex flex-col">
            <div class="grid grid-cols-3 p-2 gap-4">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset('images/mine/ceo.png') }}">
                </div>
                <div class="col-span-2 flex flex-col gap-1">
                    <span class="mb-2 font-bold">مدیر عامل</span>
                    <span class="mt-auto text-xs text-gray-600">درآمد در ساعت</span>
                    <x-coin value="1,241" plus />
                </div>
            </div>
            <div class="grid grid-cols-4 border-t border-gray-200 p-2 items-center">
                <span>سطح 1</span>
                <div class="col-span-3 border-s border-gray-200 px-4">
                    <x-coin value="150.83K" />
                </div>
            </div>
        </div>
    </a>

    <a href="#" class="bg-gray-100 rounded-lg shadow-lg border">
        <div class="flex flex-col">
            <div class="grid grid-cols-3 p-2 gap-4">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset('images/mine/bullhorn.png') }}">
                </div>
                <div class="col-span-2 flex flex-col gap-1">
                    <span class="mb-2 font-bold">بازاریابی</span>
                    <span class="mt-auto text-xs text-gray-600">درآمد در ساعت</span>
                    <x-coin value="5,141" plus />
                </div>
            </div>
            <div class="grid grid-cols-4 border-t border-gray-200 p-2 items-center">
                <span>سطح 1</span>
                <div class="col-span-3 border-s border-gray-200 px-4">
                    <x-coin value="300.0K" />
                </div>
            </div>
        </div>
    </a>

    <a href="#" class="bg-gray-100 rounded-lg shadow-lg border">
        <div class="flex flex-col">
            <div class="grid grid-cols-3 p-2 gap-4">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset('images/mine/consultant.png') }}">
                </div>
                <div class="col-span-2 flex flex-col gap-1">
                    <span class="mb-2 font-bold">تیم IT</span>
                    <span class="mt-auto text-xs text-gray-600">درآمد در ساعت</span>
                    <x-coin value="10,000" plus />
                </div>
            </div>
            <div class="grid grid-cols-4 border-t border-gray-200 p-2 items-center">
                <span>سطح 1</span>
                <div class="col-span-3 border-s border-gray-200 px-4">
                    <x-coin value="1.11K" />
                </div>
            </div>
        </div>
    </a>

    <a href="#" class="bg-gray-100 rounded-lg shadow-lg border">
        <div class="flex flex-col">
            <div class="grid grid-cols-3 p-2 gap-4">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset('images/mine/customer-service.png') }}">
                </div>
                <div class="col-span-2 flex flex-col gap-1">
                    <span class="mb-2 font-bold">پشتیبانی</span>
                    <span class="mt-auto text-xs text-gray-600">درآمد در ساعت</span>
                    <x-coin value="11,241" plus />
                </div>
            </div>
            <div class="grid grid-cols-4 border-t border-gray-200 p-2 items-center">
                <span>سطح 1</span>
                <div class="col-span-3 border-s border-gray-200 px-4">
                    <x-coin value="14.83K" />
                </div>
            </div>
        </div>
    </a>
</div>
