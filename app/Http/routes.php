<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/smartphone', function () {
    $smartphone = app()->make('Smartphone');

    echo $smartphone->name . ', ' . $smartphone->cpu->vendor . ' ' .
         $smartphone->cpu->core . ' cores, ' . $smartphone->display->resolution . ' display, ' .
         $smartphone->camera->megapixel . ' megapixels camera, battery capacity ' .
         $smartphone->battery->capacity . ' mAh.';

    //return Response::view('smartphone', ['smartphone' => app()->make('Smartphone')]);
});

Route::get('/shorten', function () {
    return Response::view('shorten', ['link' => Bitly::shorten('http://www.citrus.ua/shop/goods/mobile/189/170794/')]);
});