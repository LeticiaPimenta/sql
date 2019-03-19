  <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/examples/bg2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">Meus Vouchers</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="card card-plain">
        <div class="card-body">
          <br/>
          
          <div class="table-responsive d-none d-xl-block">
            <table class="table table-shopping">
              <thead>
                <tr>
                  <th>Produto</th>
                  <th class="text-right">Horário</th>
                  
                  <th class="text-right">Total</th>
                  
                </tr>
              </thead>
              <tbody>
     
                <tr ng-repeat="produto in carrinhos">                  
                  <td class="td-name" style="color:#999">
                    
                    <a href="#">
                      
                    <h5>Voucher de R$ {{produto.valor}}</h5>
                     </a>
                    
                  </td>
                  <td class="td-number text-right">
                    <small> 
                  
                      {{produto.hora | date:' h:mma'}}<br>
                    
                    </small>
                      
                  </td>
                  
                  <td class="td-number">
                    <small>R$</small>
                      {{produto.valor}}
                   
                  </td>
                 
                </tr>
               
                <tr>
                  <td class="td-total">
                    Total {{valor_total.toFixed(2)}}
                  </td>
                  <td colspan="1" class="td-price">

                    <small>R$</small> <input type="hidden" name="valor_carrinho" id="valor_carrinho" value="{{valor_total.toFixed(2)}}">{{valor_total.toFixed(2)}}
                  </td>
                  <td colspan="1"></td>
                  
          <!--          <button type="button" class="btn btn-warning btn-round" ng-click="encerrar_carrinho()">Fechar Pedido <i class="material-icons">keyboard_arrow_right</i></button> -->
                    <button type="button" class="btn btn-warning btn-round" data-toggle="modal" data-target="#loginModal">Fechar Pedido <i class="material-icons">keyboard_arrow_right</i></button>
                    <a href="/client/creditos/<?php echo $loja;?>/{{$scope.logado_id}}">
                    <button type="button" class="btn btn-success btn-round" >Comprar Mais <i class="material-icons">keyboard_arrow_right</i></button>
                    </a>
                     <img id='barcode' 
                        src="https://api.qrserver.com/v1/create-qr-code/?data=carrinho-<?php echo $loja;?>-{{$scope.logado_id}}&amp;size=100x100" 
                        alt="" 
                        title="Hash do Carrinho" 
                        width="50" 
                        height="50" />  


                  </td>
                </tr>
                <!-- <tr>
                <td colspan="6"></td>
                <td colspan="2" class="text-right">
                  <button type="button" class="btn btn-info btn-round">Complete Purchase <i class="material-icons">keyboard_arrow_right</i></button>
                </td>
              </tr> -->
              </tbody>
            </table>
          </div>


          <div class="col-md-8 d-xl-none">
              <div id="accordion" role="tablist">
                <div class="card card-collapse" ng-repeat="produto in carrinhos">
                  <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                      <a data-toggle="collapse" href="#collapse-{{produto.$id}}" aria-expanded="false" aria-controls="collapse-{{products_id[item.product].$id}}" class="collapsed" ng-repeat="item in produto" ng-show="$first" >
                       Voucher de R$ {{produto.valor}} 
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </h5>
                  </div>
                  <div id="collapse-{{produto.$id}}" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="" ng-repeat="item in produto">
                    <div class="card-body"> 
                      Valor
                    <small>R$ {{produto.valor}}</small>
                    
                    <p>Total <small>R$</small> <input type="hidden" name="valor_carrinho" id="valor_carrinho" value="{{valor_total.toFixed(2)}}">{{valor_total.toFixed(2)}}
                    </span></p> 
                    </div>
                  </div>
                </div> </br>
                <div>
                  <span ng-repeat="produto in carrinhos" ng-show="$last">
                    <h3><small>R$</small> <input type="hidden" name="valor_carrinho" id="valor_carrinho" value="{{valor_total.toFixed(2)}}">{{valor_total.toFixed(2)}}</h3>
                  </span> 
                </div>
                
                <button type="button" class="btn btn-warning btn-round" data-toggle="modal" data-target="#loginModal">Fechar Pedido <i class="material-icons">keyboard_arrow_right</i></button>
                    <a href="/client/creditos/<?php echo $loja;?>/{{$scope.logado_id}}">
                    <button type="button" class="btn btn-success btn-round" >Comprar Mais <i class="material-icons">keyboard_arrow_right</i></button>
                    </a>
                     <img id='barcode' 
                        src="https://api.qrserver.com/v1/create-qr-code/?data=carrinho-<?php echo $loja;?>-{{$scope.logado_id}}&amp;size=100x100" 
                        alt="" 
                        title="Hash do Carrinho" 
                        width="50" 
                        height="50" />

                        
              </div>
            </div>




        </div>
      </div>
    </div>
  </div>

  <!--start modal-->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" style="display: none; padding-right: 10px; padding-left: 17px;">
    <div class="modal-dialog modal-login" role="document">
      <div class="modal-content">
        <div class="card card-signup card-plain">
          <div class="modal-header">
            <div class="card-header card-header-warning text-center">
             
              <h4 class="card-title" id="titulo_pagamento">Faça seu pagamento</h4>

            </div>
          </div>
          <div class="modal-body" style="padding-left: 17px;">
            <form class="form" method="" action="" autocomplete="on">
              <p class="description text-center">
              <small>R$</small> {{valor_total.toFixed(2)}}</p>
              <div class="card-body" style="display: none;" id="cobrado">
                <div class="row">
                  <div class="col-md-12">
                    {{retorno.data}}

                    <br>
                    
                    <button type="button" class="btn btn-warning btn-round" ng-click="encerrar_carrinho()">Ok ! Retornar Para a Loja <i class="material-icons">keyboard_arrow_right</i></button>

                  </div>
                </div>
              </div>
            </form>
              <div class="card-body" style="display: none;" id="cobrando">
                <div class="row">
                  <div class="col-md-12">
                    <center>
                     <img src="/assets/img/loader.gif">
                    </center>
                  </div>
                </div>
              </div>

              <div class="card-body" id="cobranca">
              <div id="collapse">
              <div class="row">
                <div class="col-md-12">
                  <div id="accordion" role="tablist">
                    <div class="card card-collapse">
                      <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="">
                        Cartão de Crédito
                        <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                        
                        <div class="card-body" >
                          <div class="form-group bmd-form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">face</i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Nome..." autocomplete="on" id="nome_carrinho" value="{{usuario.name}}">
                            </div>
                          </div>
                          <div class="form-group bmd-form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">lock_outline</i>
                                </span>
                              </div>
                              <input type="text" placeholder="identificador"  id="identificador" class="form-control" autocomplete="on">
                            </div>
                          </div>
                          <div class="form-group bmd-form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons">credit_card</i>
                                </span>
                              </div>
                                <input type="text" class="form-control" placeholder="Número do cartão" autocomplete="on" value="5448280000000007" id="cartao_carrinho">
                            </div>
                          </div>
                          <div class="form-group bmd-form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">lock_outline</i>
                                </span>
                              </div>
                              <input type="password" placeholder="CVV" class="form-control" autocomplete="on">
                            </div>
                          </div>
                          <div class="form-group bmd-form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">calendar_today</i>
                                </span>
                              </div>
                              <input type="password" placeholder="Data de Vencimento" class="form-control" autocomplete="on">
                             
                            </div>
                          </div>
                          <div class="form-group bmd-form-group">
                            <div class="input-group padding-right">
                              
                              <button type="button" class="btn btn-warning btn-round" ng-click="pagar_carrinho()">Fechar Pedido <i class="material-icons">keyboard_arrow_right</i></button>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class="card card-collapse">
                          <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Dinheiro - Totem
                                <i class="material-icons">keyboard_arrow_down</i>
                              </a>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                              Dirija-se ao totem para pagamento.
                            </div>
                          </div>
                        </div>
                        <div class="card card-collapse">
                          <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Cartão de Débito
                                <i class="material-icons">keyboard_arrow_down</i>
                              </a>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                              A definir.
                              <br>
                            </div>
                          </div>
                        </div>
                        <div class="card card-collapse">
                          <div class="card-header" role="tab" id="headingFour">
                            <h5 class="mb-0">
                              <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Paypal
                                <i class="material-icons">keyboard_arrow_down</i>
                              </a>
                            </h5>
                          </div>
                          <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                              <div id="paypal-button-container"></div>
                              <script src="https://www.paypalobjects.com/api/checkout.js"></script>
                              <script>
                              // Render the PayPal button
                              paypal.Button.render({
                              // Set your environment
                              env: 'sandbox', // sandbox | production

                              // Specify the style of the button
                              style: {
                                layout: 'vertical',  // horizontal | vertical
                                size:   'medium',    // medium | large | responsive
                                shape:  'rect',      // pill | rect
                                color:  'gold'       // gold | blue | silver | white | black
                              },

                              // Specify allowed and disallowed funding sources
                              //
                              // Options:
                              // - paypal.FUNDING.CARD
                              // - paypal.FUNDING.CREDIT
                              // - paypal.FUNDING.ELV
                              funding: {
                                allowed: [
                                  paypal.FUNDING.CARD,
                                  paypal.FUNDING.CREDIT,
                                  paypal.FUNDING.ELV
                                ],
                                disallowed: []
                              },

                              // Enable Pay Now checkout flow (optional)
                              commit: true,

                              // PayPal Client IDs - replace with your own
                              // Create a PayPal app: https://developer.paypal.com/developer/applications/create
                              client: {
                                sandbox: 'AVKZ00wV3OOCYXiAhaypTtA9r4-0EK3CIZqW8Z0xJmmBZCuLOOOUu9m1ePCQukU6Oogl1Rb4WQ_56wBD',
                                production: 'AVKZ00wV3OOCYXiAhaypTtA9r4-0EK3CIZqW8Z0xJmmBZCuLOOOUu9m1ePCQukU6Oogl1Rb4WQ_56wBD'
                              },

                              payment: function (data, actions) {
                                return actions.payment.create({
                                  payment: {
                                    transactions: [
                                      {
                                        amount: {
                                          total: '0.01',
                                          currency: 'USD'
                                        }
                                      }
                                    ]
                                  }
                                });
                              },

                              onAuthorize: function (data, actions) {
                                return actions.payment.execute()
                                  .then(function () {
                                    window.alert('Payment Complete!');
                                  });
                              }
                              }, '#paypal-button-container');
                              </script>
                              <br>
                            </div>
                          </div>
                        </div>
                    </div><br><br>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--end modal-->