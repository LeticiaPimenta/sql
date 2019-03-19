// Ionic Starter App
var config = {
  apiKey: "AIzaSyDnsrFKJ00l3vye_AGwVt9womLPJGx51As",
  authDomain: "chatsocket-2626b.firebaseapp.com",
  databaseURL: "https://chatsocket-2626b.firebaseio.com",
  projectId: "chatsocket-2626b",
  storageBucket: "chatsocket-2626b.appspot.com",
  messagingSenderId: "1075121073644"
};
firebase.initializeApp(config);
// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.controllers' is found in controllers.js
angular.module('starter', ['starter.controllers', "firebase"])

  .config(function ($qProvider) {
    $qProvider.errorOnUnhandledRejections(false);
  })

  .config(function ($stateProvider, $urlRouterProvider) {
    $stateProvider

      .state('app', {
        url: '/app',
        abstract: true,
        templateUrl: 'templates/capriatti/admin.html',
        controller: 'AppCtrl'
      })

      .state('app.search', {
        url: '/search',
        views: {
          'menuContent': {
            templateUrl: 'templates/search.html'
          }
        }
      })
      .state('app.browse', {
        url: '/browse',
        views: {
          'menuContent': {
            templateUrl: 'templates/browse.html'
          }
        }
      })
      .state('app.home', {
        url: '/home',
        templateUrl: 'templates/capriatti/indicadores.html',
        controller: 'HomeCtrl'
      })
      .state('app.roletas', {
        url: '/roletas',
        templateUrl: 'templates/capriatti/roletas.html',
        controller: 'RoletasCtrl'
      })
      .state('app.appointments', {
        url: '/appointments',
        templateUrl: 'templates/capriatti/roletas.html',
        controller: 'AppointmentsCtrl'
      })
     
      .state('app.produtos', {
        url: '/produtos',
        templateUrl: 'templates/produtos.html',
        controller: 'ProdutosCtrl'
      })
      .state('app.leads', {
        url: '/leads',
        templateUrl: 'templates/leads.html',
        controller: 'LeadsCtrl'
      })
      .state('app.usuarios', {
        url: '/usuarios',
        templateUrl: 'templates/capriatti/usuarios.html',
        controller: 'ProdutosCtrl'
      })
      .state('app.usuario', {
        url: '/usuario/:usuarioId',
        templateUrl: 'templates/capriatti/usuario.html',
        controller: 'UsuarioCtrl'
      })
      .state('app.roleta', {
        url: '/roleta',
        templateUrl: 'templates/capriatti/roleta.html',
        controller: 'RoletaCtrl'
      })
      .state('app.meuperfil', {
        url: '/meuperfil',
        templateUrl: 'templates/capriatti/meuperfil.html',
        controller: 'MeuPerfilCtrl'
      })
      .state('app.lead', {
        url: '/lead/:leadId',
        templateUrl: 'templates/capriatti/lead.html',
        controller: 'LeadCtrl'
      })

      .state('app.profile', {
        url: '/profile',
        templateUrl: 'templates/profile.html',
        controller: 'LeadsCtrl'


      })

      .state('app.single', {
        url: '/playlists/:playlistId',
        views: {
          'menuContent': {
            templateUrl: 'templates/playlist.html',
            controller: 'PlaylistCtrl'
          }
        }
      });
    // if none of the above states are matched, use this as the fallback
    $urlRouterProvider.otherwise('/app/home');
  });