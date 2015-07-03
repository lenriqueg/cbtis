<?php

Route::get('horas', ['as' => 'horas', 'uses' => 'HoraController@index']);

Route::get('hora_show_{id}', ['as' => 'hora.show', 'uses' => 'HoraController@show']);

/* crear */

Route::get('hora_new', ['as' => 'hora.new', 'uses' => 'HoraController@create']);

Route::post('hora_new', ['as' => 'hora.new', 'uses' => 'HoraController@store']);

/* actualizar */

// Route::put('hora_{id}', ['as' => 'hora.edit', 'uses' => 'HoraController@edit']);

// Route::put('hora_edit_{id}', ['as' => 'hora.put', 'uses' => 'HoraController@update']);

Route::put('hora_status_{id}', ['as' => 'hora.status', 'uses' => 'HoraController@status']);

/* eliminar */

Route::delete('hora_destroy_{id}', ['as' => 'hora.destroy', 'uses' => 'HoraController@destroy']);