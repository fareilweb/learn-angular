<div ng-app="myApp" >
    
    <div ng-controller="cittaController"> 
        <p>Città: <input type="text" ng-model="nome"/></p> 
        <p>Regione: <input type="text" ng-model="regione"/></p> 
        <p><button ng-click="aggiungiCitta()">Aggiungi</button></p> 
    </div>
  
    <div ng-controller="elencoController"> 
        <ul> 
            <li ng-repeat="citta in elencoCitta">{{citta.nome}}</li> 
        </ul>
    </div>
    
</div>

<script type="text/javascript">
    angular.module("myApp", [])
        .service("elencoCitta", function() { 
            this.elenco  = [ 
                {nome: "Roma", regione: "Lazio"}, 
                {nome: "Latina", regione: "Lazio"}, 
                {nome: "Milano", regione: "Lombardia"}, 
                {nome: "Napoli", regione: "Campania"}, 
                {nome: "Como", regione: "Lombardia"}, 
                {nome: "Palermo", regione: "Sicilia"}, 
                {nome: "Caserta", regione: "Campania"}, 
                {nome: "Avellino", regione: "Campania"}, 
                {nome: "Trapani", regione: "Sicilia"}, 
                {nome: "Agrigento", regione: "Sicilia"} 
            ]; 

            this.aggiungi = function(citta) { 
                this.elenco.push(citta); 
            }; 
        }) 
        .controller("myAppCtrl", function($scope){
           
        })
        .controller("elencoController", function($scope, elencoCitta) { 
            $scope.elencoCitta = elencoCitta.elenco; 
        })
        .controller("cittaController", function($scope, elencoCitta) { 
            $scope.aggiungiCitta = function() { 
                elencoCitta.aggiungi({nome: $scope.nome, regione: $scope.regione}); 
            }; 
        })
    ;
</script>