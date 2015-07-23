<?php

$modulo = "modulo_general";

Route::get($modulo.'/horas', ['as' => 'horas', 'uses' => 'HoraController@index']);

Route::get($modulo.'/hora_show_{id}', ['as' => 'hora.show', 'uses' => 'HoraController@show']);

/* crear */

Route::get($modulo.'/hora_new', ['as' => 'hora.new', 'uses' => 'HoraController@create']);

Route::post($modulo.'/hora_new', ['as' => 'hora.new', 'uses' => 'HoraController@store']);

/* actualizar */

// Route::put($modulo.'/hora_{id}', ['as' => 'hora.edit', 'uses' => 'HoraController@edit']);

// Route::put($modulo.'/hora_edit_{id}', ['as' => 'hora.put', 'uses' => 'HoraController@update']);

Route::put($modulo.'/hora_status_{id}', ['as' => 'hora.status', 'uses' => 'HoraController@status']);

/* eliminar */

Route::delete($modulo.'/hora_destroy_{id}', ['as' => 'hora.destroy', 'uses' => 'HoraController@destroy']);