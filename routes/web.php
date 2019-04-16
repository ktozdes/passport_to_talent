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


Route::group(['prefix'=>'company', 'middleware' => ['auth']], function () {
    Route::get('create', 'CompanyController@create')->name('company.create');
    Route::post('store', 'CompanyController@store')->name('company.store');
    Route::get('show/{id}', 'CompanyController@show')->name('company.show');
    Route::get('edit/{id}', 'CompanyController@edit')->name('company.edit');
    Route::post('update/{id}', 'CompanyController@update')->name('company.update');
});

Route::group(['prefix'=>'file', 'middleware' => ['auth']], function () {
    Route::get('/', 'FileController@index')->name('file.index');
    Route::post('/store', 'FileController@store')->name('file.store');
    Route::post('/destroy', 'FileController@destroy')->name('file.destroy');
    Route::get('/create', 'FileController@create')->name('file.create');
});

Route::group(['prefix'=>'individual', 'middleware' => ['auth']], function () {
    Route::get('/', 'IndividualController@individual')->name('individual');
    Route::get('apply_to_job/{id?}', 'IndividualController@applyToJob')->name('individual.apply_to_job');
    Route::get('applied', 'IndividualController@applied')->name('individual.applied');

    Route::get('show/{id?}', 'IndividualController@show')->name('individual.show');
    Route::get('create', 'IndividualController@create')->name('individual.create');
    Route::post('store', 'IndividualController@store')->name('individual.store');
    Route::get('edit/{id}', 'IndividualController@edit')->name('individual.edit');
    Route::post('update/{id}', 'IndividualController@update')->name('individual.update');
});



Route::prefix('job')->group(function () {
    Route::get('/paginate', 		'JobController@paginate')->name('job.paginate');
    Route::get('/',         'JobController@index')->name('job.index');
    Route::get('create', 	'JobController@create')->name('job.create');
    Route::post('store', 	'JobController@store')->name('job.store');
    Route::get('show/{id}', 'JobController@show')->name('job.show');
    Route::get('edit/{id}', 'JobController@edit')->name('job.edit');
    Route::post('update/{id}', 'JobController@update')->name('job.update');
    Route::get('destroy/{id}', 'JobController@destroy')->name('job.destroy');
});

Route::prefix('profile')->group(function () {
    Route::get('edit', 'ProfileController@edit')->name('profile.edit');
    Route::post('update', 'ProfileController@update')->name('profile.update');
});
