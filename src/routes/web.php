<?php

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/folders/{folder}/tasks', 'TaskController@index')->name('tasks.index');

    Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
    Route::post('/folders/create', 'FolderController@create');

    Route::group(['middleware' => 'can:view,folder'], function() {
        Route::get('/folders/{folder}/edit', 'FolderController@showEditForm')->name('folders.edit');
        Route::post('/folders/{folder}/edit', 'FolderController@edit');

        Route::get('/folders/{folder}/delete', 'FolderController@delete')->name('folders.delete');

        Route::get('/folders/{folder}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
        Route::post('/folders/{folder}/tasks/create', 'TaskController@create');

        Route::get('/folders/{folder}/tasks/{task}/edit', 'TaskController@showEditForm')->name('tasks.edit');
        Route::post('/folders/{folder}/tasks/{task}/edit', 'TaskController@edit');

        Route::get('/folders/{folder}/tasks/{task}/delete', 'TaskController@delete')->name('tasks.delete');
    });
});

Auth::routes();
