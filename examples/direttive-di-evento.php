<div ng-app="myApp" ng-controller="myAppCtrl">
    
    <div>
        <input type="number" ng-model="numero1"/>
        +
        <input type="number" ng-model="numero2"/>
        =
        <input type="number" ng-model="risultato"/>
    </div>

    <button ng-click="somma(numero1, numero2, $event)">Somma</button>
        
</div>

<script type="text/javascript">
    angular.module("myApp", [])
        .controller("myAppCtrl", function($scope){
            $scope.somma = function(x, y, event) {
                $scope.risultato = x + y;
                console.log("È stato cliccato alla posizione " + event.clientX + ", " + event.clientY);
            };
        });
</script>