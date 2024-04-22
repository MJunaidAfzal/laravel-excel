<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/' , [UserController::class , 'index'])->name('users');
Route::get('user/export' , [UserController::class , 'export'])->name('user.export');
Route::get('user/import' , [UserController::class , 'addImportData'])->name('user.import');
Route::post('user/import-data' , [UserController::class , 'import'])->name('user.import-data');
