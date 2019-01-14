
<!DOCTYPE html>
<html lang="en" ng-app="benjaminApp">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    .:: Benjamin a Padaria @ SP :: Brasil ::.
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="manifest" href="/manifest.json">
  <link rel="canonical" href="https://benjaminapadaria.com.br" />
  <!--  Social tags      -->
  <meta name="keywords" content=" Benjamin a Padaria Faça seus pedidos e acompanhe a sua conta na facilidade do seu celular">
  <meta name="description" content="Faça seus pedidos e acompanhe a sua conta na facilidade do seu celular">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Benjamin a Padaria">
  <meta itemprop="description" content="Faça seus pedidos e acompanhe a sua conta na facilidade do seu celular">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@benjaminapadaria">
  <meta name="twitter:title" content="Benjamin a Padaria">
  <meta name="twitter:description" content="Faça seus pedidos e acompanhe a sua conta na facilidade do seu celular">
  <meta name="twitter:creator" content="@benjaminapadaria">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Benjamin a Padaria" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://benjaminapadaria.com.br" />
  <meta property="og:image" content="https://s3.img" />
  <meta property="og:description" content="Faça seus pedidos e acompanhe a sua conta na facilidade do seu celular" />
  <meta property="og:site_name" content="Benjamin a Padaria" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/assets/css/material-kit.min.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/demo/demo.css" rel="stylesheet" />
  <link href="/assets/demo/vertical-nav.css" rel="stylesheet" />
  <!-- Google Tag Manager -->

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>

<!-- AngularFire -->
<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
  <!-- End Google Tag Manager -->
<script>
  // Initialize the Firebase SDK
  var config = {
    apiKey: "AIzaSyD-UL1Fe_a3woT2tpdeRzVvOASQhxr7H4E",
    authDomain: "benjamin-a-padaria.firebaseapp.com",
    databaseURL: "https://benjamin-a-padaria.firebaseio.com",
    projectId: "benjamin-a-padaria",
    storageBucket: "benjamin-a-padaria.appspot.com",
    messagingSenderId: "579576076240"
  };
  firebase.initializeApp(config);
</script>
<script type="text/javascript">
  	var app = angular.module("benjaminApp", ["firebase" ]);
    app.controller("MainCtrl", function($scope, $firebaseArray, $firebaseAuth){

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
          console.log("Logado como :", firebaseUser.user.displayName);
          console.log(firebaseUser);
          localStorage.setItem("usuario" , JSON.stringify(firebaseUser.user));
          localStorage.setItem("foto" , firebaseUser.user.photoURL);
          localStorage.setItem("access_token" , firebaseUser.credential.accessToken);
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
         alert("header");

        <?php 
        	require '../resources/views/'.$js.'.js.php';
        ?>


      }
	});
</script>
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>