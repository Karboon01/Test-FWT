<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // $tasks = Task::where('user_id', $request->user->id)->orderBy("created_at", "desc");
        // return view('welcome', ['tasks' => $tasks]);
        $tasks = Task::orderBy("created_at", "desc")->get();
        return view('welcome', ['tasks' => $tasks]);
    }

    public function createTask()
    {
        $tasks = Task::orderBy("created_at", "desc");
        return view('welcome', ['tasks' => $tasks]);
    }

    public function deleteTask($id)
    {
        Task::where('id','=', $id)->delete();
        return redirect()->route('index')->with('success','Задание успешно удалено');
    }
}
