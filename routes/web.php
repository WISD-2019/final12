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
Route::auth();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home.home');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('welcome',  ['as' => 'welcome.index',    'uses' => 'WelcomeController@index']);

// 後台
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', ['as' => 'admin.dashboard.index', 'uses' => 'AdminDashboardController@index']);



Route::get('/Taichung', 'TaichungController@index');
Route::get('/Kaohsiung', 'KaohsiungController@index');

    Route::get('posts'          , ['as' => 'admin.posts.index' , 'uses' => 'AdminPostsController@index']);
    Route::get('posts/create'   , ['as' => 'admin.posts.create', 'uses' => 'AdminPostsController@create']);
    Route::post('posts',['as'=>'admin.posts.store','uses'=> 'AdminPostsController@store']);
    Route::patch('posts/{id}',['as' => 'admin.posts.update', 'uses' => 'AdminPostsController@update']);
    Route::delete('posts/{id}',['as'=>'admin.posts.destroy','uses'=>'AdminPostsController@destroy']);
    Route::get('posts/{id}/edit', ['as' => 'admin.posts.edit'  , 'uses' => 'AdminPostsController@edit']);
});
// 前台
Route::post('posts', ['as' => 'posts.index',   'uses' => 'PostsController@index']);
Route::get('post',  ['as' => 'posts.show',    'uses' => 'PostsController@show']);
Route::get('about',    ['as' => 'posts.about',   'uses' => 'AboutController@index']);
Route::get('contact',  ['as' => 'posts.contact', 'uses' => 'PostsController@contact']);

