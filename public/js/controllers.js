angular.module('starter.controllers', ['ui.router'])

.controller('AppCtrl', function($scope, $http, $timeout) {

  // With the new view caching in Ionic, Controllers are only called
  // when they are recreated or on app start, instead of every page change.
  // To listen for when this page is active (for example, to refresh data),
  // listen for the $ionicView.enter event:
  //$scope.$on('$ionicView.enter', function(e) {
  //});

  // Form data for the login modal
  $scope.loginData = {};

  // Create the login modal that we will use later
 

  // Perform the login action when the user submits the login form
  $scope.doLogin = function() {
    console.log('Doing login', $scope.loginData);
    // Simulate a login delay. Remove this and replace with your login
    // code if using a login system
    $timeout(function() {
      $scope.closeLogin();
    }, 1000);
  };

  $http.get('/usuarios_chaves').then(function(ref) {
    console.log(ref);
    $scope.carregados = ref.data;
    console.log($scope.carregados);
  });

  $scope.usuario = usuario;
  $http.get('/logados').then(function(ref) {
    console.log(ref);
    $scope.logados = ref.data;   
  });

})
.controller('HomeCtrl', function($scope, $http) {

    var usuario_logado_id = usuario.id;


    var data1 = [{
            label: "Pending",
            color: "#9289ca",
            data: [["Pj1", 86], ["Pj2", 16]]
        }, {
            label: "Assigned",
            color: "#7266ba",
            data: [["Pj1", 49], ["Pj2", 81]]
        }, {
            label: "Completed",
            color: "#564aa3",
            data: [["Pj1", 29], ["Pj2", 26]]
        }];

//$.plot($(".chart-bar-stackedv2"), 
  //       data1);

 
    $http.get('/dashboard').then(function(ref) {
        console.log(ref.data);
        $scope.dados = ref.data;
       
    });

    $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
        });


  

})

.controller('RoletasCtrl', function($scope, $http, $firebaseArray, $firebaseObject) {

  $scope.getUsuario = function(obj){
    const key = Object.Keys(obj)[0];
    return obj[key].usuario;
  }

  $http.get('/logados').then(function(ref) {
        console.log(ref);
        $scope.logados = ref.data;
       
    });


  $http.get('/roleta').then(function(ref) {
      console.log(ref);
      $scope.inscritos = ref.data;
  });


  var ref = firebase.database().ref().child("roletas");
  $scope.inscritos = $firebaseArray(ref);
  $scope.sortear_roleta = function(id_roleta) {
  $http.get('/sortear_entrega/'+id_roleta).then(function(ref) {
    //console.log(ref);
        //alert(ref.data);
        //alert(id_roleta);
        $scope.sorteados = ref.data;
       // var apagar = firebase.database().ref("roletas/"+id_roleta);
        //$scope.apagar = $firebaseObject(apagar);
        //$scope.apagar.$remove();
    });
  }

  $scope.iniciar_roleta = function() {
        //$scope.count++;

      $http.get('/pipe/criar_roleta').then(function(ref) {
                console.log(ref);
                $scope.roleta = ref.data;
                if(ref.data != 0){
                  $scope.nova_roleta = $firebaseArray(firebase.database().ref().child("roletas/"+ref.data+"/dados"));
                  $scope.nova_roleta.$add({
                    points : 1,
                    name : 'roleta '+$scope.roleta,
                    id_parent : $scope.roleta,
                    criado : new Date().getTime()
                  });
                }else{
                  alert("ja temos limite de roletas rodando");
                }
            });
      
    };

    

})
.controller('DashCtrl', function($scope, $http) {

  //alert($stateParams.leadId);
  
})
/*.controller('LeadCtrl', function($scope, $http) {

  //alert($stateParams.leadId);
  $http.get('/pipe/lead/'+$stateParams.leadId).then(function(ref) {
      console.log(ref);
      $scope.lead = ref.data;
  });
  
})*/
.controller('AppointmentsCtrl', function($scope, $http, $firebaseArray, $firebaseObject) {

  //alert($stateParams.leadId);
  $http.get('/pipe/appointments').then(function(ref) {
      console.log(ref);
      $scope.appointments = ref.data;
  });

  $http.get('/logados').then(function(ref) {
      console.log(ref);
      $scope.logados = ref.data;
  });

  var ref = firebase.database().ref().child("roletas");
  $scope.inscritos = $firebaseArray(ref);
  $scope.sortear_roleta = function(id_roleta) {
    $http.get('/sortear_entrega/'+id_roleta).then(function(ref) {
        //console.log(ref);
        //alert(ref.data);
        //alert(id_roleta);
        $scope.sorteados = ref.data;
       // var apagar = firebase.database().ref("roletas/"+id_roleta);
        //$scope.apagar = $firebaseObject(apagar);
        //$scope.apagar.$remove();
    });
  }

  $scope.iniciar_roleta = function() {
        //$scope.count++;

      $http.get('/pipe/criar_roleta').then(function(ref) {
          console.log(ref);
          $scope.roleta = ref.data;
          if(ref.data != 0){
            $scope.nova_roleta = $firebaseArray(firebase.database().ref().child("roletas/"+ref.data+"/dados"));
            $scope.nova_roleta.$add({
              points : 1,
              name : 'roleta '+$scope.roleta,
              id_parent : $scope.roleta,
              criado : new Date().getTime()
            });
          }else{
            alert("ja temos limite de roletas rodando");
          }
      });
    };
  
})

