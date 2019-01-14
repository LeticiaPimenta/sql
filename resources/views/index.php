<?php
require 'header.php';
?>
<body class="blog-post sidebar-collapse"  ng-controller="MainCtrl">
  <!-- End Google Tag Manager (noscript) -->
  <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <img src="../assets/img/benjamin.png" style="width: 20%; height: auto;">        
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/panetone.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h1 class="title">Faça seu login com o facebook </h1>
          <br>
          <a href="#" ng-click="login_facebook()" class="btn btn-social btn-fill btn-facebook">
            <i class="fa fa-facebook-square"></i>   Logar com o Facebook
          </a>
          <div class="ripple-container"></div>
          <button ng-click="auth.$signOut()">Sign Out</button>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">

  
  
  