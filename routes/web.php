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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap7
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap8
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap9
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap10
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap11
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap12
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap13
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap14
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap15
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap16
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap17
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap18
=======
Route::group(['middleware'=>['auth']], function(){
>>>>>>> tokap19
	Route::prefix('admin')->group(function(){
	Route::get('/', function(){
		return view('admin.pages.dashboard');
	})->name('admin.home');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
=======
>>>>>>> tokap8
=======
>>>>>>> tokap9

	Route::prefix('user')->group(function(){
		Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		Route::post('/setting','UserSettingController@update');
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap7
=======
>>>>>>> tokap8
=======
>>>>>>> tokap9
=======

	Route::prefix('user')->group(function(){
		Route::get('/','UserController@daftar')->name('admin.user');
		Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		Route::post('/setting','UserSettingController@update');
>>>>>>> tokap10
=======

	Route::prefix('user')->group(function() {
		Route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
		Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		Route::post('/setting','UserSettingController@update');
>>>>>>> tokap11
=======
=======
>>>>>>> tokap13
=======
>>>>>>> tokap14
=======
>>>>>>> tokap15
=======
>>>>>>> tokap16
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18

	Route::prefix('user')->group(function() {
		Route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
=======

	Route::prefix('user')->group(function() {

		Route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
		Route::delete('/','UserController@delete')->middleware('akses.admin');
>>>>>>> tokap19

		route::get('/add','UserController@add')->name('admin.user.add')->middleware('akses.admin');
		route::post('/add','UserController@save')->middleware('akses.admin');

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap15
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap16
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap17
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap18
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap19



		Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		Route::post('/setting','UserSettingController@update');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap12
=======
>>>>>>> tokap13
=======
>>>>>>> tokap14
=======
>>>>>>> tokap15
=======
>>>>>>> tokap16
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
	});

});
});

Auth::routes();

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap6
=======
>>>>>>> tokap7
=======
>>>>>>> tokap8
=======
>>>>>>> tokap9
=======
>>>>>>> tokap10
=======
>>>>>>> tokap11
=======
>>>>>>> tokap12
=======
>>>>>>> tokap13
=======
Route::any('register', function(){ return abort(404); });

>>>>>>> tokap14
=======
Route::any('register', function(){ return abort(404); });

>>>>>>> tokap15
=======
Route::any('register', function(){ return abort(404); });

>>>>>>> tokap16
=======
Route::any('register', function(){ return abort(404); });

>>>>>>> tokap17
=======
Route::any('register', function(){ return abort(404); });

>>>>>>> tokap18
=======
Route::any('register', function(){ return abort(404); });

>>>>>>> tokap19
