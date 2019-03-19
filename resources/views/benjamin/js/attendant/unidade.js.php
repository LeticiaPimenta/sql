
    var comanda = localStorage.getItem("comanda");
    console.log(comanda);
   // alert(comanda);
    var ref = firebase.database().ref("unidades");
    //// create a synchronized array
    $scope.unidades = $firebaseArray(ref);
  