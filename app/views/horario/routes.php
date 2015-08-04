<?php

Route::get('horario', ['as' => 'horario', 'uses' => 'HorarioController@index']);

Route::get('horario/carreras', ['as' => 'hr.esp', 'uses' => 'HorarioController@carrera']);

Route::get('horario/carreras/{id}', ['as' => 'hr.car.gr', 'uses' => 'HorarioController@grupo']);

Route::get('horario/grupos/{id}', ['as' => 'hr', 'uses' => 'HorarioController@horario']);

