'use strict';

angular.module('Client')
	.controller('IndexNoteCtrl', function($scope, NoteResource){
		$scope.Notes = NoteResource.query(); //trae las notas existentes
	})
	.controller('CreateNoteCtrl', function($scope, NoteResource, $location,$timeout){
		$scope.title="Crear Nota";
		$scope.button = "Guardar";
		$scope.Note = {};
		$scope.saveNote = function(){
			NoteResource.save($scope.Note);
			     
			$timeout(function(){
				$location.path('/notes');
			},1000);
		};
	
	});
