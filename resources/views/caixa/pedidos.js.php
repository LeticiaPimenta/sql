 alert("teste");

 var ref = firebase.database().ref().child("products");
    // create a synchronized array
    $scope.products = $firebaseArray(ref);


    var ref_users = firebase.database().ref().child("users");
    // create a synchronized array
    var users = $firebaseArray(ref_users);
    var users_id=[];
    $scope.username = "";

    users.$loaded().then(function() {
      var cont = 1;
      angular.forEach(users, function(value, key) {
        console.log(value, key);
        users_id[value.$id]=value;
      });
    $scope.users_id = users_id;
  });


  var ref_carts = firebase.database().ref().child("pedidos/<?php echo $loja;?>");
  // create a synchronized array
  var carts = $firebaseArray(ref_carts);
  var cart_formatado = [];

  carts.$loaded().then(function() {
    $scope.carts_origin = carts;
      var cont = 1;
      angular.forEach(carts, function(value, key) {
        console.log(value);
        console.log(key);
        cart_formatado[value.$id]=value;
      });
      console.log(cart_formatado);
      $scope.carts = cart_formatado;
  });

  $scope.recebido = function($usuario , $produto , $chave , $value){
;
     var ref_pedidos = firebase.database().ref("pedidos/<?php echo $loja;?>/"+$usuario+"/"+$produto+"/"+$chave);
  // create a synchronized array
    var pedido = $firebaseObject(ref_pedidos);
    console.log(pedido);

    var ref_carts_targer = firebase.database().ref().child("carts/<?php echo $loja;?>/"+$usuario+"/"+$produto);
  // create a synchronized array
  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $produto,
      shop: <?php echo $loja;?>,
      user : $usuario,
     // name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    });
  
    pedido.$remove();
  }

