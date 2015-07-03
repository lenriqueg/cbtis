<?php

Route::get('turnos', ['as' => 'turnos', 'uses' => 'TurnoController@index']);

Route::get('turno_show_{id}', ['as' => 'turno.show', 'uses' => 'TurnoController@show']);

/* crear */

Route::get('turno_new', ['as' => 'turno.new', 'uses' => 'TurnoController@create']);

Route::post('turno_new', ['as' => 'turno.new', 'uses' => 'TurnoController@store']);

/* actualizar */

// Route::put('ciclo-{id}', ['as' => 'turno.edit', 'uses' => 'TurnoController@edit']);

// Route::put('turno_edit_{id}', ['as' => 'turno.put', 'uses' => 'TurnoController@update']);

Route::put('turno_status_{id}', ['as' => 'turno.status', 'uses' => 'TurnoController@status']);

/* eliminar */

Route::delete('turno_destroy_{id}', ['as' => 'turno.destroy', 'uses' => 'TurnoController@destroy']);