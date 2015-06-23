<?php

Route::get('horas', ['as' => 'horas', 'uses' => 'HoraController@index']);

Route::get('hora-{id}', ['as' => 'horas', 'uses' => 'HoraController@show']);