<?php

$modulo = "modulo_general";

Route::get($modulo.'/grupo/{id}/materias', ['as' => 'gms', 'uses' => 'GMController@index']);

/* crear */

Route::get($modulo.'/grupo/{id}/materia_new', ['as' => 'gm.new', 'uses' => 'GMController@create']);

Route::post($modulo.'/gm_new', ['as' => 'gm.post', 'uses' => 'GMController@store']);

/* actualizar */

// Route::get($modulo.'/gm_edit_{id}', ['as' => 'gm.edit', 'uses' => 'GMController@edit']);

// Route::put($modulo.'/gm_edit_{id}', ['as' => 'gm.put', 'uses' => 'GMController@update']);

// Route::put($modulo.'/gm_status_{id}', ['as' => 'gm.status', 'uses' => 'GMController@status']);

/* eliminar */

Route::delete($modulo.'/gm_destroy_{g}_{m}', ['as' => 'gm.destroy', 'uses' => 'GMController@destroy']);