@extends('layouts.app')
@section('content')
    <div class="flex flex-row justify-between w-full gap-10">
        <div class="flex flex-col gap-5 max-w-[70%]">
            @foreach ($tasks as $task)
                <div class="flex flex-col bg-neutral-700 px-5 py-3 gap-2 rounded-xl">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-3xl">{{ $task->name }}</h1>
                        <p class="text-xl">{{ $task->descr }}</p>
                    </div>
                    <form action="{{ route('deleteTask', ['id' => $task->id]) }}"
                        class="flex items-end justify-end" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit"
                            class="bg-rose-600 px-4 py-2 rounded border-2 border-rose-400 hover:bg-rose-500 duration-150 ease-in-out">
                            Удалить
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="">
            <h1>Создание задачи</h1>
            <form action="" method="get">
                <button type="submit"
                    class="bg-neutral-600 px-4 py-2 rounded border-2 border-neutral-400 hover:bg-neutral-500 duration-150 ease-in-out">
                    Создать
                </button>
            </form>
        </div>
    </div>
@endsection
