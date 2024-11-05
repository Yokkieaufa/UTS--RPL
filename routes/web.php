<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;



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


Route::get('/workout', [WorkoutController::class, 'index'])->name('workout.index');
Route::get('/workout/create', [WorkoutController::class, 'create'])->name('workout.create');
Route::post('/workout', [WorkoutController::class, 'store'])->name('workout.store');
Route::get('/workout/{workout}/edit', [WorkoutController::class, 'edit'])->name('workout.edit');
Route::put('/workout/{workout}/update', [WorkoutController::class, 'update'])->name('workout.update');
Route::delete('/workout/{id}', [WorkoutController::class, 'destroy'])->name('workout.destroy');
Route::delete('/workout/delete', [WorkoutController::class, 'delete']);
Route::put('/workout/update', [WorkoutController::class, 'update']);
Route::put('/workout/edit', [WorkoutController::class, 'edit']); 
Route::get('/workout/create', [WorkoutController::class, 'create']); 
Route::post('/workout/create', [WorkoutController::class, 'store']); 
Route::middleware(['auth'])->group(function () {

});