.controller('UsuarioCtrl', function($scope, $http, $stateParams, $firebaseArray, $firebaseObject) { 

      var messageria = firebase.database().ref("messageria/"+$stateParams.usuarioId);
      $scope.messageria = $firebaseObject(messageria); 
        /*    $scope.messageria.$loaded(function() {
                alert($scope.messageria);
                console.log($scope.messageria);
          });
        */
        $http.get('pipe/usuario/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
        });

        $scope.aceitar = function() {
          $http.get('/pipe/aceitar/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
            });
          $scope.messageria.status = 4;
          $scope.messageria.$save();
          alert("vai aceitar sua oferta");
          $http.get('pipe/usuario/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
          return false;
        }

        $scope.contato = function(apontamento) {
          $http.get('/pipe/contato/'+apontamento).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 6;
          $scope.messageria.$save();
          alert("Aguarde novo sorteio");
          $http.get('pipe/usuario/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
           return false;
        }

        $scope.pegar_dados = function() {
          $http.get('/pipe/dados/'+$stateParams.usuarioId).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 8;
          $scope.messageria.$save();
          alert("Agendamos Mesmo essa visita");
          $http.get('pipe/usuario/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
           return false;
        }  

        $scope.agendar = function() {
          $http.get('/pipe/agendar/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
            });
          $scope.messageria.status = 0;
          $scope.messageria.$save();
          alert("Aguarde novo sorteio");
           return false;
        }  

        $scope.encerrar = function(apontamento) {
          $http.get('/pipe/encerrar/'+apontamento).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 0;
          $scope.messageria.$save();
          $http.get('pipe/usuario/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
          alert("Encerrado");
           return false;
        }

        function callzinho(){
         // alert('troxa');
          if($scope.messageria.status == 2 || $scope.messageria.status == 4 || $scope.messageria.status == 6 ){
            //alert($scope.messageria.status);
            $http.get('/pipe/apontado/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
                $scope.lead_apontado = ref.data;
            });
          }
          $http.get('pipe/usuario/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });

        }
        $scope.$watch('messageria.status', callzinho);
      //$scope.count++;
      $scope.roletas = $firebaseArray(firebase.database().ref().child("roletas"));

      $scope.inscrever = function(roleta) {
      console.log(roleta);
      $http.post('/pipe/inscrever', {"roleta_id":roleta , "user_id":$stateParams.usuarioId}).then(function(ref) {
        console.log(ref);
        if(ref.data != 0){

          var ref = firebase.database().ref("roletas/"+roleta+"/inscritos/"+$stateParams.usuarioId);
          // create a synchronized array
          $scope.roleta = $firebaseArray(ref);
          // add new items to the array
          // the message is automatically added to our Firebase database!
          // $scope.addCorretor = function() {
          $scope.roleta.$add({
            usuario: $stateParams.usuarioId,
            hora : new Date().getTime()
          });
          $scope.messageria.status = 1;
          $scope.messageria.$save();
          alert("Ok , voce esta inscrito nessa roleta");
          $http.get('pipe/usuario/'+$stateParams.usuarioId).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
        }else{
          alert("termine a roleta iniciada");
        }
        

      });

       return false; 
    };
      
})

.controller('MeuPerfilCtrl', function($scope, $http, $stateParams, $firebaseArray, $firebaseObject) { 

      var usuario_logado_id = usuario.id;

       $http.get('/dashboard').then(function(ref) {
        console.log(ref.data);
        $scope.dados = ref.data;
       
    });

      var messageria = firebase.database().ref("messageria/"+usuario_logado_id);
      $scope.messageria = $firebaseObject(messageria); 
        /*    $scope.messageria.$loaded(function() {
                alert($scope.messageria);
                console.log($scope.messageria);
          });
        */
        $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
        });

        $scope.aceitar = function() {
          $http.get('/pipe/aceitar/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
            });
          $scope.messageria.status = 4;
          $scope.messageria.$save();
          alert("vai aceitar sua oferta");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
          return false;
        }

        $scope.contato = function(apontamento) {
          $http.get('/pipe/contato/'+apontamento).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 6;
          $scope.messageria.$save();
          alert("Aguarde novo sorteio");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
           return false;
        }

        $scope.pegar_dados = function() {
          $http.get('/pipe/dados/'+usuario_logado_id).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 8;
          $scope.messageria.$save();
          alert("Agendamos Mesmo essa visita");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
           return false;
        }  

        $scope.agendar = function() {
          $http.get('/pipe/agendar/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
            });
          $scope.messageria.status = 0;
          $scope.messageria.$save();
          alert("Aguarde novo sorteio");
           return false;
        }  

        $scope.encerrar = function(apontamento) {
          $http.get('/pipe/encerrar/'+apontamento).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 0;
          $scope.messageria.$save();
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
          alert("Encerrado");
           return false;
        }

        function callzinho(){
         // alert('troxa');
          if($scope.messageria.status == 2 || $scope.messageria.status == 4 || $scope.messageria.status == 6 ){
            //alert($scope.messageria.status);
            $http.get('/pipe/apontado/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.lead_apontado = ref.data;
            });
          }
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });

        }
        $scope.$watch('messageria.status', callzinho);
      //$scope.count++;
      $scope.roletas = $firebaseArray(firebase.database().ref().child("roletas"));

      $scope.inscrever = function(roleta) {
      console.log(roleta);
      $http.post('/pipe/inscrever', {"roleta_id":roleta , "user_id":usuario_logado_id}).then(function(ref) {
        console.log(ref);
        if(ref.data != 0){

          var ref = firebase.database().ref("roletas/"+roleta+"/inscritos/"+usuario_logado_id);
          // create a synchronized array
          $scope.roleta = $firebaseArray(ref);
          // add new items to the array
          // the message is automatically added to our Firebase database!
          // $scope.addCorretor = function() {
          $scope.roleta.$add({
            usuario: usuario_logado_id,
            hora : new Date().getTime()
          });
          $scope.messageria.status = 1;
          $scope.messageria.$save();
          alert("Ok , voce esta inscrito nessa roleta");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
        }else{
          alert("termine a roleta iniciada");
        }
        

      });

       return false; 
    };
      
})

