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
Route::post('sample1', 'Api\Preprocess\Sample\Sample1PreprocessController@index')->name('Sample.Sample1');
Route::post('/sample2/{name}', 'Api\Preprocess\Sample\Sample2PreprocessController@index')->name('Sample.Sample2');
Route::post('/sample3', 'Api\Preprocess\Sample\Sample3PreprocessController@index')->name('Sample.Sample3');
Route::post('/sample4', 'Api\Preprocess\Sample\Sample4PreprocessController@index')->name('Sample.Sample4');
