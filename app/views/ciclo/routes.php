<?php

$modulo = "modulo_general";

Route::get($modulo.'ciclos', ['as' => 'ciclos', 'uses' => 'CicloController@index']);

Route::get($modulo.'ciclo_show_{id}', ['as' => 'ciclo.show', 'uses' => 'CicloController@show']);

/* crear */

Route::get($modulo.'ciclo_new', ['as' => 'ciclo.new', 'uses' => 'CicloController@create']);

Route::post($modulo.'ciclo_new', ['as' => 'ciclo.new', 'uses' => 'CicloController@store']);

/* actualizar */

// Route::put($modulo.'ciclo-{id}', ['as' => 'ciclo.edit', 'uses' => 'CicloController@edit']);

// Route::put($modulo.'ciclo_edit_{id}', ['as' => 'ciclo.put', 'uses' => 'CicloController@update']);

Route::put($modulo.'ciclo_status_{id}', ['as' => 'ciclo.status', 'uses' => 'CicloController@status']);

/* eliminar */

Route::delete($modulo.'ciclo_status_{id}', ['as' => 'ciclo.destroy', 'uses' => 'CicloController@destroy']);