.controller('RoletaCtrl', function($scope, $http, $stateParams, $firebaseArray, $firebaseObject) { 

      var usuario_logado_id = usuario.id;

      var messageria = firebase.database().ref("messageria/"+usuario_logado_id);
      $scope.messageria = $firebaseObject(messageria); 
        /*    $scope.messageria.$loaded(function() {
                alert($scope.messageria);
                console.log($scope.messageria);
          });
        */
        $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
        });

        $scope.aceitar = function() {
          $http.get('/pipe/aceitar/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
            });
          $scope.messageria.status = 4;
          $scope.messageria.$save();
          alert("vai aceitar sua oferta");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
          return false;
        }

        $scope.recusar = function() {
          $http.get('/pipe/recusar/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
            });
          $scope.messageria.status = 0;
          $scope.messageria.$save();
          alert("vai recusar oferta");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
          return false;
        }


        $scope.contato = function(apontamento) {
          $http.get('/pipe/contato/'+apontamento).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 6;
          $scope.messageria.$save();
          alert("Aguarde novo sorteio");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
           return false;
        }

        $scope.pegar_dados = function() {
          $http.get('/pipe/dados/'+usuario_logado_id).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 8;
          $scope.messageria.$save();
          alert("Agendamos Mesmo essa visita");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
           return false;
        }  

        $scope.agendar = function() {
          $http.get('/pipe/agendar/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
            });
          $scope.messageria.status = 0;
          $scope.messageria.$save();
          alert("Aguarde novo sorteio");
           return false;
        }  

        $scope.encerrar = function(apontamento) {
          $http.get('/pipe/encerrar/'+apontamento).then(function(ref) {
            console.log(ref);
          });
          $scope.messageria.status = 0;
          $scope.messageria.$save();
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
          alert("Encerrado");
           return false;
        }

        function callzinho(){
         // alert('troxa');
          if($scope.messageria.status == 2 || $scope.messageria.status == 4 || $scope.messageria.status == 6 ){
            //alert($scope.messageria.status);
            $http.get('/pipe/apontado/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.lead_apontado = ref.data;
            });
          }
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });

        }
        $scope.$watch('messageria.status', callzinho);
      //$scope.count++;
      $scope.roletas = $firebaseArray(firebase.database().ref().child("roletas"));

  

      $scope.inscrever = function(roleta) {
      
      $http.post('/pipe/inscrever', {"roleta_id":roleta , "user_id":usuario_logado_id}).then(function(ref) {
        console.log(ref);
        if(ref.data != 0){

          var ref = firebase.database().ref("roletas/"+roleta+"/inscritos/"+usuario_logado_id);
          // create a synchronized array
          $scope.roleta = $firebaseArray(ref);
          // add new items to the array
          // the message is automatically added to our Firebase database!
          // $scope.addCorretor = function() {
          $scope.roleta.$add({
            usuario: usuario_logado_id,
            hora : new Date().getTime()
          });
          $scope.messageria.status = 1;
          $scope.messageria.$save();
          alert("Ok , voce esta inscrito nessa roleta");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
        }else{
          alert("termine a roleta iniciada");
        }
        

      });

       return false; 
    };
      
      $scope.sair = function(roleta) {
      console.log(roleta);
      $http.post('/pipe/sair', {"roleta_id":roleta , "user_id":usuario_logado_id}).then(function(ref) {
        console.log(ref);
        if(ref.data != 0){

          var ref = firebase.database().ref("roletas/"+roleta+"/inscritos/"+usuario_logado_id);
          // create a synchronized array
          $scope.roleta = $firebaseArray(ref);
          // add new items to the array
          // the message is automatically added to our Firebase database!
          // $scope.addCorretor = function() {
          //$scope.roleta.$add({
          //usuario: usuario_logado_id,
          //hora : new Date().getTime()
          //});
          $scope.messageria.status = 0;
          $scope.messageria.$save();
          alert("Voce saiu desta roleta");
          $http.get('pipe/usuario/'+usuario_logado_id).then(function(ref) {
                console.log(ref);
                $scope.usuario = ref.data.profile;  
                $scope.apontamentos = ref.data.apontamentos;  
                $scope.pipedrive = ref.data.profile_pipedrive;  
          });
        }else{
          alert("termine a roleta iniciada");
        }
        

      });

       return false; 
    };
})


