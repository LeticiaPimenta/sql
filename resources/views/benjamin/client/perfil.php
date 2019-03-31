 <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/UniBenjamin.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Meu perfil</h2>
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
                <h4><i class="fa fa-instagram"></i>  {{usuario.email}}</h4>
                <h5>Meu saldo : {{me.wallet|currency:"R$"}}</h5>

                <div class="d-none d-xl-block">
                    <h3>Transferira seus BenCréditos!</h3>
                  <span ng-show="parent_user">
                  {{parent_user.nome}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(parent_user.user_token)"><i class="material-icons">reply</i></div></span>
                    <br>
                  <div ng-repeat="indicado in indicados">{{indicado.name}}- {{indicado.email}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(indicado.user_token)"><i class="material-icons">reply</i></div><br></div>
                </div>

                <!--start collapse -->

                <div id="collapse" style="margin: inherit;">
                      <div class="row">
                        <div class="col-md-8 d-xl-none">
                          <div id="accordion" role="tablist" style="margin: 12px;">
                            <div class="card card-collapse">
                              <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                  <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                    Transferir BenCréditos!
                                    <i class="material-icons">keyboard_arrow_down</i>
                                  </a>
                                </h5>
                              </div>
                              <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                  <div class="col-lg-3 col-md-4 col-sm-6">
                                  <span ng-show="parent_user">
                                    <br>
                                  {{parent_user.nome}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(parent_user.user_token)"><i class="material-icons">reply</i></div></span>
                                    <br>
                                  <div ng-repeat="indicado in indicados">{{indicado.name}}- {{indicado.email}}<div class="btn btn-just-icon btn-warning btn-round" ng-click="modal_transferir(indicado.user_token)"><i class="material-icons">reply</i></div><br></div>
                          
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <!--end collapse -->

                <h5> <a href="/indicado/{{usuario.user_token}}">
                </a><button class="btn btn-warning btn-round" ng-click-copy="https://benjamin-homolog.herokuapp.com/indicado/{{usuario.user_token}}">Copiar o meu Link de indicação</button></h5>
              </a><button class="btn btn-warning btn-round" ng-click-copy="https://benjamin-homolog.herokuapp.com/benamigo/{{usuario.user_token}}">Copiar o meu Link de amigo</button></h5>
                <br>
                <hr> 
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
               
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile-tabs">
              <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                <!--
                                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                                -->
                <li class="nav-item">
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
                  <a class="nav-link" href="/client/history/<?php echo $loja ?>" role="tab" data-toggle="tab">
                    <i class="material-icons">shop_two</i> Ultimas compras
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tab-content tab-space">
          <div class="tab-pane active work" id="work">
            <div class="row">
              <div class="col-md-9 ml-auto mr-auto ">
                <div class="row collections">
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('/assets/img/Paes.jpg')">
                      <a href="#"></a>
                      <div class="card-body">
                        <a href="/client/adicionarbem/<?php echo $loja; ?>">
                          <h2 class="card-title">Adicionar um BenAmigo!</h2>
                        
                        <div class="stats">
                          <button type="button" name="button" class="btn btn-white btn-link">
                            <i class="material-icons">reply</i>
                          </button>
                        </div> </a>
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
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('/assets/img/croissant.jpg')">
                      <a href="#"></a>
                      <div class="card-body">
                        <a href="#">
                          <h2 class="card-title" style="margin-top: 50px;">Mais Amados!</h2>
                        </a>
                        <div class="stats">
                          <button type="button" name="button" class="btn btn-white btn-round btn-link" href="#connections">
                            <i class="material-icons">favorite</i> Favoritos
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('/assets/img/foto.jpg')">
                      <a href="#"></a>
                      <div class="card-body">
                        <a href="/client/history/<?php echo $loja ?>">
                          <h2 class="card-title" style="margin-top: 50px;">Veja seu histórico!</h2>
                        </a><br>
                        <div class="stats">
                          <a href="/client/history/<?php echo $loja ?>">
                            <button type="button" name="button" class="btn btn-white btn-round btn-link">
                              <i class="material-icons">bookmark</i> Histórico
                            </button>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane connections" id="connections">
            <div class="row">
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#">
                          <img class="img" src="/assets/img/produtos/croissant-chocolate-aberto.jpg">
                        </a>
                      <div class="colored-shadow" style="background-image: url(&quot;/assets/img/faces/avatar.jpg&quot;); opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Croissant de Chocolate</h4>
                        <h6 class="card-category text-muted">R$ 7,90</h6>
                        <p class="card-description">
                          Nosso delicioso croissant é um dos items mais pedidos no nosso cardário.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#">
                          <img class="img" src="/assets/img/produtos/croissant-chocolate-aberto.jpg">
                        </a>
                      <div class="colored-shadow" style="background-image: url(&quot;/assets/img/faces/avatar.jpg&quot;); opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Croissant de Chocolate</h4>
                        <h6 class="card-category text-muted">R$ 7,90</h6>
                        <p class="card-description">
                          Nosso delicioso croissant é um dos items mais pedidos no nosso cardário.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#">
                          <img class="img" src="/assets/img/produtos/croissant-chocolate-aberto.jpg">
                        </a>
                      <div class="colored-shadow" style="background-image: url(&quot;/assets/img/faces/avatar.jpg&quot;); opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Croissant de Chocolate</h4>
                        <h6 class="card-category text-muted">R$ 7,90</h6>
                        <p class="card-description">
                          Nosso delicioso croissant é um dos items mais pedidos no nosso cardário.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#">
                          <img class="img" src="/assets/img/produtos/croissant-chocolate-aberto.jpg">
                        </a>
                      <div class="colored-shadow" style="background-image: url(&quot;/assets/img/faces/avatar.jpg&quot;); opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Croissant de Chocolate</h4>
                        <h6 class="card-category text-muted">R$ 7,90</h6>
                        <p class="card-description">
                          Nosso delicioso croissant é um dos items mais pedidos no nosso cardário.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="media">
            <div class="row">
             
        <div class="card-body">
          
          <div class="table-responsive">
                <table class="table"  ng-repeat="origins in carts_origin">
                    <thead>
                      <tr>
                        <th>Unidade</th>
                        <th>itens</th>
                        <th>Hora</th>
                        <th class="text-center">Valor</th>
                <!--        <th class="text-right">Ações</th> -->
                      </tr>
                    </thead>
            
                    <tbody ng-repeat="item in origins">
                      <tr >
                        <td> # <span ng-repeat="produto in item.products" ng-show="$first">{{produto.shop}}</span></td>
                        <td><small><span ng-repeat="produto in item.products"> {{products_id[produto.product].descricao}} <span ng-show="!$last">+ </span></small></td>
                        <td>{{item.hora | date:'MM/dd - h:mma' }}</td>
                        <td class="text-center">R$ {{item.value}}</td>
                    
                <!--        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="" ng-click="recebido(item.user,item.product,key , item.value)">
                            <i class="material-icons">person</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                            <i class="material-icons">close</i>
                          </button>
                        </td> -->
                      </tr>
                    
                    </tbody>
                  </table>
          </div>
        </div>
            </div>
          </div>
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
