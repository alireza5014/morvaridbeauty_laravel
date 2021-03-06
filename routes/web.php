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

use Illuminate\Support\Facades\Auth;





Route::post('site/insert_message', 'Site\ContactsController@save')->name('insert_message');


Route::get('/', 'Site\SiteController@home')->name('site_home');


Route::get('/search', 'Site\SiteController@search')->name('search');
Route::get('/blog/{category?}', 'Site\SiteController@blog')->name('blog');
Route::get('/blog/{category}/{title}', 'Site\SiteController@content')->name('content');
Route::get('/site/{page?}', 'Site\SiteController@page')->name('page');


Auth::routes();


Route::group(['prefix' => '/user'], function () {


    Route::group(['middleware' => 'auth:user'], function () {


        Route::get('/home', 'User\UserController@home')->name('user.home');


        Route::get('/post/list/{category_id?}', 'User\PostController@list')->name('user.post.list');
        Route::get('/post/new', 'User\PostController@new')->name('user.post.new');
        Route::get('/post/edit/{id}', 'User\PostController@edit')->name('user.post.edit');
        Route::post('/post/create', 'User\PostController@create')->name('user.post.create');
        Route::post('/post/edit/modify', 'User\PostController@modify')->name('user.post.modify');


        Route::get('/slider/list', 'User\SliderController@list')->name('user.slider.list');
        Route::post('/slider/create', 'User\SliderController@create')->name('user.slider.create');
        Route::post('/slider/modify', 'User\SliderController@modify')->name('user.slider.modify');

    });
});
