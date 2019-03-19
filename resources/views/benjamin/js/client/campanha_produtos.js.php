var ref_produtos_campanha = firebase.database().ref().child("campanhas/<?php echo $nome;?>");
        $scope.produtos_campanha = $firebaseArray(ref_produtos_campanha);