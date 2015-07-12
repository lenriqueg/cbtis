<?php

Route::get('grupo/{id}/materias', ['as' => 'gms', 'uses' => 'GMController@index']);

/* crear */

Route::get('grupo/{id}/materia_new', ['as' => 'gm.new', 'uses' => 'GMController@create']);

Route::post('gm_new', ['as' => 'gm.post', 'uses' => 'GMController@store']);

/* actualizar */

// Route::get('gm_edit_{id}', ['as' => 'gm.edit', 'uses' => 'GMController@edit']);

// Route::put('gm_edit_{id}', ['as' => 'gm.put', 'uses' => 'GMController@update']);

// Route::put('gm_status_{id}', ['as' => 'gm.status', 'uses' => 'GMController@status']);

/* eliminar */

Route::delete('gm_destroy_{g}_{m}', ['as' => 'gm.destroy', 'uses' => 'GMController@destroy']);