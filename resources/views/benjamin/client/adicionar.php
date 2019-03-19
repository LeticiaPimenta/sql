 <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/UniBenjamin.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Adicionar novo amigo</h2>
        </div>
      </div>
    </div>
  </div>

<div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile" style="text-align: center;">
              <div class="avatar">
                <img ng-src="{{foto}}" src="{{foto}}" onerror="this.src='/assets/img/avatar.png'" alt="Circle Image" class="img-raised rounded-circle img-fluid" style="max-width: 160px; width: 100%; margin: 0 auto; transform: translate3d(0,-50%,0);">
              </div>
              <div class="name">
                <h3 class="title" style="margin-top: -11px;">{{usuario.name}}</h3>
                <h4><i class="fa fa-instagram"></i>  {{usuario.email}}</h4><br>
               
                <h5> <a href="/client/ler/{{usuario.user_token}}">
                  <img src="/pagamento_1.png" width="70%"><br>

                </a><button class="button btn btn-info" >Ler o Codigo de um amigo</button></h5>
                <br>
                <button class="button btn btn-info" ng-click-copy="https://benjamin-homolog.herokuapp.com/benamigo/{{usuario.user_token}}">Copiar o meu Link de amigo</button>
                
              </div>
            </div>
          </div>
        </div>


        
      </div>
    </div>
  </div>