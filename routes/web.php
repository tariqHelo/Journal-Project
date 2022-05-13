<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PermissionsController,
    RolesController,
    UsersController,
};
use App\Http\Controllers\JournalController;

use App\Http\Controllers\DashboardController;


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

Route::group(['middleware' => 'auth'] , function () {
   Route::get('/', function () {
     return view('layouts.admin');
    })->name('dashboard');


    Route::get('/test', function () {
     return view('admin.calender.index');
    });

    // Permissions
    Route::resource('permissions', PermissionsController::class);
    // Roles
    Route::resource('roles', RolesController::class);
    // Users
    Route::resource('users', UsersController::class);
    // Users
    Route::resource('journal', JournalController::class);
     // Users
    Route::resource('calender', DashboardController::class);
}); 
require __DIR__.'/auth.php';