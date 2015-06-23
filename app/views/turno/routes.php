<?php

Route::get('turnos', ['as' => 'turnos', 'uses' => 'TurnoController@index']);

Route::get('turno-{id}', ['as' => 'turnos', 'uses' => 'TurnoController@show']);