<?php

Route::get('grupo/materias/{id}', ['as' => 'asignacion', 'uses' => 'GMController@index']);