 <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/UniBenjamin.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">BenCréditos</h2>
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
              <div class="name">
                <h3 class="title">Aqui você compra, transfere e consulta seus créditos.</h3>

          <!--      <div class="d-none d-xl-block">
                    <h3>Transferira seus BenCréditos!</h3>
                  <span ng-show="parent_user">
                  {{parent_user.nome}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(parent_user.user_token)"><i class="material-icons">reply</i></div></span>
                    <br>
                  <div ng-repeat="indicado in indicados">{{indicado.name}}- {{indicado.email}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(indicado.user_token)"><i class="material-icons">reply</i></div><br></div>
                </div> -->

                <!--start collapse -->

                <div id="collapse" style="margin: inherit;">
                      <div class="row">
                        <div class="col-md-12">
                          <div id="accordion" role="tablist" style="margin: 12px;">
                            <div class="card card-collapse">
                              <div class="card-header" role="tab" id="headingOne">
                                <div class="mb-0">
                                  <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                    <h4> Transferir BenCréditos!
                                    <i class="material-icons">keyboard_arrow_down</i></h4>
                                  </a>
                                </div>
                              </div>
                              <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                  <div class="col-md-12">
                                   <span ng-show="parent_user">
                                      <br>
                                    {{parent_user.nome}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(parent_user.user_token)"><i class="material-icons">reply</i></div></span>
                                      <br>
                                    <div ng-repeat="indicado in indicados">
                                      {{indicado.name}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(indicado.user_token)"><i class="material-icons">reply</i></div><br></div>
                                    <div ng-repeat="indicado in benamigos">{{indicado.nome}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(indicado.user_token)"><i class="material-icons">reply</i></div><br></div>
                          
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <!--end collapse -->

               <!--
                <div class=" d-none d-xl-block">
                <a href="/client/adicionarbem/<?php echo $loja; ?>">
                  <button class="btn btn-warning btn-round">Adicionar Um Bem amigo</button>
                </a> 

                <span ng-show="parent_user">
                  <br>
                {{parent_user.nome}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(parent_user.user_token)"><i class="material-icons">reply</i></div></span>
                  <br>
                <div ng-repeat="indicado in indicados">{{indicado.name}}- {{indicado.email}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(indicado.user_token)"><i class="material-icons">reply</i></div><br></div>
                <div ng-repeat="indicado in benamigos">{{indicado.name}}- {{indicado.email}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(indicado.user_token)"><i class="material-icons">reply</i></div><br></div>
                </div>
               -->
              </div>
            </div>
          </div>
        </div>

    <!--    <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist"> -->
                <!--
                                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                                -->
        <!--        <li class="nav-item">
                  <a class="nav-link active" href="#work" role="tab" data-toggle="tab">
                    <i class="material-icons">monetization_on</i> Carteira
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#connections" role="tab" data-toggle="tab">
                    <i class="material-icons">favorite_border</i> Mais Pedidos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#media" role="tab" data-toggle="tab">
                    <i class="material-icons">shop_two</i> Ultimas compras
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div> -->
        <div class="tab-content tab-space">
          <div class="tab-pane active work" id="work">
            <div class="row">
              <div class="col-md-9 ml-auto mr-auto ">
                <div class="row collections">
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('/assets/img/benja.jpg')">
                      <a href="#"></a>
                      <div class="card-body">
                        <a href="#" ng-click-copy="https://benjamin-homolog.herokuapp.com/benamigo/{{usuario.user_token}}">
                          <h2 class="card-title">Copiar link para adicionar um BenAmigo!</h2></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('/assets/img/benja.jpg')">
                      <a href="/client/creditos/<?php echo $loja; ?>"></a>
                      <div class="card-body">
                        <h1 class="card-title">
                        {{me.wallet|currency:"R$"}}</h1>
                        <a href="/client/creditos/<?php echo $loja; ?>">
                          <h3 class="card-title">Comprar BenCréditos!</h3>
                        </a>
                    <!--    <div class="stats">
                          <button type="button" name="button" class="btn btn-white btn-round btn-link">
                            <i class="material-icons">subject</i> Pagar
                          <div class="ripple-container"></div></button>
                          <button type="button" name="button" class="btn btn-white btn-round btn-link">
                            <i class="material-icons">bookmark</i> Receber
                          </button>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

      <!--    <div class="tab-pane connections" id="connections">
          </div>
          <div class="tab-pane text-center gallery" id="media">
          </div> -->
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal_transferir" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Transferir Ben Creditos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Limite de transferencia : {{me.wallet|currency:"R$"}}
          </p>
          <br>
          Nome do amigo que vai receber <strong>{{amigo_transferir.nome}}</strong>
            <br>
          R$ <input type="number" id="valor_transferencia" name="total" min="0" max="{{me.wallet}}" value="{{me.wallet}}">
        </div>
        {{responsa_transferencia.msg}}
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" ng-click="tranferir_indicado(amigo_transferir.user_token)">Transferir</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
