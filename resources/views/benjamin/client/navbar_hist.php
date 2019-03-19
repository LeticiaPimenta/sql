      <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
         <div class="container">
            <div class="navbar-translate">
               <a class="navbar-brand" href="">
               </a>
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
                     <a href="#" class="dropdown nav-link" data-number="2" class="" data-toggle="dropdown" aria-expanded="false">
                      Encomendas
                     </a>
                  </li>
                  <li class="dropdown nav-item">
                     <a href="/client/creditos/<?php echo $loja; ?>" class=" nav-link">
                      BenCréditos
                     </a>
                  </li>
                  
          <li class="dropdown nav-item d-none d-xl-block show" style="margin-left: 10px;" >
                    <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                      <div class="profile-photo-small">
                        <img ng-src="/assets/img/avatar.png" alt="Circle Image" class="rounded-circle img-fluid">
                      </div>
                    <div class="ripple-container"></div></a>
                    <div class="dropdown-menu dropdown-menu-right hiding" style="margin-top: 10px;">
                      <h6 class="dropdown-header">{{usuario.name}}</h6>
                      <a href="/client/perfil/<?php echo $loja;?>" class="dropdown-item">Meu perfil</a>
                  <!--    <a href="#pablo" class="dropdown-item">Settings and other stuff</a>
                      <a href="#pablo" class="dropdown-item">Sign out</a> -->
                    </div>
                  </li>
                  <li class="dropdown nav-item d-xl-none" style="margin-left: 10px;">
                    <a href="#pablo" class="profile-photo dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                      <div class="profile-photo-small">
                        <img ng-src="/assets/img/avatar.png" alt="Circle Image" class="rounded-circle img-fluid"> 
                      </div> 
                    <div class="ripple-container" style="border-radius: 0px; margin-left: 53px;">
                      <h5 class="dropdown-header"> {{usuario.name}}</h5>
                    </div></a>
                    <div class="dropdown-menu dropdown-menu-right hiding">
                      <a href="/client/perfil/<?php echo $loja;?>" class="dropdown-item">Meu perfil</a>
                <!--      <a href="#pablo" class="dropdown-item">Settings and other stuff</a>
                      <a href="#pablo" class="dropdown-item">Sign out</a> -->
                    </div>
                  </li>
               </ul>
            </div>
         </div>
         <!-- alert -->
         <div class="alert alert-warning" role="alert" style="display: none;" aria-hidden="true">
            <div class="container">
               <div class="alert-icon">
                  <i class="material-icons">check</i>
               </div>
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true"><i class="material-icons">clear</i></span>
               </button>
               <b>Feito!:</b> Aguarde seu pedido.
            </div>
         </div>
         <!-- end alert -->
      </nav>