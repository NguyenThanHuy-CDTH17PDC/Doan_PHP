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
    return view('layout');
})->name('dashboard');

Route::prefix('linh_vuc')->group(function(){
	Route::name('linh_vuc.')->group(function(){
		Route::get('/', function () {
	    return view('ds_linh_vuc');
		})->name('danh_sach');

		Route::get('/them_moi', function () {
		    return view('them_linh_vuc');
		})->name('them_moi');
	});
});
Route::prefix('goi_credit')->group(function(){
	Route::name('goi_credit.')->group(function(){
		Route::get('/', function () {
	    return view('ds_goi_credit');
		})->name('danh_sach');

		Route::get('/them_moi', function () {
		    return view('them_goi_credit');
		})->name('them_moi');
	});
});

Route::prefix('cau_hoi')->group(function(){
	Route::name('cau_hoi.')->group(function(){
		Route::get('/', function () {
	    return view('ds_cau_hoi');
		})->name('danh_sach');

		Route::get('/them_moi', function () {
		    return view('them_cau_hoi');
		})->name('them_moi');
	});
});

Route::get('/lich_su_mua_credit', function () {
    return view('lich_su_mua_credit');
})->name('lich_su_mua_credit');

Route::prefix('nguoi_choi')->group(function(){
	Route::name('nguoi_choi.')->group(function(){
		Route::get('/', function () {
	    return view('ds_nguoi_choi');
		})->name('danh_sach');

		Route::get('/them_moi', function () {
		    return view('them_nguoi_choi');
		})->name('them_moi');
	});
});
