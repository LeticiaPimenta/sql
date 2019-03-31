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
            <br/><p>
        <button class="js-push-button btn-warning btn" disabled>
          Habilitar as mensagens
        </button>
    </p><small><div class="js-curl-command" style="display: none;"></div></small>
            <div class="table-responsive">
               <table class="table"  >
                  <thead>
                     <tr>
                        <th>Produto</th>
                        <th class="text-right">Ações</th>
                     </tr>
                  </thead>
                  <tbody >

                     <tr ng-repeat="compra in retirar" ng-show="compra.products">
                        <td><span ng-repeat="produto in compra.products track by $index" ng-show="produto && produto.value > 0"><i class="material-icons" ng-show="compra.shop == 'gift'">card_giftcard</i> &nbsp; {{produto.name}} <small ng-show="compra.shop == 'gift'"> &nbsp; - &nbsp; Presenteado por {{produto.user_name}}</small><br></span></td>
                        <td class="td-actions text-right" >
                          <span ng-repeat="(ordem,produto) in compra.products track by $index" ng-show="produto  && produto.value > 0">

                           <button type="button" rel="tooltip" class="btn btn-warning btn-sm" data-original-title="" title="" ng-click="pedir_retirar(produto , ordem , compra.$id)">
                           Retirar
                           </button>
                           <button type="button" rel="tooltip" class="btn btn-success btn-sm" data-original-title="" title="" ng-click="presentear_retirar(produto , ordem , compra.$id)">
                           Presentear
                           </button>
                          </br>
                          </span>
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

          <h4 ng-show="loja">Voce está na Loja  {{loja}} </h4>
          <div ng-hide="loja"><strong>VOCE NAO SELECIONOU SUA LOJA, </strong><br><a href="/client/qrunidade">Leia o QR de UMA MESA </a><br>OU selecione uma na listagem !</div>
          <span ng-show="loja">
          Se estiver em loja errada ! <a href="/client/qrunidade">vai pra Select unidade</a></span>
          <br>
          <select id="loja_selecionado" ng-change="mudar_loja()" ng-model="loja">
            <option  ng-repeat="loja in unidades" value="{{loja.loja}}">Loja {{loja.loja}} - {{loja.nome}}</option>
          </select>
          <!--  <img  ng-src="https://benjamin-a-padaria.herokuapp.com/assets/img/produtos/croissant_H&C.png" width="50%" alt="{{ref_produto_quick.PRO_DESCRICAO}}" > -->
          <br>
          <span>Obs do pedido : <br><textarea id="obs_pedido" placeholder="Observações , Ex: 
          Sem cebola , 
          sem açucar , 
          com adoçante" rows="4"></textarea></span>
        </div>
        
        <div class="modal-footer">
          <div class="container">{{produto_solicitado.name}}</div>
          <button type="button" class="btn btn-warning" ng-click="solicitar()" data-toggle="modal" ng-show="loja" data-target="#modalSolicitado" data-dismiss="modal">Pedir</button>
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

      <!-- modal -->
      <div class="modal fade" id="modalPresentear" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
         <div class="modal-dialog modal-small" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" ng-click="cancelarPedido()" aria-hidden="true"><i class="material-icons">clear</i></button>
               </div>
               <div class="modal-body text-center">
                  <h5>Escolha pra quem vai ser enviado <strong>{{produto_solicitado.name}}</strong></h5>
                  <select id="amigo_selecionado">
                    <option  ng-repeat="indicado in retirar_benamigos" value="{{indicado.id}}">{{indicado.nome}}</option>
                  </select>
               </div>
               <div class="modal-footer justify-content-center">
                  <button type="button" ng-click="enviar()" class="btn btn-success" data-dismiss="modal">
                     Presentear
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

      <script type="text/javascript">
        
        'use strict';

        window.GoogleSamples = window.GoogleSamples || {};
window.GoogleSamples.Config = window.GoogleSamples.Config || {
  gcmAPIKey: 'AAAAhvFtF9A:APA91bES6WRxy_X69FiQt8uBi-DYQz4_x29MTJJX_fDNLMIM-q8eQ8VQRXyeia4XQs6rYuCgFlOORMLIIGzC6Apno0U9TFFtebK4LzLpTQ4Q7QT3XN5gyPZuxmoF9G9Qy0LszXKluO0R'
};


var API_KEY = window.GoogleSamples.Config.gcmAPIKey;
var GCM_ENDPOINT = 'https://android.googleapis.com/gcm/send';

var curlCommandDiv = document.querySelector('.js-curl-command');
var isPushEnabled = false;

// This method handles the removal of subscriptionId
// in Chrome 44 by concatenating the subscription Id
// to the subscription endpoint
function endpointWorkaround(pushSubscription) {
  // Make sure we only mess with GCM
  if (pushSubscription.endpoint.indexOf('https://android.googleapis.com/gcm/send') !== 0) {
    return pushSubscription.endpoint;
  }

  var mergedEndpoint = pushSubscription.endpoint;
  // Chrome 42 + 43 will not have the subscriptionId attached
  // to the endpoint.
  if (pushSubscription.subscriptionId &&
    pushSubscription.endpoint.indexOf(pushSubscription.subscriptionId) === -1) {
    // Handle version 42 where you have separate subId and Endpoint
    mergedEndpoint = pushSubscription.endpoint + '/' +
      pushSubscription.subscriptionId;
  }
  return mergedEndpoint;
}

function sendSubscriptionToServer(subscription) {
  // TODO: Send the subscription.endpoint
  // to your server and save it to send a
  // push message at a later date
  //
  // For compatibly of Chrome 43, get the endpoint via
  // endpointWorkaround(subscription)
  console.log('TODO: Implement sendSubscriptionToServer()');

  var mergedEndpoint = endpointWorkaround(subscription);

  // This is just for demo purposes / an easy to test by
  // generating the appropriate cURL command
  showCurlCommand(mergedEndpoint);
}

