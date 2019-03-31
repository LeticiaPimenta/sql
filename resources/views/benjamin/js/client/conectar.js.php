
$("#registrar").on('click',function(){


/*	if($("#name").val() == ""){
		alert("Seu nome nao pode ser vazio");
		return false;
	} 

	if($("#email").val() == ""){
		alert("Seu email nao pode ser vazio");
		return false;
	}


	if($("#password").val() == ""){
		alert("Sua senha nao pode ser vazia");
		return false;
	}
*/

        $.post( "registrar_usuario", 
        { name: $("#name").val() , password: $("#password").val(), email: $("#email").val() })
      .done(function( data ) {

        console.log(  JSON.stringify(data) );

//        alert(data.status);
		if(data.status == 1) {
      $("#registrar_form").hide();
			$("#form_facebook").hide();
        	$("#container-registrado").show();
		} 

		if(data.status == 2) {
		toastr.error(data.mensagem,'Seu cadastro não foi realizado.');
		}
        



      }); 



    });

  var auth = $firebaseAuth();
		  // login with Facebook

      $scope.login_facebook = function(){

        auth.$signInWithPopup("facebook").then(function(firebaseUser){
          console.log("Signed in as:", firebaseUser.uid);
          console.log(firebaseUser);

          $scope.usuario_logado = firebaseUser.user;
          console.log("Logado como :",firebaseUser.user.displayName);
          $("#name").val(firebaseUser.user.displayName);
          $("#email").val(firebaseUser.user.email);
          $("#conectar_facebook").slideUp();
          $("#registrar_form").slideDown();
          toastr.warning('Preencha com o seu cpf e senha!');

          console.log(firebaseUser);
          localStorage.setItem("usuario",JSON.stringify(firebaseUser.user));
          localStorage.setItem("foto",firebaseUser.user.photoURL);
          localStorage.setItem("access_token",firebaseUser.credential.accessToken);
          $scope.foto_logado = firebaseUser.user.photoURL;
          $scope.foto = firebaseUser.user.photoURL;
          $scope.nome_logado = firebaseUser.user.displayName;
          localStorage.setItem("logado" , true);
          $scope.logado = true;
          console.log($scope.usuario_logado);

//var ref_usuario = firebase.database().ref().child("usuarios/"+firebaseUser.uid);
          // create a synchronized array
         // comanda = localStorage.getItem("comanda");
        //  console.log(comanda);
         // $scope.usuario_banco = $firebaseArray(ref_usuario);

         /* const User = {
            uid: firebaseUser.uid,
          //  email: user.email,
            displayName: $scope.nome_logado,
            photoURL: $scope.foto_logado,
            hora:new Date().getTime()
          }*/
          //$scope.usuario_banco.$add(User);
          //redirect firebaseUser.uid
          //window.location.replace("/client/qrunidade");

        }).catch(function(error) {
          console.log("Authentication failed:", error);
        });
      }