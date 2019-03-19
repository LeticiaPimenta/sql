
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
      <div class="container">
        <div class="row">
          <!--Start carouse-->
            <div class="card card-raised card-carousel" style="margin: 20%; margin-top: 30px; width: 80%; margin-bottom: 8%;">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/img/frappe.png" alt="First slide">
                <!--    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4> 
                    </div> -->
                  </div>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="/assets/img/chocomaltine.png" alt="Second slide">
                <!--    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Somewhere Beyond, United States
                      </h4>
                    </div> -->
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/assets/img/delicia-de-coco.png" alt="Third slide">
                <!--    <div class="carousel-caption d-none d-md-block">
                      <h4>
                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                      </h4>
                    </div> -->
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <i class="material-icons">keyboard_arrow_left</i>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <i class="material-icons">keyboard_arrow_right</i>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!--End carouse-->    

          <div class="col-md-3" id="1" ng-repeat="product in products">
            <div class="card card-product card-plain">
              <div class="card-header card-header-image">
                <a href="#">
                  <img ng-src="{{product.PRO_IMAGEM}}" alt="">
                </a>
              </div>
              <div class="card-body text-center">
                <h4 class="card-title">
                  <a href="#">{{product.PRO_DESCRICAO}}</a>
                </h4>
                <p class="card-description">{{product.PRO_DESCRICAO}}</p>
              </div>
              <div class="card-footer">
                <div class="price-container">
                  <span class="price price-new">R$ {{product.PNI_VALOR}}</span>
                </div>
                <div class="stats ml-auto">                  
                  <button type="button" class="btn btn-warning" ng-click="modalPedido(product.PRO_CODIGO,product.PRO_DESCRICAO,product.PNI_VALOR)" data-toggle="modal" data-target="#smallAlertModal">Pedir</button>
                  <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-link btn-rose" data-original-title="Saved to Wishlist">
                    <i class="material-icons">favorite</i>
                  </button>
                </div>
              </div>
            </div>
          </div>
    <!--  <div class="col-md-4">
            <div class="card card-product card-plain">
              <div class="card-header card-header-image">
                <a href="#pablo">
                  <img src="/assets/img/examples/sanduba-bigben.jpg" alt="">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Sanduba BigBen</h4>
                <p class="card-description">The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.</p>
              </div>
              <div class="card-footer">
                <div class="price-container">
                  <span class="price price-old"> €1,430</span>
                  <span class="price price-new">€743</span>
                </div>
                <div class="stats ml-auto">
                  <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-link btn-rose" data-original-title="Saved to Wishlist">
                    <i class="material-icons">favorite</i>
                  </button>
                </div>
              </div>
            </div>
          </div> -->
    <!--  <div class="col-md-4">
            <div class="card card-product card-plain">
              <div class="card-header card-header-image">
                <a href="#pablo">
                  <img src="/assets/img/examples/bolo_de_cenoura-1.jpg" alt="">
                </a>
              </div>
              <div class="card-body">
                <h4 class="card-title">Bolo de Cenoura</h4>
                <p class="card-description">The structured shoulders and sleek detailing ensure a sharp silhouette. Team it with a silk pocket square and leather loafers.</p>
              </div>
              <div class="card-footer">
                <div class="price-container">
                  <span class="price price-old"> €1,430</span>
                  <span class="price price-new">€743</span>
                </div>
                <div class="stats ml-auto">
                  <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-link btn-rose" data-original-title="Saved to Wishlist">
                    <i class="material-icons">favorite</i>
                  </button>
                </div>
              </div>
            </div>
        </div> -->
        </div>
      </div>
   
    <!-- section -->
<!--    <div class="section">
      <div class="container" id="2">
        <h2 class="section-title">Mais Amados</h2>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3" ng-repeat="product in produtos | filter:{ Peso : '2' }">
                <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                  <div class="card-header card-header-image">
                    <a href="#">
                    <img ng-src="{{product.PRO_IMAGEM}}" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">{{product.PRO_DESCRICAO}}</h4>
                    </a>
                  <p class="card-description">{{product.PRO_DESCRICAO}}</p>
                  </div>
                  <div class="card-footer">
                <div class="price-container">
                  <span class="price price-new">R$ {{product.PNI_VALOR}}</span>
                </div>
                <div class="stats ml-auto">
                  <button type="button" class="btn btn-warning" ng-click="modalPedido(product.PRO_CODIGO,product.PRO_DESCRICAO,product.PNI_VALOR)" data-toggle="modal" data-target="#smallAlertModal">Pedir</button>
                  <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-link btn-rose" data-original-title="Saved to Wishlist">
                    <i class="material-icons">favorite</i>
                  </button>
                </div>
              </div>
                </div> -->
                <!-- end card -->
            <!--  </div> -->
          <!--    <div class="col-md-3 ml-auto mr-auto">
                <button rel="tooltip" class="btn btn-warning btn-round" data-original-title="" title="">Mais produtos...</button>
              </div> -->
  <!--          </div>
          </div>
        </div>
        <br>       
      </div> -->
    
    <!-- section -->

