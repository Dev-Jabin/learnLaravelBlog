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

Route::prefix('learnLaravel')->group(function (){
	Route::get('/index', function () {
		return view('welcome');
	});
	Route::get('/', function () {
		return view('welcome');
	});
	Route::get('page/{id}', function ($id) {
		return view('page.show', ['id' => $id]);
	})->where('id', '[0-9]+');

	Route::get('/form', 'RequestController@preForm');
	Route::post('/form', 'RequestController@form')->name('form.submit');
});


