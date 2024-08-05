<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

use function Livewire\Volt\layout;
use function Livewire\Volt\rules;
use function Livewire\Volt\state;

layout('layouts.guest');

state([
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => ''
]);

rules([
    'name' => ['required', 'string', 'max:255'],
    'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
]);

$register = function () {
    $validated = $this->validate();

    $validated['password'] = Hash::make($validated['password']);

    event(new Registered($user = User::create($validated)));

    Auth::login($user);

    $this->redirect(route('game', absolute: false), navigate: true);
};

?>

<div>
    <x-slot:header>ثبت نام در موش کور</x-slot:header>

    <x-form wire:submit="register">
        <x-input label="نام:" wire:model="name" type="text" />

        <x-input label="ایمیل:" wire:model="email" type="email" />

        <x-input label="رمز عبور:" wire:model="password" type="password" />

        <x-input label="تکرار رمز عبور:" wire:model="password_confirmation" type="password" />

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                قبلا ثبت نام کرده بودید؟
            </a>

            <x-button class="ms-4" type="submit">
                ثبت نام
            </x-button>
        </div>
    </x-form>
</div>