<!-- section -->
    <div class="section">
      <div class="container" id="3">
        <h2 class="section-title">{{nome}}</h2>
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-3" ng-repeat="product in produtos | filter:{ Peso : '3' }">
                <div class="card bg-warning">
                      <div class="card-body ">
                        <h5 class="card-category card-category-social">
                          <i class="fa fa-coffee"></i> 
                        </h5>
                        <h4 class="card-title">
                          <a href="">{{product.PRO_DESCRICAO}}</a>
                        </h4>
                        <p class="card-description">
                          <span class="price price-new">R$ {{product.PNI_VALOR}}</span>
                        </p>
                        <div class="card-stats justify-content-center">
                          <button type="button" class="btn btn-white btn-round" ng-click="modalPedido(product.PRO_CODIGO,product.PRO_DESCRICAO,product.PNI_VALOR)" data-toggle="modal" data-target="#smallAlertModal">Pedir</button>                          
                        </div>
                      </div>
                    </div>
          <!--      <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                  <div class="card-header card-header-image">
                    <a href="#">
                    <img ng-src="{{product.image}}" alt="">
                    </a>
                  </div>
                  <div class="card-body">
                    <a href="#">
                      <h4 class="card-title">{{product.PRO_DESCRICAO}}</h4>
                    </a>
                    <p class="card-description">{{product.PRO_DESCRICAO}}</p>
                  </div>
                  <div class="card-footer">
                <div class="price-container">
                  <span class="price price-new">R$ {{product.PNI_VALOR}}</span>
                </div>
                <div class="stats ml-auto">
                  <button type="button" class="btn btn-warning" ng-click="modalPedido(product.$id,product.text,product.value)" data-toggle="modal" data-target="#smallAlertModal">Pedir</button>
                  <button type="button" rel="tooltip" title="" class="btn btn-just-icon btn-link btn-rose" data-original-title="Saved to Wishlist">
                    <i class="material-icons">favorite</i>
                  </button>
                </div>
              </div>
                </div> -->
                <!-- end card -->
              </div>
          <!--    <div class="col-md-3 ml-auto mr-auto">
                <button rel="tooltip" class="btn btn-warning btn-round" data-original-title="" title="">Mais produtos...</button>
              </div> -->
            </div>
          </div>
        </div>
        <br>       
      </div>
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

  <!-- modalInicial-->
      <div class="modal fade show" id="noticeModal" tabindex="-1" role="dialog" style="padding-right: 15px; display: block; overflow-y: scroll;" ng-show='modal_intro == 1'>
        <div class="modal-dialog modal-notice" role="document" style="position: relative;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Já conhece nosso App?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" ng-click="cancelarModalIntroBtn()">
                <i class="material-icons">clear</i>
              </button>
            </div>
            <div class="modal-body">
              <div class="instruction">
                <div class="row">
                  <div class="col-md-8">
                    <strong>1. Faça seu pedido</strong>
                    <p>Primeiro escolha seu pedido e clique em "Pedir". Depois em continuar para ir para seu carrinho.</p>
                  </div>
                  <div class="col-md-4">
                    <div class="picture">
                      <img src="/assets/img/modalpedir.png" alt="Thumbnail Image" class="rounded img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="instruction">
                <div class="row">
                  <div class="col-md-8">
                    <strong>2. Finalize sua compra</strong>
                    <p>Vá para "Meus pedidos" e clique me "Finalizar Compra". Escolha seu método de pagamento e finalize sua compra.</p>
                  </div>
                  <div class="col-md-4">
                    <div class="picture">
                      <img src="/assets/img/modal_pedido.png" alt="Thumbnail Image" class="rounded img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <p>Pronto! Agora é só aguardar seu pedidos em sua mesa.</p>
            </div>
            <div class="modal-footer text-center">
              <div class="form-check" style="margin-right: 100px;">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" ng-click="cancelarModalIntro()" value=""> Não mostrar novamente
                  <span class="form-check-sign">
                    <span class="check"></span>
                  </span>
                </label>
              </div>
              <button type="button" class="btn btn-warning btn-round" data-dismiss="modal" ng-click="cancelarModalIntroBtn()">Veja nosso cardápio!</button>
            </div>
          </div>
        </div>
      </div> 
      <!-- end modalInicial -->