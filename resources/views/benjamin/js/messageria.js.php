 var usuario = localStorage.getItem("usuario_logado");
 $scope.usuario = JSON.parse(localStorage.getItem("usuario_logado"));

var messageria = firebase.database().ref("messageria/"+$scope.usuario.user_token);
$scope.messageria = $firebaseObject(messageria); 
$scope.messageria.status = 0;
$scope.messageria.$save();

function callzinho(){
          console.log($scope.messageria.status);
          if( $scope.messageria.status != 0){
          	//alert($scope.messageria.status);
          	location.reload(); 
          }

          //location.reload(); 
        /*  if($scope.messageria.status == 2 || $scope.messageria.status == 4 || $scope.messageria.status == 6 ){
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
          });*/

        }
$scope.$watch('messageria.status', callzinho);