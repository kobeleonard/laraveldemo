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

//Route::get('/user',function(){
//    return 'GET请求';
//});
//
//Route::post('/user',function(){
//    dump($_POST);
//});
//
//Route::put('/user',function(){
//    $putData = file_get_contents('php://input');
//    parse_str($putData,$arr);
//    dump($arr);
//});
//
//Route::delete('/user',function(){
//    $putData = file_get_contents('php://input');
//    parse_str($putData,$arr);
//    dump($arr);
//});
//
//Route::any('/user',function(){
//    dump($_SERVER['REQUEST_METHOD']);
//});
//
//Route::get('user/{id}',function($id){
//    dump($id);
//});
//
//Route::get('user/{id?}',function($id=0){
//    dump($id);
//});

//Route::get('user/{id?}',function(int $id=0){
//    dump($id);
//});


//Route::group(['prefix'=>'admin'],function(){
//    Route::get('user',function(){
//        return 'admin/user';
//    });
//
//
//    Route::group(['prefix'=>'news'],function(){
//       Route::get('index',function(){
//            return 'admin/news/index';
//       });
//    })
//});

//
//Route::get('/user','UserController@index')->name('user.index');
//
//
//Route::group(['namespace'=>'Admin'],function(){
//   Route::get('demo','UserController@index')->name('demo.index.');
//});


Route::get('users','UserController@list');
Route::get('users/{id}','UserController@show');
Route::post('users','UserController@add');
Route::put('users/{id}','UserController@edit');
Route::delete('users/{id}','UserController@del');