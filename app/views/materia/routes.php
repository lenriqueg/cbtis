<?php

Route::get('materias', ['as' => 'materias', 'uses' => 'MateriaController@index']);

Route::get('materia_show_{id}', ['as' => 'mat.show', 'uses' => 'MateriaController@show']);

/* crear */

Route::get('materia_new', ['as' => 'mat.new', 'uses' => 'MateriaController@create']);

Route::post('materia_new', ['as' => 'mat.new', 'uses' => 'MateriaController@store']);

/* actualizar */

Route::get('materia_edit_{id}', ['as' => 'mat.edit', 'uses' => 'MateriaController@edit']);

Route::put('materia_edit_{id}', ['as' => 'mat.put', 'uses' => 'MateriaController@update']);

Route::put('materia_status_{id}', ['as' => 'mat.status', 'uses' => 'MateriaController@status']);

/* eliminar */

Route::delete('materia_show_{id}', ['as' => 'mat.destroy', 'uses' => 'MateriaController@destroy']);