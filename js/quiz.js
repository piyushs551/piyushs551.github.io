(function(){

	var app = angular.module('myQuiz',[]);

	app.controller('QuizController',['$scope','$http','$sce',function($scope,$http,$sce){
			$scope.score=0;
			$scope.activequestion = -1;
			$scope.activequestionanswered = 0;	
			$scope.percentage = 0;	

			$http.get('quiz_data.json').then(function(quizData){
				$scope.myquestions = quizData.data;
				$scope.totalQuestions = $scope.myquestions.length;

			});

			$scope.selectAnswer = function(qIndex,aIndex){

				var questionState = $scope.myquestions[qIndex].questionState;

				if (questionState != 'answered') {
					$scope.myquestions[qIndex].selectedAnswer = aIndex;
					var CorrectAnswer = $scope.myquestions[qIndex].correct;
					$scope.myquestions[qIndex].correctAnswer = CorrectAnswer;

					if (aIndex === CorrectAnswer) {
						$scope.myquestions[qIndex].correctness = 'correct';
						$scope.score += 1;
					}
					else{
						$scope.myquestions[qIndex].correctness = 'incorrect';
						}	
					$scope.myquestions[qIndex].questionState = 'answered';
					
				}
				$scope.percentage = (($scope.score / $scope.totalQuestions)*100).toFixed(2);
			}

			$scope.isSelected = function(qIndex,aIndex){
				return $scope.myquestions[qIndex].selectedAnswer === aIndex;	
			}

			$scope.isCorrect = function(qIndex,aIndex){
				return $scope.myquestions[qIndex].correctAnswer === aIndex;	
			}

			$scope.selectContinue = function(){
				return $scope.activequestion += 1;

			}

			$scope.createShareLinks = function(percentage){

				var url = 'http://localhost/project/sportsbasequiz.html';
				var emailLink = '<a class = "btn email" href="mailto:?subject=Try To BEAT my score!&amp;body=I scored '+percentage+'% on this quiz about sports. Try to beat me in it If you can at '+url+' "> Email A Friend</a>';
				var twitterLink = '<a class = "btn tweeter" target = "_blank" href="http://twitter.com/share/?"> Tweet your score</a>';
				var newMarkup = emailLink + twitterLink;
				return $sce.trustAsHtml(newMarkup);


			}



	}]);

})();