<?php

Route::get('maestro/{id}/materias/', ['as' => 'cmm', 'uses' => 'CMMController@index']);

/* crear */

Route::get('maestro/{id}/materia_new', ['as' => 'cmm.new', 'uses' => 'CMMController@create']);

Route::post('cmm_new', ['as' => 'cmm.post', 'uses' => 'CMMController@store']);

/* actualizar */

// Route::get('cmm_edit_{id}', ['as' => 'cmm.edit', 'uses' => 'CMMController@edit']);

// Route::put('cmm_edit_{id}', ['as' => 'cmm.put', 'uses' => 'CMMController@update']);

// Route::put('cmm_status_{id}', ['as' => 'cmm.status', 'uses' => 'CMMController@status']);

/* eliminar */

Route::delete('cmm_destroy_{g}_{m}', ['as' => 'cmm.destroy', 'uses' => 'CMMController@destroy']);