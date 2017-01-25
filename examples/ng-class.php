<style type="text/css">
.rosso {color: red}
.verde {color: green}
.blu {color: blue}
</style>

<div ng-app="myApp">
  <p>Colore: <input type="text" ng-model="colore"></p>
  <p ng-class="colore">È stato scelto il colore {{colore}}</p>


  <p>Crea la tua password: <input type="password" ng-model="password"></p>
    <hr>
  <p ng-class="{'rosso': password.length < 4, 'giallo': password.length >= 4 && password.length < 8, 'verde': password.length >= 8}">
  Robustezza della password
  </p>

</div>

<script type="text/javascript">
  angular.module("myApp", []);
</script>
