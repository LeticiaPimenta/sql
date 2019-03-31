<!DOCTYPE html>
<html lang="en" ng-app="sampleApp">
<?php 
require "../resources/views/benjamin/head.php";
?>
   <body class="ecommerce-page sidebar-collapse" ng-controller="SampleCtrl">
      <!-- Extra details for Live View on GitHub Pages -->
      <!-- Google Tag Manager (noscript) -->
      <noscript>
         <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
      </noscript>
      <!-- End Google Tag Manager (noscript) -->

      	<?php 
      require "../resources/views/benjamin/".$navbar.".php";
			require "../resources/views/benjamin/".$partial.".php";
		  ?>
      <!-- end-main-raised -->
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
      <!-- section -->
      
      <!-- modal -->
      <div class="modal fade" id="smallAlertModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
         <div class="modal-dialog modal-small" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" ng-click="cancelarPedido()" aria-hidden="true"><i class="material-icons">clear</i></button>
               </div>
               <div class="modal-body text-center">
                  <h5>Seu pedido foi aceito. Pague em Meus Pedidos! </h5>
               </div>
               <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-link" data-dismiss="modal">
                     Continuar
                     <div class="ripple-container">
                        <div class="ripple-decorator ripple-on ripple-out" style="left: 57.5px; top: 22.65px; background-color: rgb(153, 153, 153); transform: scale(12.875);">
                        </div>
                     </div>
                  </button>
                  <button type="button" class="btn btn-danger btn-link" ng-click="cancelarPedido()" data-dismiss="modal">
                     Desfazer
                     <div class="ripple-container"></div>
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- end modal -->
      
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