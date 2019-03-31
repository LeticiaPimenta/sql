   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
      <link rel="icon" type="image/png" href="/assets/img/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>
         .::Padaria Benjamin :: Sp @ Brasil ::.
      </title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
      <!-- Extra details for Live View on GitHub Pages -->
      <!-- Canonical SEO -->
      <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
      <!--  Social tags      -->
      <meta name="keywords" content="Aplicativo Benjamin a Padaria compre os melhores produtos da loja da forma mais pratica ou peça para levar aonde estiver em São Paulo">
      <meta name="description" content="Peça agora pelo app">
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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/angular-toastr@2/dist/angular-toastr.css">
      <!--     Fonts and icons     -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
      <!-- CSS Files -->
      <link href="/assets/css/material-kit.min.css?v=2.1.1" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="/assets/demo/demo.css" rel="stylesheet" />
      <link href="/assets/demo/vertical-nav.css" rel="stylesheet" />
      <link rel="manifest" href="/manifest.json">
      <!-- Google Tag Manager -->
      <script type="text/javascript">
        
        var nome_importado = "Benjamin";

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
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/angular-toastr@2/dist/angular-toastr.tpls.js"></script>
      <!-- Firebase -->
      <script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
      <!-- AngularFire -->
      <script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
      <!-- End Google Tag Manager -->
      <script type="text/javascript">
        
        angular.module('ngClickCopy', [])
.service('ngCopy', ['$window', function ($window) {
  var body = angular.element($window.document.body);
  var textarea = angular.element('<textarea/>');
  textarea.css({
    position: 'fixed',
    opacity: '0'
  });

  return function (toCopy) {
    textarea.val(toCopy);
    body.append(textarea);
    textarea[0].select();

    try {
      var successful = document.execCommand('copy');
      if (!successful) throw successful;
    } catch (err) {
      window.prompt("Copy to clipboard: Ctrl+C, Enter", toCopy);
    }

    textarea.remove();
  }
}])
.directive('ngClickCopy', ['ngCopy', function (ngCopy) {
  return {
    restrict: 'A',
    link: function (scope, element, attrs) {
      element.bind('click', function (e) {
        ngCopy(attrs.ngClickCopy);
      });
    }
  }
}])
      </script>
    
    <?php 
	require "../resources/views/benjamin/js/js.php";
	?>
   </head>