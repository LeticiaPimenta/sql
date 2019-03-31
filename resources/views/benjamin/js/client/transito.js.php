      var usuario = localStorage.getItem("usuario_logado");
      $scope.usuario = JSON.parse(localStorage.getItem("usuario_logado"));

      var token =  localStorage.getItem("access_token");
      console.log($scope.usuario.user_token);
      logado_id = $scope.usuario.user_token;
      $scope.logado_id = $scope.usuario.user_token;


$scope.comanda = localStorage.getItem("comanda");
    $scope.loja = localStorage.getItem("loja");


  var ref_retirar = firebase.database().ref().child("transito/<?php echo $loja;?>/"+$scope.logado_id);
  // create a synchronized array
  var retirar = $firebaseArray(ref_retirar);

  retirar.$loaded().then(function() {
    $scope.retirar = retirar;
    console.log($scope.retirar);
  })


  //$scope.retirar = <?php echo $retirar;?>;

  $scope.solicitar = function () {
    // body...
    console.log($scope.produto_solicitado);


  



    var ref_caixa = firebase.database().ref("pedidos/1");
  // create a synchronized array
                var caixa = $firebaseArray(ref_caixa);

                caixa.$add($scope.produto_solicitado).catch(function(error) {
                     console.error(error); //or
                     console.log(error);
                 });


                console.log("users/"+$scope.logado_id+"/retirar/"+$scope.key_produto+"/products/"+$scope.ordem_produto);
    var ref_carts_remove = firebase.database().ref("users/"+$scope.logado_id+"/retirar/"+$scope.key_produto+"/products/"+$scope.ordem_produto);
    var carts_remove = $firebaseObject(ref_carts_remove);
    carts_remove.$remove();

    



  }


  $scope.pedir_retirar = function(produto , ordem , key){
    $scope.produto_solicitado = produto; 
    $scope.ordem_produto = ordem;
    $scope.key_produto = key;

    $('#modal_produto').modal('show');
  }