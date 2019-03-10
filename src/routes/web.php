<?php

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

    Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
    Route::post('/folders/create', 'FolderController@create');

    Route::get('/folders/{id}/edit', 'FolderController@showEditForm')->name('folders.edit');
    Route::post('/folders/{id}/edit', 'FolderController@edit');

    Route::get('/folders/{id}/delete', 'FolderController@delete')->name('folders.delete');

    Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
    Route::post('/folders/{id}/tasks/create', 'TaskController@create');

    Route::get('/folders/{id}/tasks/{task_id}/edit', 'TaskController@showEditForm')->name('tasks.edit');
    Route::post('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit');

    Route::get('/folders/{id}/tasks/{task_id}/delete', 'TaskController@delete')->name('tasks.delete');
});

Auth::routes();
