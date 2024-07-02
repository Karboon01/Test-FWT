{{-- <nav class="bg-neutral-800 border-b border-neutral-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex gap-10">
                <div class="shrink-0 flex items-center p-2">
                    <img src="{{ asset('/images/logo.png') }}" alt="" class="h-[100%]">
                </div>

                <div class="flex items-center text-xl tracking-wide">
                    
                </div>
            </div>
        </div>
    </div>
</nav> --}}
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
            <button type="submit"
                class="bg-neutral-600 px-4 py-2 rounded border-2 border-neutral-400 hover:bg-neutral-500 duration-150 ease-in-out">
                Выход
            </button>
        </form>
    @endauth
</nav>
