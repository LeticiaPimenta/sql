
  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/produtos/croissant-chocolate-aberto.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <div class="brand">
            <img src="/assets/img/clark-street-merc.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">

<!-- section -->
    <div class="section">
      <div class="container" id="3">
        <h2 class="section-title">{{nome}}</h2>
      <!--  <a href="/client/creditar"><div class="button btn btn-warning btn-round">Pagar meus vouchers</div></a>
          <a href="/client/cardapio/<?php echo $loja;?>">
            <button type="button" class="btn btn-success btn-round" >
              Comprar Mais <i class="material-icons">keyboard_arrow_right</i>
            </button>
          </a>-->
        </div>
        <br>
            <!-- section -->
          <div class="tab-pane active work" id="work">
            <div class="row">
              <div class="col-md-11 ml-auto mr-auto d-none d-xl-block">
                <div class="row collections">
                  <div class="col-md-3" ng-repeat="combo in produtos">
                    <div class="card card-background" style="background-image: url('/assets/img/Paes.jpg'); height: 200px;">
                      
                      <div class="card-body" ng-click="modal_combo(10 , combo)">
                        <a href="#">
                          <h4 class="card-title"><strong>{{combo.PRO_QUANTIDADE}}</</strong> X <br>{{combo.PRO_DESCRICAO}}<br>{{combo.PRO_QUANTIDADE * combo.PNI_VALOR | currency:'R$' }}</h4>
                        </a>
                      </div>
                    </div>
                  </div>

                </div>
                  <div class="container" id="3">
                  <a href="/client/creditar"><div class="button btn btn-warning btn-round">Pagar meus vouchers</div></a>
                    <a href="/client/cardapio/<?php echo $loja;?>">
                      <button type="button" class="btn btn-success btn-round" >
                        Comprar Mais <i class="material-icons">keyboard_arrow_right</i>
                      </button>
                    </a>
                  </div>    
                </div>
              </div>
            </div>
          </div>
    <!-- end section -->   


    <!-- start section -->       
            <!-- section -->

          <div class="tab-pane active work" id="work">
            <div class="row">
              <div class="col-md-12 d-xl-none">
                <div class="row">
                  <div class="col-md-3" style="width: 45%; margin-left: 17px;" ng-repeat="combo in produtos">
                    <div class="card card-background" style="background-image: url('/assets/img/Paes.jpg'); height: 140px; margin: auto;">
                      <a href="#"></a>
                      <div class="card-body" ng-click="modal_combo(10 , combo)">
                        <a href="#">
                          <h3 class="card-title">{{combo.PRO_DESCRICAO}}<br>R$ {{combo.PNI_VALOR}}</h3>
                        </a>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <div class="container" id="3">
                  <a href="/client/creditar"><div class="button btn btn-warning btn-round">Pagar meus vouchers</div></a>
                    <a href="/client/cardapio/<?php echo $loja;?>">
                      <button type="button" class="btn btn-success btn-round" >
                        Comprar Mais <i class="material-icons">keyboard_arrow_right</i>
                      </button>
                    </a>
                  </div>
              </div>
            </div>
          </div>
    <!-- end section -->  
    

    <!-- end section -->       

    </div>
    <!-- section -->






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



<div class="modal fade" id="modal_combo" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" style="margin-top: auto;">Combo</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <h4>Combo de {{combo_selecionado.PRO_QUANTIDADE}}</h4>
          {{combo_selecionado.PRO_DESCRICAO}}
          <!--  <img  ng-src="https://benjamin-a-padaria.herokuapp.com/assets/img/produtos/croissant_H&C.png" width="50%" alt="{{ref_produto_quick.PRO_DESCRICAO}}" > -->
        </div>
        <div class="modal-footer">
          <div class="container">{{combo_selecionado.PRO_QUANTIDADE * combo_selecionado.PNI_VALOR |currency:"R$ "}}</div>
          <button type="button" class="btn btn-warning" ng-click="add_combo(credito_selecionado)">Pedir</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
