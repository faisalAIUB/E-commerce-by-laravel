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
    return redirect()->route('home');
});
//Route::resource('/user', 'UserController');
Route::get('/product/details/{id}','ProductController@show')->name('product.details');
Route::get('/user/create',"UserController@create")->name('user.create');
Route::post('/user/create',"UserController@store");
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@verify');
Route::get('/login/logout', 'LoginController@logout')->name('logout');
Route::group(['middleware'=>'sess'],function(){
Route::get('/user/profile','UserController@index')->name('user.profile');
Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
Route::post('/user/edit/{id}','UserController@update');
Route::get('/user/info/{id}','UserController@show')->name('user.info');
Route::get('/product/create','ProductController@create')->name('product.create');
Route::post('/product/create','ProductController@store');
Route::get('/product/edit/{id}','ProductController@edit')->name('product.edit');
Route::post('/product/edit/{id}','ProductController@update');
Route::get('/product/delete/{id}','ProductController@delete')->name('product.delete');
Route::post('/product/delete/{id}','ProductController@destroy');
Route::group(['middleware' => 'admin'], function(){
		Route::get('admin/home', 'AdminController@index')->name('admin.home');
		// Route::get('/category', 'CategoryController@list')->name('category.list');
		Route::get('/category/create', 'CategoryController@create')->name('category.create');
		Route::post('/category/create', 'CategoryController@store');
		Route::get('/category/show/{id}', 'CategoryController@show')->name('category.show');
		Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
		Route::post('/category/edit/{id}', 'CategoryController@update');
		
		Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
	});		


});



