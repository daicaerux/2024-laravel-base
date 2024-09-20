<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'namespace' => 'Cms\Modules\Product\Controllers',
    'middleware' => 'web',
], function() {

    Route::group([
        'middleware' => ['auth', 'cms.verified']
    ], function () {
        Route::get('/product', 'ProductController@index');
    });
});
