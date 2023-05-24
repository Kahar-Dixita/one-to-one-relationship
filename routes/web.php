<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;



// use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/accounts', AccountController::class);
// Route::resource('/employees', EmployeeController::class)->middleware('auth');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/employees', EmployeeController::class);

Route::get('/index', [IndexController::class,'index']);//one to many
Route::get('/data', [IndexController::class,'data']);//manyto many

Route::resource('/students', StudentController::class);

Route::resource('/teachers', TeacherController::class);
