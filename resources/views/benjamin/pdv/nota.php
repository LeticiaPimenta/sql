
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/benjamin1.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">Consulte esse Qr no olho na nota</h1>
          
         
          
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div id="cards" class="cd-section">
      
      <div class="section-white">
       
        <!--     *********    END BLOG CARDS      *********      -->
        <!--     *********    PROFILE CARDS     *********      -->
        <div class="cards">
          <div class="container">
            <div class="row">
      
              <div class="col-md-12">
                <div class="card card-profile card-plain">
                  
                  <div class="card-body ">
                   <?php 
                        $qr = new \App\Classes\QrCode;
                        echo $qr->gerar($pagamento->nfe,$pagamento->id);
       // QRcode::png($pagamento->nfe, 'nota.png', 'H', $matrixPointSize, 2);    
   ?>
                    	<center><img src="/notas/pagamento_<?php echo $pagamento->id;?>.png"></center>
    					         
    				        </p>
                   
                   
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END PROFILE CARDS      *********      -->
      </div>
    </div>
  </div>