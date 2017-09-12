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

Route::get('deliver','Deliver@getLogin')->name('getLogin');
Route::post('deliver','Deliver@postLogin')->name('postLogin');

Route::get('deliver/logout','Deliver@getLogOut')->name('getLogOut');

Route::get('test',function(){
	return view('admindeliver.index');
});

Route::middleware('auth')->group(function () {
    Route::prefix('deliver_admin')->group(function(){
    	route::get('/',function(){
    		return view('admindeliver.index');
    	})->name('index');
    	route::get('accounts',function(){
    		return view('admindeliver.accounts');
    	})->name('accounts');
    	route::get('manage',function(){
    		return view('admindeliver.manage');
    	})->name('manage');
    	route::get('statistic',function(){
    		return view('admindeliver.statistic');
    	})->name('statistic');
    });
});
Route::get('index', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex']);
Route::get('ds-sanpham', [
    'as' => 'ds-sanpham',
    'uses' => 'PageController@getdsSanPham']);
Route::get('chitiet-sp',[
    'as' => 'chitiet-sp',
    'uses' => 'PageController@getChitietSP'
]);
Route::get('dashboard',[
    'as' => 'dashboard',
    'uses' => 'PageController@getDashBoard'
    ]);
Route::get('billing-info',[
    'as' => 'billing-info',
    'uses' => 'PageController@getBillingInfo'
    ]);