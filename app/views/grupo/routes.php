<?php

Route::get('especialidad/{id}/grupos', ['as' => 'grupos', 'uses' => 'GrupoController@index']);

Route::get('grupo_show_{id}', ['as' => 'grupo.show', 'uses' => 'GrupoController@show']);

/* crear */

Route::get('grupo_new', ['as' => 'grupo.new', 'uses' => 'GrupoController@create']);

Route::post('grupo_new', ['as' => 'grupo.new', 'uses' => 'GrupoController@store']);

/* actualizar */

Route::get('grupo_edit_{id}', ['as' => 'grupo.edit', 'uses' => 'GrupoController@edit']);

Route::put('grupo_edit_{id}', ['as' => 'grupo.put', 'uses' => 'GrupoController@update']);

Route::put('grupo_status_{id}', ['as' => 'grupo.status', 'uses' => 'GrupoController@status']);

/* eliminar */

Route::delete('grupo_show_{id}', ['as' => 'grupo.destroy', 'uses' => 'GrupoController@destroy']);