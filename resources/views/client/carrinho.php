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
      var cont = 1;
      angular.forEach(users, function(value, key) {
        console.log(value, key);
        users_id[value.$id]=value;
      });
    $scope.users_id = users_id;
  });


  var ref_carts = firebase.database().ref().child("carts/<?php echo $loja;?>/<?php echo $cliente;?>");
  // create a synchronized array
  var carts = $firebaseArray(ref_carts);
  var cart_formatado = [];
  var valor_total = 0;  
  var produtos_carrinho= [];
$scope.carrinhos = carts;
  $scope.carrinhos.$loaded().then(function() {
    $scope.carts_origin = carts;
      var cont = 1;
      var valor_total_produto=0;
      angular.forEach($scope.carrinhos, function(produtos, key) {
        console.log(produtos);
        console.log(key);
        angular.forEach(produtos, function(produto) {
          //cart_formatado[produtos.$id]=produto;
          //valor_total=valor_total+produto.value;
          //console.log(produto.value);
          if(typeof produto === 'object' && produto !== null){
            produtos_carrinho.push(produto);
            valor_total=valor_total+parseFloat(produto.value);
            id_produto = produto.product;
            if(valor_total_produto[id_produto] == null){
              valor_total_produto[id_produto]=0;
            }
            valor_total_produto[id_produto]=valor_total_produto[id_produto]+parseFloat(produto.value);
            console.log(produto.value);
            console.log(valor_total_produto);
            console.log(valor_total);
          }
        });
      });
      console.log(valor_total);
      console.log(valor_total_produto);
      $scope.valor_total = valor_total;
      $scope.produtos_carrinho = produtos_carrinho;
      $scope.carts = cart_formatado;
  });


  $scope.encerrar_carrinho = function(){
               // var disputa = disputas.$getRecord(id);
             /*    var novo_estilo = firebase.database().ref().child("historico");
                var novo = $firebaseArray(novo_estilo);
                novo.$add($scope.disputa);
                $scope.disputa.inicio = 0; // This print null
                $scope.disputa.encerrando = 0; // This print null
                $scope.disputa.estilos = []; // This print null
                $scope.disputa.votacao = []; // This print null*/

                var ref_carts = firebase.database().ref().child("carts/<?php echo $loja;?>/<?php echo $cliente;?>");
  // create a synchronized array
              var obj_carts = $firebaseObject(ref_carts);
              $scope.obj_carts = obj_carts;


  var carts_atualizado = $firebaseArray(ref_carts);

$scope.carrinhos = carts_atualizado;

         

                var hoje = new Date().getTime();
               // alert(hoje);
                var ref_caixa = firebase.database().ref().child("caixa/<?php echo $loja;?>/<?php echo $cliente.'/';?>"+hoje);
  // create a synchronized array
                var caixa = $firebaseArray(ref_caixa);
                console.log("caixa/<?php echo $loja;?>/<?php echo $cliente.'/';?>"+hoje);
                console.log(produtos_carrinho);
                caixa.$add({
      shop: <?php echo $loja;?>,
      user : <?php echo $cliente;?>,
     // name:$name,
     products: produtos_carrinho,
     value:$scope.valor_total,
      hora:new Date().getTime()
    }).catch(function(error) {
                   console.error(error); //or
                   console.log(error);
                   alert('Not Saved.');
                 });

                var ref_compra = firebase.database().ref().child("users/<?php echo $cliente;?>/compras/<?php echo $loja;?>");
                var compras = $firebaseArray(ref_compra);
                compras.$add({
    
      shop: <?php echo $loja;?>,
      user : <?php echo $cliente;?>,
     // name:$name,
      products: produtos_carrinho,
     value:$scope.valor_total,
      hora:new Date().getTime()
    }).catch(function(error) {
                   console.error(error); //or
                   console.log(error);
                   alert('Not Saved.');
                 })
               // $scope.carts.$remove();

                var ref_carts_remove = firebase.database().ref().child("carts/<?php echo $loja;?>/<?php echo $cliente;?>");
                var carts_remove = $firebaseObject(ref_carts_remove);
                carts_remove.$remove();
                alert("Vai Fechar sua compra , veja os detalhes em seus historicos !");

            }
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
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit-pro/index.html">
          {{users_id[<?php echo $cliente;?>].name}} </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="/client/cardapio/<?php echo $loja;?>/<?php echo $cliente;?>" class="dropdown nav-link">
              <i class="material-icons">local_cafe</i> Espressos
            </a>
      <!--  <div class="dropdown-menu dropdown-with-icons">
              <a href="../presentation.html" class="dropdown-item">
                <i class="material-icons">layers</i> Presentation
              </a>
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">line_style</i> All Components
              </a>
              <a href="http://demos.creative-tim.com/material-kit-pro/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div> -->
          </li>
          <li class="dropdown nav-item">
            <a href="/client/cardapio/<?php echo $loja;?>/<?php echo $cliente;?>" class="dropdown nav-link">
              <i class="material-icons">local_cafe</i> Mais Amados
            </a>
      <!--  <div class="dropdown-menu dropdown-with-icons">
              <a href="../sections.html#headers" class="dropdown-item">
                <i class="material-icons">dns</i> Headers
              </a>
              <a href="../sections.html#features" class="dropdown-item">
                <i class="material-icons">build</i> Features
              </a>
              <a href="../sections.html#blogs" class="dropdown-item">
                <i class="material-icons">list</i> Blogs
              </a>
              <a href="../sections.html#teams" class="dropdown-item">
                <i class="material-icons">people</i> Teams
              </a>
              <a href="../sections.html#projects" class="dropdown-item">
                <i class="material-icons">assignment</i> Projects
              </a>
              <a href="../sections.html#pricing" class="dropdown-item">
                <i class="material-icons">monetization_on</i> Pricing
              </a>
              <a href="../sections.html#testimonials" class="dropdown-item">
                <i class="material-icons">chat</i> Testimonials
              </a>
              <a href="../sections.html#contactus" class="dropdown-item">
                <i class="material-icons">call</i> Contacts
              </a>
            </div> -->
          </li>
          <li class="dropdown nav-item">
            <a href="/client/cardapio/<?php echo $loja;?>/<?php echo $cliente;?>" class="dropdown nav-link">
              <i class="material-icons">local_cafe</i> Especiais
            </a>
      <!--  <div class="dropdown-menu dropdown-with-icons">
              <a href="../examples/about-us.html" class="dropdown-item">
                <i class="material-icons">account_balance</i> About Us
              </a>
              <a href="../examples/blog-post.html" class="dropdown-item">
                <i class="material-icons">art_track</i> Blog Post
              </a>
              <a href="../examples/blog-posts.html" class="dropdown-item">
                <i class="material-icons">view_quilt</i> Blog Posts
              </a>
              <a href="../examples/contact-us.html" class="dropdown-item">
                <i class="material-icons">location_on</i> Contact Us
              </a>
              <a href="../examples/landing-page.html" class="dropdown-item">
                <i class="material-icons">view_day</i> Landing Page
              </a>
              <a href="../examples/login-page.html" class="dropdown-item">
                <i class="material-icons">fingerprint</i> Login Page
              </a>
              <a href="../examples/pricing.html" class="dropdown-item">
                <i class="material-icons">attach_money</i> Pricing Page
              </a>
              <a href="../examples/shopping-cart.html" class="dropdown-item">
                <i class="material-icons">shopping_basket</i> Shopping Cart
              </a>
              <a href="../examples/ecommerce.html" class="dropdown-item">
                <i class="material-icons">store</i> Ecommerce Page
              </a>
              <a href="../examples/product-page.html" class="dropdown-item">
                <i class="material-icons">shopping_cart</i> Product Page
              </a>
              <a href="../examples/profile-page.html" class="dropdown-item">
                <i class="material-icons">account_circle</i> Profile Page
              </a>
              <a href="../examples/signup-page.html" class="dropdown-item">
                <i class="material-icons">person_add</i> Signup Page
              </a>
              <a href="../examples/error.html" class="dropdown-item">
                <i class="material-icons">error</i> Error Page
              </a>
            </div> -->
          </li>
          <li class="button-container nav-item iframe-extern">
            <a href="/client/history/<?php echo $cliente;?>" class="btn  btn-warning   btn-round btn-block">
              <i class="material-icons">shopping_cart</i>Historico
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/examples/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Meus Pedidos</h2>
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
            <table class="table table-shopping">
              <thead>
                <tr>
                  <th class="text-center"></th>
                  <th>Produto</th>
                  <th class="text-right">Preço</th>
                  <th class="text-center">Quantidade</th>
                  <th class="text-right">Total</th>
                  
                </tr>
              </thead>
              <tbody>
       
       
                <tr ng-repeat="produto in carts_origin">
                  <td>
                    <div class="img-container">
                      <img src="/assets/img/Bejamin Produtos-531.jpg" alt="...">
                    </div>
                  </td>
                  <td class="td-name" style="color:#999">
                    <a href="#jacket"><span ng-repeat="item in produto">
                      {{products_id[item.product]}}
                     </span></a>
                    <br />
                    <small>Pedido</small>
                  </td>
                  <td class="td-number text-right">
                    <small>R$ </small>
                    <span ng-repeat="item in produto">
                      {{item.value}}
                    </span>
                      
                  </td>
                  <td class="td-number">
                    x{{produto.length}}x
                    <div class="btn-group btn-group-sm">
                      <button class="btn btn-round btn-warning" ng-click="carts.$remove(produto)"> <i class="material-icons">remove</i> </button>
                      <button class="btn btn-round btn-warning" ng-click="carts.$add(produto)"> <i class="material-icons">add</i> </button>
                    </div>
                  </td>
                  <td class="td-number">
                    <small>R$</small>.{{nome_linha}}.
                  </td>
                  <td class="td-actions">
                    <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link" ng-click="carts.$remove(produto)">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
               
                <tr>
                  <td colspan="0"></td>
                  <td class="td-total">
                    Total
                  </td>
                  <td colspan="1" class="td-price">
                    <small>R$</small> {{valor_total}}
                  </td>
                  <td colspan="1"></td>
                  <td colspan="2" class="text-right">
                    <button type="button" class="btn btn-warning btn-round" ng-click="encerrar_carrinho()">Fechar Pedido <i class="material-icons">keyboard_arrow_right</i></button>
                    <a href="/client/cardapio/<?php echo $loja;?>/<?php echo $cliente;?>">
                    <button type="button" class="btn btn-success btn-round" >Comprar Mais <i class="material-icons">keyboard_arrow_right</i></button>
                    </a>


                  </td>
                </tr>
                <!-- <tr>
                <td colspan="6"></td>
                <td colspan="2" class="text-right">
                  <button type="button" class="btn btn-info btn-round">Complete Purchase <i class="material-icons">keyboard_arrow_right</i></button>
                </td>
              </tr> -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">      
       <div class="copyright float-center"> 
            <a href="https://www.facebook.com/BenjaminAPadaria/" target="_blank">
            <button class="btn btn-link btn-facebook">
              <i class="fa fa-facebook-square"></i> facebook
            </button>
            </a>
            <a href="https://www.instagram.com/benjaminapadaria/" target="_blank">
            <button class="btn btn-link btn-instagram">
              <i class="fa fa-instagram"></i> instagram
            </button>  
            </a>      
        </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="/assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="/assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="/assets/js/plugins/jquery.sharrre.js" type="text/javascript"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="/assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="/assets/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="/assets/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="/assets/demo/modernizr.js" type="text/javascript"></script>
  <script src="/assets/demo/vertical-nav.js" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="/assets/demo/demo.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="/assets/js/material-kit.min.js?v=2.1.1" type="text/javascript"></script>
  <script>
    $(document).ready(function() {


      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46172202-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();

      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
</body>

</html>