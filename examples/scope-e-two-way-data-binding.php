<div ng-app="myApp">
    <div ng-controller="userController">
        <p>Nome: <input type="text" ng-model="utente.nome"></p>
        <p>Cognome: <input type="text" ng-model="utente.cognome"></p>
        {{saluta()}}
    </div>
</div>

<script type="text/javascript">
    angular.module("myApp", [])
        .controller("userController",
            function($scope){
                $scope.utente = {nome: "Luca", cognome: "Cilfone"};
                $scope.saluta = function(){
                    return "Buongiorno " +
                      $scope.utente.nome + " " +
                      $scope.utente.cognome + "!"
                };
            }
        );
</script>
