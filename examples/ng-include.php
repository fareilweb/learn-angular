<div ng-app="myApp">

    <!-- Può essere anche un file esterno-->
    <div ng-include="'/doc.html'"></div>

    <script type="text/ng-template" id="/doc.html">
      <strong>Corpo</strong> del documento
    </script>

</div>


<script type="text/javascript">
  angular.module("myApp", []);
</script>
