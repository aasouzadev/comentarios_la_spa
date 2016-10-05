angular.module('mainCtrl',[])

.controller('mainController', function($scope, $http, Comentario){

	$scope.comentarioData = {};

	$scope.loading = true;

	Comentario.get()
		.success(function(data){
			$scope.comentarios = data;
			$scope.loading = false;
		});



$scope.submitComentario = function() {
	$scope.loading = true;

	Comentario.save($scope.comentarioData)
		.success(function(data){
			//atualizar pagina
			Comentario.get()
				.success(function(getData){
					$scope.comentarios = getData;
					$scope.loading = false;
				});
		})
		.error(function(data){
			console.log(data);
		});
};

$scope.deleteComentario = function(id){
	$scope.loading = true;

	Comentario.destroy(id)
		.success(function(data){
			Comentario.get()
			.success(function(getData){
				$scope.comentarios = getData;
				$scope.loading = false;
			});

		});
	};
});