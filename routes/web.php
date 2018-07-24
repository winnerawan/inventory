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
    return view('auth/login');
});
Route::get('getJsonQty/{id}', 'Admin\RepairController@getJsonQty');

Route::group(['middleware' => ['web', 'auth', 'roles']], function () {

    Route::group(['roles' => 'guest'], function () {
       Route::resource('site', 'PageController');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/denied', function () {
   return view('denied');
});

//Route::get('admin/home', 'Admin\DashboardController@dashboard')->middleware('admin');
Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/home', 'Admin\DashboardController@dashboard');
    Route::resource('admin/category', 'Admin\CategoryController')->middleware('admin');
    Route::resource('admin/program', 'Admin\ProgramController')->middleware('admin');
    Route::resource('admin/users', 'Admin\UserController');
    Route::resource('admin/stuff', 'Admin\StuffController');
    Route::resource('admin/item', 'Admin\ItemController');
    Route::resource('admin/repair', 'Admin\RepairController');
    Route::get('admin/repairback', 'Admin\RepairController@back')->name('repair.back');
    Route::post('admin/repairfixed', 'Admin\RepairController@fixed')->name('repair.fixed');

});



Route::group(['middleware' => 'unit'], function () {
    Route::get('unit/home', 'Unit\DashboardController@dashboard');
    Route::resource('unit/category', 'Unit\CategoryController')->middleware('unit');
//    Route::resource('unit/program', 'Unit\ProgramController');
    Route::resource('unit/stuff', 'Unit\StuffController');
    Route::resource('unit/item', 'Unit\ItemController');
    Route::resource('unit/repair', 'Unit\RepairController');
    Route::get('unit/repairback', 'Admin\RepairController@back')->name('repair.back');
    Route::post('unit/repairfixed', 'Admin\RepairController@fixed')->name('repair.fixed');
});


Route::group(['middleware' => 'program'], function () {
    Route::get('program/home', 'Program\DashboardController@dashboard');
//    Route::resource('program/category', 'Program\CategoryController');
//    Route::resource('program/program', 'Program\ProgramController');
    Route::resource('program/stuff', 'Program\StuffController');
    Route::resource('program/item', 'Program\ItemController');
    Route::resource('program/repair', 'Program\RepairController');
    Route::get('program/repairback', 'Program\RepairController@back')->name('repair.back');
    Route::post('program/repairfixed', 'Program\RepairController@fixed')->name('repair.fixed');
});
