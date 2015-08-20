app.controller('horario', ['$scope', 'horaService', function($scope, horaService){
	
	horaService.hora($scope.grupo_id).then(function (data){
		$scope.hora = data;
	});

	horaService.dia().then(function (data){
		$scope.dia = data;
	});

	horaService.materia($scope.grupo_id).then(function (data){
		$scope.materia = data;
	});

	horaService.aula().then(function (data){
		$scope.aula = data;
	});

	horaService.horario($scope.grupo_id).then(function (data){
		$scope.lunes = _.where(data, {dia: 'Lunes'});
		$scope.martes = _.where(data, {dia: 'Martes'});
		$scope.miercoles = _.where(data, {dia: 'Miercoles'});
		$scope.jueves = _.where(data, {dia: 'Jueves'});
		$scope.viernes = _.where(data, {dia: 'Viernes'});
	});

	$scope.save = function (){
		horaService.save($scope.grupo_id, $scope.materia_id, $scope.dia_id, $scope.hora_id, $scope.aula_id)
			.then(function (data){
				$scope.data = data;
				horaService.horario($scope.grupo_id).then(function (data){
						$scope.lunes = _.where(data, {dia: 'Lunes'});
						$scope.martes = _.where(data, {dia: 'Martes'});
						$scope.miercoles = _.where(data, {dia: 'Miercoles'});
						$scope.jueves = _.where(data, {dia: 'Jueves'});
						$scope.viernes = _.where(data, {dia: 'Viernes'});
				})
		});	
	} 

}]);