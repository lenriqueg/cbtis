<?php

Route::get('ciclos', ['as' => 'ciclos', 'uses' => 'CicloController@index']);

Route::get('ciclo_show_{id}', ['as' => 'ciclo.show', 'uses' => 'CicloController@show']);

/* crear */

Route::get('ciclo_new', ['as' => 'ciclo.new', 'uses' => 'CicloController@create']);

Route::post('ciclo_new', ['as' => 'ciclo.new', 'uses' => 'CicloController@store']);

/* actualizar */

// Route::put('ciclo-{id}', ['as' => 'ciclo.edit', 'uses' => 'CicloController@edit']);

// Route::put('ciclo_edit_{id}', ['as' => 'ciclo.put', 'uses' => 'CicloController@update']);

Route::put('ciclo_status_{id}', ['as' => 'ciclo.status', 'uses' => 'CicloController@status']);

/* eliminar */

Route::delete('ciclo_status_{id}', ['as' => 'ciclo.destroy', 'uses' => 'CicloController@destroy']);