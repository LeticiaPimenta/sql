    var comanda = localStorage.getItem("comanda");
    console.log(comanda);
    if(comanda == null)
      comanda ='retirar';
   // alert(comanda);
    //var ref = firebase.database().ref("listados");
    //// create a synchronized array
    //$scope.products = $firebaseArray(ref);
    var modal_intro = localStorage.getItem("modal_intro");

    if(modal_intro == null) {
      modal_intro = 1 ;

    $scope.modal_intro = 1 ;

    }

    $scope.cancelarModalIntro = function() {
    localStorage.setItem("modal_intro", 0 );
    $('#noticeModal').hide();
    }

    $scope.cancelarModalIntroBtn = function() {
    $('#noticeModal').hide();
    }
    
      var usuario = localStorage.getItem("usuario_logado");
      $scope.usuario = JSON.parse(localStorage.getItem("usuario_logado"));
      var foto =   localStorage.getItem("foto");
      $scope.foto =   localStorage.getItem("foto");
      var token =  localStorage.getItem("access_token");
      console.log($scope.usuario.user_token);
      logado_id = $scope.usuario.user_token;
      $scope.logado_id = $scope.usuario.user_token;
      $scope.nome = "<?php echo $nome ?>";

    $http.get("/ler_combos")
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

    
    $scope.username = "";



    var lista_categorias = {"1":{"name":"1nome","1":{"name":"1nome1"},"2":{"name":"1nome2"}},"2":{"name":"2nome","1":{"name":"2nome1"},"2":{"name":"2nome2"}}};

    $scope.lista_categorias = lista_categorias;



  var ref_carts = firebase.database().ref().child("carts/<?php echo $loja;?>/"+$scope.logado_id);
  // create a synchronized array
  $scope.carts = $firebaseArray(ref_carts);
  // add new items to the array
  // the product is automatically added to our Firebase database!
 
  // add new items to the array
  // the product is automatically added to our Firebase database!
  $scope.addCart = function($product, $name , $value) {
    var ref_carts_targer = firebase.database().ref().child("carts/<?php echo $loja;?>/"+$scope.logado_id+"/"+$product);
  // create a synchronized array
  comanda = localStorage.getItem("comanda");
  console.log(comanda);
  if(comanda == null)
      comanda ='retirar';
  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $product,
      comanda : comanda ,
      shop: <?php echo $loja;?>,
      user : $scope.logado_id,
      user_name : $scope.usuario.name,
      name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    });
  };

    $scope.timerCarrinho = 0;

    
    $scope.cancelarPedido = function() {
        clearTimeout($scope.timerCarrinho);
    }

    $scope.quickViewProduct = function(product_id) {
      //alert();
      var ref_produto = firebase.database().ref().child("produtos/"+product_id);
  // create a synchronized array
      $scope.ref_produto_quick = $firebaseObject(ref_produto);
      $('#modal_produto').modal('show');

    }

    $scope.quickViewFavoriteProduct = function(product_cod) {
      //alert();
     // var ref_produto = firebase.database().ref().child("produtos/"+product_id);
  // create a synchronized array
      $scope.ref_produto_quick = $scope.produtos_id[product_cod];
      $('#modal_produto').modal('show');

    }

    $scope.modalPedido = function($product, $name , $value) {
    var ref_carts_targer = firebase.database().ref().child("users/"+$scope.logado_id+"/vouchers/"+$product);
  // create a synchronized array
/*  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $product,
      shop: <?php echo $loja;?>,
      user : $scope.logado_id,
      name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    }); */
    $scope.timerCarrinho = setTimeout(function(){ 
        $('#smallAlertModal').modal('hide');
        $scope.carts_clicado = $firebaseArray(ref_carts_targer);
        comanda = localStorage.getItem("comanda");
        console.log(comanda);
        if(comanda == undefined)
          comanda ='retirar';

            $scope.carts_clicado.$add({
              product: $product,
              comanda : comanda ,
              shop: <?php echo $loja;?>,
              user : $scope.logado_id,
              user_name : $scope.usuario.name,
              name:$name,
              value:parseFloat($value),
              hora:new Date().getTime()
            });
            toastr.success('Seu Produto Esta em Meus Pedidos!', 'Produto Adicionado!');
          }, 3000);
    }; 

    var comanda = localStorage.getItem("comanda");
  console.log(comanda);
  if(comanda == null)
      comanda ='retirar';
 // alert(comanda);
  var ref = firebase.database().ref().child("destaques");
  // create a synchronized array
  $scope.products = $firebaseArray(ref);

  $scope.modal_combo = function($valor , combo) {
    console.log(combo);
    // body...
    $('#modal_combo').modal('show');
    $scope.combo_selecionado = combo;
    //$scope.add_credito($valor);
  }

    $scope.add_combo = function ($valor) {
      console.log($scope.combo_selecionado);
      alert("vai adicionar");

      for (var i = $scope.combo_selecionado.PRO_QUANTIDADE - 1; i >= 0; i--) {
        console.log(i);
        console.log($scope.combo_selecionado.PRO_CODIGO,$scope.combo_selecionado.PRO_DESCRICAO , $scope.combo_selecionado.PNI_VALOR);
        $scope.addCart($scope.combo_selecionado.PRO_CODIGO,$scope.combo_selecionado.PRO_DESCRICAO , $scope.combo_selecionado.PNI_VALOR);

      }

    }




