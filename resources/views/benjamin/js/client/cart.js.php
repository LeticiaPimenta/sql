/* var ref = firebase.database().ref().child("produtos");
    $scope.retorno = 0;
    $scope.valor_total = 0;
    // create a synchronized array
    $scope.products = $firebaseArray(ref);
    var products_id = [];
    $scope.products.$loaded().then(function() {
      var cont = 1;
      angular.forEach($scope.products, function(value, key) {
        
        products_id[value.$id]=value;
      });
    //  console.log(products_id);
    //$scope.products = products;
    $scope.products_id = products_id;
  }); */

      var usuario = localStorage.getItem("usuario_logado");
      $scope.usuario = JSON.parse(localStorage.getItem("usuario_logado"));
      $scope.me = <?php echo $me;?>;

      var foto =   localStorage.getItem("foto");
      $scope.foto =   localStorage.getItem("foto");
      var token =  localStorage.getItem("access_token");
      console.log($scope.usuario.user_token);
      logado_id = $scope.usuario.user_token;
      $scope.logado_id = $scope.usuario.user_token;



  var ref_carts = firebase.database().ref().child("carts/<?php echo $loja;?>/"+$scope.logado_id);
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
      angular.forEach($scope.carrinhos, function(produtos, key) {
        console.log(produtos);
        console.log(key);
        angular.forEach(produtos, function(produto) {
          //cart_formatado[produtos.$id]=produto;
          //valor_total=valor_total+produto.value;
          //console.log(produto.value);
          if(typeof produto === 'object' && produto !== null){
            produtos_carrinho.push(produto);
            valor_total=valor_total+parseFloat(produto.value);
            id_produto = produto.product;
            if(valor_total_produto[id_produto] == null){
              valor_total_produto[id_produto]=0;
            }
            valor_total_produto[id_produto]=valor_total_produto[id_produto]+parseFloat(produto.value);
            console.log(produto.value);
            console.log(valor_total_produto);
            console.log(valor_total);
          }
        });
      });
      console.log(valor_total);
      console.log(valor_total_produto);
      $scope.valor_total = valor_total;
      $scope.produtos_carrinho = produtos_carrinho;
      $scope.carts = cart_formatado;
  });


  $scope.descontar_wallet = function(desconto){
    var voucher = [];
    if(desconto == 1){
      voucher['id'] = 1;
      voucher['valor'] = 5;
    }

    if(desconto == 2){
      voucher['id'] = 2;
      voucher['valor'] = 10;
    }

    if(desconto == 3){
      voucher['id'] = 3;
      voucher['valor'] = 50;
    }

    if(desconto == 4){
      voucher['id'] = 4;
      voucher['valor'] = 100;
    }

    var valor_desconto = voucher['valor'];
    var produto_id = voucher['id'];

    var req = {
       method: 'POST',
       url: '/client/descontar_wallet',
       headers: {
         'Content-Type': 'text/'
       },
       data: {"loja":<?php echo $loja;?>, "valor_desconto":valor_desconto}
      }

      $http(req).then(function(response){
        console.log(response);
        //if (response.data.status == 1) {
          $scope.addCartVoucher(produto_id, 'Voucher de '+valor_desconto , valor_desconto);
          $scope.me.wallet = response.wallet;
          location.reload();
         // $scope.valor_total = $scope.valor_total - voucher['valor']
        //}
      }, function(response){
        console.log(response);
      });
    //
  }

    $scope.addCartVoucher = function($product, $name , $value) {
    var ref_carts_targer = firebase.database().ref().child("carts/<?php echo $loja;?>/"+$scope.logado_id+"/"+$product);
  // create a synchronized array
  comanda = localStorage.getItem("comanda");
  console.log(comanda);
  if(comanda == null)
      comanda ='retirar';
  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: 1,
      comanda : comanda ,
      shop: <?php echo $loja;?>,
      user : $scope.logado_id,
      user_name : $scope.usuario.name,
      name:$name,
      value:parseFloat(-$value),
      hora:new Date().getTime()
    });

  };


  $scope.pagar_carrinho = function (){
      console.log("vai pagar");
      
      $("#cobranca").slideUp();
      $("#titulo_pagamento").html("Fechando seu pagamento , aguarde .");
      $("#cobrando").slideDown();
      var req = {
       method: 'POST',
       url: '/caixa/cobrar',
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
               // var disputa = disputas.$getRecord(id);
             /*    var novo_estilo = firebase.database().ref().child("historico");
                var novo = $firebaseArray(novo_estilo);
                novo.$add($scope.disputa);
                $scope.disputa.inicio = 0; // This print null
                $scope.disputa.encerrando = 0; // This print null
                $scope.disputa.estilos = []; // This print null
                $scope.disputa.votacao = []; // This print null*/

                var ref_carts = firebase.database().ref().child("carts/<?php echo $loja;?>/"+$scope.logado_id);
  // create a synchronized array
              var obj_carts = $firebaseObject(ref_carts);
              $scope.obj_carts = obj_carts;


                var carts_atualizado = $firebaseArray(ref_carts);

                $scope.carrinhos = carts_atualizado;

                var hoje = new Date().getTime();
               // alert(hoje);
                var ref_caixa = firebase.database().ref("pedidos/<?php echo $loja;?>");
  // create a synchronized array
                var caixa = $firebaseArray(ref_caixa);
                var comanda = localStorage.getItem("comanda");
                if(comanda == null)
                  comanda ='retirar';
                console.log("caixa/<?php echo $loja;?>/"+$scope.logado_id+"/"+hoje);
                console.log(produtos_carrinho);
                caixa.$add(produtos_carrinho).catch(function(error) {
                     console.error(error); //or
                     console.log(error);
                 });

                var ref_compra = firebase.database().ref().child("users/"+$scope.logado_id+"/compras/<?php echo $loja;?>");
                var compras = $firebaseArray(ref_compra);
                compras.$add({
    
                  shop: <?php echo $loja;?>,
                  user : $scope.logado_id,
                 // name:$name,
                  products: produtos_carrinho,
                  comanda: comanda,
                  value:$scope.valor_total,
                  hora:new Date().getTime()
                }).catch(function(error) {
                   console.error(error); //or
                   console.log(error);
                  // alert('Not Saved.');
                 })
               // $scope.carts.$remove();

                var ref_carts_remove = firebase.database().ref().child("carts/<?php echo $loja;?>/"+$scope.logado_id);
                var carts_remove = $firebaseObject(ref_carts_remove);
                carts_remove.$remove();
                window.location.replace("/client/cardapio/<?php echo $loja;?>");

            }
  // add new items to the array
  // the product is automatically added to our Firebase database!
 
  // add new items to the array
  // the product is automatically added to our Firebase database!
  
<?php
     require "../resources/views/benjamin/js/messageria.js.php";
     ?>