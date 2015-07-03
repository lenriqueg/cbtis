<?php

Route::get('semestres', ['as' => 'semestres', 'uses' => 'SemestreController@index']);

Route::get('semestre_show_{id}', ['as' => 'sem.show', 'uses' => 'SemestreController@show']);

/* crear */

Route::get('semestre_new', ['as' => 'sem.new', 'uses' => 'SemestreController@create']);

Route::post('semestre_new', ['as' => 'sem.new', 'uses' => 'SemestreController@store']);

/* actualizar */

Route::get('semestre_edit_{id}', ['as' => 'sem.edit', 'uses' => 'SemestreController@edit']);

Route::put('semestre_edit_{id}', ['as' => 'sem.put', 'uses' => 'SemestreController@update']);

Route::put('semestre_status_{id}', ['as' => 'sem.status', 'uses' => 'SemestreController@status']);

/* eliminar */

Route::delete('semestre_destroy_{id}', ['as' => 'sem.destroy', 'uses' => 'SemestreController@destroy']);