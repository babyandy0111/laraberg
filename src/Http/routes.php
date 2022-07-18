<?php

use Babyandy0111\Laraberg\Controllers\BlockRendererController;
use Babyandy0111\Laraberg\Controllers\OEmbedController;

Route::group(['prefix' => config('laraberg.prefix'), 'middleware' => config('laraberg.middlewares')], function () {
    Route::get('oembed', [OEmbedController::class, 'show']);
    Route::get('block-renderer', [BlockRendererController::class, 'show']);
});
