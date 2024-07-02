@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ route('register') }}" class="flex flex-col justify-center">
        @csrf

        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-while">Имя</label>
            <input id="name" :value="old('name')" type="text" name="name" required autofocus autocomplete="name"
                class="bg-neutral-700 border border-neutral-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-neutral-400" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-while">Почта</label>
            <input id="email" type="email" name="email" :value="old('email')" required autocomplete="username"
                class="bg-neutral-700 border border-neutral-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-neutral-400" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-while">Пароль</label>
            <input type="password" name="password" required autocomplete="new-password"
                class="bg-neutral-700 border border-neutral-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-neutral-400" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mb-5">
            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-while">
                Подтверждение пароля
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" required
                autocomplete="new-password"
                class="bg-neutral-700 border border-neutral-600 text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-neutral-400" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4 gap-5">
            <a class="text-sm text-neutral-400 hover:text-white" href="{{ route('login') }}">
                Уже зарегистрированны?
            </a>

            <button type="submit"
                class="bg-neutral-600 px-4 py-2 rounded border-2 border-neutral-400 hover:bg-neutral-500 duration-150 ease-in-out">
                Регистрация
            </button>
        </div>
    </form>
@endsection
