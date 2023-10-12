<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('student/index' , function (){
    return view('student.index');
});

Route::get('student/index' , [StudentController::class , 'index'])->name('student.index');
Route::get('student/create' , [StudentController::class , 'create'])->name('student.create');
Route::post('student/create' , [StudentController::class , 'store'])->name('student.store');


// routes using id
Route::get('student/edit/{id}', [StudentController::class , 'edit'])->name('student.edit');
Route::post('student/edit/{id}', [StudentController::class , 'update'])->name('student.update');
Route::get('student/destroy/{id}', [StudentController::class , 'destroy'])->name('student.destroy');
