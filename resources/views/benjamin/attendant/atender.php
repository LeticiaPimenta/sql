<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('/assets/img/examples/bg2.jpg');">
   <div class="container">
      <div class="row">
         <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Todos os Pedidos</h2>
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
                        <th class="text-center">#</th>
                        <th>Cliente</th>
                        <th>Produto</th>
                        <th>Hora</th>
                        <th class="text-right">Ações</th>
                     </tr>
                  </thead>
                  <tbody >
                     <tr ng-repeat="origins in atendimentos">
                        <td class="text-center">1</td>
                        <td>{{origins.user_name}}</td>
                        <td>{{origins.name}}</td>
                        <td>{{origins.hora | date:'h:mma' }} @ comanda :{{origins.comanda}}</td>
                        <td class="td-actions text-right">
                           <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="" ng-click="recebido(origins.user,origins.product,origins.$id , origins.value , origins.name , origins.user_name )">
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
               <a href="/atendente/atender/<?php echo $loja;?>/">
               <button type="button" class="btn btn-success btn-round" >Pedidos a serem atendidos<i class="material-icons">keyboard_arrow_right</i>
               </button>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>