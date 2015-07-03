<?php

Route::get('maestros', ['as' => 'maestros', 'uses' => 'MaestroController@index']);

Route::get('maestro_show_{id}', ['as' => 'mtr.show', 'uses' => 'MaestroController@show']);

/* crear */

Route::get('maestro_new', ['as' => 'mtr.new', 'uses' => 'MaestroController@create']);

Route::post('maestro_new', ['as' => 'mtr.new', 'uses' => 'MaestroController@store']);

/* actualizar */

Route::get('maestro_edit_{id}', ['as' => 'mtr.edit', 'uses' => 'MaestroController@edit']);

Route::put('maestro_edit_{id}', ['as' => 'mtr.put', 'uses' => 'MaestroController@update']);

Route::put('maestro_status_{id}', ['as' => 'mtr.status', 'uses' => 'MaestroController@status']);

/* eliminar */

Route::delete('maestro_show_{id}', ['as' => 'mtr.destroy', 'uses' => 'MaestroController@destroy']);