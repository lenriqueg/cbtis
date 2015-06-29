<?php

require 'views/aula/routes.php';
require 'views/ciclo/routes.php';
require 'views/carrera/routes.php';
require 'views/dia/routes.php';
require 'views/grupo/routes.php';
require 'views/grupo_materia/routes.php';
require 'views/hora/routes.php';
require 'views/maestro/routes.php';
require 'views/maestro_materia/routes.php';
require 'views/materia/routes.php';
require 'views/turno/routes.php';
require 'views/turno/routes.php';

Route::get('/', 'HomeController@index');
