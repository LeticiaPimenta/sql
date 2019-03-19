<?php
$pagamentos =  \App\Payment::whereNotNull('nfe')->get();
?>
       
  $scope.carts = <?php echo $pagamentos->toJson();?>;

