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

Route::get('/admin', 'AdminController@loginAdmin');
Route::post('/admin', 'AdminController@postLoginAdmin');

Route::get('/home', function () {
    return view('home');
});

Route::prefix('admin')->group(function () {
    Route::prefix('theloai')->group(function () {
        Route::get('/', [
            'as' => 'theloai.index',
            'uses' => 'theloaiController@index',
//            'middleware' => 'can:theloai-list'
        ]);
        Route::get('/create', [
            'as' => 'theloai.create',
            'uses' => 'theloaiController@create',
//            'middleware' => 'can:theloai-add'
        ]);
        Route::post('/store', [
            'as' => 'theloai.store',
            'uses' => 'theloaiController@store',
        ]);
        Route::get('/edit/{id}', [
            'as' => 'theloai.edit',
            'uses' => 'theloaiController@edit',
//            'middleware' => 'can:theloai-edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'theloai.update',
            'uses' => 'theloaiController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'theloai.delete',
            'uses' => 'theloaiController@delete',
//            'middleware' => 'can:theloai-delete'
        ]);
    });


    Route::prefix('sach')->group(function () {
        Route::get('/', [
            'as' => 'sach.index',
            'uses' => 'SachController@index'

        ]);
        Route::get('/create', [
            'as' => 'sach.create',
            'uses' => 'SachController@create'
        ]);
        Route::post('/store', [
            'as' => 'sach.store',
            'uses' => 'SachController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'sach.edit',
            'uses' => 'SachController@edit'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'sach.delete',
            'uses' => 'SachController@delete'
        ]);
        Route::post('/update/{id}', [
            'as' => 'sach.update',
            'uses' => 'SachController@update'
        ]);
    });

    Route::prefix('menus')->group(function () {
        Route::get('/', [
            'as' => 'menus.index',
            'uses' => 'MenuController@index',
            'middleware' => 'can:menu-list'
        ]);
        Route::get('/create', [
            'as' => 'menus.create',
            'uses' => 'MenuController@create'
        ]);
        Route::post('/store', [
            'as' => 'menus.store',
            'uses' => 'MenuController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'menus.edit',
            'uses' => 'MenuController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'menus.update',
            'uses' => 'MenuController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'menus.delete',
            'uses' => 'MenuController@delete'
        ]);
    });

    Route::prefix('slider')->group(function () {
        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'SliderController@index'
        ]);
        Route::get('/create', [
            'as' => 'slider.create',
            'uses' => 'SliderController@create'
        ]);
        Route::post('/store', [
            'as' => 'slider.store',
            'uses' => 'SliderController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'slider.edit',
            'uses' => 'SliderController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'slider.update',
            'uses' => 'SliderController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'slider.delete',
            'uses' => 'SliderController@delete'
        ]);
    });

    Route::prefix('setting')->group(function () {
        Route::get('/', [
            'as' => 'setting.index',
            'uses' => 'SettingController@index'
        ]);
        Route::get('/create', [
            'as' => 'setting.create',
            'uses' => 'SettingController@create'
        ]);
        Route::post('/store', [
            'as' => 'setting.store',
            'uses' => 'SettingController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'setting.edit',
            'uses' => 'SettingController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'setting.update',
            'uses' => 'SettingController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'setting.delete',
            'uses' => 'SettingController@delete'
        ]);
    });

    Route::prefix('users')->group(function () {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'UserController@index'
        ]);
        Route::get('/create', [
            'as' => 'users.create',
            'uses' => 'UserController@create'
        ]);
        Route::post('/store', [
            'as' => 'users.store',
            'uses' => 'UserController@store'
        ]);
        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' => 'UserController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'users.update',
            'uses' => 'UserController@update'
        ]);
        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' => 'UserController@delete'
        ]);
    });

    Route::prefix('roles')->group(function () {
        Route::get('/', [
            'as' => 'roles.index',
            'uses' => 'RoleController@index'
        ]);
        Route::get('/create', [
            'as' => 'roles.create',
            'uses' => 'RoleController@create'
        ]);
        Route::post('/store', [
            'as' => 'roles.store',
            'uses' => 'RoleController@store'
        ]);
        Route::get('edit/{id}', [
            'as' => 'roles.edit',
            'uses' => 'RoleController@edit'
        ]);
        Route::post('/update/{id}', [
            'as' => 'roles.update',
            'uses' => 'RoleController@update'
        ]);

    });

    Route::prefix('permissons')->group(function () {
        Route::get('/create', [
            'as' => 'permissions.create',
            'uses' => 'PermissionController@createPermission'
        ]);
        Route::post('/store', [
            'as' => 'permissions.store',
            'uses' => 'PermissionController@store'
        ]);

    });
});


