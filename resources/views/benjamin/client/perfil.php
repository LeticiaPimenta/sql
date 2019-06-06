<?php 
/*$user_token="6f7276a7c8ce4f5ca0950eb0a97cc470";
$url = 'https://benjamin-a-padaria.firebaseio.com/users/'.$user_token.'/retirar.json';
        $retirar = file_get_contents($url);
*/
?>
<!DOCTYPE html>
<html lang="en" ng-app="app">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>.::Benjamin a Padaria :: Sp @brasil ::.</title>
      <!-- Plugins CSS -->
      <link href="css/plugins/plugins.css" rel="stylesheet">
      <!--slider revolution-->
      <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/angular-toastr@2/dist/angular-toastr.css">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/style-restaurant.css" rel="stylesheet">
      <link href="css/benjamin-restaurant.css" rel="stylesheet">
      <script src="js/angular.min.js"></script>
      <script src="js/crypto.js"></script>
      <script type="text/javascript">
         var nome_importado = "Benjamin";
         var endereco_site = "https://benjamin-a-padaria.herokuapp.com/";
      </script>
      <script type="text/javascript">

         var produtos = new Array();
         produtos[0] = {
          "CODE":0,
          "VALUE":10.00,
          "NAME" : "CROISS",
          "PRESENTATION_NAME" : "Croissant"   
          };
          produtos[1] = {
          "CODE":1,
          "VALUE":10.00,
          "NAME" : "ACAI COM BANAN",
          "PRESENTATION_NAME" : "Açai com bananas"   
          };
          produtos[2] = {
          "CODE":2,
          "VALUE":14.00,
          "NAME" : "SANDUI COM QUEI",
          "PRESENTATION_NAME" : "Sanduiche natural com queijo"   
          };
          produtos[3] = {
          "CODE":3,
          "VALUE":17.00,
          "NAME" : "BEN ALMOÇO",
          "PRESENTATION_NAME" : "Ben Almoço do dia"   
          };
          produtos[4] = {
          "CODE":4,
          "VALUE":6.49,
          "NAME" : "PASTEL DE NADA",
          "PRESENTATION_NAME" : "Pastelzinho de Belem"   
          };
          
          produtos[5] = {
          "CODE":5,
          "VALUE":14.90,
          "NAME" : "BIG BEN",
          "PRESENTATION_NAME" : "Big Ben"   
          };
          produtos[6] = {
          "CODE":6,
          "VALUE":2.99,
          "NAME" : "MINI CROISS CHOC",
          "PRESENTATION_NAME" : "Mini Croissant Chocolate"   
          };
          
          produtos[7] = {
          "CODE":7,
          "VALUE":11.00,
          "NAME" : "ACAI COM MEL",
          "PRESENTATION_NAME" : "Açai com mel"   
          };
          
          produtos[8] = {
          "CODE":8,
          "VALUE":14.00,
          "NAME" : "SANDUI COM QUEI e PRES",
          "PRESENTATION_NAME" : "Sanduiche natural com queijo e presunto"   
          };
         
          produtos[9] = {
          "CODE":9,
          "VALUE":14.90,
          "NAME" : "SANDUI COM QUEI e PRES e TOM",
          "PRESENTATION_NAME" : "Sanduiche natural com queijo , presunto e tomate"   
          };
          
          produtos[10] = {
          "CODE":10,
          "VALUE":14.90,
          "NAME" : "SANDUI COM QUEI e PRES e TOM e ALF",
          "PRESENTATION_NAME" : "Sanduiche natural com queijo , presunto , tomate e tomate"   
          };
          
         
          var catalogo = new Array();
          catalogo[0] = [1,2,3,4,6];
          catalogo[1] = [1,2];
          
          var campanhas = []
          campanhas[0] = {
          "CODE":0,
          "NAME" : "CROISSANT",
          "DESCRIPTION" : "nossos Croissants" ,
          "PRODUCTS" : [1,7]
          
          };
          campanhas[1] = {
          "CODE":1,
          "NAME" : "AÇAIS",
          "DESCRIPTION" : "nossos açais" ,
          "PRODUCTS" : [1,7]
          
          };
          
          campanhas[2] = {
          "CODE":2,
          "NAME" : "SANDUICHE",
          "DESCRIPTION" : "nossos sanduiches" ,
          "PRODUCTS" : [2,8 , 9, 10]
          
          };
          
          
          var campanhas_lojas = [];
          campanhas_lojas[0] = [1,2];
          campanhas_lojas[2] = [1];
          campanhas_lojas[3] = [2];
          
          function getLocalData(name){
          return localStorage.getItem(name)
          }
          
          function setLocalData(name,value){
          if (value!=null)
          localStorage.setItem(name,value);
          else
          localStorage.removeItem(name);
          }
          
          
          var cartObj = null; // global pointer to cart
          var cartCI = -1;
          var str_botoes = '';
          
          
          function cart_initCart() {
          cartObj = new Array();
          cartCI = 0;
          // Check in browser memory if there are a saved cart
          if (getLocalData("BENJAMIN_USERCART")!=null){
          // if previoys cart is present load it
          cartCI = getLocalData("BENJAMIN_USERCART_CI");
          cartObj = JSON.parse(getLocalData("BENJAMIN_USERCART"));
          user_vault = JSON.parse(getLocalData("BENJAMIN_USER_VAULT"));
          console.log(cartObj);
          }else{
          console.log("\t[CART-BENJAMIN] Carrinho esta vazio!");
          }
          }
          
          
          
          function cart_removeCartRow_v2(rowid){
          cartObj = JSON.parse(getLocalData("BENJAMIN_USERCART"));
          cartObj[rowid]=null; // sign row as invalid
          cartObj = cartObj.filter(function(x) { return x !== null }); 
          setLocalData("BENJAMIN_USERCART",JSON.stringify(cartObj));
          }
          
          
          
          angular.module('app', ["toastr"])
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
          .filter('trustAsHTML', ['$sce', function($sce){
          return function(text) {
              return $sce.trustAsHtml(text);
          };
          }])
          .run(function($window, $rootScope) {
                   $rootScope.online = navigator.onLine;
                   $window.addEventListener("offline", function () {
                     $rootScope.$apply(function() {
                       $rootScope.online = false;
                     });
                   }, false);
                   $window.addEventListener("online", function () {
                     $rootScope.$apply(function() {
                       $rootScope.online = true;
                     });
                   }, false);
             })
          .controller('CartController', function($sce,toastr, $http) {
              var cart = this;
              cart.produtos = produtos;
              cart.catalogo = catalogo;
              cart.campanhas = campanhas;
              cart.campanhas_lojas = campanhas_lojas;
              cart.carrinho = JSON.parse(getLocalData("BENJAMIN_USERCART"));
              cart.cart_ci = JSON.parse(getLocalData("BENJAMIN_USERCART_CI"));
              cart.user_vault = JSON.parse(getLocalData("BENJAMIN_USER_VAULT"));
              cart.email_cliente = getLocalData("BENJAMIN_USERCART_EMAIL");
              cart.logged_user_friends = JSON.parse(getLocalData("BENJAMIN_USERCART_LOGGED_USER_FRIENDS"));
              cart.logged_user = JSON.parse(getLocalData("BENJAMIN_USERCART_LOGGED_USER"));
              $http.get("https://benjamin-a-padaria.firebaseio.com/users/"+Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"))+"/retirar.json").then(function(response){
                cart.itens_vault = response.data ;
              console.log(cart.itens_vault);
             })
              

              $http.get("benjamin-a-padaria-unidades.json").then(function(response){
                cart.unidades = response.data;
             })
              
              function getQueryParams(qs) {
                //alert(qs);
                if (qs != "") {
                  qs = qs.replace("?","");
                  qs = qs.split('=');
                  console.log(qs);
                  if(qs[0]=="usuario"){
                    if(cart.logged_user){
                   //  if(cart.email_cliente)
              var hash_email_cliente = Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"));
                     

                      $http.get('/conectar/'+qs[1]+'/'+hash_email_cliente).then(function(data){
                        cart.nome_indicado = data.data.name;
                      });
                      jQuery('#modal-conectar').modal('show');

                    }else{
                     // alert("vai indicar");
                      
                        cart.hash_indicado = qs[1];
                       jQuery('#modal-registrar-indicado').modal('show');
                    }
                  }
                  return qs;
                }else
                  return "";
                
              }

        // query = getQueryParams(document.location.search);
        //alert(query);

         getQueryParams(document.location.search);

              

              if(cart.email_cliente)
              cart.hash_email_cliente = Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"));
              
              function addItemInCart(code){
                var newRow = new Object();
                    newRow["CODE"] = code;
                    newRow["PRESENTATION_NAME"] = produtos[code].PRESENTATION_NAME;
                    newRow["VALUE"] = produtos[code].VALUE;
                    
                    console.log(newRow);
              
                    if (cartObj==null){
                        cartObj = [];
                    }
              
                    console.log(cartObj);
                    cartObj[cartCI++] = newRow;
                    console.log(cartObj);
              
                    setLocalData("BENJAMIN_USERCART",JSON.stringify(cartObj));
                    setLocalData("BENJAMIN_USERCART_CI",cartCI);
                 toastr.success('Seu Produto Esta no Seu Carrinho!', 'Produto Adicionado!');
         
              }


              
              function carrinho_local() {
                cartObj = JSON.parse(getLocalData("BENJAMIN_USERCART"));
                console.log(cartObj);
              
                var carrinho = new Array();
                var grand_total = 0;
                for (var xr in cartObj){
                    if (cartObj[xr]==null) continue;
              
                    grand_total+=parseFloat(cartObj[xr].VALUE);
                }
              
                return grand_total;
              }
              
              cart.change_vouchers = function() {
              console.log(cart.total_vouchers);
              setLocalData("BENJAMIN_TOTAL_VOUCHERS",cart.total_vouchers);
              };
              
              cart.adicionar = function(id) {
                addItemInCart(id);
                cart.total = carrinho_local();
                cart.carrinho = JSON.parse(getLocalData("BENJAMIN_USERCART")); 
              };
              
              cart.removeItem = function(id){
                cart_removeCartRow_v2(id);
                cart.total = carrinho_local();
                cart.carrinho = JSON.parse(getLocalData("BENJAMIN_USERCART"));
              }
              
              cart.pega_email = function(){
              //var email = prompt("Qual é o seu email?");
              var email = jQuery("#email").val();
              
              //if (email.toLowerCase() == "escorpião") {
                var hash = Crypto.MD5(email);
         
                jQuery.post('/carregar_dados', {'email':email}).
                done(function(data){
                 var dados = JSON.parse(data);
                 var usuario = JSON.parse(dados.usuario);
                 if(dados.amigos)
                  usuario['amigos'] = dados.amigos;
                 console.log(usuario);
                 cart.logged_user = usuario;
                  if(usuario.name){
                     //console.log(dados.name);
                     setLocalData("BENJAMIN_USERCART_LOGGED_USER",dados.usuario);
                     if(dados.amigos)
                      setLocalData("BENJAMIN_USERCART_LOGGED_USER_FRIENDS",JSON.stringify(dados.amigos));
                    
                     toastr.success('Seus dados foram alterados!', 'Dados foram salvos!');
                      setLocalData("BENJAMIN_USERCART_EMAIL",email);
                var hash_email_cliente = Crypto.MD5(email);
                jQuery('#qrcode-profile').qrcode({width: 100,height: 100,text:endereco_site+"pocket.html?usuario="+hash_email_cliente });

                     cart.email_cliente = email;
                     if(dados.amigos)
                      cart.logged_user_friends = dados.amigos;

                     cart.hash_email_cliente = hash;
                     jQuery('#popup-login').modal('hide');
                   
         
                    // jQuery('#popup-login').hide();
                 }else{
                     toastr.error('Seus dados nao foram alterados!', 'Dados nao foram salvos!');
                     
                 }
         
                })
                //alert(email);
                //alert(hash);
              //  }
         
              //alert("vai validar "+email+hash);
             
              }
         
              cart.modal_search = function(){
               console.log(cart.filtro);
               if(cart.filtro){
                 $('#modal-search').modal('show');
               }else{
                 $('#modal-search').modal('hide');
               }
         
              }
         
              cart.mostra_registrar = function () {
                  // body...
                  jQuery("#form-login").slideUp();
                  jQuery("#form-register").slideDown();
              }

              cart.modal_transferir = function(amigo){
                console.log(amigo);
                cart.amigo_selecionado = amigo;
                $('#modal_transferir').modal('show');
              }

              cart.modal_presentear = function(amigo){
                console.log(amigo);
                cart.amigo_selecionado = amigo;
                $('#modal_presentear').modal('show');
              }
         
             cart.getFormData = function ($form){
                 var unindexed_array = $form.serializeArray();
                 var indexed_array = {};
         
                 $.map(unindexed_array, function(n, i){
                     indexed_array[n['name']] = n['value'];
                 });
         
                 return indexed_array;
             }

              cart.solicitar_itens = function(id){
                console.log(cart);
                $("#listagem_retirar").slideUp();

                //$("#preloader_retirar").slideDown();


              //  $(".solicitar").slideUp();
                var user_vault_key = getLocalData("BENJAMIN_USER_VAULT_KEY");
                $.post("/compra/retirar_perfil", {"itens":cart.itens_vault,"vault":cart.user_vault,"loja":cart.loja, "vault_key":user_vault_key, "user_email":cart.email_cliente}).done(function(response){
                    console.log(response);
                    resposta = JSON.parse(response);
          

                    
                  //  $(".solicitado").slideDown();
                    setLocalData("BENJAMIN_USER_VAULT", null);
                    setLocalData("BENJAMIN_USER_VAULT_KEY", null);
                    setLocalData("BENJAMIN_USERCART", null);

                $("#preloader_retirar").slideUp();
                $("#listagem_retirar").slideDown();
                $('#modal-solicitar').modal('hide');

               // window.location.replace("/pocket.html");
                }) 


             }
         
            cart.tranferir_indicado = function($user_token){
            var valor_transferencia = cart.total_transferencia;
            var client_token = Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"));
            //alert(valor_transferencia);
            var req = {
              method: 'POST',
              url: '/fazertransferencia',
              headers: {
               'Content-Type': 'text/'
              },
              data: {"loja":1, "client_token": client_token , "user_token": $user_token , "valor_transferencia" : valor_transferencia}
            }

          $http(req).then(function(response){
            console.log(response);
            cart.responsa_transferencia = response.data ;
            cart.total_vouchers = response.data.wallet;
            cart.logged_user.wallet = response.data.wallet;
            setLocalData("BENJAMIN_USERCART_LOGGED_USER",JSON.stringify(cart.logged_user));


          }, function(response){
            console.log(response);
          });
        }
         

        /* cart.solicitar = function () {
              console.log(cart.itens_vault[0]);
              console.log(cart.itens_vault[0].length);
             //var pool_itens = [];
              for (var i = 0; i < cart.itens_vault.length; i++) {
               /// if(cart.itens_vault[i].done){
               //   pool_itens.push(cart.itens_vault[i]);
              // }
                console.log(cart.itens_vault[i].products);
                console.log(cart.itens_vault[i]);
                
              }
              //cart.itens_vault = pool_itens;
          }*/

          cart.troca_presente = function(){
            var user_email = Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"))
            $http.post("/presentear_amigo",{"user_email": user_email ,"amigo_selecionado":cart.amigo_selecionado.user_token,"presente_selecionado":cart.selecionado }).then(function (response) {
                 // body...
                 console.log(response);
             }, function (response) {
                 console.log(response);
                 // body...
             });
          }

         
              cart.registrar_usuario = function(){
                 //var usuario = jQuery("#formulario-registro").serializeArray();
                 var $form = $("#form_data");
                 var usuario ={"name":$("#name").val(),"parent":$("#hash_indicado").val(), "email":$("#email_registro").val(), "password":$("#password").val()};
                 $http.post("/registrar_usuario",{"usuario":usuario}).then(function (response) {
                     // body...
                     console.log(response);
                 }, function (response) {
                     console.log(response);
                     // body...
                 });
              }
              
              cart.total = carrinho_local();
              cart_initCart (); 
          
          });
          
          
          
          /*if ('serviceWorker' in navigator) {
             navigator.serviceWorker.register('offline-service-worker.js');
          }*/
      </script>
   </head>
   <body data-spy="scroll" data-offset="71" data-target="#navbarRestaurant" ng-controller="CartController as cart">
      <div id="preloader">
         <div id="preloader-inner"></div>
      </div>
      <!--/preloader-->
      <header class="header-main header-transparent">
         <!-- Pushy Menu -->
         <aside class="pushy pushy-right">
            <div class="cart-content">
               <div class="clearfix">
                  <a href="javascript:void(0)" class="pushy-link text-white-gray">X</a>
               </div>
               <hr>
               <div class="center-title" ng-show="!cart.email_cliente">
                  <p>Você precisa logar para pagar seu carrinho. <a ng-click="cart.pega_email()">Logar.</a></p>
               </div>
               <div class="center-title" ng-show="cart.email_cliente">
                  <p>Deseja alterar o email  {{cart.email_cliente}} <a ng-click="cart.pega_email()">alterar o email.</a></p>
               </div>
               <hr>
               <ul class="list-unstyled">
                  <li class="clearfix" ng-repeat="produto in cart.carrinho track by $index" ng-show="produto.PRESENTATION_NAME">
                     <a href="" class="float-left">
                     <img src="img/foto.jpg" class="img-fluid" alt="" width="60">
                     </a>
                     <div class="oHidden">
                        <span class="close" ng-click="cart.removeItem($index)"><i class="ti-close"></i></span>
                        <h4><a href="#">{{produto.PRESENTATION_NAME}}</a></h4>
                        <p class="text-white-gray"><strong>{{produto.VALUE}}</strong></p>
                     </div>
                  </li>
                  <!--/cart item-->
                  <hr>
                  <li>
                     <div class="center-text">
                        <p class="text-white-gray"> Total : {{cart.total |currency:"R$" }}</p>
                     </div>
                     <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                        <!--Tipo do botão-->
                        <input type="hidden" name="cmd" value="_xclick" />
                        <!--Vendedor e URL de retorno, cancelamento e notificação-->
                        <input type="hidden" name="business" value="contasapagar-facilitator@benjaminapadaria.com.br" />
                        <input type="hidden" name="return" value="https://benjamin-a-padaria.herokuapp.com/compra/retorno/{{cart.hash_email_cliente}}" />
                        <input type="hidden" name="cancel" value="https://benjamin-a-padaria.herokuapp.com/compra/cancelamento/{{cart.hash_email_cliente}}" />
                        <input type="hidden" name="notify_url" value="https://benjamin-a-padaria.herokuapp.com/compra/notificacao" />
                        <!--Internacionalização e localização da página de pagamento-->
                        <input type="hidden" name="charset" value="utf-8" />
                        <input type="hidden" name="lc" value="BR" />
                        <input type="hidden" name="country_code" value="BR" />
                        <input type="hidden" name="currency_code" value="BRL" />
                        <input type="hidden" name="tx" value="{{cart.hash_email_cliente}}">
                        <input type="hidden" name="payer_id" value="{{cart.hash_email_cliente}}">
                        <input type="hidden" name="invoice" value="{{cart.hash_email_cliente}}@{{cart.cart_ci}}">
                        <input type="hidden" name="custom" value="{{cart.hash_email_cliente}}">
                        <input type="hidden" name="at" value="{{cart.hash_email_cliente}}">
                        <!--Informações sobre o produto e seu valor-->
                        <input type="hidden" name="amount" value="{{cart.total}}" />
                        <input type="hidden" name="item_name" value="Servico" />
                        <input type="hidden" name="quantity" value="1" />
                        <input type="hidden" name="item_number_1" value="bolinho" />
                        <input type="hidden" name="item_number_2" value="Sonho" />
                        <!--Botão para submissão do formulário-->
                        <input type="image" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_buynowCC_LG.gif" border="0"/>
                     </form>
                  </li>
               </ul>
            </div>
         </aside>
         <!-- Site Overlay -->
         <div class="site-overlay"></div>
         <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <div class="search-inline">
               <form>
                  <input type="text" class="form-control" placeholder="Digite sua busca" ng-model="cart.filtro" ng-blur="cart.modal_search()">
                  <button type="submit"><i class="ti-search"></i></button>
                  <a href="javascript:void(0)" class="search-close"><i class="ti-close"></i></a>
               </form>
            </div>
            <!--/search form-->          
            <div class="container">
               <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarRestaurant" aria-controls="navbarRestaurant" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <a class="navbar-brand" href="#">
               <img class='logo logo-light' src="images/resto/benjamin.png" alt="">
               </a>
               <div  id="navbarRestaurant" class="navbar-collapse collapse">
                  <ul class="navbar-nav  ml-auto">
                     <li class="nav-item"><a data-scroll class="nav-link active" href="#home"> Home</a></li>
                     <li class="nav-item"><a data-scroll class="nav-link" href="/qrunidade.html"> QR Code</a></li>
                     <li class="nav-item"><a data-scroll class="nav-link" href="#menu"> Nossos Cardápios</a></li>
                     <li class="nav-item"><a data-scroll class="nav-link" href="#chefs"> Carrinho</a></li>
                     <li class="nav-item"><a data-scroll class="nav-link" href=""> Bencréditos</a></li>
                     <li class="nav-item"  ng-show="!cart.email_cliente"><a data-scroll class="nav-link btn si-orange btn-primary popup-content" href="#popup-login"> Logar</a></li>
                     <li class="nav-item"  ng-show="cart.email_cliente"><a href="" data-toggle="modal" data-target="#myModal">{{online}}
                        <img class="img-profile" src="images/resto/profile.jpg">
                        </a>
                     </li>
                     <li class="nav-item"  ng-show="cart.email_cliente && online"><a href="/perfil">{{online}}
                        <img class="img-profile" src="images/resto/profile.jpg">
                        </a>
                     </li> 
                  </ul>
               </div>
               <div class="navbar-right-elements">
                  <ul class="list-inline">
                     <li class="list-inline-item"><a href="javascript:void(0)" class="search-open"><i class="ti-search"></i></a></li>
                     <li class="list-inline-item"><a href="javascript:void(0)" class=" menu-btn"><i class="ti-shopping-cart"></i> <span class="badge badge-default btn-primary">{{cart.carrinho.length}}</span></a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <!--/header-->

      <!--end slider revolution-->
      <div class="bg-white" id="about">
         <div class="container pt90 pb60" ng-include="'/perfil.html'">
            
         </div>
      </div>

      <footer class='footer pt50 pb20'>
         <div class='container'>
            <div class='row'>
               <div class='col-lg-4 mb30'>
                  <span class='clearfix'>
                  <a href="https://www.facebook.com/BenjaminAPadaria/" class="social-icon-sm si-dark si-dark-round si-facebook">
                  <i class="fa fa-facebook"></i>
                  <i class="fa fa-facebook"></i>
                  </a>
                  <a href="https://www.instagram.com/benjaminapadaria/" class="social-icon-sm si-dark si-dark-round si-instagram">
                  <i class="fa fa-instagram"></i>
                  <i class="fa fa-instagram"></i>
                  </a> 
                  </span>
               </div>
            </div>
         </div>
      </footer>

