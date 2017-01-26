<div ng-app="myApp" ng-controller="myAppCtrl">
  
    <!-- SENZA ng-options -->
    <!--
    <label>Stringhe Citt&agrave;</label>
    <select ng-model="selectedItem">
        <option ng-repeat="citta in elencoCittaStrings" value="{{citta}}">{{citta}}</option>
    </select>
    <hr/>
    <label>Oggetti Citt&agrave;</label>
    <select ng-model="selectedItem">
        <option ng-repeat="citta in elencoCittaObjects" value="{{citta.codice}}">{{citta.nome}}</option>
    </select>
    <p ng-if="selectedItem">Hai selezionato {{selectedItem}}!</p>
    <hr/>
    -->
    
    <!-- CON ng-options -->
    <!--
    <label>Oggetti Citt&agrave; (con "ng-option")</label>
    <select ng-model="selectedItem" ng-options="citta.nome for citta in elencoCittaObjects">
        <option ng-repeat="citta in elencoCittaObjects" value="{{citta.codice}}">{{citta.nome}}</option>
    </select>
    <hr/>
    -->
    
    <!-- Uso di "group by" -->
    <label>Oggetti Citt&agrave; raggruppati in base a unan propriet&agrave;</label>
    <select ng-model="selectedItem"
        ng-options="citta.nome group by citta.regione for citta in elencoCittaRegione">
    </select>
    
</div>

<script type="text/javascript">
    angular.module("myApp", [])
        .controller("myAppCtrl", function($scope){
            $scope.elencoCittaStrings = ["Roma", "Milano", "Napoli", "Palermo"];
            $scope.elencoCittaObjects = [
                {codice: "RM", nome: "Roma"},
                {codice: "MI", nome: "Milano"},
                {codice: "NA", nome: "Napoli"},
                {codice: "PA", nome:"Palermo"}
            ];
            $scope.elencoCittaRegione = [
                {codice: "RM", nome: "Roma", regione: "Lazio"},
                {codice: "LT", nome: "Latina", regione: "Lazio"},
                {codice: "MI", nome: "Milano", regione: "Lombardia"},
                {codice: "NA", nome: "Napoli", regione: "Campania"},
                {codice: "CO", nome: "Como", regione: "Lombardia"},
                {codice: "PA", nome:"Palermo", regione: "Sicilia"},
                {codice: "CA", nome: "Caserta", regione: "Campania"},
                {codice: "AV", nome: "Avellino", regione: "Campania"},
                {codice: "TP", nome:"Trapani", regione: "Sicilia"},
                {codice: "AG", nome:"Agrigento", regione: "Sicilia"}
            ];
        });
</script>