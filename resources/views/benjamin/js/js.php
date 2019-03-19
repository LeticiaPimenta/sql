<script>
  // Initialize the Firebase SDK
  var config = {
    apiKey: "AIzaSyD-UL1Fe_a3woT2tpdeRzVvOASQhxr7H4E",
    authDomain: "benjamin-a-padaria.firebaseapp.com",
    databaseURL: "https://benjamin-a-padaria.firebaseio.com",
    projectId: "benjamin-a-padaria",
    storageBucket: "benjamin-a-padaria.appspot.com",
    messagingSenderId: "579576076240"
  };
  firebase.initializeApp(config);

  	var app = angular.module("sampleApp", ["firebase" , "toastr", 'ngClickCopy']);
    
    app.controller("SampleCtrl", function($scope, $http ,  $firebaseArray,$firebaseObject,  $firebaseAuth,toastr){

    <?php 
    $jss = explode(',', $js_view);
      foreach ($jss as $js) { 

        require "../resources/views/benjamin/js/".$js.".js.php";

      }
    ?>

    app.run(["$locale", function ($locale) {
        $locale.NUMBER_FORMATS.GROUP_SEP = ",";
        $locale.NUMBER_FORMATS.DECIMAL_SEP = ".";
    }]);


    $scope.produtos = JSON.parse(localStorage.getItem('produtos'));
    $scope.produtos_id = JSON.parse(localStorage.getItem('produtos_id'));
    $scope.produtos_favoritos = JSON.parse(localStorage.getItem('produtos_favoritos'));
  
	});


</script>