<div class="modal fade bd-example-modal-sm" id="modal-transferir" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Transferir !</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!--modal-->





                <div class="modal fade bd-example-modal-sm" id="modal-conectar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">

                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Seu amigo {{cart.nome_indicado}} vai estar na sua rede !</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!--modal-->
      <div class="modal fade" id="modal-search" tabindex="-1" role="dialog" aria-labelledby="modal-solicitarTitle" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <form >
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="modal-solicitarTitle">Busca de produtos</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="tab-content">
                        <div ng-repeat="campanha_lojas in cart.campanhas_lojas[0]" role="tabpanel" class="tab-pane active show fade" id="campanha_{{cart.campanhas[campanha_lojas].CODE}}">
                           <div class='row'>
                              <div class='col-md-6 mb20'>
                                 <article class="media" ng-repeat="produto_code in cart.campanhas[campanha_lojas].PRODUCTS">
                                    <!--Content -->
                                    <div class="media-body align-self-center g-pl-10">
                                       <div class="d-flex justify-content-between mb10">
                                          <h3 class="align-self-center text-capitalize mb0 h6  font400">{{cart.produtos[produto_code].PRESENTATION_NAME}}</h3>
                                          <div class="align-self-center">
                                             <strong class=" font700">
                                             <button class="btn-icon-sm float-right si-orange si-dark-round si-round" ng-click=cart.adicionar(produto_code)><a class="" href=""><i class="ti-plus"></i></a></button> {{cart.produtos[produto_code].VALUE|currency:"R$"}}</strong>
                                          </div>
                                       </div>
                                    </div>
                                    <!--/Content -->
                                 </article>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="modal fade" id="modal-registrar-indicado" tabindex="-1" role="dialog" aria-labelledby="modal-solicitarTitle" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <form >
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" >registrar</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="card-body">
               <div class="row">
                  <div class="col-md-12 mr-auto">
                     <form class="form"  >
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">face</i>
                                 </span>
                              </div>
                              <input type="text" name="hash_indicado" id="hash_indicado" value="{{cart.hash_indicado}}">..
                              <input type="text"  name="name" class="form-control" placeholder="Nome completo..." ng-model="registrar.name">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">notifications</i>
                                 </span>
                              </div>
                              <input type="text" class="form-control" name="telefone" placeholder="Telefone..." >
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">edit</i>
                                 </span>
                              </div>
                              <input type="text" class="form-control" placeholder="CPF...">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">mail</i>
                                 </span>
                              </div>
                              <input type="text"  class="form-control" name="email"  placeholder="Email..." ng-model="registrar.email">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">lock_outline</i>
                                 </span>
                              </div>
                              <input type="password"  placeholder="Senha..." class="form-control" ng-model="registrar.password">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">lock</i>
                                 </span>
                              </div>
                              <input type="password" placeholder="Confirmar senha..." class="form-control">
                           </div>
                        </div>
                        <div class="form-check">
                           <label class="form-check-label">
                           <input class="form-check-input" type="checkbox" value="aceito" checked="false">
                           <span class="form-check-sign">
                           <span class="check"></span>
                           </span>
                           Eu aceito os
                           <a href="/termos">termos, condições e politica de privacidade</a>.
                           </label>
                        </div>
                        <div class="text-center">
                           <div  class="btn btn-primary btn-round" ng-click="cart.registrar_usuario()">Registrar</div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div  id="popup-login" class="mfp-hide popup-content-area white-popup">
         <div id="form-login">
            <h4>Que Bom que voltou!</h4>
            <hr>
            <form>
               <div class="form-group">
                  <a href="#" class="float-right text-info">Esquecer</a>
                  <label for="email">Username</label>
                  <input type="text" class="form-control" id="email" placeholder="Username">
               </div>
               <div class="form-group">
                  <a href="#" class="float-right text-info">limpar</a>
                  <label for="pass">Password</label>
                  <input type="password" class="form-control" id="pass" placeholder="......">
               </div>
               <div class="clearfix">
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" ng-click="cart.mostra_registrar()">Registrar</button>
                     <button type="button" class="btn btn-primary" ng-click="cart.pega_email()">Logar</button>
                  </div>
               </div>
               <hr>
               <div class="clearfix">
                  <div class="text-center">
                     <p class="lead">Ou logar com</p>
                  </div>
                  <ul class="list-inline text-center">
                     <li class="list-inline-item">
                        <a href="#" class="social-icon-lg si-dark si-colored-facebook">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-facebook"></i>
                        </a>
                     </li>
                     <li class="list-inline-item">
                        <a href="#" class="social-icon-lg  si-dark si-colored-twitter">
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-twitter"></i>
                        </a>
                     </li>
                     <li class="list-inline-item">
                        <a href="#" class="social-icon-lg si-dark si-colored-instagram">
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-instagram"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </form>
         </div>
         <div id="form-register" style="display: none">
            <div class="card-body">
               <div class="row">
                  <div class="col-md-12 mr-auto">
                     <form class="form"  id="formulario-registro">
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">face</i>
                                 </span>
                              </div>
                              
                              <input type="text" id="name" name="name" class="form-control" placeholder="Nome completo..." ng-model="registrar.name">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">notifications</i>
                                 </span>
                              </div>
                              <input type="text" class="form-control" name="telefone" placeholder="Telefone...">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">edit</i>
                                 </span>
                              </div>
                              <input type="text" class="form-control" placeholder="CPF...">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">mail</i>
                                 </span>
                              </div>
                              <input type="text"  class="form-control" name="email" id="email_registro" ng-model="registrar.email" placeholder="Email...">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">lock_outline</i>
                                 </span>
                              </div>
                              <input type="password" id="password" placeholder="Senha..." class="form-control" ng-model="registrar.password">
                           </div>
                        </div>
                        <div class="form-group bmd-form-group">
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text">
                                 <i class="material-icons">lock</i>
                                 </span>
                              </div>
                              <input type="password" id="confirma" placeholder="Confirmar senha..." class="form-control">
                           </div>
                        </div>
                        <div class="form-check">
                           <label class="form-check-label">
                           <input class="form-check-input" id="aceito" type="checkbox" value="aceito" checked="false">
                           <span class="form-check-sign">
                           <span class="check"></span>
                           </span>
                           Eu aceito os
                           <a href="/termos">termos, condições e politica de privacidade</a>.
                           </label>
                        </div>
                        <div class="text-center">
                           <div id="registrar" class="btn btn-primary btn-round" ng-click="cart.registrar_usuario()">Registrar</div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">{{cart.logged_user.name}}</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body" ng-include="'/perfil.html'">
                 
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Salvar</button>
               </div>
            </div>
         </div>
      </div>
      <!--/modal-->           
      <div class="modal fade" id="modal-search" tabindex="-1" role="dialog" aria-labelledby="modal-solicitarTitle" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <form >
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="modal-solicitarTitle">Busca de produtos</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="tab-content">
                        <div ng-repeat="campanha_lojas in cart.campanhas_lojas[0]" role="tabpanel" class="tab-pane active show fade" id="campanha_{{cart.campanhas[campanha_lojas].CODE}}">
                           <div class='row'>
                              <div class='col-md-6 mb20'>
                                 <article class="media" ng-repeat="produto_code in cart.campanhas[campanha_lojas].PRODUCTS">
                                    <!--Content -->
                                    <div class="media-body align-self-center g-pl-10">
                                       <div class="d-flex justify-content-between mb10">
                                          <h3 class="align-self-center text-capitalize mb0 h6  font400">{{cart.produtos[produto_code].PRESENTATION_NAME}}</h3>
                                          <div class="align-self-center">
                                             <strong class=" font700">
                                             <button class="btn-icon-sm float-right si-orange si-dark-round si-round" ng-click=cart.adicionar(produto_code)><a class="" href=""><i class="ti-plus"></i></a></button> {{cart.produtos[produto_code].VALUE|currency:"R$"}}</strong>
                                          </div>
                                       </div>
                                    </div>
                                    <!--/Content -->
                                 </article>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  </div>
               </div>
            </form>
         </div>
      </div>

      <!--modal-->
            <div class="modal fade" id="modal_transferir" tabindex="-1" role="dialog" aria-labelledby="modal-solicitarTitle" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <form >
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" >Transferir BenCréditos</h5>
                    
                  </div>
                  <div class="modal-body">
                     <div class="card-body">
               <div class="row">
                  <div class="col-md-12 mr-auto">
                    Limite de transferencia: R$ {{cart.logged_user.wallet}}
                    <br>
                     {{cart.amigo_selecionado.nome}}
                     <br>
                     <h4 class="text-warning-cred"> Tranferir: <input type="text" ng-model="cart.total_transferencia" name=""></h4>
                     <button type="button" class="btn btn-primary" ng-click="cart.tranferir_indicado(cart.amigo_selecionado.user_token)">Transferir</button>
                    
                  </div>
               </div>
            </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!--end modal-->

      <!--modal-->
        <div class="modal fade" id="modal_presentear" tabindex="-1" role="dialog" aria-labelledby="modal-solicitarTitle" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <form >
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" >Presentear</h5>
                    
                  </div>
                  <div class="modal-body">
                     <div class="card-body">
               <div class="row">
                  <div class="col-md-12 mr-auto">
                     {{cart.amigo_selecionado.nome}}
                  </div>
                  <select ng-change="cart.troca_presente()" ng-model="cart.selecionado">
                    <optgroup ng-repeat="(chave, produtos) in cart.itens_vault" ng-show="produtos.products">
                      <option ng-repeat="(seq,produto) in produtos.products" ng-show="produto.PRESENTATION_NAME && produtos.products" value="{{chave}}@{{seq}}">{{produto.PRESENTATION_NAME}}</option></optgroup>
                  </select>
               </div>
            </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <!--end modal-->

        <!-- Modal -->
                    <div class="modal fade" id="modal-solicitar" tabindex="-1" role="dialog" aria-labelledby="modal-solicitarTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form id="form_retirar">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-solicitarTitle">Solicitar os produtos</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h4 ng-show="loja">Voce está na Loja  {{loja}} </h4>
                                      <div ng-hide="loja"><strong>VOCE NAO SELECIONOU SUA LOJA, </strong><br><a href="/client/qrunidade">Leia o QR de UMA MESA </a><br>OU selecione uma na listagem !</div>
                                      <span ng-show="loja">
                                      Se estiver em loja errada ! <a href="/client/qrunidade">vai pra seleção de unidades</a></span>
                                      <br>
                                      <input type="hidden" name="cart_loja" value="{{cart.loja}}">
                                      <select id="loja_selecionado" name="loja" ng-change="cart.mudar_loja()" ng-model="cart.loja">
                                        <option  ng-repeat="loja in cart.unidades" value="{{loja.loja}}">Loja {{loja.loja}} - {{loja.nome}}</option>
                                      </select>
                                    <p>

                                     
                    <div class="card-accordion card-accordion-simple card-accordion-icons-left mb80" id="card-accordion-simple" role="tablist" aria-multiselectable="true">
                                  <!-- Card 1 -->
                                  <span ng-repeat="compras in cart.itens_vault">
                                    <span ng-repeat="compra in compras">
                                  <div class="card" ng-repeat="produto in compra.products track by $index" ng-show="produto.PRESENTATION_NAME && produto.done">
                                    <div class="card-header accordion-header" role="tab" id="heading{{$index}}2"> 
                                        <a class="text-orange" data-toggle="collapse" data-parent="#card-accordion-simple" href="#collapse{{$index}}List" aria-expanded="true" aria-controls="collapse{{$index}}"> {{produto.PRESENTATION_NAME}} <i class="ti-angle-down"></i></a> </div>
                                    <div id="collapse{{$index}}List" class="collapse" role="tabpanel" aria-labelledby="heading{{$index}}1">
                                      <div class="card-body">
                                        <textarea placeholder="Detalhes do pedido , ex : Retirar cebola, sem salada ..." name="obs['{{$index}}']" ng-model="produto.obs" cols="40"></textarea></div>
                                    </div>
                                  </div>
                                  </span>
                                  </span>
                                </div>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-rounded btn-secondary" id="cancel" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-rounded btn-primary" ng-click="cart.solicitar_itens()">Solicitar</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div><!--modal-->
      <!--back to top  -->
      <a href="#" class="back-to-top" id="back-to-top"><i class="ti-angle-up"></i></a>
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
      <script src="js/plugins/plugins.js"></script> 
      <script src="js/restaurant.custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/angular-toastr@2/dist/angular-toastr.tpls.js"></script>
      <!--revolution slider-->
      <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
      <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
      <script>
         jQuery(document).ready(function () {
             jQuery("#slider1").revolution({
                 sliderType: "standard",
                 jsFileLocation: "../revolution/js/",
                 sliderLayout: "fullscreen",
                 dottedOverlay: "none",
                 delay: 9000,
                 navigation: {
                     arrows: {enable: true}
                 },
                 parallax: {
                     type: "on",
                     levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                     origo: "enterpoint",
                     speed: 400,
                     bgparallax: "on",
                     disable_onmobile: "off"
                 },
                 gridwidth: 1140,
                 gridheight: 600
             });
             //alert(Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL")));

             try {
              if(getLocalData("BENJAMIN_USERCART_EMAIL")){
                jQuery('#qrcode').qrcode({width: 100,height: 100,text: Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"))});
                var hash_email_cliente = Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"));
                jQuery('#qrcode-profile').qrcode({width: 100,height: 100,text:endereco_site+"pocket.html?usuario="+hash_email_cliente });
              }
            }catch(err) {
              console.log(err.message);
            }
         
             
         });
      </script>
      <!--google map-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMwVpUj3-oHHW8N21819BhKttOga2Rj2s"></script>
      <script src="js/jquery.gmap.min.js"></script> 
      <script>
         // Marker Map
         $(document).ready(function () {
             map = new GMaps({
                 scrollwheel: false,
                 el: '#markermap',
                 lat: -23.561414,
                 lng: -46.6580706
         
             });
             map.addMarker({
                 lat: -23.561224,
                 lng: -46.6580116,
                 title: 'Benjamin Paulista',
                 icon : 'http://maps.google.com/mapfiles/kml/shapes/coffee.png',
                 infoWindow: {
                     content: '<h4>Benjamin</h4><p>Unidade Paulista <br> Aberta agora</p>'
                 }
             });
         
             map.addMarker({
                 lat: -23.5702433,
                 lng: -46.6634681,
                 title: 'Benjamin Pamplona',
                 icon : 'http://maps.google.com/mapfiles/kml/shapes/coffee.png',
                 infoWindow: {
                     content: '<h4>Benjamin</h4><p>Unidade Pamplona <br> Aberta agora</p>'
                 }
             });
         
             map.addMarker({
                 lat: -23.5620054,
                 lng: -46.6721896,
                 title: 'Benjamin Oscar Freire I',
                 icon : 'http://maps.google.com/mapfiles/kml/shapes/coffee.png',
                 infoWindow: {
                     content: '<h4>Benjamin</h4><p>Unidade Oscar Freire I <br> Rua Oscar Freire, 1052 – Cerqueira César<br> <span style="color:green"> Aberta agora &#10004;</span><br><span class="btn btn-primary ">Solicitar aqui</span></p>'
                 }
             });
         
             map.addMarker({
                 lat: -23.5650046,
                 lng: -46.6686824,
                 title: 'Benjamin Oscar Freire II',
                 icon : 'http://maps.google.com/mapfiles/kml/shapes/coffee.png',
                 infoWindow: {
                     content: '<h4>Benjamin</h4><p>Unidade Oscar Freire II <br> Rua Oscar Freire, 562 – Cerqueira César<br> <span style="color:green"> Aberta agora &#10004;</span><br><span class="btn btn-primary ">Solicitar aqui</span></p>'
                 }
             });
         });
      </script> 
      <!--sky form plugin js-->
      <script type="text/javascript" src="smart-form/contact-recaptcha/js/jquery.form.min.js"></script>
      <script type="text/javascript" src="smart-form/contact-recaptcha/js/jquery.validate.min.js"></script>
      <script type="text/javascript" src="smart-form/contact-recaptcha/js/additional-methods.min.js"></script>
      <script type="text/javascript" src="smart-form/contact-recaptcha/js/smart-form.js"></script> 
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script type="text/javascript" src="/js/jquery.qrcode.min.js"></script>
      <script src="/js/assan.custom.js"></script> 
   </body>
</html>
