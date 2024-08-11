<?php

use App\Models\ProfitTab;
use function Livewire\Volt\
{state};

state(['currentTab' => fn () => ProfitTab::first()])
    ->type(ProfitTab::class);

$changeTab = function ($id)
{
    $this->currentTab = ProfitTab::findOrFail($id);
};

?>

<div class="grow flex flex-col p-4 gap-4">
    <div class="grid grid-cols-3 items-center rounded-lg bg-gray-200 px-4 py-2">
        <span>ترکیب روزانه</span>
        <div class="flex justify-center gap-2">
            <div class="bg-white rounded-full size-4 border border-gray-400"></div>
            <div class="bg-white rounded-full size-4 border border-gray-400"></div>
            <div class="bg-white rounded-full size-4 border border-gray-400"></div>
        </div>
        <div class="flex justify-end">
            <span class="bg-primary-500 text-white rounded-lg p-2">
                <x-coin value="5,000,000" plus/>
            </span>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div class="rounded-lg aspect-square p-4 bg-gray-100 rounded-lg border border-primary-200 shadow-lg">
            <img src="{{ asset('images/mine/question-mark.png') }}" class="">
        </div>
        <div class="rounded-lg aspect-square p-4 bg-gray-100 rounded-lg border border-primary-200 shadow-lg">
            <img src="{{ asset('images/mine/question-mark.png') }}" class="">
        </div>
        <div class="rounded-lg aspect-square p-4 bg-gray-100 rounded-lg border border-primary-200 shadow-lg">
            <img src="{{ asset('images/mine/question-mark.png') }}" class="">
        </div>
    </div>

    <div class="flex justify-center">
        <x-my-coin/>
    </div>

    <div class="bg-gray-200 rounded-lg grid grid-cols-2 p-2">
        @foreach(ProfitTab::all() as $tab)
            <a href="#" class="@if ($currentTab->is($tab)) bg-white @endif text-center rounded-lg py-2"
               @click.prevent="$wire.changeTab({{ $tab->id }})">{{ $tab->name }}</a>
        @endforeach
    </div>

    @if ($currentTab)
{{--        <livewire:dynamic-component :is="'mine.' . $cardPage . '-page'" :key="$cardPage"/>--}}
        <livewire:mine.tab-page :tab="$currentTab" :key="$currentTab->id" />
    @endif

</div>
