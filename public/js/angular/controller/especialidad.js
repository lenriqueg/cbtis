app.controller('especialidades', ['$scope', 'appService', function($scope, appService){
	
	appService.all().then(function (data){
		$scope.data = data;
	})

}]);