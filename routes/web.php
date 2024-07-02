<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->get('/', [TaskController::class, 'index'])->name('index');

Route::get('/create-task', [TaskController::class, 'createTask'])->name('createTask');
Route::delete('/delete-task/{id}', [TaskController::class, 'deleteTask'])->name('deleteTask');

require __DIR__.'/auth.php';
