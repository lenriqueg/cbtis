<?php

$modulo = "modulo_general";

Route::get($modulo.'/semestres', ['as' => 'semestres', 'uses' => 'SemestreController@index']);

Route::get($modulo.'/semestre_show_{id}', ['as' => 'sem.show', 'uses' => 'SemestreController@show']);

/* crear */

Route::get($modulo.'/semestre_new', ['as' => 'sem.new', 'uses' => 'SemestreController@create']);

Route::post($modulo.'/semestre_new', ['as' => 'sem.new', 'uses' => 'SemestreController@store']);

/* actualizar */

Route::get($modulo.'/semestre_edit_{id}', ['as' => 'sem.edit', 'uses' => 'SemestreController@edit']);

Route::put($modulo.'/semestre_edit_{id}', ['as' => 'sem.put', 'uses' => 'SemestreController@update']);

Route::put($modulo.'/semestre_status_{id}', ['as' => 'sem.status', 'uses' => 'SemestreController@status']);

/* eliminar */

Route::delete($modulo.'/semestre_destroy_{id}', ['as' => 'sem.destroy', 'uses' => 'SemestreController@destroy']);