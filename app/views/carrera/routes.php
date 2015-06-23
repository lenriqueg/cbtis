<?php

Route::get('carreras', ['as' => 'carreras', 'uses' => 'CarreraController@index']);

Route::get('carrera-{id}', ['as' => 'carreras', 'uses' => 'CarreraController@show']);