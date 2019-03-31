<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/examples/bg2.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Retire seus pedidos aqui.</h2>
         </div>
      </div>
   </div>
</div>
<div class="main main-raised">
   <div class="container">
      <div class="card card-plain">
         <div class="card-body">
            <br/>
            <div class="table-responsive">
               <table class="table"  >
                  <thead>
                     <tr>
                        <th>Produto</th>
                        <th class="text-right">Ações</th>
                     </tr>
                  </thead>
                  <tbody >

                     <tr ng-repeat="compra in retirar" >
                        <td>{{produtos_id[compra.product].PRO_DESCRICAO}}<br></td>
                        <td class="td-actions text-right" >
                         
                           <button type="button" rel="tooltip" class="btn btn-warning btn-sm" data-original-title="" title="" ng-click="pedir_retirar(produto , ordem , compra.$id)">
                           Retirar
                           </button>
                          </br>
                          
                        </td>
                     </tr>
                   
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>


<div class="modal fade" id="modal_produto" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" style="margin-top: auto;">Vamos preperar seu pedido</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">

          <h4>Voce está na Loja :  1 </h4>
          <a href="/client/qrunidade">
          se estiver em loja errada ! vai pra Select unidade</a>
          <!--  <img  ng-src="https://benjamin-a-padaria.herokuapp.com/assets/img/produtos/croissant_H&C.png" width="50%" alt="{{ref_produto_quick.PRO_DESCRICAO}}" > -->
        </div>
        <div class="modal-footer">
          <div class="container">{{produto_solicitado.name}}</div>
          <button type="button" class="btn btn-warning" ng-click="solicitar()" data-toggle="modal" data-target="#modalSolicitado" data-dismiss="modal">Pedir</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- modal -->
      <div class="modal fade" id="modalSolicitado" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
         <div class="modal-dialog modal-small" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" ng-click="cancelarPedido()" aria-hidden="true"><i class="material-icons">clear</i></button>
               </div>
               <div class="modal-body text-center">
                  <h5>Seu pedido foi aceito. Aguarde um garçom ou dirija se a uma unidade! </h5>
               </div>
               <div class="modal-footer justify-content-center">
                  <button type="button" class="btn btn-link" data-dismiss="modal">
                     Continuar
                     <div class="ripple-container">
                        <div class="ripple-decorator ripple-on ripple-out" style="left: 57.5px; top: 22.65px; background-color: rgb(153, 153, 153); transform: scale(12.875);">
                        </div>
                     </div>
                  </button>
                  <button type="button" class="btn btn-danger btn-link" ng-click="cancelarPedido()" data-dismiss="modal">
                     Desfazer
                     <div class="ripple-container"></div>
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- end modal -->