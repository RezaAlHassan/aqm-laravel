<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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

Route::get('/', [TableController::class, 'chartData']);


Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('/profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('/user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('/stationwise-table', [TableController::class, 'stationwise_table']);
	Route::get('add-table-row', [TableController::class, 'add_row']);
    Route::post('add-table-row', [TableController::class, 'store_row']);
    Route::get('edit-table-row/{id}', [TableController::class, 'edit_row']);
	Route::put('update-table-row/{id}', [TableController::class, 'update_row']);
	Route::get('delete-table-row/{id}', [TableController::class, 'delete_row']);
	
	Route::get('/chart-tables', [TableController::class, 'tableView']);

    Route::get('/virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('/static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');