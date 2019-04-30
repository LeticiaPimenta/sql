<!DOCTYPE html>
<html>
<head>
  <script src="/js/jquery.min.js"></script>
	<title></title>
</head>
<body>
carrinho


 <script type="text/javascript">

    var produtos = new Array();
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
            console.log(cartObj);

             var hash_email_cliente = getLocalData("BENJAMIN_USERCART_EMAIL");

            var dados = {
            	"user":hash_email_cliente,
            	"cart" : cartObj,
            	"method":"paypal"
            }

          /*  fetch('/compra/registrar',{
      			  method: 'POST', // or 'PUT'
      			  body: JSON.stringify(dados), // data can be `string` or {object}!
      			  headers:{
      			    'Content-Type': 'application/json'
      			  }
      			})
      			  .then(function(response) {

                //setLocalData("BENJAMIN_USERCART_CI", null);
                cartObj = JSON.parse(getLocalData("BENJAMIN_USERCART"));

                var vault = [];
                //vault['key'] = response;
                vault['cart'] = getLocalData("BENJAMIN_USERCART");

                console.log(response);
                console.log(response.json());
                console.log(vault);
                console.log(JSON.stringify(vault));

                //cartObj = JSON.parse(getLocalData("BENJAMIN_USER_VAULT"));


                setLocalData("BENJAMIN_USER_VAULT", getLocalData("BENJAMIN_USERCART"));
               setLocalData("BENJAMIN_USERCART", null);
      			   // return response.json();
               //window.location.replace("/carrinho.html");
      			  })
      			  .then(function(myJson) {
      			    console.log(JSON.stringify(myJson));
      			  });*/


               $.ajax({
                    type: "POST",
                    //the url where you want to sent the userName and password to
                    url: '/compra/registrar',
                    dataType: 'json',
                    async: false,
                    //json object to sent to the authentication url
                    data: JSON.stringify(dados),
                    success: function (response) {
                       cartObj = JSON.parse(getLocalData("BENJAMIN_USERCART"));

                          console.log(response);
                        
                         setLocalData("BENJAMIN_USER_VAULT", getLocalData("BENJAMIN_USERCART"));
                         setLocalData("BENJAMIN_USER_VAULT_KEY", response.name);
                         setLocalData("BENJAMIN_USERCART", null);
                         // return response.json();
                         window.location.replace("/vault.html");
                              }
                          })

                    }else{
                      console.log("\t[CART-BENJAMIN] Carrinho esta vazio!");
                    }
                }
                

          cart_initCart();

          </script>
          </body>
</html>