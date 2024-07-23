<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class,'index']);
Route::post('/',[TaskController::class, 'store']);
Route::delete('/{id}',[TaskController::class, 'destroy'])->name('task.destroy');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');