
      $scope.logado = false;
      $scope.logado = localStorage.getItem("logado");
     // var ref_usuario = firebase.database().ref().child("usuarios/"+firebaseUser.uid);

      if($scope.logado){
        $scope.usuario = localStorage.getItem("usuario");
        $scope.access_token = localStorage.getItem("access_token");
        $scope.usuario_logado = JSON.parse($scope.usuario);
        $scope.usuario_uid = $scope.usuario_logado.providerData[0].uid;
        $scope.foto_logado = localStorage.getItem("foto");
        $scope.nome_logado = $scope.usuario_logado.displayName;
     /*   const User = {
            uid: $scope.usuario_uid,
          //  email: user.email,
            displayName: $scope.nome_logado,
            photoURL: $scope.foto_logado,
            hora:new Date().getTime()
          }
          $scope.usuario_banco.$add(User);*/
          alert("vc ja esta logado e vai ser redirecionado ");
          window.location.replace("/client/qrunidade");
      }
      var auth = $firebaseAuth();
		  // login with Facebook

      $scope.login_facebook = function(){
        auth.$signInWithPopup("facebook").then(function(firebaseUser){
          console.log("Signed in as:", firebaseUser.uid);
          console.log(firebaseUser);

          $scope.usuario_logado = firebaseUser.user;
          console.log("Logado como :",firebaseUser.user.displayName);
          console.log(firebaseUser);
          localStorage.setItem("usuario",JSON.stringify(firebaseUser.user));
          localStorage.setItem("foto",firebaseUser.user.photoURL);
          localStorage.setItem("access_token",firebaseUser.credential.accessToken);
          $scope.foto_logado = firebaseUser.user.photoURL;
          $scope.nome_logado = firebaseUser.user.displayName;
          localStorage.setItem("logado" , true);
          $scope.logado = true;
          console.log($scope.usuario_logado);

          var ref_usuario = firebase.database().ref().child("usuarios/"+firebaseUser.uid);
          // create a synchronized array
          comanda = localStorage.getItem("comanda");
          console.log(comanda);
          $scope.usuario_banco = $firebaseArray(ref_usuario);

          const User = {
            uid: firebaseUser.uid,
          //  email: user.email,
            displayName: $scope.nome_logado,
            photoURL: $scope.foto_logado,
            hora:new Date().getTime()
          }
          $scope.usuario_banco.$add(User);
          //redirect firebaseUser.uid
          window.location.replace("/client/qrunidade");

        }).catch(function(error) {
          console.log("Authentication failed:", error);
        });
      }