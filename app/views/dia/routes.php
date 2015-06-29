<?php

Route::get('dias', ['as' => 'dias', 'uses' => 'DiaController@index']);

Route::get('dia_show_{id}', ['as' => 'dia.show', 'uses' => 'DiaController@show']);

/* crear */

Route::get('dia_new', ['as' => 'dia.new', 'uses' => 'DiaController@create']);

Route::post('dia_new', ['as' => 'dia.new', 'uses' => 'DiaController@store']);

/* actualizar */

// Route::put('ciclo-{id}', ['as' => 'dia.edit', 'uses' => 'DiaController@edit']);

// Route::put('dia_edit_{id}', ['as' => 'dia.put', 'uses' => 'DiaController@update']);

Route::put('dia_status_{id}', ['as' => 'dia.status', 'uses' => 'DiaController@status']);

/* eliminar */

Route::delete('dia_status_{id}', ['as' => 'dia.destroy', 'uses' => 'DiaController@destroy']);