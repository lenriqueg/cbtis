app.controller('horario', ['$scope', 'horaService', function($scope, horaService){
	
	horaService.hora().then(function (data){
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

	$scope.save = function (){
		horaService.save($scope.grupo_id, $scope.materia_id, $scope.dia_id, $scope.hora_id, $scope.aula_id)
			.then(function (data){
			// $scope.data = data;
			console.log(data);
			// alert(data);
			});
	} 

}]);