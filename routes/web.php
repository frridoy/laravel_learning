<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BiographyController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);

Route::resource('cities', CityController::class);

Route::resource('students', StudentController::class);


Route::resource('teachers', TeacherController::class);

Route::resource('authors', AuthorController::class);

Route::resource('biographies', BiographyController::class);

Route::resource('books', BookController::class);


Route::get('/union',[TestController::class, 'viewAll'])->name('union');




