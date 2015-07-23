<?php

$modulo = "modulo_general";

Route::get($modulo.'/especialidades', ['as' => 'especialidades', 'uses' => 'CarreraController@index']);

Route::get($modulo.'/especialidad_show_{id}', ['as' => 'esp.show', 'uses' => 'CarreraController@show']);

/* crear */

Route::get($modulo.'/especialidad_new', ['as' => 'esp.new', 'uses' => 'CarreraController@create']);

Route::post($modulo.'/especialidad_new', ['as' => 'esp.new', 'uses' => 'CarreraController@store']);

/* actualizar */

Route::get($modulo.'/especialidad_edit_{id}', ['as' => 'esp.edit', 'uses' => 'CarreraController@edit']);

Route::put($modulo.'/especialidad_edit_{id}', ['as' => 'esp.put', 'uses' => 'CarreraController@update']);

Route::put($modulo.'/especialidad_status_{id}', ['as' => 'esp.status', 'uses' => 'CarreraController@status']);

/* eliminar */

Route::delete($modulo.'/especialidad_show_{id}', ['as' => 'esp.destroy', 'uses' => 'CarreraController@destroy']);