<?php

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

use App\Http\Controllers\SimpleFinance\IncomeController;

Route::get('/', function () {
  return redirect('login');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@index')->name('home.dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    Route::prefix('income')->group(function () {
        Route::get("/", [IncomeController::class, "index"])->name("page.income");
        Route::get("data-table", [IncomeController::class, "dataTable"])->name("page.income.dataTable");
        Route::get("add", [IncomeController::class, "add"])->name("page.income.add");
        Route::post("add", [IncomeController::class, "create"])->name("page.income.add.post");
    });
});


