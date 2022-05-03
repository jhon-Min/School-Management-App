<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

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
});

Auth::routes();

Route::middleware('auth')->prefix('dashboard')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update-info', [ProfileController::class, 'updateProfileInfo'])->name('profile.profile-edit');

    // Department
    Route::get('/department/datatable/ssd', [DepartmentController::class, 'ssd'])->name('department.ssd');
    Route::resource('/department', DepartmentController::class)->except('show');

    // User Management
    Route::get('/user/datatable/ssd', [UserController::class, 'ssd'])->name('user.ssd');
    Route::resource('/user', UserController::class);

});

Route::post('/logout', [HomeController::class, 'logout'])->name('logout');
