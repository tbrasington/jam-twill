<?php

// Register Twill routes here (eg. Route::module('posts'))

Route::module('pages');

Route::group(['prefix' => 'work'], function () {
    Route::module('entries');
    Route::module('sections');
});

Route::module('entries');
Route::module('sections');