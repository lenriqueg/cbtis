<?php

$modulo = "modulo_general";

Route::get($modulo.'/especialidad/{id}/grupos', ['as' => 'grupos', 'uses' => 'GrupoController@index']);

Route::get($modulo.'/grupo_show_{id}', ['as' => 'grupo.show', 'uses' => 'GrupoController@show']);

/* crear */

Route::get($modulo.'/especialidad/{id}/grupo_new', ['as' => 'grupo.new', 'uses' => 'GrupoController@create']);

Route::post($modulo.'/grupo_new', ['as' => 'grupo.post', 'uses' => 'GrupoController@store']);

/* actualizar */

Route::get($modulo.'/grupo_edit_{id}', ['as' => 'grupo.edit', 'uses' => 'GrupoController@edit']);

Route::put($modulo.'/grupo_edit', ['as' => 'grupo.put', 'uses' => 'GrupoController@update']);

Route::put($modulo.'/grupo_status_{id}', ['as' => 'grupo.status', 'uses' => 'GrupoController@status']);

/* eliminar */

Route::delete($modulo.'/grupo_show_{id}', ['as' => 'grupo.destroy', 'uses' => 'GrupoController@destroy']);