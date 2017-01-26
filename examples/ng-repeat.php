<div ng-app="myApp">
    <div ng-controller="repeatCtrl">
        
        <hr/>
        
        <!-- Array di Stringhe -->
        <ul>
            <li ng-repeat="nome in elencoNomi">{{nome}}</li>
        </ul><hr/>
        
        <!-- Array di Oggetti -->
        <ul>
            <li ng-repeat="persona in persone">
                N. {{$index}} - {{persona.nome}} {{persona.cognome}} ( {{persona.citta}} )
            </li>
        </ul><hr/>
        
        <!-- Esempio Tabella -->
        <table>
            <tr><th>Indice</th><th>Nome</th><th>Cognome</th><th>Città</th></tr>

            <tr ng-repeat="persona in persone">
                <td>{{$index}}</td><td>{{persona.nome}}</td><td>{{persona.cognome}}</td><td>{{persona.citta}}</td>
            </tr>
        </table><hr/>
        
        <!-- Sintassi Speciale per lettura proprietà -->
        <ul>
            <li ng-repeat="(key, value) in persona">
                Proprietà: {{key}}<br/>
                Valore: {{value}}
            </li>
        </ul>
        
    </div>
    
</div>


<script type="text/javascript">
    angular.module("myApp", [])
        .controller("repeatCtrl", function($scope){
            $scope.elencoNomi = ["Andrea", "Marco", "Giovanni", "Roberto"];
            $scope.persone = [
                { nome: "Andrea",   cognome: "Rossi",  citta: "Roma"    },
                { nome: "Marco",    cognome: "Verdi",  citta: "Milano"  },
                { nome: "Giovanni", cognome: "Neri",   citta: "Napoli"  },
                { nome: "Roberto",  cognome: "Gialli", citta: "Palermo" }
            ];
            $scope.persona = { nome: "Mario", cognome: "Rossi", citta: "Roma"}; 

    });
</script>
