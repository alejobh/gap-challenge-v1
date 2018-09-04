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
  return view('app');
});

Route::group(['prefix'=>'services', 'middleware'=>['auth_basic']], function() {
  Route::group(['prefix'=>'stores'], function() {
    Route::get('/', ['uses'=>'Api\StoreController@getStores']);
    Route::delete('/{id}', ['uses'=>'Api\StoreController@deleteStore']);
  });

  Route::group(['prefix'=>'articles'], function() {
    Route::get('/', ['uses'=>'Api\ArticleController@getArticles']);
    Route::get('stores/{id}', ['uses'=>'Api\ArticleController@getArticlesByStore']);
  });
});
