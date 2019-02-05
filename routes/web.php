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

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::group(['middleware'=>['auth']], function(){
=======
>>>>>>> 3feb4755e00a71ed519f45f297a511300eb28101
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap5
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap6
	Route::prefix('admin')->group(function(){
	Route::get('/', function(){
		return view('admin.pages.dashboard');
	})->name('admin.home');
<<<<<<< HEAD
});


<<<<<<< HEAD
<<<<<<< HEAD
});

=======
>>>>>>> 3feb4755e00a71ed519f45f297a511300eb28101
=======
});

>>>>>>> tokap5
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======

	Route::prefix('user')->group(function(){
		Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
	});

});
});

Auth::routes();


>>>>>>> tokap6
