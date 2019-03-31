  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/benjamin1.jpg');">
    <div class="container">
          <h2 class="title text-center">Escolha a unidade que deseja retirar</h2>
      
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">

  
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4" ng-repeat="unidade in unidades"> 
              <div class="card card-blog">
                
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="cardapio/{{unidade.loja}}">{{unidade.nome}}</a>
                  </h4>
                  <p class="card-description">
                    <h5>{{unidade.endereco}}</h5>
                    Escolha esta unidade para retirar sua compra.
                    <a href="cardapio/{{unidade.loja}}"><div class="btn btn-warning btn-round"> Visitar </div></a>
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>