<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;
use function Livewire\Volt\title;

layout('layouts.guest');
title("ورود");

form(LoginForm::class);

$login = function ()
{
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();

    $this->redirectIntended(default: route('game', absolute: false), navigate: true);
};

?>

<div>
    <x-slot:header>ورود به موش کور</x-slot:header>

    <!-- Session Status -->
    {{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

    <x-form wire:submit="login">
        <x-input label="ایمیل:" wire:model="form.email" type="email"/>

        <x-input label="رمز عبور:" wire:model="form.password" type="password"/>

        <x-checkbox label="من را بخاطر بسپار" wire:model="form.remember"/>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                   href="{{ route('password.request') }}" wire:navigate>
                    رمز خود را فراموش کردید؟
                </a>
            @endif

            <x-button class="ms-3" type="submit">
                ورود
            </x-button>
        </div>
    </x-form>
</div>
