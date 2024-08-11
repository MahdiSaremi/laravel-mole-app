<?php

use App\Models\ProfitTab;
use function Livewire\Volt\
{state};

state('tab')->type(ProfitTab::class);

?>

<div class="grid grid-cols-2 gap-4">
    @foreach($tab->profits as $profit)
        @php($userProfit = $profit->forUser())
        <a href="#" class="bg-gray-100 rounded-lg shadow-lg border">
            <div class="flex flex-col">
                <div class="grid grid-cols-3 p-2 gap-4">
                    <div class="aspect-square overflow-hidden">
                        <img src="{{ $profit->file('image')->url() }}">
                    </div>
                    <div class="col-span-2 flex flex-col gap-1">
                        <span class="mb-2 font-bold">{{ $profit->name }}</span>
                        <span class="mt-auto text-xs text-gray-600">درآمد در ساعت</span>
                        <x-coin :value="$userProfit->getAmount()" plus/>
                    </div>
                </div>
                <div class="grid grid-cols-4 border-t border-gray-200 p-2 items-center">
                    <span>سطح {{ $userProfit->level }}</span>
                    <div class="col-span-3 border-s border-gray-200 px-4">
                        <x-coin :value="$userProfit->getPrice()"/>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
