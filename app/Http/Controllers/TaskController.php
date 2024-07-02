<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::where('user_id', auth()->id())->orderBy("created_at", "desc")->get();
        return view('welcome', ['tasks' => $tasks]);
    }

    public function createTask(Request $request)
    {
        Task::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'descr' => $request->descr,
        ]);
        return redirect()->route('index')->with('success','Задание успешно создано');
    }

    public function deleteTask($id)
    {
        Task::where('id','=', $id)->delete();
        return redirect()->route('index')->with('success','Задание успешно удалено');
    }
}
