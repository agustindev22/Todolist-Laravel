<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
#use App\Http\Controllers∖TaskController;

// Route::get('/', function () {
//     return view('task.index');
// });

Route::get('/', [TaskController::class,'index']);//recauda todos los datos 
Route::post('/', [TaskController::class,'store']); //lo metemos en el contralador store, para enviar a la base de datos
Route::delete('/{id}',[TaskController::class,'destroy'])->name('task.destroy'); //metodo pra hacer el borrado por task.destroy

