<?php
$pagamentos =  \App\Payment::where('nfe',null)->get();
?>
       
  $scope.carts = <?php echo $pagamentos->toJson();?>;

