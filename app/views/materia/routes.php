<?php

Route::get('materias', ['as' => 'materias', 'uses' => 'MateriaController@index']);

Route::get('materia-{id}', ['as' => 'materias', 'uses' => 'MateriaController@show']);