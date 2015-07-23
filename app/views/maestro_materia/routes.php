<?php

$modulo = "modulo_general";

Route::get($modulo.'/maestro/{id}/materias/', ['as' => 'cmms', 'uses' => 'CMMController@index']);

/* crear */

Route::get($modulo.'/maestro/{id}/materia_new', ['as' => 'cmm.new', 'uses' => 'CMMController@create']);

Route::post($modulo.'/cmm_new', ['as' => 'cmm.post', 'uses' => 'CMMController@store']);

/* actualizar */

// Route::get($modulo.'/cmm_edit_{id}', ['as' => 'cmm.edit', 'uses' => 'CMMController@edit']);

// Route::put($modulo.'/cmm_edit_{id}', ['as' => 'cmm.put', 'uses' => 'CMMController@update']);

// Route::put($modulo.'/cmm_status_{id}', ['as' => 'cmm.status', 'uses' => 'CMMController@status']);

/* eliminar */

Route::delete($modulo.'/cmm_destroy_{id}_{m}', ['as' => 'cmm.destroy', 'uses' => 'CMMController@destroy']);