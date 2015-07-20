<?php

$modulo = "modulo_general";

Route::get($modulo.'materias', ['as' => 'materias', 'uses' => 'MateriaController@index']);

Route::get($modulo.'materia_show_{id}', ['as' => 'mat.show', 'uses' => 'MateriaController@show']);

/* crear */

Route::get($modulo.'materia_new', ['as' => 'mat.new', 'uses' => 'MateriaController@create']);

Route::post($modulo.'materia_new', ['as' => 'mat.new', 'uses' => 'MateriaController@store']);

/* actualizar */

Route::get($modulo.'materia_edit_{id}', ['as' => 'mat.edit', 'uses' => 'MateriaController@edit']);

Route::put($modulo.'materia_edit_{id}', ['as' => 'mat.put', 'uses' => 'MateriaController@update']);

Route::put($modulo.'materia_status_{id}', ['as' => 'mat.status', 'uses' => 'MateriaController@status']);

/* eliminar */

Route::delete($modulo.'materia_show_{id}', ['as' => 'mat.destroy', 'uses' => 'MateriaController@destroy']);