
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <!--base href="https://roleta.capriatti.com.br/"-->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title>Confirmar Meu Login</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="/assets/@fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
   <link rel="stylesheet" href="/assets/@fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
   <link rel="stylesheet" href="/assets/@fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
   <link rel="stylesheet" href="/assets/@fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="/assets/simple-line-icons/css/simple-line-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="/css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="/css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <div class="abs-center wd-xl">
         <!-- START card-->
         <div class="d-flex justify-content-center">
            <div class="p-2">
               <img class="img-fluid img-thumbnail rounded-circle" src="https://d3myhnqlqw2314.cloudfront.net/profile_120x120_2555364_1fdfefa0748ba9ef74f11a7d18879d13.jpg"  alt="Avatar" width="60" height="60">
            </div>
         </div>
         <div class="card b0" id="first-step">
            <div class="card-body" >
               <p class="text-center">Por favor insira seu email do PipeDrive. </p>
               <form>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="inputEmail1" type="email" placeholder="Preencha email do PipeDrive" autocomplete="off" required>
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-lock"></em>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex">
                     
                     <div class="ml-auto">
                        <a class="btn btn-sm btn-primary" href="#" id="confirmacao">Confirmar</a>
                     </div>
                  </div>
               </form>
            </div>

            
         </div>
         <div class="card b0" id="second-step" style="display: none">
            <div class="card-body" id="second-step" >
               <p class="text-center"><strong><span id="nome_corretor"></span><br></strong>Agora Preencha com uma senha </p>
               <form>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="senha" type="text" placeholder="Crie sua senha" autocomplete="off" required>
                        <input type="hidden" id="hash">
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-lock"></em>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex">
                     
                     <div class="ml-auto">
                        <a class="btn btn-sm btn-primary" href="#" id="setar_senha">Setar senha</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- END card-->
         <div class="p-3 text-center">
            <span class="mr-2">Caso tenha problemas </span>
            <br>
            <span>Entre em contato com seu gerente</span>
            
         </div>
      </div>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="/assets/modernizr/modernizr.custom.js"></script>
   <!-- JQUERY-->
   <script src="/assets/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="/assets/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="/assets/js-storage/js.storage.js"></script>
   <!-- PARSLEY-->
   <script src="/assets/parsleyjs/dist/parsley.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   
   <script type="text/javascript">
      
      $(document).ready(function(){
         $("#confirmacao").click(function(){
          //  alert($("#inputEmail1").val());

            $.ajax({
               type: "POST",
               url: "/confirmar/",
               data: {  email: $("#inputEmail1").val(),
                        codigo: "<?php echo $usuario['codigo']; ?>"},
                success:function(rsp){

                  if(rsp.status == 1){
                     $('#second-step').slideDown();
                     $('#first-step').slideUp();
                     $('#nome_corretor').html(rsp.response);
                     $('#hash').val(rsp.hash);

                  }else{
                     alert(rsp.response);
                     console.log(rsp.response);
                  }


                  event.preventDefault();
                  //do anything you want after a successful ajax request
                }
            });

            event.preventDefault();
         });


         $("#setar_senha").click(function(){
            //alert($("#inputEmail1").val());

            $.ajax({
               type: "POST",
               url: "/setar/",
               data: {  senha: $("#senha").val(),
                        codigo: "<?php echo $usuario['codigo']; ?>"},
                success:function(rsp){

                  if(rsp.status == 1){
                      //alert(rsp.response);
                     window.location.href = "/";
                     console.log(rsp.response);
                  }else{
                     alert(rsp.response);
                     console.log(rsp.response);
                  }

                  event.preventDefault();
                  //do anything you want after a successful ajax request
                }
            });

            event.preventDefault();
         });

      });


   </script>
</body>

</html>