<?php

$modulo = "modulo_general";

Route::get($modulo.'dias', ['as' => 'dias', 'uses' => 'DiaController@index']);

Route::get($modulo.'dia_show_{id}', ['as' => 'dia.show', 'uses' => 'DiaController@show']);

/* crear */

Route::get($modulo.'dia_new', ['as' => 'dia.new', 'uses' => 'DiaController@create']);

Route::post($modulo.'dia_new', ['as' => 'dia.new', 'uses' => 'DiaController@store']);

/* actualizar */

// Route::put($modulo.'ciclo-{id}', ['as' => 'dia.edit', 'uses' => 'DiaController@edit']);

// Route::put($modulo.'dia_edit_{id}', ['as' => 'dia.put', 'uses' => 'DiaController@update']);

Route::put($modulo.'dia_status_{id}', ['as' => 'dia.status', 'uses' => 'DiaController@status']);

/* eliminar */

Route::delete($modulo.'dia_status_{id}', ['as' => 'dia.destroy', 'uses' => 'DiaController@destroy']);