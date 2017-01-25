<div ng-app="myApp">

    <span ng-bind="2 + 2"></span>
    <span>{{ 3 + 3 }}</span>

    <hr>
    <div ng-show="false">Questo è un test</div>
    <div ng-hide="true">Questo è un test</div>

    <div ng-controller="userController">
        <p>Nome:    <input type="text" ng-model="utente.nome"></p>
        <p>Cognome: <input type="text" ng-model="utente.cognome"></p>
        <p ng-show="utente.nome || utente.cognome">{{saluta()}}</p>
    </div>

</div>

<script type="text/javascript">
    angular.module("myApp", [])
        .controller("userController",
            function($scope){
                $scope.utente = {nome: "", cognome: ""};
                $scope.saluta = function(){
                    return "Buongiorno " +
                      $scope.utente.nome + " " +
                      $scope.utente.cognome + "!"
                };
            }
        );
</script>
