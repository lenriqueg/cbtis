<?php

require 'views/aula/routes.php';
require 'views/ciclo/routes.php';
require 'views/carrera/routes.php';
require 'views/dia/routes.php';
require 'views/grupo/routes.php';
require 'views/grupo_materia/routes.php';
require 'views/hora/routes.php';
require 'views/horario/routes.php';
require 'views/maestro/routes.php';
require 'views/maestro_materia/routes.php';
require 'views/materia/routes.php';
require 'views/semestre/routes.php';
require 'views/turno/routes.php';
require 'views/turno/routes.php';

Route::get('/', ['as' => 'root', 'uses' => 'HomeController@index']);

Route::get('api/ciclos', 'APIController@ciclo');

Route::get('api/horas/{id}', 'APIController@hora');

Route::get('api/horario/{id}', 'APIController@horario');

Route::get('api/dias', ['as' => 'API.dia', 'uses' => 'APIController@dia']);

Route::get('api/grupos/{id}', ['as' => 'ap', 'uses' => 'APIController@grupo_materia']);

Route::get('api/aulas', ['as' => 'ap', 'uses' => 'APIController@aula']);

Route::post('api/save', 'APIController@save');
