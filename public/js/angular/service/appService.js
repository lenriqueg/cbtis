
angular.module('app.service', [])

	.factory('horaService', ['$http', '$q', function($http, $q){

		function hora(grupo_id){
			var url = 'http://horario.com';
			var deferred = $q.defer();
			$http.get(url + '/api/horas/' + grupo_id)
			.success(function(data){
				deferred.resolve(data); 
			});
			return deferred.promise;
		}

		function ciclo(){
			var url = 'http://horario.com';
			var deferred = $q.defer();
			$http.get(url + '/api/ciclos')
			.success(function(data){
				deferred.resolve(data); 
			});
			return deferred.promise;
		}

		function dia(){
			var url = 'http://horario.com';
			var deferred = $q.defer();
			$http.get(url + '/api/dias')
			.success(function(data){
				deferred.resolve(data); 
			});
			return deferred.promise;
		}

		function materia(materia_id){
			var url = 'http://horario.com';
			var deferred = $q.defer();
			$http.get(url + '/api/grupos/' + materia_id)
			.success(function(data){
				deferred.resolve(data); 
			});
			return deferred.promise;
		}

		function aula(){
			var url = 'http://horario.com';
			var deferred = $q.defer();
			$http.get(url + '/api/aulas/')
			.success(function(data){
				deferred.resolve(data); 
			});
			return deferred.promise;
		}

		function horario(grupo_id){
			var url = 'http://horario.com';
			var deferred = $q.defer();
			$http.get(url + '/api/horario/' + grupo_id)
			.success(function(data){
				deferred.resolve(data); 
			});
			return deferred.promise;
		}

		function save(grupo_id, materia_id, dia_id, hora_id, aula_id){
			var url = 'http://horario.com';
			var deferred = $q.defer();
			$http.post(url + '/api/save', 
				{
					grupo_id: grupo_id,
					materia_id: materia_id, 
					hora_id: hora_id,
					dia_id: dia_id,
					aula_id: aula_id
				}
			)
			.success(function(data){
				deferred.resolve(data); 
			});
			return deferred.promise;
		}

		return {
			dia: dia,
			ciclo,ciclo,
			hora: hora,
			materia: materia,
			aula: aula,
			horario: horario,
			save: save
		}
	}]);