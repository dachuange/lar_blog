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

//Route::any('/test',function(){
//    return "hello test";
//});

//Route::redirect('/aaa', '/index');

//Route::view('/index', 'User.index', ['name' => 'dachuan']);

//Route::get('/admin', function(){
//    return view('User.index', ['name' => 'hanhan']);
//});

//Route::get('/index', 'Index\IndexController@index');
//Route::get('/', function () {
//    return view('User.index', ['name' => 'James']);
//});

//Route::get('user/{id}', function ($id = 2) {
//    return 'User' .$id;
////    return '123';
//});

Route::get('user/name/{name?}', function ($name='') {
    return 'name=' .$name;
//    return 'aab
});