
angular.module('app.service', [])

	.factory('appService', ['$http', '$q', function($http, $q){

		function all(){

			var deferred = $q.defer();

			var url = ''+'API/especialidades';

			$http.get(url)
			.success(function(data){
				deferred.resolve(data); 
			});

			return deferred.promise;
		}
		return {
			all: all
		}
	}]);