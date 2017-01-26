<div ng-app="myApp" ng-controller="myAppCtrl">
  
    <p><strong>Stringhe</strong></p>
    
    <p>{{"Hello Angular" | uppercase }}</p>
    
    <p>{{"Hello Angular" | uppercase | lowercase }}</p>
    
    <p>{{"Hello Angular" | limitTo:5 }}</p> 
    <hr/>
    
    
    <p><strong>Numeri (number)</strong></p>
    
    <p>{{3.14159 | number}}</p>
    
    <p>{{3.14159 | number:2}}</p>

    <p>{{3.14159 | number:0}}</p>
    
    <p>{{1450.32 | number}}</p>
    
    <p>{{1200.451 | currency}}</p>
   
    <p>{{1200.451 | currency:"€":0}}</p>
    <hr/>
    
    
    <p><strong>Date (date)</strong><br/></p>
    <p>
        {{dataOra | date}}<br/>
    
        {{dataOra | date:"fullDate"}}<br/>
    
        {{dataOra | date:"longDate"}}<br/>
    
        {{dataOra | date:"medium"}}<br/>
        
        {{dataOra | date:"short"}}<br/>
        
        {{dataOra | date:"shortTime"}}<br/>
    
        {{dataOra|date:"dd-MM-yyyy"}}<br/>
    
        {{dataOra|date:"yyyy-MM-dd HH:mm:ss Z"}}<br/>
    
        {{dataOra|date:"EEEE dd/MM/yyyy"}}<br/>
    
        {{dataOra|date:"'Il giorno ' dd/MM/yyyy"}}<br/>
    </p>
    <hr/>
    
    
    <p><strong>Ordinamento (orderBy)</strong></p>
    
    <p>{{[5,3,6,1] | orderBy}}</p>
    
    <p>
        <ul>
            <li ng-repeat="citta in elencoCitta | orderBy:'nome'">{{citta.nome}}</li>
        </ul>
        <br/>
        <!-- ordine descrescente (equivalente a postporre :true) -->
        <ul>
            <li ng-repeat="citta in elencoCitta | orderBy:'-nome'">{{citta.nome}}</li>
        </ul>
        <br/>
        <!-- ordine descrescente (equivalente ad anteporre il -) -->
        <ul>
            <li ng-repeat="citta in elencoCitta | orderBy:'nome':true">{{citta.nome}}</li>
        </ul>
    </p>
    
    <hr/>
    
    <p><strong>limitTo</strong></p>
    <p>
        <ul>
            <li ng-repeat="citta in elencoCitta | limitTo:3">{{citta.nome}}</li>
        </ul>
    </p>
    
    <hr/>
    
    <p><strong>filter</strong></p>
    <p>
        <ul>
            <li ng-repeat="citta in elencoCitta | filter:{regione: 'Sicilia'}">
                {{citta.nome}}
            </li>
        </ul>
        
        <br/>
        
        <!-- Il filtro funziona con la logica del "contiene" e non "è uguale" -->
        <ul> 
            <li ng-repeat="citta in elencoCitta | filter:{regione: 'L'}">
                {{citta.nome}}
            </li>
        </ul>
        
        <br/>
        
        <!-- I filtri possono essere combinati con logica AND (NON OR)-->
        <ul>
            <li ng-repeat="citta in elencoCitta | filter:{regione: 'L', nome: 'R'}">
                {{citta.nome}}
            </li>
        </ul>
        
        <br/>
        
        <!-- Esmepio di filtro interattivo sfruttando il two-way binding -->
        Filtra per nome: <input type="text" ng-model="filtro"> 
        <ul> 
            <li ng-repeat="citta in elencoCitta | filter:{nome:filtro}">{{citta.nome}}</li> 
        </ul>
        
        <br/>
        
        <!-- Se al filtro filter non passiamo un oggetto con le proprietà che 
            indicano il criterio di filtro, ma direttamente un valore, quel 
            valore verrà ricercato in tutte le proprietà degli elementi dell’elenco. -->
        <ul>
            <li ng-repeat="citta in elencoCitta | filter:'R'">
                {{citta.nome}}
            </li>
        </ul>
        
    </p>
    
    
</div>

<script type="text/javascript">
    angular.module("myApp", [])
        .controller("myAppCtrl", function($scope){
            $scope.dataOra = Date.now(); 
            $scope.elencoCitta = [
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
        });
</script>