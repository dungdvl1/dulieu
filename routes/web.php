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

Route::get('/',[
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route::get('index',[
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route::get('chi-tiet-phim/{id}', [
    'as' => 'chitietphim',
    'uses' => 'PageController@getPhim'      
]);

Route::get('checkout/', [
    'as'=> 'checkout',
    'uses' => 'PageController@checkout' 
]);


Route::get('chon-ghe', [
    'as'=> 'chon-ghe',
    'uses' => 'PageController@chonghe' 
]);

Route::get('add-to-cart/{id}', [
    'as'=> 'themgiohang',
    'uses' => 'PageController@getAddToCart' 
]);

Route::group(['prefix' => 'dangnhap'], function () {
    Route::get('/', 'PageController@getdangnhap');
    Route::post('/', 'PageController@postdangnhap');
});


// Route::get('dangnhap', [
//     'as' => 'dangnhap',
//     'uses' => 'PageController@getdangnhap'
// ]);

Route::post('dangnhap', [
    'as' => 'dangnhap',
    'uses' => 'PageController@postdangnhap'
]);

Route::get('register', [
    'as' => 'register',
    'uses' => 'PageController@getRegister'
]);

Route::post('register', [
    'as' => 'register',
    'uses' => 'PageController@postRegister'
]);

Route::get('Admin', 'AdminController@getHome');
Route::get('logout', 'AdminController@getLogout');

Route::get('Admin/login', 'AdminController@getLogin');
Route::post('Admin/login', 'AdminController@postLogin');


// Route::group(['prefix' => 'cart'], function () {
//     Route::get('add/{id}', 'CartController@getaddCart');
// });



Route::group(['prefix' => 'Admin/'], function () {
    Route::group(['prefix' => 'phim/'], function () {
        Route::get('/', "PhimController@getPhim");

        Route::get('add/', "PhimController@getAddPhim");
        Route::post('add/', [
            'as' => 'postAddPhim',
            'uses' => 'PhimController@postAddPhim'
        ]);

        Route::get('/edit/{id}/', "PhimController@getEditPhim");
        Route::post('/edit/{id}/', "PhimController@postEditPhim");

        Route::get('/delete/{id}/', "PhimController@getDeletePhim");
    });
});




// Route::group(['prefix' => 'phim'], function () {
//     Route::get('/', "PhimController@getPhim");

//     Route::get('add', "PhimController@getAddPhim");
//     Route::get('add', "PhimController@postAddPhim");

//     Route::get('edit/{id}', "PhimController@getEditPhim");
//     Route::get('edit/{id}', "PhimController@postEditPhim");

//     Route::get('delete/{id}', "PhimController@getDeletePhim");
// });