<!DOCTYPE html>
<html lang="en" ng-app="starter">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Roleta de Leadings :: Capriatti ">
   <meta name="keywords" content="Roletas , leadings  , imobiliaria , corretores , gamificação , rankeamento, distribuição de oportunidades , brasil , dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title>.:: Roleta de Leads Capriatti :: CTBA ::.</title>
   <!-- =============== assets STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
   <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
   <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
   <link rel="stylesheet" href="assets/@fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="assets/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="assets/animate.css/animate.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="assets/whirl/dist/whirl.css">
   <!-- =============== PAGE assets STYLES ===============-->
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="css/app.css" id="maincss">
   <script type="text/javascript">
      
      const usuario = <?php echo json_encode($usuario); ?>;
   </script>
     <link rel="manifest" href="manifest.json">
   <style type="text/css">
      
      .logo-grande{
         width: 32px;
      }
   </style>
</head>

<body ng-controller="AppCtrl">
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
               <a class="navbar-brand" href="#/">
                  <div class="brand-logo">
                     <img class="img-fluid logo-grande" src="img/logo_capriatti.jpg" alt="Logo Capriatti">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img class="img-fluid" src="img/logo-single_capriatti.jpg" alt="Logo Capriatti">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
               <li class="nav-item">
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a class="nav-link d-none d-md-block d-lg-block d-xl-block" data-trigger-resize="" data-toggle-state="aside-collapsed">
                     <em class="fas fa-bars"></em>
                  </a>
                  <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                  <a class="nav-link sidebar-toggle d-md-none" data-toggle-state="aside-toggled" data-no-persist="true">
                     <em class="fas fa-bars"></em>
                  </a>
               </li>
               <!-- START User avatar toggle-->
               <li class="nav-item d-none d-md-block">
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a class="nav-link" id="user-block-toggle" href="#user-block" data-toggle="collapse">
                     <em class="icon-user"></em>
                  </a>
               </li>
               <!-- END User avatar toggle-->
               <!-- START lock screen-->
               <li class="nav-item">
                  <a class="nav-link" href="logoff" title="Logoff">
                     <em class="icon-logout"></em>
                  </a>
               </li>
               <!-- END lock screen-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">
               <!-- Search icon-->
               <li class="nav-item">
                  <a class="nav-link" data-search-open="">
                     <em class="icon-magnifier"></em>
                  </a>
               </li>
               <!-- Fullscreen (only desktops)-->
               <li class="nav-item d-none d-md-block">
                  <a class="nav-link" data-toggle-fullscreen="">
                     <em class="fas fa-expand"></em>
                  </a>
               </li>
               <!-- START Alert menu--
               <li class="nav-item dropdown dropdown-list">
                  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
                     <em class="icon-bell"></em>
                     <span class="badge badge-danger">+0</span>
                  </a>
                  <!- START Dropdown menu--
                  <div class="dropdown-menu dropdown-menu-right animated flipInX">
                     <div class="dropdown-item">
                        <!- START list group--
                        <div class="list-group">
                           <!- list item--
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2">
                                    <em class="fab fa-twitter fa-2x text-info"></em>
                                 </div>
                                 <div class="media-body">
                                    <p class="m-0">Aqui Vem notificação</p>
                                    <p class="m-0 text-muted text-sm">1 new follower</p>
                                 </div>
                              </div>
                           </div>
                        
                           <!- last list item--
                           <div class="list-group-item list-group-item-action">
                              <span class="d-flex align-items-center">
                                 <span class="text-sm">Sem Alertas</span>
                                 <span class="badge badge-danger ml-auto">0</span>
                              </span>
                           </div>
                        </div>
                        <!- END list group--
                     </div>
                  </div>
                  <!- END Dropdown menu--
               </li-->
               <!-- END Alert menu-->
               <!-- START Offsidebar button-->
               <li class="nav-item">
                  <a class="nav-link" data-toggle-state="offsidebar-open" data-no-persist="true">
                     <em class="icon-notebook"></em>
                  </a>
               </li>
               <!-- END Offsidebar menu-->
            </ul>
            <!-- END Right Navbar-->
            <!-- START Search form-->
            <form class="navbar-form" role="search" >
               <div class="form-group">
                  <input class="form-control" type="text" placeholder="Filtro" ng-model="filtro">
                  <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
               </div>
              
            </form>
            <!-- END Search form-->
         </nav>
         <!-- END Top Navbar-->
      </header>
      <!-- sidebar-->
      <aside class="aside-container">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav class="sidebar" data-sidebar-anyclick-close="">
               <!-- START sidebar nav-->
               <ul class="sidebar-nav">
                  <!-- START user info-->
                  <li class="has-user-block">
                     <div class="collapse" id="user-block">
                        <div class="item user-block">
                           <!-- User picture-->
                           <div class="user-block-picture">
                              <div class="user-block-status">
                                 <img class="img-thumbnail rounded-circle" ng-src="<?php echo $usuario['imagem']; ?>" src="<?php echo $usuario['imagem']; ?>"  onerror="this.src='https://d3myhnqlqw2314.cloudfront.net/profile_120x120_2555364_1fdfefa0748ba9ef74f11a7d18879d13.jpg'"  alt="Avatar" width="60" height="60">
                                 <div class="circle bg-success circle-lg"></div>
                              </div>
                           </div>
                           <!-- Name and Job-->
                           <div class="user-block-info">
                              <span class="user-block-name">Ola, <?php echo $usuario['name']; ?></span>
                              <span class="user-block-role"><?php  if($usuario['group_id']==1){ echo 'Admin';}else{echo 'Usuario';} ?></span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                        
                  <li class="nav-heading ">
                     <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                  </li>

                  <?php if($usuario['group_id'] == 1){ ?>
                  <li class=" ">
                     <a href="admin#!/app/usuarios" title="Usuarios">
                        <div class="float-right badge badge-success">{{logados.length}}</div>
                        <em class="icon-user"></em>
                        <span data-localize="sidebar.nav.USUARIOS">Usuários</span>
                     </a>
                  </li>

                  <li class=" ">
                     <a href="admin#!/app/appointments" title="Roletas">
                        <div class="float-right badge badge-success"></div>
                        <em class="icon-grid"></em>
                        <span data-localize="sidebar.nav.ROLETAS">Roletas</span>
                     </a>
                  </li>
                  <li class=" ">
                     <a href="admin#!/app/indicadores" title="Indicadores">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.DASHBOARD">Indicadores</span>
                     </a>
                  </li>
               <?php }else{?> 
                  <li class=" ">
                     <a href="#!/app/meuperfil" title="Usuario">
                        
                        <em class="icon-user"></em>
                        <span data-localize="sidebar.nav.MEUPERFIL">Profile</span>
                     </a>
                  </li>
                  <li class=" ">
                     <a href="#!/app/roleta" title="Usuario">
                        
                        <em class="icon-grid"></em>
                        <span data-localize="sidebar.nav.ROLETA">Roleta</span>
                     </a>
                  </li>
               <?php }?>
                  <!--li class=" ">
                     <a href="#layout" title="Layouts" data-toggle="collapse">
                        <em class="icon-layers"></em>
                        <span>Treinamentos</span>
                     </a>
                     <ul class="sidebar-nav sidebar-subnav collapse" id="layout">
                        <li class="sidebar-subnav-header">Treinamento 1</li>
                        <li class=" ">
                           <a href="dashboard_h.html" title="Horizontal">
                              <span>Treinamento 1</span>
                           </a>
                        </li>
                     </ul>
                  </li-->

               </ul>
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- offsidebar-->
      <aside class="offsidebar d-none">
         <!-- START Off Sidebar (right)-->
         <nav>
            <div role="tabpanel">
               <!-- Nav tabs-->
               <ul class="nav nav-tabs nav-justified" role="tablist">
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                     </a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-user fa-lg"></em>
                     </a>
                  </li>
               </ul>
               <!-- Tab panes-->
               <div class="tab-content">
                  <div class="tab-pane fade active show" id="app-settings" role="tabpanel">
                     <h3 class="text-center text-thin mt-4">Configs</h3>
                     <div class="p-2">
                        <h4 class="text-muted text-thin">Temas</h4>
                        <div class="row row-flush mb-2">
                           <div class="col mb-2">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-a.css">
                                    <input type="radio" name="setting-theme" checked="checked">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-info"></span>
                                       <span class="color bg-info-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-b.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-green"></span>
                                       <span class="color bg-green-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-c.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-purple"></span>
                                       <span class="color bg-purple-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-d.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-danger"></span>
                                       <span class="color bg-danger-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="row row-flush mb-2">
                           <div class="col mb-2">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-e.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-info-dark"></span>
                                       <span class="color bg-info"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-f.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-green-dark"></span>
                                       <span class="color bg-green"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-g.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-purple-dark"></span>
                                       <span class="color bg-purple"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb-2">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-h.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-danger-dark"></span>
                                       <span class="color bg-danger"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="p-2">
                        <h4 class="text-muted text-thin">Layout</h4>
                        <div class="clearfix">
                           <p class="float-left">Fixed</p>
                           <div class="float-right">
                              <label class="switch">
                                 <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Boxed</p>
                           <div class="float-right">
                              <label class="switch">
                                 <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">RTL</p>
                           <div class="float-right">
                              <label class="switch">
                                 <input id="chk-rtl" type="checkbox">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="p-2">
                        <h4 class="text-muted text-thin">Aside</h4>
                        <div class="clearfix">
                           <p class="float-left">Collapsed</p>
                           <div class="float-right">
                              <label class="switch">
                                 <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Collapsed Text</p>
                           <div class="float-right">
                              <label class="switch">
                                 <input id="chk-collapsed-text" type="checkbox" data-toggle-state="aside-collapsed-text">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Float</p>
                           <div class="float-right">
                              <label class="switch">
                                 <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Hover</p>
                           <div class="float-right">
                              <label class="switch">
                                 <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="float-left">Show Scrollbar</p>
                           <div class="float-right">
                              <label class="switch">
                                 <input id="chk-scroll" type="checkbox" data-toggle-state="show-scrollbar" data-target=".sidebar">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="app-chat" role="tabpanel">
                     <h3 class="text-center text-thin mt-4">Usuarios</h3>
                     <div class="list-group">
                        <!-- START list title-->
                        <div class="list-group-item border-0">
                           <small class="text-muted">ONLINE</small>
                        </div>
                        <!-- END list title-->
                        <div class="list-group-item list-group-item-action border-0" ng-repeat="user in logados">
                           <div class="media">
                              <img class="align-self-center mr-3 rounded-circle thumb48" src="{{user.imagem}}" ng-src="{{user.imagem}}"  onerror="this.src='https://d3myhnqlqw2314.cloudfront.net/profile_120x120_2555364_1fdfefa0748ba9ef74f11a7d18879d13.jpg'"  alt="{{user.name}}">
                              <div class="media-body text-truncate">
                                 <a href="#">
                                    <strong>{{user.name}}</strong>
                                 </a>
                                 <br>
                                 <small class="text-muted">corretor</small>
                              </div>
                              <div class="ml-auto">
                                 <span class="circle bg-success circle-lg"></span>
                              </div>
                           </div>
                        </div>
                        
                        <!-- START list title-->
                        <div class="list-group-item border-0">
                           <small class="text-muted">Todos </small>
                        </div>
                        <!-- END list title-->
                        <div class="list-group-item list-group-item-action border-0" ng-repeat="usuario in carregados">
                           <div class="media">
                              <img class="align-self-center mr-3 rounded-circle thumb48" src="{{user.imagem}}" ng-src="{{usuario.imagem}}"  onerror="this.src='https://d3myhnqlqw2314.cloudfront.net/profile_120x120_2555364_1fdfefa0748ba9ef74f11a7d18879d13.jpg'"  alt="{{user.name}}">
                              <div class="media-body text-truncate">
                                 <a href="#">
                                    <strong>{{usuario.name}}</strong>
                                 </a>
                                 <br>
                                 <small class="text-muted">Designeer</small>
                              </div>
                              <div class="ml-auto">
                                 <span class="circle bg-default circle-lg"></span>
                              </div>
                           </div>
                        </div>
                      
                     </div>
                     <div class="px-3 py-4 text-center">
                        <!-- Optional link to list more users-->
                        <a class="btn btn-purple btn-sm" href="#" title="See more contacts">
                           <strong>Load more..</strong>
                        </a>
                     </div>
                     <!-- Extra items-->
                     <div class="px-3 py-2">
                        <p>
                           <small class="text-muted">Tasks completion</small>
                        </p>
                        <div class="progress progress-xs m-0">
                           <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                              <span class="sr-only">80% Complete</span>
                           </div>
                        </div>
                     </div>
                     <div class="px-3 py-2">
                        <p>
                           <small class="text-muted">Upload quota</small>
                        </p>
                        <div class="progress progress-xs m-0">
                           <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                              <span class="sr-only">40% Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- Main section-->
      <section class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
             <ui-view>...</ui-view>
         </div>
      </section>
      <!-- Page footer-->
      <footer class="footer-container">
         <span>&copy; 2018 - Capriatti</span>
      </footer>
   </div>
   <!-- =============== assets SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="assets/modernizr/modernizr.custom.js"></script>
   <!-- JQUERY-->
   <script src="assets/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="assets/popper.js/dist/umd/popper.js"></script>
   <script src="assets/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="assets/js-storage/js.storage.js"></script>
   <!-- JQUERY EASING-->
   <script src="assets/jquery.easing/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="assets/animo/animo.js"></script>
   <!-- SCREENFULL-->
   <script src="assets/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="assets/jquery-localize/dist/jquery.localize.js"></script>

   <script src="assets/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="assets/jquery-localize/dist/jquery.localize.js"></script>
   <!-- =============== PAGE assets SCRIPTS ===============-->
   <!-- SPARKLINE-->
   <script src="assets/jquery-sparkline/jquery.sparkline.js"></script>
   <!-- FLOT CHART-->

   <!-- EASY PIE CHART-->
   <script src="assets/easy-pie-chart/dist/jquery.easypiechart.js"></script>
   <!-- MOMENT JS-->
   <script src="assets/moment/min/moment-with-locales.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <!-- =============== PAGE assets SCRIPTS ===============-->
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app_tpl.js"></script>

   <script src="js/angular.min.js"></script>
   <script src="https://www.gstatic.com/firebasejs/3.6.6/firebase.js"></script>
   <script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
   <script src="js/angular-ui-router.min.js"></script>
   <script src="js/app.js"></script>
   <script src="js/controllers.js"></script>
  
</body>

</html>