<?php
require '../resources/views/caixa/header.php';
?>

<body class="shopping-cart sidebar-collapse" ng-controller="SampleCtrl">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
      <div class="container">
        <div class="navbar-translate">
          <img src="/assets/img/benjamin.png" style="width: 20%; height: auto;">        
        </div>
        <form class="form-inline auto" autocomplete="on">
            <div class="form-group has-warning bmd-form-group">
              <input type="text" class="form-control" placeholder="Busca" autocomplete="on" ng-model="busca">
            </div>
            <button type="button" class="btn btn-warning btn-raised btn-fab btn-round" autocomplete="on">
              <i class="material-icons">search</i>
            </button>
        </form>
      </div>
    </nav>
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
                <table class="table"  ng-repeat="origins in atendimentos">
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th>Cliente</th>
                        <th>Produto</th>
                        <th>Hora</th>
                        <th class="text-right">Valor</th>
                        <th class="text-right">Ações</th>
                      </tr>
                    </thead>
                    <tbody ng-repeat="items in origins">
                      <tr ng-repeat="(key,item) in items">
                        <td class="text-center">1</td>
                        <td>{{users_id[item.user].configs.name}}</td>
                        <td>{{item.name}}</td>
                        <td>{{item.hora | date:'h:mma' }} @ comanda :{{item.comanda}}</td>
                        <td class="text-right">R$ {{item.value}}</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="" ng-click="recebido(item.user,item.product,key , item.value)">
                            <i class="material-icons">local_cafe</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                            <i class="material-icons">edit</i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                            <i class="material-icons">close</i>
                          </button>
                        </td>
                      </tr>                                          
                    </tbody>
                  </table>
                  <button type="button" class="btn btn-success btn-round" >Meus pedidos a serem atendidos <i class="material-icons">keyboard_arrow_right</i>
                      </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    require '../resources/views/caixa/footer.php';
  ?>