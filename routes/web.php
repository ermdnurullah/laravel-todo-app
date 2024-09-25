<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::post('/task/create', [TaskController::class, 'create'])->name('create-task');
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('edit-task');
Route::patch('/task/update/{id}', [TaskController::class, 'update'])->name('update-task');
Route::get('/task/delete/{id}', [TaskController::class, 'delete'])->name('delete-task');