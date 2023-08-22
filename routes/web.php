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
    return view('welcome');
});

Route::get('/tasks',function(){
    $data=App\Models\Task::all();
    return view('task')->with('tasks',$data);
});
Route::post('/saveTask',[TaskController::class,'saveTask']);

Route::get('/markasdone/{id}',[TaskController::class,'markascompleted']);
Route::get('/markasnotdone/{id}',[TaskController::class,'markasnotcompleted']);
Route::get('/delete/{id}',[TaskController::class,'deletetask']);
Route::get('/update/{id}',[TaskController::class,'updatetask']);
Route::post('/updatedata',[TaskController::class,'updatedata']);

