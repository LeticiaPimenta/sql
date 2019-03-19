<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/examples/bg2.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Todos os Pedidos </h2>
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
               <table class="table">
                  <thead>
                     <tr>
                        <th class="text-center">#</th>
                        <th>Cliente</th>
                        <th>Produtos</th>
                        <th>Status</th>
                     
                        <th class="text-right">Ações</th>
                     </tr>
                  </thead>
               </table>
               <table class="table"  >
                 
                  <tbody >
                     <tr ng-repeat="(hash ,carrinho) in carts">
                        
                        <td class="text-center">#{{hash}}</td>
                        <td>{{carrinho.name}}</td>
                        <td>
                          
                           
                              {{carrinho.valor}} 
                              <a href="/caixa/nfe/{{carrinho.id}}">Registrar Nota</a>
                           
                        
                          
                        </td>
                        <td> Loja :{{carrinho.shop}}</td>
      
                        <td class="td-actions text-right">
                           <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="" ng-click="atender(produto.user, carrinho.$id ,chave_carrinho,produto.value ,produto.user_name, produto.name , produto)">
                                 <i class="material-icons">edit</i>
                              </button>
                           <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                           <i class="material-icons">assignment</i>
                           </button>
                           <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                           <i class="material-icons">close</i>
                           </button>
                        </td>
                     </tr>
                  </tbody>
               </table>

               <a href="/attendant/atender/<?php echo $loja;?>/1">
               <button type="button" class="btn btn-success btn-round" >Pedidos a serem atendidos<i class="material-icons">keyboard_arrow_right</i>
               </button>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>