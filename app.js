'use strict';
var eBaseApp = angular.module('eBaseApp', []);

eBaseApp.controller('mainCtrl', ['$scope', '$http', function($scope, $http){
	var self = this;

	this.getPeople = function(){
		self.loading = true;
		$http({
			method: 'GET',
			url: '/data.php',
			responseType: 'JSON',
		}).then(function(response){
			if(response.status === 200){
				self.people = response.data.people;
				self.loading = false;
			}else{
				window.alert('Something went wrong');
			}
			
		});
	};

	this.alertPerson = function(person){
		window.alert(person.first_name + ' ' + person.last_name + ' - ' + person.email);
	};
	this.getPeople();

}]);