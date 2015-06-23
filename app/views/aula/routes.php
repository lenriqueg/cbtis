<?php

Route::get('aulas', ['as' => 'aulas', 'uses' => 'AulaController@index']);

Route::get('aula-{id}', ['as' => 'aulas', 'uses' => 'AulaController@show']);