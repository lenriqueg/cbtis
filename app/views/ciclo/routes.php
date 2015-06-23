<?php

Route::get('ciclos', ['as' => 'ciclos', 'uses' => 'CicloController@index']);

Route::get('ciclo-{id}', ['as' => 'ciclos', 'uses' => 'CicloController@show']);

Route::put('ciclo-{id}', ['as' => 'ciclos', 'uses' => 'CicloController@edit']);