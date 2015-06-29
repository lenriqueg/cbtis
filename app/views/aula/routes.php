<?php

Route::get('aulas', ['as' => 'aulas', 'uses' => 'AulaController@index']);

Route::get('aula_show_{id}', ['as' => 'aula.show', 'uses' => 'AulaController@show']);

/* crear */

Route::get('aula_new', ['as' => 'aula.new', 'uses' => 'AulaController@create']);

Route::post('aula_new', ['as' => 'aula.new', 'uses' => 'AulaController@store']);

/* actualizar */

Route::get('aula_edit_{id}', ['as' => 'aula.edit', 'uses' => 'AulaController@edit']);

Route::put('aula_edit_{id}', ['as' => 'aula.put', 'uses' => 'AulaController@update']);

Route::put('aula_status_{id}', ['as' => 'aula.status', 'uses' => 'AulaController@status']);

/* eliminar */

Route::delete('aula_status_{id}', ['as' => 'aula.destroy', 'uses' => 'AulaController@destroy']);