<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\StudentController;

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

Route::controller(StudentController::class)->group(function () {
    Route::get('/students', 'index')->name('student.index');
    Route::get('/create-student', 'create')->name('student.create');
    Route::post('/store-student', 'store')->name('student.store');
});
