
  var usuario = localStorage.getItem("usuario_logado");
  $scope.usuario = JSON.parse(localStorage.getItem("usuario_logado"));
  var foto =   localStorage.getItem("foto");
  $scope.foto =   localStorage.getItem("foto");
  var token =  localStorage.getItem("access_token");
  console.log($scope.usuario.user_token);
  logado_id = $scope.usuario.user_token;
  $scope.logado_id = $scope.usuario.user_token;


  var ref_carts = firebase.database().ref("users/"+$scope.logado_id+"/vouchers");
  // create a synchronized array
  var carts = $firebaseArray(ref_carts);
  var cart_formatado = [];
  var valor_total = 0;  
  var produtos_carrinho= [];
  $scope.carrinhos = carts;
  $scope.carrinhos.$loaded().then(function() {
    $scope.carts_origin = carts;
    var cont = 1;
    var valor_total_produto=0;
    angular.forEach($scope.carrinhos, function(produto, key) {
      console.log(produto);
      valor_total=valor_total+parseFloat(produto.valor);
    });
    console.log($scope.carrinhos);
    console.log(valor_total);
    $scope.valor_total = valor_total;
    $scope.produtos_carrinho = produtos_carrinho;
  });


  $scope.pagar_carrinho = function (){
  console.log("vai pagar");
  
  $("#cobranca").slideUp();
  $("#titulo_pagamento").html("Fechando seu pagamento , aguarde .");
  $("#cobrando").slideDown();
  var req = {
    method: 'POST',
    url: '/caixa/cobrarvoucher',
    headers: {
     'Content-Type': 'text/'
    },
    data: {"loja":<?php echo $loja;?>, "cartao":$("#cartao_carrinho").val(), "user_token":$scope.logado_id,"identificador":$("#identificador").val(), "cvv":"123" , "Vencimento":"20/2020" , "nome":$("#nome_carrinho").val() , "valor":$("#valor_carrinho").val()}
  }

  $http(req).then(function(response){
    console.log(response);
    $("#cobrando").slideUp();
    $("#titulo_pagamento").html("Pagamento Finalizado");
    $("#cobrado").slideDown();
    $scope.retorno = response;
    $("#titulo_pagamento").html("Pagamento Finalizado "+response.data);
    $scope.encerrar_carrinho();

  }, function(response){
    console.log(response);
  });

  }

  $scope.encerrar_carrinho = function(){
    var ref_carts = firebase.database().ref().child("users/"+$scope.logado_id+"/vouchers");
// create a synchronized array
    var obj_carts = $firebaseObject(ref_carts);
    $scope.obj_carts = obj_carts;


    var carts_atualizado = $firebaseArray(ref_carts);

    $scope.carrinhos = carts_atualizado;

    var hoje = new Date().getTime();
   // alert(hoje);
    var ref_caixa = firebase.database().ref("vouchers/<?php echo $loja;?>");
// create a synchronized array
    var caixa = $firebaseArray(ref_caixa);
    var comanda = localStorage.getItem("comanda");
    if(comanda == null)
      comanda ='retirar';
   // console.log("caixa/<?php echo $loja;?>/"+$scope.logado_id+"/"+hoje);
    console.log(produtos_carrinho);
    caixa.$add(produtos_carrinho).catch(function(error) {
         console.error(error); //or
         console.log(error);
     });

    var ref_compra = firebase.database().ref().child("users/"+$scope.logado_id+"/creditos/<?php echo $loja;?>");
    var compras = $firebaseArray(ref_compra);
    compras.$add({

      shop: <?php echo $loja;?>,
      user : $scope.logado_id,
     // name:$name,
      //products: produtos_carrinho,
     // comanda: comanda,
     value:$scope.valor_total,
      hora:new Date().getTime()
    }).catch(function(error) {
       console.error(error); //or
       console.log(error);
      // alert('Not Saved.');
     })
     // $scope.carts.$remove();

      var ref_carts_remove = firebase.database().ref().child("users/"+$scope.logado_id+"/vouchers/");
      var carts_remove = $firebaseObject(ref_carts_remove);
      carts_remove.$remove();
      //window.location.replace("/client/cardapio/<?php echo $loja;?>");

  }
  // add new items to the array
  // the product is automatically added to our Firebase database!
 
  // add new items to the array
  // the product is automatically added to our Firebase database!
  
<?php
     require "../resources/views/benjamin/js/messageria.js.php";
     ?>