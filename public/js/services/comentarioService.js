angular.module('comentarioService',[])

.factory('Comentario', function($http){
	
	return {


		get : function() {
			return $http.get('/api/comentarios');
		},

		save : function(comentarioData) {

			return $http({

				method: 'POST',
				url: '/api/comentarios',
				headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
				data: $.param(comentarioData)
			});
		},

		destroy : function(id) {

			return $http.delete('/api/comentarios/' + id);
		}

		
	}
});