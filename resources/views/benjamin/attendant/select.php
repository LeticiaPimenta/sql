  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/benjamin1.jpg');">
    <div class="container">
      
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">

  
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title text-center">Unidades </h2>
          <br>
          <div class="row">
            <div class="col-md-4" ng-repeat="unidade in unidades"> 
              <div class="card card-blog">
                
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="unidade/600">{{unidade.nome}}</a>
                  </h4>
                  <p class="card-description">
                    <h5>{{unidade.endereco}}</h5>
                    Escolha esta unidade para retirar sua compra.
                    <a href="unidade/600"> Visitar </a>
                  </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>