// NOTE: This code is only suitable for GCM endpoints,
// When another browser has a working version, alter
// this to send a PUSH request directly to the endpoint
function showCurlCommand(mergedEndpoint) {
  // The curl command to trigger a push message straight from GCM
  if (mergedEndpoint.indexOf(GCM_ENDPOINT) !== 0) {
    console.log('This browser isn\'t currently ' +
      'supported for this demo');
    return;
  }

  var endpointSections = mergedEndpoint.split('/');
  var subscriptionId = endpointSections[endpointSections.length - 1];

  //$http.post(" ).then

  $.post( "/client/subscription_id",{"id":subscriptionId})
  .done(function( data ) {
    console.log( "Data Loaded: " + data );
  });

  var curlCommand = 'curl --header "Authorization: key=' + API_KEY +
    '" --header Content-Type:"application/json" ' + GCM_ENDPOINT +
    ' -d "{\\"registration_ids\\":[\\"' + subscriptionId + '\\"]}"';

  curlCommandDiv.textContent = curlCommand;
}

function unsubscribe() {
  var pushButton = document.querySelector('.js-push-button');
  pushButton.disabled = true;
  curlCommandDiv.textContent = '';

  navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
    // To unsubscribe from push messaging, you need get the
    // subcription object, which you can call unsubscribe() on.
    serviceWorkerRegistration.pushManager.getSubscription().then(
      function(pushSubscription) {
        // Check we have a subscription to unsubscribe
        if (!pushSubscription) {
          // No subscription object, so set the state
          // to allow the user to subscribe to push
          isPushEnabled = false;
          pushButton.disabled = false;
          pushButton.textContent = 'Habilitar notificações';
          return;
        }

        // TODO: Make a request to your server to remove
        // the users data from your data store so you
        // don't attempt to send them push messages anymore

        // We have a subcription, so call unsubscribe on it
        pushSubscription.unsubscribe().then(function() {
          pushButton.disabled = false;
          pushButton.textContent = 'Habilitar notificações';
          isPushEnabled = false;
        }).catch(function(e) {
          // We failed to unsubscribe, this can lead to
          // an unusual state, so may be best to remove
          // the subscription id from your data store and
          // inform the user that you disabled push

          console.log('Unsubscription error: ', e);
          pushButton.disabled = false;
        });
      }).catch(function(e) {
        console.log('Error thrown while unsubscribing from ' +
          'push messaging.', e);
      });
  });
}

function subscribe() {
  // Disable the button so it can't be changed while
  // we process the permission request
  var pushButton = document.querySelector('.js-push-button');
  pushButton.disabled = true;

  navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
    serviceWorkerRegistration.pushManager.subscribe({userVisibleOnly: true})
      .then(function(subscription) {
        // The subscription was successful
        isPushEnabled = true;
        pushButton.textContent = 'Desabilitar notificações';
        pushButton.disabled = false;

        // TODO: Send the subscription subscription.endpoint
        // to your server and save it to send a push message
        // at a later date
        return sendSubscriptionToServer(subscription);
      })
      .catch(function(e) {
        if (Notification.permission === 'denied') {
          // The user denied the notification permission which
          // means we failed to subscribe and the user will need
          // to manually change the notification permission to
          // subscribe to push messages
          console.log('Permission for Notifications was denied');
          pushButton.disabled = true;
        } else {
          // A problem occurred with the subscription, this can
          // often be down to an issue or lack of the gcm_sender_id
          // and / or gcm_user_visible_only
          console.log('Unable to subscribe to push.', e);
          pushButton.disabled = false;
          pushButton.textContent = 'Habilitar notificações';
        }
      });
  });
}

// Once the service worker is registered set the initial state
function initialiseState() {
  // Are Notifications supported in the service worker?
  if (!('showNotification' in ServiceWorkerRegistration.prototype)) {
    console.log('Notifications aren\'t supported.');
    return;
  }

  // Check the current Notification permission.
  // If its denied, it's a permanent block until the
  // user changes the permission
  if (Notification.permission === 'denied') {
    console.log('The user has blocked notifications.');
    return;
  }

  // Check if push messaging is supported
  if (!('PushManager' in window)) {
    console.log('Push messaging isn\'t supported.');
    return;
  }

  // We need the service worker registration to check for a subscription
  navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
    // Do we already have a push message subscription?
    serviceWorkerRegistration.pushManager.getSubscription()
      .then(function(subscription) {
        // Enable any UI which subscribes / unsubscribes from
        // push messages.
        var pushButton = document.querySelector('.js-push-button');
        pushButton.disabled = false;

        if (!subscription) {
          // We aren’t subscribed to push, so set UI
          // to allow the user to enable push
          return;
        }

        // Keep your server in sync with the latest subscription
        sendSubscriptionToServer(subscription);

        // Set your UI to show they have subscribed for
        // push messages
        pushButton.textContent = 'Desabilitar notificações';
        isPushEnabled = true;
      })
      .catch(function(err) {
        console.log('Error during getSubscription()', err);
      });
  });
}

window.addEventListener('load', function() {
  var pushButton = document.querySelector('.js-push-button');
  pushButton.addEventListener('click', function() {
    if (isPushEnabled) {
      unsubscribe();
    } else {
      subscribe();
    }
  });

  // Check that service workers are supported, if so, progressively
  // enhance and add push messaging support, otherwise continue without it.
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/msg-service-worker.js')
    .then(initialiseState);
  } else {
    console.log('Service workers aren\'t supported in this browser.');
  }
});

      </script>