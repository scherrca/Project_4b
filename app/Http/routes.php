<?php


    //Route to the index page
    Route::get('/', 'P4Controller@getIndex');

    //Route to creating a new company
    Route::get('/company/create', 'P4Controller@getCreate');
    //Route to the post data for creating a company
    Route::post('/company/create', 'P4Controller@postCreate');

    //Route to updating info for a company
    Route::get('/company/update', 'P4Controller@getUpdate');
    //Route to the post data for updating info for a company
    Route::post('/company/update', 'P4Controller@postUpdate');

    //Route to deleting a company
    Route::get('/company/delete', 'P4Controller@getDelete');
    //Route to the post data for deleting a company
    Route::post('/company/delete', 'P4Controller@postDelete');

    //Route to deleting a company
    Route::get('/company/show', 'P4Controller@getShow');
    //Route to the post data for deleting a company
    Route::post('/company/show', 'P4Controller@postShow');

Route::group(['middleware' => ['web']], function () {

});



