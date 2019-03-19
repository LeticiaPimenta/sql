<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title> .:: Roleta de Leads Capriatti :: CTBA ::.</title>
   <!-- =============== assets STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
   <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
   <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
   <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="assets/simple-line-icons/css/simple-line-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark">
               <a href="#">
                  <img class="block-center rounded" src="img/logo-single_capriatti.jpg" alt="Logo Capriatti">
               </a>
            </div>
            <div class="card-body">
               <p class="text-center py-2">Logue para continuar.</p>
               <form class="mb-3" id="loginForm" novalidate>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputEmail1" type="email" id="email" placeholder="Email" autocomplete="off" required>
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-envelope"></em>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputPassword1" type="password" placeholder="Password" required>
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-lock"></em>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <div class="checkbox c-checkbox float-left mt-0">
                        <label>
                           <input type="checkbox" value="" name="remember">
                           <span class="fa fa-check"></span> Lembrar de mim</label>
                     </div>
                     <!--div class="float-right">
                        <a class="text-muted" href="recover.html">Esqueceu a senha?</a>
                     </div-->
                  </div>
                  <button class="btn btn-block btn-primary mt-3" type="button" id="logar">Login</button>
               </form>
               <!--p class="pt-3 text-center">Precisa logar?</p>
               <a class="btn btn-block btn-secondary" href="register.html">Solicitar registro</a-->
            </div>
         </div>
         <!-- END card-->
         <div class="p-3 text-center">
            <span class="mr-2">&copy;</span>
            <span>2018</span>
            <span class="mr-2">-</span>
            <span>Capriatti</span>
            <br>
            <span>Bootstrap Admin Template</span>
         </div>
      </div>
   </div>
   <!-- =============== assets SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="assets/modernizr/modernizr.custom.js"></script>
   <!-- JQUERY-->
   <script src="assets/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="assets/js-storage/js.storage.js"></script>
   <!-- PARSLEY-->
   <script src="assets/parsleyjs/dist/parsley.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app_tpl.js"></script>
     <script type="text/javascript">
      
      $(document).ready(function(){
         $("#logar").click(function(){
            $.ajax({
               type: "POST",
               url: "/logar/",
               data: {  email: $("#exampleInputEmail1").val(),
                        senha: $("#exampleInputPassword1").val()},
                success:function(rsp){
                  if(rsp.status == 1){
                     var usuario = JSON.stringify(rsp.usuario);
                     localStorage.setItem('usuario_logado' , usuario);
                     window.location.replace("/admin#!/app/meuperfil");
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