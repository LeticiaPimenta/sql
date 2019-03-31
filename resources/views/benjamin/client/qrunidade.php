<script type="module">
    import QrScanner from "/qr/qr-scanner.min.js";
    const video = document.getElementById('qr-video');
    const debugCheckbox = document.getElementById('debug-checkbox');
    const debugCanvas = document.getElementById('debug-canvas');
    const debugCanvasContext = debugCanvas.getContext('2d');
    const camQrResult = document.getElementById('cam-qr-result');
    const fileSelector = document.getElementById('file-selector');
    const fileQrResult = document.getElementById('file-qr-result');

    function setResult(label, result) {
       // label.textContent = result;
        var comanda = result.split("-");
     //   alert("Sua comando é a "+comanda[1]);
        localStorage.setItem("loja",comanda[0]);
        localStorage.setItem("comanda",comanda[1]);
     //   var user_logado = JSON.parse(localStorage.getItem("usuario"));
       
     //  logado_id = user_logado.user_token;
         window.location.replace("/client/cardapio/"+comanda[0]);
        
        label.style.color = 'teal';
        clearTimeout(label.highlightTimeout);
        label.highlightTimeout = setTimeout(() => label.style.color = 'inherit', 100);
    }

    // ####### Web Cam Scanning #######

    const scanner = new QrScanner(video, result => setResult(camQrResult, result));
    scanner.start();


    // ####### debug mode related code #######

    //debugCheckbox.addEventListener('change', () => setDebugMode(debugCheckbox.checked));

    function setDebugMode(isDebug) {
        const worker = scanner._qrWorker;
        worker.postMessage({
            type: 'setDebug',
            data: isDebug
        });
        if (isDebug) {
            debugCanvas.style.display = 'block';
            worker.addEventListener('message', handleDebugImage);
        } else {
            debugCanvas.style.display = 'none';
            worker.removeEventListener('message', handleDebugImage);
        }
    }

    function handleDebugImage(event) {
        const type = event.data.type;
        if (type === 'debugImage') {
            const imageData = event.data.data;
            if (debugCanvas.width !== imageData.width || debugCanvas.height !== imageData.height) {
                debugCanvas.width = imageData.width;
                debugCanvas.height = imageData.height;
            }
            debugCanvasContext.putImageData(imageData, 0, 0);
        }
    }
</script>

  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/benjamin1.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">Aponte para o Qr code da comanda</h1>
          
         
          
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
                  <div class="card-avatar">
                    <a href="#pablo">
             
                      <img class="img" onerror="this.src='/assets/img/avatar.png'" ng-src="{{foto}}" src="{{foto}}">
                    </a>
                  </div>
                  <div class="card-body ">
                    <h6 class="card-category text-gray">{{usuario.name}}</h6>
                    <h4 class="card-title">{{usuario.email}}</h4>
                    <p class="card-description">
                    	<center><video muted autoplay playsinline id="qr-video" width="200px"></video></center>
    					         <canvas id="debug-canvas"></canvas>
    				        </p>
                   
                    <a href="/client/select" class="btn btn-warning btn-round btn-lg">Retirar na loja</a>
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