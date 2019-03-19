
      $scope.logado = false;
      $scope.logado = localStorage.getItem("logado");
     // var ref_usuario = firebase.database().ref().child("usuarios/"+firebaseUser.uid);

   
      var auth = $firebaseAuth();
		  // login with Facebook

      $scope.login_facebook = function(){
        auth.signInWithPhoneNumber.then(function(firebaseUser){
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