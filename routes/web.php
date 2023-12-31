<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

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
    return redirect('login');
})->name('login');


Route::get('login', [AuthenticationController::class, 'index']);

Route::post('login', [AuthenticationController::class, 'login']);


// Route::get('/dashboard', function () {
//     return view('index');
// })->name('index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');

Route::get('/admins', [AdminController::class, 'index']);
Route::get('/add-admin', [AdminController::class, 'create']);
Route::post('/store-admin', [AdminController::class, 'store']);
Route::get('/edit-admin/{id}', [AdminController::class, 'edit']);
Route::post('/update-admin', [AdminController::class, 'update']);
Route::post('/change/password',[AdminController::class,'change_password']);



