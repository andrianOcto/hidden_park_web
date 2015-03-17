var angular = angular;
var console = console;

var form_input 		= angular.module('form_input', []);
var formPark	 	= angular.module('formPark', []);

form_input.controller('submitController',['$scope','$http',function($scope,$http)
{
	$scope.isError	=false;
	$scope.message 	="";
	$scope.loading	=false;

	$scope.submitData = function()
	{
		$scope.loading = true;

		$http({
			method  : 'POST',
			url 	: 'http://localhost:8000/submit',
			params  : {
				nama 	 : $scope.nama,
				username : $scope.username,
				password : $scope.password,
				email 	 : $scope.email,
				contact  : $scope.contact,
				bio		 : $scope.bio
			}
		}).success(function(data){
			$scope.loading = false;
			$scope.message = "Submit Success";
			window.location.href = '/user';

		}).error(function(errMessage){
			$scope.loading	= true;
			$scope.isError	= true;
			$scope.message 	= errMessage;
		})
	}
}]);

formPark.controller('ParkController', ['$scope', '$http', function($scope, $http)
{
	$scope.isError = false;
	$scope.message = "";
	$scope.loading = false;

	$scope.submitPark = function()
	{
		$scope.loading = true;

		$http({
			method	: 'POST',
			url		: 'http://localhost:8000/submitPark',
			params	: {
				nama_park	: $scope.nama_park,
				alamat		: $scope.alamat,
				longitude	: $scope.koordinat,
				deskripsi	: $scope.deskripsi
			}
		}).success(function(data){
			$scope.loading			= false;
			$scope.message 			= "Submit Park Success";
			window.location.href	= '/park';
		}).error(function(errMessage){
			$scope.loading = true;
			$scope.message = errMessage;
			$scope.isError = true; 
		})
	}
}]);