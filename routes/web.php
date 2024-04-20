<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('/components/wp');
});

Route::post("/create-task", [TaskController::class, "createtask"]);
Route::get("/get-tasks", [TaskController::class, "gettasks"]);
Route::get("/update-tasks", [TaskController::class, "updatetasks"]);
Route::put("/tasks/{id}", [TaskController::class, "updatetasks2"]);
Route::delete("/tasks/{id}", [TaskController::class, "destroy"]);