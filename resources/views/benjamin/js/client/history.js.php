    var ref = firebase.database().ref().child("products");
    // create a synchronized array
    var products = $firebaseArray(ref);

    var products_id = [];
    products.$loaded().then(function() {
      var cont = 1;
      angular.forEach(products, function(value, key) {
        
        products_id[value.$id]=value;
      });
    //  console.log(products_id);
    $scope.products = products;
    $scope.products_id = products_id;
  });


    var usuario = localStorage.getItem("usuario_logado");
      $scope.usuario = JSON.parse(localStorage.getItem("usuario_logado"));
      var foto =   localStorage.getItem("foto");
      $scope.foto =   localStorage.getItem("foto");
      var token =  localStorage.getItem("access_token");
      console.log($scope.usuario.user_token);
      logado_id = $scope.usuario.user_token;
      $scope.logado_id = $scope.usuario.user_token;


      $scope.me = <?php echo $me; ?>;

      if($scope.me.parent_user != null){
        $scope.parent_user = $scope.me.parent_user;
        var req = {
          method: 'POST',
          url: '/client/amigotransferir',
          headers: {
           'Content-Type': 'text/'
          },
          data: {"loja":<?php echo $loja;?>, "user_token":$scope.me.parent_user}
        }

        $http(req).then(function(response){
          console.log(response);
          $scope.parent_user = response.data ; 
        }, function(response){
          console.log(response);
        });
      }
      $scope.indicados = <?php echo $indicados; ?>;
      $scope.benamigos = <?php echo $benamigos; ?>;



    var ref_users = firebase.database().ref().child("users");
    // create a synchronized array
    var users = $firebaseArray(ref_users);
    var users_id=[];
    $scope.username = "";

    users.$loaded().then(function() {
      var cont = 1;
      angular.forEach(users, function(value, key) {
        //console.log(value, key);
        users_id[value.$id]=value;
      });
    $scope.users_id = users_id;
  });


  var ref_carts = firebase.database().ref().child("users/"+logado_id+"/compras");
  // create a synchronized array
  var carts = $firebaseArray(ref_carts);
  var cart_formatado = [];
  var total_usuario = [];
 // var produtos_carrinho = [];

  carts.$loaded().then(function() {
    $scope.carts_origin = carts;
      var cont = 1;
      angular.forEach(carts, function(compras) {
        //console.log(compras.$id);
        //console.log(dia);
        angular.forEach(compras, function(compra) {
          //console.log(compra);
          //console.log(dia);
          angular.forEach(compra, function(produto) {
           // console.log(produto);
            angular.forEach(produto, function( item) {
              angular.forEach(item, function( qtd , key) {
              console.log(compras.$key);
              if(qtd.value){
                console.log(qtd);
                
                cart_formatado[key]=cart_formatado[key]+parseFloat(qtd.value);
                total_usuario[qtd.user]=total_usuario[qtd.user]+parseFloat(qtd.value);
              }
              //console.log(dia);
              
            });
              
            });
            
          });
        });
      });
     // $scope.produtos_carrinho = produtos_carrinho;
      console.log(cart_formatado);
      console.log(total_usuario);
      $scope.carts = cart_formatado;
  });

  $scope.soma = function($carrinho){
      
      for (var i = 0; i < $carrinho.length; i++) {
        
        console.log($carrinho[i].value);
      }
  }

  $scope.total = parseFloat(0);

  $scope.modal_transferir = function(user_token){
    //alert(user_token);

    var req = {
      method: 'POST',
      url: '/client/amigotransferir',
      headers: {
       'Content-Type': 'text/'
      },
      data: {"loja":<?php echo $loja;?>, "user_token":user_token}
    }

  $http(req).then(function(response){
    console.log(response);
    $scope.amigo_transferir = response.data ; 
  }, function(response){
    console.log(response);
  });

    $('#modal_transferir').modal('show');
  }

  $scope.tranferir_indicado = function($user_token){
      var valor_transferencia = $("#valor_transferencia").val();
      //alert(valor_transferencia);
      var req = {
        method: 'POST',
        url: '/client/fazertransferencia',
        headers: {
         'Content-Type': 'text/'
        },
        data: {"loja":<?php echo $loja;?>, "user_token": $user_token , "valor_transferencia" : valor_transferencia}
      }

    $http(req).then(function(response){
      console.log(response);
      $scope.responsa_transferencia = response.data ;
      $scope.me.wallet = response.data.wallet;

    }, function(response){
      console.log(response);
    });
  }