<?php

Route::get('maestros', ['as' => 'maestros', 'uses' => 'MaestroController@index']);

Route::get('maestro-{id}', ['as' => 'maestros', 'uses' => 'MaestroController@show']);