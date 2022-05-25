<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    PermissionsController,
    RolesController,
    UsersController
};
use App\Http\Controllers\{
    JournalController,
    CalenderController,
    DashboardController,
    CalculationsController,
    StatisticsController
};



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


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::group(['middleware' => 'auth'] , function () {

    Route::get('/dashboard', function () {
     return redirect('/home');
    });

    
    Route::get('/home',[DashboardController::class , 'index'])->name('dashboard');

    Route::get('/test', function () {
     return view('admin.calender.index');
    });

    // Permissions
    Route::resource('permissions', PermissionsController::class);
    // Roles
    Route::resource('roles', RolesController::class);
    // Users
    Route::resource('users', UsersController::class);
    // journal
    Route::resource('journal', JournalController::class);
    Route::get('journal/{journal}/delete', [JournalController::class , 'destroy'])->name('J-delete');
     // calender
    Route::resource('calender', CalenderController::class);
     // Calculations
    Route::resource('calc', CalculationsController::class);
     // statistics
    Route::resource('statistics', StatisticsController::class);
}); 


require __DIR__.'/auth.php';