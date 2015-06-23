<?php

Route::get('dias', ['as' => 'dias', 'uses' => 'DiaController@index']);

Route::get('dia-{id}', ['as' => 'dias', 'uses' => 'DiaController@show']);