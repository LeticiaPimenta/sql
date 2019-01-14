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


    var ref_users = firebase.database().ref().child("users");
    // create a synchronized array
    var users = $firebaseArray(ref_users);
    var users_id=[];
    $scope.username = "";

    users.$loaded().then(function() {
    console.log(users);
      var cont = 1;
      angular.forEach(users, function(value, key) {
        console.log(value.$id);
        users_id[value.$id]=value.configs;
      });
    $scope.users_id = users_id;
  });


  var ref_carts = firebase.database().ref().child("caixa/<?php echo $loja;?>");
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

  // add new items to the array
  // the product is automatically added to our Firebase database!
 
  // add new items to the array
  // the product is automatically added to our Firebase database!
  

  // click on `index.html` above to see $remove() and $save() in action
});
</script>

</head>

<body class="shopping-cart sidebar-collapse" ng-controller="SampleCtrl">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php

  require_once "../resources/views/caixa/navbar.php";

  ?>
  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/examples/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Todos os Pedidos</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="card card-plain">
        <div class="card-body">
          <br/>
         

          <div class="table-responsive">
                <table class="table"  ng-repeat="(dia,origins) in carts_origin">
                    <thead>
                      <tr>
                        <th>Cliente</th>
                        <th>Produto</th>
                        <th>Hora</th>
                        <th class="text-right">Valor</th>
                        <th class="text-right">Ações</th>
                      </tr>
                    </thead>
            
                    <tbody ng-repeat="items in origins">
                      <tr ng-repeat="(key,item) in items">                        
                        <td>{{users_id[item.user].name}}</td>
                        <td><small><span ng-repeat="produto in item.products | filter: busca"> {{products_id[produto.product].text}}(R$ {{produto.value}})  
                          <span ng-show="!$last">+ </span></small></td>
                        <td>{{item.hora | date:'MM/dd @ h:mma' }}</td>
                        <td class="text-right">R$ {{item.value.toFixed(2)}}</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="" ng-click="recebido(item.user,item.product,key , item.value)">
                            <i class="material-icons">person</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>
                 
                    </tbody>
                  </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

  require_once "../resources/views/caixa/footer.php";

  ?>