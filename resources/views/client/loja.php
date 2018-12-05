<!DOCTYPE html>
<html lang="en" ng-app="sampleApp">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit PRO by Creative Tim
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
app.controller("SampleCtrl", function($scope, $firebaseArray) {
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




  var ref_carts = firebase.database().ref().child("carts/<?php echo $loja;?>/<?php echo $cliente;?>");
  // create a synchronized array
  $scope.carts = $firebaseArray(ref_carts);
  // add new items to the array
  // the product is automatically added to our Firebase database!
 
  // add new items to the array
  // the product is automatically added to our Firebase database!
  $scope.addCart = function($product, $name , $value) {
    $scope.carts.$add({
      product: $product,
      shop: <?php echo $loja;?>,
      user : <?php echo $cliente;?>,
      name:$name,
      value:$value
    });
  };
  // click on `index.html` above to see $remove() and $save() in action
});
</script>

</head>

<body class="ecommerce-page sidebar-collapse" ng-controller="SampleCtrl"> 
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
          {{users_id[<?php echo $cliente;?>].name}}</a>
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
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">local_cafe</i> Expresso
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../presentation.html" class="dropdown-item">
                <i class="material-icons">layers</i> Presentation
              </a>
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">line_style</i> All Components
              </a>
              <a href="http://demos.creative-tim.com/material-kit-pro/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">local_cafe</i> Da Vitrine pra você
            </a>
            <div class="dropdown-menu dropdown-with-icons">
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
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">local_cafe</i> Especiais
            </a>
            <div class="dropdown-menu dropdown-with-icons">
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
            </div>
          </li> 
          <li class="button-container nav-item iframe-extern">
            <a href="https://www.creative-tim.com/product/material-kit-pro?ref=presentation" target="_blank" class="btn  btn-warning   btn-round btn-block">
              <i class="material-icons">shopping_cart</i> Meus Pedidos
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/croissant-chocolate-aberto.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <div class="brand">
            <img src="/assets/img/clark-street-merc.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
      <div class="container">
        <div class="row">

          <!--Start carouse-->
            <div class="card card-raised card-carousel">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/img/croissant-chocolate-aberto.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/assets/img/croissant-chocolate-aberto.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Somewhere Beyond, United States
                      </h4>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/img/croissant-chocolate-aberto.jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!--End carouse-->        
          <h2 class="section-title">Cardápio</h2>  
          <div class="col-md-4" ng-repeat="product in products">
            <div class="card card-product card-plain">
              <div class="card-header card-header-image">
                <a href="#pablo">
                  <img src="/assets/img/examples/Cafe filtrado-2.jpg" alt="">
                </a>
              </div>
              <div class="card-body text-center">
                <h4 class="card-title">
                  <a href="#pablo">{{product.text}}</a>
                </h4>
                <p class="card-description">The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.</p>
              </div>
              <div class="card-footer">
                <div class="price-container">
                  <span class="price price-new">{{product.value}}</span>
                </div>
                <div class="stats ml-auto">
                  <button type="button" class="btn btn-warning" ng-click="addCart(product.$id,product.text,product.value)">pedir</button>
                  <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-link btn-rose" data-original-title="Saved to Wishlist">
                    <i class="material-icons">favorite</i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-product card-plain">
              <div class="card-header card-header-image">
                <a href="#pablo">
                  <img src="/assets/img/examples/sanduba-bigben.jpg" alt="">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Sanduba BigBen</h4>
                <p class="card-description">The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.</p>
              </div>
              <div class="card-footer">
                <div class="price-container">
                  <span class="price price-old"> €1,430</span>
                  <span class="price price-new">€743</span>
                </div>
                <div class="stats ml-auto">
                  <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-link btn-rose" data-original-title="Saved to Wishlist">
                    <i class="material-icons">favorite</i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-product card-plain">
              <div class="card-header card-header-image">
                <a href="#pablo">
                  <img src="/assets/img/examples/bolo_de_cenoura-1.jpg" alt="">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Bolo de Cenoura</h4>
                <p class="card-description">The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.</p>
              </div>
              <div class="card-footer">
                <div class="price-container">
                  <span class="price price-old"> €1,430</span>
                  <span class="price price-new">€743</span>
                </div>
                <div class="stats ml-auto">
                  <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-link btn-rose" data-original-title="Saved to Wishlist">
                    <i class="material-icons">favorite</i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
    <!-- section -->
    <div class="section">
      <div class="container">
        <h2 class="section-title">Find what you need</h2>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                  <div class="card-header card-header-image">
                    <a href="#">
                      <img src="/assets/img/examples/cesta-benjamin.jpg" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">Polo Ralph Lauren</h4>
                    </a>
                    <p class="description">
                      Impeccably tailored in Italy from lightweight navy wool.
                    </p>
                  </div>
                  <div class="card-footer justify-content-between">
                    <div class="price-container">
                      <span class="price"> € 800</span>
                    </div>
                    <button class="btn btn-rose btn-link btn-fab btn-fab-mini btn-round pull-right" rel="tooltip" title="" data-placement="left" data-original-title="Remove from wishlist">
                      <i class="material-icons">favorite</i>
                    </button>
                  </div>
                </div>
                <!-- end card -->
              </div>
              <div class="col-md-4">
                <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                  <div class="card-header card-header-image">
                    <a href="#">
                      <img src="/assets/img/examples/cesta-benjamin.jpg" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">Wooyoungmi</h4>
                    </a>
                    <p class="description">
                      Dark-grey slub wool, pintucked notch lapels.
                    </p>
                  </div>
                  <div class="card-footer justify-content-between">
                    <div class="price-container">
                      <span class="price">€ 555</span>
                    </div>
                    <button class="btn btn-rose btn-link btn-fab btn-fab-mini btn-round pull-right" rel="tooltip" title="" data-placement="left" data-original-title="Add to wishlist">
                      <i class="material-icons">favorite_border</i>
                    </button>
                  </div>
                </div>
                <!-- end card -->
              </div>
              <div class="col-md-4">
                <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                  <div class="card-header card-header-image">
                    <a href="#">
                      <img src="/assets/img/examples/cesta-benjamin.jpg" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">Tom Ford</h4>
                    </a>
                    <p class="description">
                      Immaculate tailoring is TOM FORD's forte.
                    </p>
                  </div>
                  <div class="card-footer justify-content-between">
                    <div class="price-container">
                      <span class="price"> € 879</span>
                    </div>
                    <button class="btn btn-rose btn-link btn-fab btn-fab-mini btn-round pull-right" rel="tooltip" title="" data-placement="left" data-original-title="Add to wishlist">
                      <i class="material-icons">favorite_border</i>
                    </button>
                  </div>
                </div>
                <!-- end card -->
              </div>
              <div class="col-md-4">
                <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                  <div class="card-header card-header-image">
                    <a href="#">
                      <img src="/assets/img/examples/cesta-benjamin.jpg" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">Thom Sweeney</h4>
                    </a>
                    <p class="description">
                      It's made from lightweight grey wool woven.
                    </p>
                  </div>
                  <div class="card-footer justify-content-between">
                    <div class="price-container">
                      <span class="price"> € 680</span>
                    </div>
                    <button class="btn btn-rose btn-link btn-fab btn-fab-mini btn-round pull-right" rel="tooltip" title="" data-placement="left" data-original-title="Add to wishlist">
                      <i class="material-icons">favorite_border</i>
                    </button>
                  </div>
                </div>
                <!-- end card -->
              </div>
              <div class="col-md-4">
                <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                  <div class="card-header card-header-image">
                    <a href="#">
                      <img src="/assets/img/examples/cesta-benjamin.jpg" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">Kingsman</h4>
                    </a>
                    <p class="description">
                      Crafted from khaki cotton and fully canvassed.
                    </p>
                  </div>
                  <div class="card-footer justify-content-between">
                    <div class="price-container">
                      <span class="price"> € 725</span>
                    </div>
                    <button class="btn btn-rose btn-link btn-fab btn-fab-mini btn-round pull-right" rel="tooltip" title="" data-placement="left" data-original-title="Remove from wishlist">
                      <i class="material-icons">favorite</i>
                    </button>
                  </div>
                </div>
                <!-- end card -->
              </div>
              <div class="col-md-4">
                <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                  <div class="card-header card-header-image">
                    <a href="#">
                      <img src="/assets/img/examples/cesta-benjamin.jpg" alt="...">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">Boglioli</h4>
                    </a>
                    <p class="description">
                      Masterfully crafted in Northern Italy.
                    </p>
                  </div>
                  <div class="card-footer justify-content-between">
                    <div class="price-container">
                      <span class="price">€ 699</span>
                    </div>
                    <button class="btn btn-rose btn-link btn-fab btn-fab-mini btn-round pull-right" rel="tooltip" title="" data-placement="left" data-original-title="Add to wishlist">
                      <i class="material-icons">favorite_border</i>
                    </button>
                  </div>
                </div>
                <!-- end card -->
              </div>
              <div class="col-md-3 ml-auto mr-auto">
                <button rel="tooltip" class="btn btn-rose btn-round" data-original-title="" title="">Load more...</button>
              </div>
            </div>
          </div>
        </div>
        <br>       
      </div>
    </div>
    <!-- section -->
  </div>
  <!-- end-main-raised -->
  <div class="section section-blog">
    <div class="container">
      <h2 class="section-title">Latest Articles</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-header card-header-image">
              <a href="#pablo">
                <img src="/assets/img/dg6.jpg" alt="">
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-rose">Trends</h6>
              <h4 class="card-title">
                <a href="#pablo">Learn how to wear your scarf with a floral print shirt</a>
              </h4>
              <p class="card-description">
                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-header card-header-image">
              <a href="#pablo">
                <img src="/assets/img/dg10.jpg" alt="">
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-rose">Fashion week</h6>
              <h4 class="card-title">
                <a href="#pablo">Katy Perry was wearing a Dolce &amp; Gabanna arc dress</a>
              </h4>
              <p class="card-description">
                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-header card-header-image">
              <a href="#pablo">
                <img src="/assets/img/dg9.jpg" alt="">
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-rose">Fashion week</h6>
              <h4 class="card-title">
                <a href="#pablo">Check the latest fashion events and which are the trends</a>
              </h4>
              <p class="card-description">
                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section -->
  <div class="subscribe-line subscribe-line-image" data-parallax="true" style="background-image: url(&apos;../assets/img/examples/ecommerce-header.jpg&apos;);">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="text-center">
            <h3 class="title">Subscribe to our Newsletter</h3>
            <p class="description">
              Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
            </p>
          </div>
          <div class="card card-raised card-form-horizontal">
            <div class="card-body">
              <form method="" action="">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">mail</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" placeholder="Your Email...">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <button type="button" class="btn btn-rose btn-block">Subscribe</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
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
  <script>
    $(document).ready(function() {
      var slider2 = document.getElementById('sliderRefine');

      noUiSlider.create(slider2, {
        start: [101, 790],
        connect: true,
        range: {
          'min': [30],
          'max': [900]
        }
      });

      var limitFieldMin = document.getElementById('price-left');
      var limitFieldMax = document.getElementById('price-right');

      slider2.noUiSlider.on('update', function(values, handle) {
        if (handle) {
          limitFieldMax.innerHTML = $('#price-right').data('currency') + Math.round(values[handle]);
        } else {
          limitFieldMin.innerHTML = $('#price-left').data('currency') + Math.round(values[handle]);
        }
      });
    });
  </script>
</body>

</html>