.controller('ProdutosCtrl', function($scope, $stateParams, $http) {


    $scope.mostrar_link = function(id){
      //alert("Mande o link que vamos copiar por email , whatsapp ou qualquer mensagem");
      var copyText = document.getElementById("usuario_"+id);
      copyText.select();
      document.execCommand("copy");
      alert("Url de confirmação : " + copyText.value);

       // alert("https://roleta.capriatti.com.br/acesso/"+copyText.value);
       // return;
     } 

   $http.get('/pipe/usuarios').then(function(ref) {
                console.log(ref);
                $scope.usuarios = ref.data;
               
            });

   $http.get('/usuarios').then(function(ref) {
                console.log(ref);
                $scope.usuarios_sistema = ref.data;
               
            });


})
.controller('LeadsCtrl', function($scope, $stateParams, $http) {
   $http.get('/pipe/leads').then(function(ref) {
                console.log('ref: ', ref);
                $scope.leads = ref.data;
               
            });
})

.controller('LeadCtrl', function($scope, $stateParams, $http) {

  //alert($stateParams.leadId);

  $http.get('/pipe/apontamento/'+$stateParams.leadId).then(function(ref) {
      //console.log(ref);
     // console.log("cueh");
      $scope.apontamento = ref.data;
      $http.get('/pipe/lead/'+$scope.apontamento.pipedrive_deal).then(function(ref) {
        //console.log(ref.data);
        $scope.lead = ref.data;
        var chaves = Object.keys($scope.lead);

        for (var i = chaves.length - 1; i >= 0; i--) {
          try {
              var str = ref.data[chaves[i]].substring(0, 37);
              if(str == 'http://rdstation.com.br/leads/public/'){
                console.log(ref.data[chaves[i]]);
                $scope.rdstation = ref.data[chaves[i]];
              }
          }
          catch(err) {
              //console.log(err);
          }

        }
        console.log("aqui");
    });
  });
  
})

.controller('PlaylistCtrl', function($scope, $stateParams) {
});
