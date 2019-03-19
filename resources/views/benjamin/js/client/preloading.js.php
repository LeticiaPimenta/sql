
  $http.get("/produtos")
    .then(function(response) {
      $scope.produtos = response.data;
      localStorage.setItem('produtos', JSON.stringify($scope.produtos));
  });

  $http.get("/produtos_id")
    .then(function(response) {
        $scope.products_id = response.data;
        localStorage.setItem('produtos_id', JSON.stringify($scope.products_id));
  });


  $http.get("/client/favoritos")
    .then(function(response) {
      $scope.produtos_favoritos = response.data;
      console.log(response.data);
      localStorage.setItem('produtos_favoritos', JSON.stringify($scope.produtos_favoritos));
  });


var total = 0;
var retorno = "";
for(var x in localStorage) {
  var amount = (localStorage[x].length * 2) / 1024 / 1024;
  total += amount;
  console.log( x + " = " + amount.toFixed(2) + " MB");
  retorno += ""+ x + " = " + amount.toFixed(2) + " MB <br>";
}
console.log( "Total: " + total.toFixed(2) + " MB");
retorno +="Total: " + total.toFixed(2) + " MB";
$scope.dados_cache = retorno ;

