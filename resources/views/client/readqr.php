
<!DOCTYPE html>
<html lang="en" ng-app="sampleApp">

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

<body class="blog-post sidebar-collapse"  ng-controller="SampleCtrl">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <img src="../assets/img/benjamin.png" style="width: 20%; height: auto;">        
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/panetone.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">Faça seu login com o facebook </h1>
          <br>
          <a href="#" ng-click="login_facebook()" class="btn btn-social btn-fill btn-facebook">
            <i class="fa fa-facebook-square"></i>   Logar com o Facebook
          </a>
          <div class="ripple-container"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div id="cards" class="cd-section">
      
      <div class="section-white">
       
        <!--     *********    END BLOG CARDS      *********      -->
        <!--     *********    PROFILE CARDS     *********      -->
        <div class="cards">
          <div class="container">
            <div class="row">
      
              <div class="col-md-12">
                <div class="card card-profile card-plain">
                  <div class="card-avatar">
                    <a href="#pablo">
                      <img class="img" src="./assets/img/faces/marc.jpg">
                      <img class="img" ng-src="{{foto}}">
                    </a>
                  </div>
                  <div class="card-body ">
                    <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                    <h4 class="card-title">Alec Thompson</h4>
                    <p class="card-description">
                      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="#pablo" class="btn btn-info btn-round">Follow</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END PROFILE CARDS      *********      -->
      </div>
    </div>
  <footer class="footer">
    <div class="container">
<!--      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav> -->
      <div class="copyright float-right"> 
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
   /* $(document).ready(function() {


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


    });*/

  </script>
  <script type="text/javascript">
  
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker
             .register('service-worker.js')
             .then(function() { console.log('Service Worker Registered'); });
  }


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
  	var app = angular.module("sampleApp", ["firebase" ]);
    app.controller("SampleCtrl", function($scope, $firebaseArray){

      $scope.logado = false;
      $scope.logado = localStorage.getItem("logado");

      if(!$scope.logado){
       
        alert("puto");
      }

       var usuario = localStorage.getItem("usuario");
       var foto =   localStorage.getItem("foto");
       $scope.foto =   localStorage.getItem("foto");
       var token =  localStorage.getItem("access_token");
       console.log(usuario);
	});
</script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
</body>

</html>