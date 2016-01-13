// configuring Home routes 
// =============================================================================
var app = angular.module('achijaApp', ['ui.router']);
'use strict';
console.log("router loading");

//run blocks
app.run(function($rootScope) {
  // you can inject any instance here
	$rootScope.changeCurrent=function(current){
		console.log("Changing current");
		$rootScope.current=current;
	}
});

app.config(function($stateProvider, $urlRouterProvider) {
	$urlRouterProvider.otherwise('/home');
	console.log("router loading");
	
	$stateProvider
		.state('home', {
        url: '/home',
        templateUrl: 'home.html',
        controller:function($scope,$rootScope){
        	console.log("Controller called");
        	$rootScope.current='home';}
        
        })
        .state('about', {
        url: '/about',
        templateUrl: 'about.html',
        controller:function($scope,$rootScope){
        	console.log("Controller called");
        	$rootScope.current='about';}
        
        	})
        .state('collection', {
        url: '/collection',
        templateUrl: 'collection.html',
        controller:function($scope,$rootScope){
        	
        	$rootScope.current='collection';}
        
        })
        .state('shirts', {
        url: '/shirts',
        templateUrl: 'shirts.php',
        	 controller:function($scope,$rootScope){$rootScope.current='collection';}
        	})
        .state('footer', {
            url: '/footer',
            templateUrl: 'footer.html'
            
            })
        .state('contact', {
        url: '/contact',
        templateUrl: 'contact.php',
        controller:function($scope,$rootScope){
        	
        	$rootScope.current='contact';
        	}
        
        	})
            
      
});

