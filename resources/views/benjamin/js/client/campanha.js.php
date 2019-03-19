    var comanda = localStorage.getItem("comanda");
    console.log(comanda);
   // alert(comanda);
    //var ref = firebase.database().ref("listados");
    //// create a synchronized array
    //$scope.products = $firebaseArray(ref);

    
      var usuario = localStorage.getItem("usuario");
      $scope.usuario = JSON.parse(localStorage.getItem("usuario"));
      var foto =   localStorage.getItem("foto");
      $scope.foto =   localStorage.getItem("foto");
      var token =  localStorage.getItem("access_token");
      console.log($scope.usuario.providerData[0].uid);
      logado_id = $scope.usuario.providerData[0].uid;
      $scope.logado_id = $scope.usuario.providerData[0].uid;

      $scope.nome = "<?php echo $nome ?>";

    $http.get("/produtos/campanha/cafe")
    .then(function(response) {
        $scope.produtos = response.data;
    });

 /*   function snapshotToArray(snapshot) {
      var returnArr = [];

      snapshot.forEach(function(childSnapshot) {
          var item = childSnapshot.val();
          item.key = childSnapshot.key;

          returnArr.push(item);
      });

      return returnArr;
  };

    firebase.database().ref('listados').on('value', function(snapshot) {
    $scope.produtos = snapshotToArray(snapshot);
//});

    
    for (var i = 0; i < $scope.products.length; i++) {
      
      for (var x = 0; x < $scope.products[i].length; x++) {
        console.log($scope.products[i][x]);
      }
    }
   /*  var produtos=[];
    $scope.products.$loaded().then(function() {
      angular.forEach($scope.products, function(value, key) {
       // angular.forEach(value, function(valor, chave) {
          produtos[value.$id]=value;
       // });  
        //console.log(value, key);
       // users_id[value.$id]=value;
      });
      //$scope.users_id = users_id;
    });

    console.log(produtos);*/

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


    var lista_categorias = {"1":{"name":"1nome","1":{"name":"1nome1"},"2":{"name":"1nome2"}},"2":{"name":"2nome","1":{"name":"2nome1"},"2":{"name":"2nome2"}}};

    $scope.lista_categorias = lista_categorias;



  var ref_carts = firebase.database().ref().child("carts/<?php echo $loja;?>/<?php echo $cliente;?>");
  // create a synchronized array
  $scope.carts = $firebaseArray(ref_carts);
  // add new items to the array
  // the product is automatically added to our Firebase database!
 
  // add new items to the array
  // the product is automatically added to our Firebase database!
  $scope.addCart = function($product, $name , $value) {
    var ref_carts_targer = firebase.database().ref().child("pedidos/<?php echo $loja;?>/<?php echo $cliente;?>/"+$product);
  // create a synchronized array
  comanda = localStorage.getItem("comanda");
  console.log(comanda);
  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $product,
      comanda : comanda ,
      shop: <?php echo $loja;?>,
      user : <?php echo $cliente;?>,
      name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    });
  };

    $scope.timerCarrinho = 0;

    
    $scope.cancelarPedido = function() {
        clearTimeout($scope.timerCarrinho);
    }

    $scope.modalPedido = function($product, $name , $value) {
    var ref_carts_targer = firebase.database().ref().child("pedidos/<?php echo $loja;?>/<?php echo $cliente;?>/"+$product);
  // create a synchronized array
/*  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $product,
      shop: <?php echo $loja;?>,
      user : <?php echo $cliente;?>,
      name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    }); */
    $scope.timerCarrinho = setTimeout(function(){ 
        $('#smallAlertModal').modal('hide');
        $scope.carts_clicado = $firebaseArray(ref_carts_targer);
        comanda = localStorage.getItem("comanda");
        console.log(comanda);
            $scope.carts_clicado.$add({
              product: $product,
              comanda : comanda ,
              shop: <?php echo $loja;?>,
              user : <?php echo $cliente;?>,
              name:$name,
              value:parseFloat($value),
              hora:new Date().getTime()
            });
            toastr.success('Seu Produto Chegou na Nossa Cozinha!', 'Produto Adicionado!');
          }, 3000);
    }; var comanda = localStorage.getItem("comanda");
  console.log(comanda);
 // alert(comanda);
  var ref = firebase.database().ref().child("destaques");
  // create a synchronized array
  $scope.products = $firebaseArray(ref);

    var ref = firebase.database().ref().child("produtos");
  // create a synchronized array
  $scope.produtos = $firebaseArray(ref);
  


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




  var ref_carts = firebase.database().ref().child("carts/<?php echo $loja;?>/<?php echo $cliente;?>");
  // create a synchronized array
  $scope.carts = $firebaseArray(ref_carts);
  // add new items to the array
  // the product is automatically added to our Firebase database!
 
  // add new items to the array
  // the product is automatically added to our Firebase database!
  $scope.addCart = function($product, $name , $value) {
    var ref_carts_targer = firebase.database().ref().child("pedidos/<?php echo $loja;?>/<?php echo $cliente;?>/"+$product);
  // create a synchronized array
  comanda = localStorage.getItem("comanda");
  console.log(comanda);
  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $product,
      comanda : comanda ,
      shop: <?php echo $loja;?>,
      user : <?php echo $cliente;?>,
      name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    });
  };

    $scope.timerCarrinho = 0;

    
    $scope.cancelarPedido = function() {
        clearTimeout($scope.timerCarrinho);
    }

    $scope.modalPedido = function($product, $name , $value) {
      console.log( $value);
      console.log($name );
      console.log($product);
    var ref_carts_targer = firebase.database().ref().child("pedidos/<?php echo $loja;?>/<?php echo $cliente;?>/"+$product);
  // create a synchronized array
/*  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $product,
      shop: <?php echo $loja;?>,
      user : <?php echo $cliente;?>,
      name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    }); */
    $scope.timerCarrinho = setTimeout(function(){ 
        $('#smallAlertModal').modal('hide');
        $scope.carts_clicado = $firebaseArray(ref_carts_targer);
        comanda = localStorage.getItem("comanda");
  console.log(comanda);
            $scope.carts_clicado.$add({
              product: $product,
              comanda : comanda ,
              shop: <?php echo $loja;?>,
              user : <?php echo $cliente;?>,
              name:$name,
              value:parseFloat($value),
              hora:new Date().getTime()
            });
            toastr.success('Seu produto chegou na cossa cozinha!', 'Produto Adicionado!');
          }, 3000);
    };

