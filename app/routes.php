<?php

Route::get('/todos', 'TodoListController@index');

Route::get('/todos/{id}', 'TodoListController@show');
