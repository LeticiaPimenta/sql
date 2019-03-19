<div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/benjamin1.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-md-8 ml-auto mr-auto text-center">
            <h1 class="title">Escolha um usuario </h1>
            <h4>Escolha aqui um usuario para testes</h4>
            <br>
            <a href="#pablo" class="btn btn-warning btn-round btn-lg">
            <i class="material-icons">account_circle</i> Login como Admin
            </a>
         </div>
      </div>
   </div>
</div>
<div class="main main-raised">
<div class="container">
<div class="section">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2 class="title text-center">Usuarios </h2>
            <br>
            <div class="row" ng-repeat="usuario in users">
               <div class="col-md-4">
                  <div class="card card-blog">
                     <div class="card-header card-header-image">
                        <a href="/atendente/pedidos/<?php echo $unidade; ?>/{{usuario.$id}}">
                        <img class="img img-raised" src="/assets/img/rick.jpg">
                        </a>
                     </div>
                     <div class="card-body">
                        <h6 class="category text-info">#<?php echo $unidade; ?></h6>
                        <h4 class="card-title">
                           <a href="/atendente/pedidos/<?php echo $unidade; ?>/{{usuario.$id}}">{{usuario.configs.name}}</a>
                        </h4>
                        <p class="card-description">
                           Aqui entramos como se fosse o usuario {{usuario.configs.name}} pra testes
                           <a href="/atendente/pedidos/<?php echo $unidade; ?>/{{usuario.$id}}"> Entrar como {{usuario.configs.name}} </a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>