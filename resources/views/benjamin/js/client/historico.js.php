      var usuario = localStorage.getItem("usuario_logado");
      $scope.usuario = JSON.parse(localStorage.getItem("usuario_logado"));

      var token =  localStorage.getItem("access_token");
      console.log($scope.usuario.user_token);
      logado_id = $scope.usuario.user_token;
      $scope.logado_id = $scope.usuario.user_token;


$scope.comanda = localStorage.getItem("comanda");
$scope.loja = localStorage.getItem("loja");


  var ref_retirar = firebase.database().ref().child("users/"+$scope.logado_id+"/compras");
  // create a synchronized array
  var retirar = $firebaseArray(ref_retirar);

  retirar.$loaded().then(function() {
    $scope.retirar = retirar;
    console.log($scope.retirar);
  })


  //$scope.retirar = <?php echo $retirar;?>;

  $scope.solicitar = function () {
    console.log($scope.produto_solicitado);
    var ref_caixa = firebase.database().ref("pedidos/"+$scope.loja);
    var caixa = $firebaseArray(ref_caixa);

   // var obs = 
    $scope.produto_solicitado['obs'] = $("#obs_pedido").val();
    caixa.$add($scope.produto_solicitado).catch(function(error) {
         console.error(error); //or
         console.log(error);
     });

    var ref_carts_remove = firebase.database().ref("users/"+$scope.logado_id+"/retirar/"+$scope.key_produto+"/products/"+$scope.ordem_produto);
    var carts_remove = $firebaseObject(ref_carts_remove);
    carts_remove.$remove();
    toastr.success('Produto Solicitado ,só aguardar!', 'Pedido Recebido na cozinha!');
  }


  $scope.pedir_retirar = function(produto , ordem , key){
    $scope.produto_solicitado = produto; 
    $scope.ordem_produto = ordem;
    $scope.key_produto = key;

    $('#modal_produto').modal('show');
  }


  $scope.presentear_retirar = function(produto , ordem , key){
    console.log(produto);
    console.log(ordem);
    console.log(key);
    $scope.produto_solicitado = produto; 
    $scope.ordem_produto = ordem;
    $scope.key_produto = key;

    $http.get('/benamigos').then(function(response) {
      $scope.retirar_benamigos = response.data;
      //console.log($scope.retirar);
    })

    $('#modalPresentear').modal('show');
  }

  $scope.enviar = function(){
    var amigo = $('#amigo_selecionado').val();

    console.log($scope.produto_solicitado);
    console.log($scope.ordem_produto);
    console.log($scope.key_produto);

    console.log($scope.produto_solicitado);
    var ref_caixa = firebase.database().ref("users/"+amigo+"/retirar");
    var caixa = $firebaseArray(ref_caixa);




    caixa.$add({
      shop: 'gift',
      user : $scope.logado_id,
     // name:$name,
      products: [$scope.produto_solicitado],
      //comanda: comanda,
     // value:$scope.valor_total,
      hora:new Date().getTime()
    }).catch(function(error) {
       console.error(error); //or
       console.log(error);
      // alert('Not Saved.');
     });
    var messageria_amigo = firebase.database().ref("messageria/"+amigo);
    $scope.messageria_amigo = $firebaseObject(messageria_amigo); 
    $scope.messageria_amigo.status = 1;
    $scope.messageria_amigo.msg = 'Seu amigo te mandou '+$scope.produto_solicitado.name;

    $scope.messageria_amigo.$save();

    var ref_carts_remove = firebase.database().ref("users/"+$scope.logado_id+"/retirar/"+$scope.key_produto+"/products/"+$scope.ordem_produto);
    var carts_remove = $firebaseObject(ref_carts_remove);
    carts_remove.$remove();

    toastr.success('Presente Enviado com sucesso!', 'Presente enviado!');
  }

  var ref = firebase.database().ref("unidades");
      //// create a synchronized array
  $scope.unidades = $firebaseArray(ref);


  $scope.mudar_loja = function(){
    localStorage.setItem("loja" , $scope.loja);
  }