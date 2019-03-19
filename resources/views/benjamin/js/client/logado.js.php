      $scope.logado = false;
      $scope.logado = localStorage.getItem("logado");

      if(!$scope.logado){
        alert("não logado");
      }

      var usuario = localStorage.getItem("usuario");
      $scope.usuario = JSON.parse(localStorage.getItem("usuario_logado"));
      var foto =   localStorage.getItem("foto");
      $scope.foto =   localStorage.getItem("foto");
      var token =  localStorage.getItem("access_token");
      console.log($scope.usuario.user_token);
      logado_id = $scope.usuario.user_token;
      $scope.logado_id = $scope.usuario.user_token;
        
      var comanda = localStorage.getItem("comanda");
      console.log(comanda);
      // alert(comanda);
      var ref = firebase.database().ref("unidades");
      //// create a synchronized array
      $scope.unidades = $firebaseArray(ref);
        