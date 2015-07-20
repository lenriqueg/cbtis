<?php

$modulo = "modulo_general";

Route::get($modulo.'turnos', ['as' => 'turnos', 'uses' => 'TurnoController@index']);

Route::get($modulo.'turno_show_{id}', ['as' => 'turno.show', 'uses' => 'TurnoController@show']);

/* crear */

Route::get($modulo.'turno_new', ['as' => 'turno.new', 'uses' => 'TurnoController@create']);

Route::post($modulo.'turno_new', ['as' => 'turno.new', 'uses' => 'TurnoController@store']);

/* actualizar */

// Route::put($modulo.'ciclo-{id}', ['as' => 'turno.edit', 'uses' => 'TurnoController@edit']);

// Route::put($modulo.'turno_edit_{id}', ['as' => 'turno.put', 'uses' => 'TurnoController@update']);

Route::put($modulo.'turno_status_{id}', ['as' => 'turno.status', 'uses' => 'TurnoController@status']);

/* eliminar */

Route::delete($modulo.'turno_destroy_{id}', ['as' => 'turno.destroy', 'uses' => 'TurnoController@destroy']);