@extends('layouts.app')
@section('content')
    <div class="flex flex-row justify-between w-full gap-10">
        <div class="flex flex-col gap-5 w-[70%]">
            @if (count($tasks) > 0)
                @foreach ($tasks as $task)
                    <div class="flex flex-col bg-neutral-700 px-5 py-3 gap-2 rounded-xl">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-3xl">{{ $task->name }}</h1>
                            <p class="text-xl">{{ $task->descr }}</p>

                        </div>
                        <form action="{{ route('deleteTask', ['id' => $task->id]) }}"
                            class="flex items-center justify-between" method="post">
                            @csrf
                            @method('delete')
                            @if ($task->created_at)
                                <span class="text-xl bg-neutral-600 px-4 py-2 rounded-xl">
                                    Дата создания: {{ $task->created_at->format('d.m.y H:i') }}
                                </span>
                            @else
                                <span></span>
                            @endif
                            <button type="submit"
                                class="text-xl bg-rose-600 px-4 py-2 rounded border-2 border-rose-400 hover:bg-rose-500 duration-150 ease-in-out">
                                Удалить
                            </button>
                        </form>
                    </div>
                @endforeach
            @else
                <div class="flex items-center justify-center w-full h-full">
                    <h1 class="text-5xl">Нет заданий</h1>
                </div>
            @endif
        </div>
        <div class="flex flex-col w-[30%] gap-5">
            <h1 class="text-3xl">Создание задачи</h1>
            <form action="{{ route('createTask') }}" method="get">
                <div class="mb-5">
                    <label for="name" class="block mb-2 text font-medium text-while">Название</label>
                    <input id="name" type="text" name="name" required
                        class="bg-neutral-700 border border-neutral-600 text-white text rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-neutral-400" />
                </div>
                <div class="mb-5">
                    <label for="descr" class="block mb-2 text font-medium text-while">Описание</label>
                    <input id="descr" type="text" name="descr" required
                        class="bg-neutral-700 border border-neutral-600 text-white text rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-neutral-400" />
                </div>
                <button type="submit"
                    class="text-xl bg-neutral-600 px-4 py-2 rounded border-2 border-neutral-400 hover:bg-neutral-500 duration-150 ease-in-out">
                    Создать
                </button>
            </form>
        </div>
    </div>
@endsection
