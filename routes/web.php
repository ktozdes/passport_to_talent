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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/google/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/auth/google/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/employer', 'HomeController@employer')->name('employer');
Route::get('/individual', 'HomeController@individual')->name('individual');




Route::prefix('company')->group(function () {
    Route::get('create', 'CompanyController@create')->name('company.create');
    Route::post('store', 'CompanyController@store')->name('company.store');
    Route::get('edit/{id}', 'CompanyController@edit')->name('company.edit');
    Route::post('update/{id}', 'CompanyController@update')->name('company.update');
});

Route::prefix('profile')->group(function () {
    Route::get('edit', 'ProfileController@edit')->name('profile.edit');
    Route::post('update', 'ProfileController@update')->name('profile.update');
});
