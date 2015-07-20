<?php

$modulo = "modulo_general";

Route::get($modulo.'/aulas', ['as' => 'aulas', 'uses' => 'AulaController@index']);

Route::get($modulo.'/aula_show_{id}', ['as' => 'aula.show', 'uses' => 'AulaController@show']);

/* crear */

Route::get($modulo.'/aula_new', ['as' => 'aula.new', 'uses' => 'AulaController@create']);

Route::post($modulo.'/aula_new', ['as' => 'aula.new', 'uses' => 'AulaController@store']);

/* actualizar */

Route::get($modulo.'/aula_edit_{id}', ['as' => 'aula.edit', 'uses' => 'AulaController@edit']);

Route::put($modulo.'/aula_edit_{id}', ['as' => 'aula.put', 'uses' => 'AulaController@update']);

Route::put($modulo.'/aula_status_{id}', ['as' => 'aula.status', 'uses' => 'AulaController@status']);

/* eliminar */

Route::delete($modulo.'/aula_status_{id}', ['as' => 'aula.destroy', 'uses' => 'AulaController@destroy']);