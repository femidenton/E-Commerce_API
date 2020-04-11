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
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//when using RESTFUL api. With API no pages for create or edit. Just stores and updates
Route::apiResource('/products', 'ProductController');


// review url would be /products/11/reviews. To get the first'/products/' in the url, add a prefix
Route::group(['prefix' => 'product'], function() {
    Route::apiResource('/{product}/reviews', 'ReviewController');
});
