<?php

Route::get('especialidades', ['as' => 'especialidades', 'uses' => 'CarreraController@index']);

Route::get('especialidad_show_{id}', ['as' => 'esp.show', 'uses' => 'CarreraController@show']);

/* crear */

Route::get('especialdiad_new', ['as' => 'esp.new', 'uses' => 'CarreraController@create']);

Route::post('especialidad_new', ['as' => 'esp.new', 'uses' => 'CarreraController@store']);

/* actualizar */

Route::get('especialidad_edit_{id}', ['as' => 'esp.edit', 'uses' => 'CarreraController@edit']);

Route::put('especialidad_edit_{id}', ['as' => 'esp.put', 'uses' => 'CarreraController@update']);

Route::put('especialidad_status_{id}', ['as' => 'esp.status', 'uses' => 'CarreraController@status']);

/* eliminar */

Route::delete('especialidad_show_{id}', ['as' => 'esp.destroy', 'uses' => 'CarreraController@destroy']);