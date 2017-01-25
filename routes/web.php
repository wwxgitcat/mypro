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
	// $error = "this is a error test222" ;
	// Log::emergency($error);
	// Log::alert($error);
	// Log::critical($error);
	// Log::error($error);
	// Log::warning($error);
	// Log::notice($error);
	// Log::info($error);
	// Log::debug($error);
	// 
	// return 'Hello World';
    return view('welcome');
});

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

Route::match(['get', 'post'], '/demo', function () {
	return "this dmeo--";
});

Route::any('demo2', function () {
	return "this demo2--";
});

//只接受post
Route::match(['post'], '/demo3', function () {
	return "this dmeo";
});


Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('user2/{id}', function ($id = "zhangsan") {
    return 'User '.$id;
});

//指定默认
Route::get('user3/{demo?}', function ($demo = 'John') {
    return 'User '.$demo;
});

// 跳转到控制器
Route::get('user4', 'UserController@test');


//后台
Route::group(['middleware' => 'check','namespace' => 'Admin'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
	// Route::get('user5', 'UserController@test');
    Route::group(['namespace' => 'Demo'], function(){
        // 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
		Route::get('admin', 'UserController@test');
    });

    Route::group(['namespace' => 'Demo2'], function(){
        // 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
		Route::get('admin2', 'OrderController@test');
    });
});


// 前台
Route::group(['namespace' => 'Index'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
	// Route::get('user5', 'UserController@test');

    Route::group(['namespace' => 'Demo'], function(){
        // 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
		Route::get('index', 'UserController@test');
    });
});