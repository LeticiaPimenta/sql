
  var ref_carts = firebase.database().ref("pedidos/<?php echo $loja;?>");
  // create a synchronized array
  var carts = $firebaseArray(ref_carts);
  $scope.carts = carts;


  var ref_atendimentos = firebase.database().ref().child("atendimentos/<?php echo $loja;?>");
  // create a synchronized array
  var atendimentos = $firebaseArray(ref_atendimentos);
  $scope.atendimentos = atendimentos;

  $scope.atender = function($usuario , $carrinho_id , $produto , $value , $nome_usuario , $nome_produto, item){
  //produto.user, carrinho.$id ,chave_carrinho,produto.value ,produto.user_name, produto.name
  //  alert($chave);
  //alert($produto);
  //console.log($usuario , $carrinho_id , $produto , $chave , $value);
    var ref_pedidos = firebase.database().ref("pedidos/<?php echo $loja;?>/"+$carrinho_id+"/"+$produto);
  // create a synchronized array
    var pedido = $firebaseObject(ref_pedidos);
    $scope.pedido = pedido;
   console.log(pedido);
     
 

    var ref_carts_targer = firebase.database().ref().child("atendimentos/<?php echo $loja;?>");
  // create a synchronized array
  //alert($usuario);
  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $produto,
      shop: <?php echo $loja;?>,
      user : $usuario,
      //pedido : pedido,
      user_name : $nome_usuario,
      name:$nome_produto,

     // name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    });
  
    //$scope.pedido.$remove();
    $scope.pedido.$remove(item); 
   // products

 
    
  }


  $scope.recebido = function($usuario , $produto , $chave , $value , $nome_usuario , $nome_produto){
     var ref_pedidos = firebase.database().ref("atendimentos/<?php echo $loja;?>/"+$chave);
  // create a synchronized array

    var pedido = $firebaseObject(ref_pedidos);
 


    var ref_carts_targer = firebase.database().ref().child("entregue/<?php echo $loja;?>/"+$usuario+"/"+$produto);
    // create a synchronized array
    //alert($usuario);

    var messageria_cart = firebase.database().ref("messageria/"+$usuario);
    $scope.messageria_cart = $firebaseObject(messageria_cart);
    $scope.messageria_cart.status = new Date().getTime();
    $scope.messageria_cart.$save();

    $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $produto,
      shop: <?php echo $loja;?>,
      user : $usuario,
      pedido : pedido,
      user_name : $nome_usuario,
      name:$nome_produto,
      value:parseFloat($value),
      hora:new Date().getTime()
    });
  
  
    pedido.$remove();
  }
  