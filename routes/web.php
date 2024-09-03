<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('tasks', TaskController::class);
route::patch('tasks/{task}/completed', [TaskController::class, 'updateCompleted'])->name('tasks.updateCompleted');