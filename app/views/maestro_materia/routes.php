<?php

Route::get('maestro/materias/{id}', ['as' => 'asignacion', 'uses' => 'CMMController@index']);