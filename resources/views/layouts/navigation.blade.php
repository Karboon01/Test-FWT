<nav class="flex flex-row justify-between px-[10%] py-5 bg-neutral-800">
    <div class="flex items-center">
        <h1 class="text-xl">
            {{ config('app.name') }}
        </h1>
    </div>

    @guest
        <div class="flex flex-row gap-5">
            <a href="{{ route('login') }}"
                class="bg-neutral-600 px-4 py-2 rounded border-2 border-neutral-400 hover:bg-neutral-500 duration-150 ease-in-out">
                Вход
            </a>
            <a href="{{ route('register') }}"
                class="bg-neutral-600 px-4 py-2 rounded border-2 border-neutral-400 hover:bg-neutral-500 duration-150 ease-in-out">
                Регистрация
            </a>
        </div>
    @endguest

    @auth
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit"
                class="bg-neutral-600 px-4 py-2 rounded border-2 border-neutral-400 hover:bg-neutral-500 duration-150 ease-in-out">
                Выход
            </button>
        </form>
    @endauth
</nav>