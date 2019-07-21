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

=======
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
Route::group(['prefix'=>'admin','middleware'=>['auth']], function(){
	

	Route::get('/', function(){
		return view('admin.pages.dashboard');
	})->name('admin.home');


	/*User*/ 
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
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
	Route::prefix('user')->group(function() {

		Route::get('/','UserController@daftar')->name('admin.user')->middleware('akses.admin');
		Route::delete('/','UserController@delete')->middleware('akses.admin');
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
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35

		route::get('/add','UserController@add')->name('admin.user.add')->middleware('akses.admin');
		route::post('/add','UserController@save')->middleware('akses.admin');

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
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap20
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap21
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap22
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap23
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap24
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap25
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap26
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap27
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap 28-29
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap 30-31
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap 32
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap 33
=======
		route::get('/edit/{id}','UserController@edit')->name('admin.user.edit')->middleware('akses.admin');
		route::post('/edit/{id}','UserController@update')->middleware('akses.admin');
>>>>>>> tokap 35



		Route::get('/setting','UserSettingController@form')->name('admin.user.setting');
		Route::post('/setting','UserSettingController@update');
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
=======
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
	});

/* kategori */

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
Route::group(['prefix'=>'kategori','middleware'=>'akses.admin'], function(){
	Route::get('/','kategoriController@daftar')->name('admin.kategori');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
		Route::get('/add','kategoriController@add')->name('admin.kategori.add');
			Route::post('/add','kategoriController@save');


<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap22
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
		Route::get('/add','kategoriController@add')->name('admin.kategori.add');
			Route::post('/edit/{id}','kategoriController@save');
			Route::get('/edit/{id}','kategoriController@edit')->name('admin.kategori.edit');
			Route::post('/edit/{id}','kategoriController@update');


<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
Route::group(['prefix'=>'Kategori','middleware'=>'akses.admin'], function() {
	Route::get('/','KategoriController@daftar')->name('admin.kategori');
	Route::delete('/','KategoriController@delete')->middleware('akses.admin');
=======
Route::group(['prefix'=>'Kategori','middleware'=>'akses.admin'], function() {
	Route::get('/','KategoriController@daftar')->name('admin.kategori');
	Route::delete('/','KategoriController@delete');
>>>>>>> tokap 30-31
=======
Route::group(['prefix'=>'Kategori','middleware'=>'akses.admin'], function() {
	Route::get('/','KategoriController@daftar')->name('admin.kategori');
	Route::delete('/','KategoriController@delete');
>>>>>>> tokap 32
=======
Route::group(['prefix'=>'Kategori','middleware'=>'akses.admin'], function() {
	Route::get('/','KategoriController@daftar')->name('admin.kategori');
	Route::delete('/','KategoriController@delete');
>>>>>>> tokap 33
=======
Route::group(['prefix'=>'Kategori','middleware'=>'akses.admin'], function() {
	Route::get('/','KategoriController@daftar')->name('admin.kategori');
	Route::delete('/','KategoriController@delete');
>>>>>>> tokap 35


		Route::get('/add','KategoriController@add')->name('admin.kategori.add');
			Route::post('/add','KategoriController@save');

			Route::get('/edit/{id}','KategoriController@edit')->name('admin.kategori.edit');
			Route::post('/edit/{id}','KategoriController@update');


<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap 28-29

});

=======
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35

});

/* Produk */
Route::group(['prefix'=>'produk','middleware'=>'akses.admin'], function(){
	Route::get('/','ProdukController@daftar')->name('admin.produk');
<<<<<<< HEAD
<<<<<<< HEAD
});

<<<<<<< HEAD
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
=======
>>>>>>> tokap 35
	Route::get('/add','ProdukController@add')->name('admin.produk.add');
	Route::post('/add','ProdukController@save');
});

<<<<<<< HEAD
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
});

Auth::routes();

Route::any('register', function(){ return abort(404); });

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
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
