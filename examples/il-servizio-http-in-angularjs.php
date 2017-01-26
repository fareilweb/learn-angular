
<div ng-app="myApp" >
    
</div>

<script type="text/javascript">

    angular.module("myApp", [])
        .controller("elencoController", function($scope, $http) { 
            $http.get("/elencoCitta") 
                .success(function(data) { 
                    $scope.elencoCitta = data; 
                }) 
                .error(function() { 
                    alert("Si è verificato un errore!"); 
                }); 
        })
    ;
    
</script>
