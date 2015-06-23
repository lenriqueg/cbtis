<?php

Route::get('semestres', ['as' => 'semestres', 'uses' => 'SemestreController@index']);

Route::get('semestre-{id}', ['as' => 'semestres', 'uses' => 'SemestreController@show']);