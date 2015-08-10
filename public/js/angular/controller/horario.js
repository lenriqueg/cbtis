app.controller('horario', ['$scope', 'horaService', function($scope, horaService){
	
	horaService.hora($scope.grupo_id).then(function (data){
		$scope.hora = data;
	});

	horaService.dia().then(function (data){
		$scope.dia = data;
	});

	horaService.materia($scope.grupo_id).then(function (data){
		$scope.materia = data;
	})

	horaService.aula().then(function (data){
		$scope.aula = data;
	})

	horaService.horario($scope.grupo_id).then(function (data){
		$scope.horario = data;

		$scope.dataLunes =
		{
			lunes: 'lunes'
		}
	})

	$scope.save = function (){
		horaService.save($scope.grupo_id, $scope.materia_id, $scope.dia_id, $scope.hora_id, $scope.aula_id)
			.then(function (data){
			// $scope.data = data;
			console.log(data);
			// alert(data);
			horaService.horario($scope.grupo_id).then(function (data){
				$scope.horario = data;
			})
		});	
	} 

}]);