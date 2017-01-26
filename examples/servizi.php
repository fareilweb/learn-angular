<div ng-app="myApp" ng-controller="myAppCtrl">

    <!-- Servizio definito tramite il metodo service(), Angular ci fornisce 
    un’istanza della funzione associata al servizio. Quando utilizziamo un 
    servizio definito tramite il metodo factory(), Angular ci fornisce il 
    valore restituito dall’esecuzione della funzione -->
    <p>{{x}}</p>
    <p>{{y}}</p>
    
</div>

<script type="text/javascript">
    angular.module("myApp", [])
        .controller("myAppCtrl", function($scope, somma1, somma2){
            $scope.x = somma1.somma(1,2); 
            $scope.y = somma2(1,2);
        })
        .service("somma1", function() { 
            this.somma = function(a,b) { return a + b; }; 
        })
        .factory("somma2", function() { 
            return function(a, b) { return a + b; };
        });
    ;
</script>