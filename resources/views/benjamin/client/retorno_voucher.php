<!DOCTYPE html>
<html>
<head>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/crypto.js"></script>
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
         // if (getLocalData("BENJAMIN_USERCART")!=null){
           // if previoys cart is present load it
            cartCI = getLocalData("BENJAMIN_USERCART_CI");
            cartObj = getLocalData("BENJAMIN_TOTAL_VOUCHERS");
           // alert(cartObj);

             var hash_email_cliente = Crypto.MD5(getLocalData("BENJAMIN_USERCART_EMAIL"));

            var dados = {
            	"user":hash_email_cliente,
            	"cart" : cartObj,
            	"method":"paypal"
            }

 
            console.log(dados);

          

               $.ajax({
                    type: "POST",
                    //the url where you want to sent the userName and password to
                    url: '/voucher/registrar',
                    dataType: 'json',
                    async: false,
                    //json object to sent to the authentication url
                    data: JSON.stringify(dados),
                    success: function (response) {
                       
                          console.log(response);
                        
                         
                         setLocalData("BENJAMIN_TOTAL_VOUCHERS", 0);
                         // return response.json();
                         window.location.replace("/pocket.html");
                              }
                          })

                    
                }
                

          cart_initCart();

          </script>
          </body>
</html>