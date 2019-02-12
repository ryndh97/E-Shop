<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/product', 'Api\ProductController@index');//done
Route::get('/category', 'Api\CategoryController@index');//done
Route::get('/category/sortby/{id}', 'Api\CategoryController@sort');//done
Route::get('/order', 'Api\OrderController@index');//done
Route::get('/user', 'Api\UserController@index');//done

Route::post('/register', 'Api\UserController@register');//done
Route::post('/login', 'Api\UserController@login');//done

Route::group(['middleware'=>['auth:api']],function(){
    Route::get('/user/profile', 'Api\UserController@profile');//done
    Route::post('/user/profile/{user}', 'Api\UserController@update');//kurang list
    Route::post('/user/profile/password/{user}', 'Api\UserController@password');
    Route::post('/order/buy','Api\OrderController@order');
    Route::get('/order/confirm/{order}', 'Api\OrderController@confirm');//done
    Route::delete('/order/delete/{id}', 'Api\OrderController@destroy');
    Route::post('/wishlist/add', 'Api\UserController@add');//done
    Route::delete('/wishlist/delete/{id}', 'Api\UserController@destroy');
    Route::get('/wishlist', 'Api\UserController@wishlist');
});