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

use App\TheLoai;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    // TODO: yourdomain.com/admin/theloai/danhsach (them, sua)
    Route::group(['prefix' => 'theloai'], function() {
        Route::get('danhsach', 'TheLoaiController@getDanhSach');

        Route::get('them', 'TheLoaiController@getThem');
        Route::post('them', 'TheLoaiController@postThem');

        Route::get('sua/{id}', 'TheLoaiController@getSua');
        Route::post('sua/{id}', 'TheLoaiController@postSua');

        Route::get('xoa/{id}', 'TheLoaiController@getXoa');
    });

    // TODO: yourdomain.com/admin/loaitin/danhsach (them, sua)
    Route::group(['prefix' => 'loaitin'], function() {
        Route::get('danhsach', 'LoaiTinController@getDanhSach');

        Route::get('them', 'LoaiTinController@getThem');
        Route::post('them', 'LoaiTinController@postThem');

        Route::get('sua/{id}', 'LoaiTinController@getSua');
        Route::post('sua/{id}', 'LoaiTinController@postSua');

        Route::get('xoa/{id}', 'LoaiTinController@getXoa');
    });

    // TODO: yourdomain.com/admin/tintuc/danhsach (them, sua)
    Route::group(['prefix' => 'tintuc'], function() {
        Route::get('danhsach', 'TinTucController@getDanhSach');

        Route::get('them', 'TinTucController@getThem');
        Route::post('them', 'TinTucController@postThem');

        Route::get('sua/{id}', 'TinTucController@getSua');
        Route::post('sua/{id}', 'TinTucController@postSua');

        Route::get('xoa/{id}', 'TinTucController@getXoa');
    });

    // TODO: yourdomain.com/admin/slide/danhsach (them, sua)
    Route::group(['prefix' => 'slide'], function() {
        Route::get('danhsach', 'SlideController@getDanhSach');

        Route::get('them', 'SlideController@getThem');
        Route::post('them', 'SlideController@postThem');

        Route::get('sua/{id}', 'SlideController@getSua');
        Route::post('sua/{id}', 'SlideController@postSua');

        Route::get('xoa/{id}', 'SlideController@getXoa');
    });

    // TODO: yourdomain.com/admin/user/danhsach (them, sua)
    Route::group(['prefix' => 'user'], function() {
        Route::get('danhsach', 'UserController@getDanhSach');
        Route::get('them', 'UserController@getThem');
        Route::get('sua', 'UserController@getSua');
    });
});

Route::get('test', 'TestController@testYaml');
