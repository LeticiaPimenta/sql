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
                        <td>{{item.hora | date:'MM/dd @ h:mma' }}</td>
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