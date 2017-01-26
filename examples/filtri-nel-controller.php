<div ng-app="myApp" ng-controller="myAppCtrl">
    
    <p>{{data}}</p>
    
    <!-- Filtro definito ad HOC -->
    <p>{{"questo è un test" | capitalize}}</p> 

    
</div>


<script type="text/javascript">
    angular.module("myApp", [])
        .filter("capitalize", function(){ 
            return function(text) { 
                var result = text; 
                if (text && isNaN(text)) { 
                    result = text.charAt(0).toUpperCase() + text.substr(1); 
                } 
                return result; 
            } 
        })
        .controller("myAppCtrl", function($scope, dateFilter){
           var dataISO = dateFilter(Date.now(), "yyyy-MM-ddTHH:mm:ssZ");
           $scope.data = dataISO;
           
        });
</script>