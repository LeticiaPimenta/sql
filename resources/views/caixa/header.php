<!DOCTYPE html>
<html lang="en" ng-app="sampleApp">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    .:: Meus Pedidos :: Padaria Benjamin :: SP @Brasil ::.
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, material, material kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, premium bootstrap 4 ui kit, premium template, bootstrap 4 template">
  <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Kit Pro by Creative Tim">
  <meta itemprop="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Kit Pro by Creative Tim">
  <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Kit Pro by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/material-kit-pro/presentation.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg" />
  <meta property="og:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design" />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="/assets/css/material-kit.min.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/assets/demo/demo.css" rel="stylesheet" />
  <link href="/assets/demo/vertical-nav.css" rel="stylesheet" />
  <!-- Google Tag Manager -->
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
  
  var app = angular.module("sampleApp", ["firebase"]);
  app.controller("SampleCtrl", function($scope, $firebaseArray, $firebaseObject) {
    var ref = firebase.database().ref().child("products");
    // create a synchronized array
    $scope.products = $firebaseArray(ref);


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


  var ref_carts = firebase.database().ref().child("pedidos/<?php echo $loja;?>");
  // create a synchronized array
  var carts = $firebaseArray(ref_carts);
  var cart_formatado = [];

  carts.$loaded().then(function() {
    $scope.carts_origin = carts;
      var cont = 1;
      angular.forEach(carts, function(value, key) {
        console.log(value);
        console.log(key);
        cart_formatado[value.$id]=value;
      });
      console.log(cart_formatado);
      $scope.carts = cart_formatado;
  });


var ref_atendimentos = firebase.database().ref().child("atendimentos/<?php echo $loja;?>");
  // create a synchronized array
  var atendimentos = $firebaseArray(ref_atendimentos);

  $scope.atendimentos = atendimentos;
  //atendimentos = atendimentos;

   var atendimentos_formatado = [];




  $scope.atender = function($usuario , $produto , $chave , $value){
     var ref_pedidos = firebase.database().ref("pedidos/<?php echo $loja;?>/"+$usuario+"/"+$produto+"/"+$chave);
  // create a synchronized array
    var pedido = $firebaseObject(ref_pedidos);
    console.log(pedido);

    var ref_carts_targer = firebase.database().ref().child("atendimentos/<?php echo $loja;?>/"+$usuario+"/"+$produto);
  // create a synchronized array
  $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $produto,
      shop: <?php echo $loja;?>,
      user : $usuario,
     // name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    });
  
    pedido.$remove();
  }


  $scope.recebido = function($usuario , $produto , $chave , $value){
     var ref_pedidos = firebase.database().ref("atendimentos/<?php echo $loja;?>/"+$usuario+"/"+$produto+"/"+$chave);
  // create a synchronized array
    var pedido = $firebaseObject(ref_pedidos);
    console.log(pedido);

    var ref_carts_targer = firebase.database().ref().child("carts/<?php echo $loja;?>/"+$usuario+"/"+$produto);
    // create a synchronized array
    $scope.carts_clicado = $firebaseArray(ref_carts_targer);
    $scope.carts_clicado.$add({
      product: $produto,
      shop: <?php echo $loja;?>,
      user : $usuario,
     // name:$name,
      value:parseFloat($value),
      hora:new Date().getTime()
    });
  
    pedido.$remove();
  }


  // add new items to the array
  // the product is automatically added to our Firebase database!
 
  // add new items to the array
  // the product is automatically added to our Firebase database!
  

  // click on `index.html` above to see $remove() and $save() in action
});
</script>

</head>