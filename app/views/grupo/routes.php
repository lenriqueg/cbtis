<?php

Route::get('grupos', ['as' => 'grupos', 'uses' => 'GrupoController@index']);

Route::get('grupo-{id}', ['as' => 'grupos', 'uses' => 'GrupoController@show']);