<?php

$modulo = "modulo_general";

Route::get($modulo.'/maestros', ['as' => 'maestros', 'uses' => 'MaestroController@index']);

Route::get($modulo.'/maestro_show_{id}', ['as' => 'mtr.show', 'uses' => 'MaestroController@show']);

/* crear */

Route::get($modulo.'/maestro_new', ['as' => 'mtr.new', 'uses' => 'MaestroController@create']);

Route::post($modulo.'/maestro_new', ['as' => 'mtr.new', 'uses' => 'MaestroController@store']);

/* actualizar */

Route::get($modulo.'/maestro_edit_{id}', ['as' => 'mtr.edit', 'uses' => 'MaestroController@edit']);

Route::put($modulo.'/maestro_edit_{id}', ['as' => 'mtr.put', 'uses' => 'MaestroController@update']);

Route::put($modulo.'/maestro_status_{id}', ['as' => 'mtr.status', 'uses' => 'MaestroController@status']);

/* eliminar */

Route::delete($modulo.'/maestro_show_{id}', ['as' => 'mtr.destroy', 'uses' => 'MaestroController@destroy']);