'use strict';

self.addEventListener('push', function(event, msg) {
  console.log('Benjamin a Padaria');
  console.log( event);
  console.log( msg);

  var title = 'Padaria Benjamin tem um aviso !!!.';
  var body = 'Benjamin a padaria esta chamando';
  var icon = 'images/icon2.png';
  var tag = 'notification-tag-benja';
  var data = {
    doge: {
        wow: 'such amaze notification data'
    }
  };

  event.waitUntil(
    self.registration.showNotification(title, {
      body: body,
      icon: icon,
      image: icon,
      badge: icon,
      tag: tag,
      vibrate: [500, 100, 500],
      data:data
    })
  );
});

self.addEventListener('fetch', function(event) {
  console.log('Benjamin a Padaria');
  console.log( event);

});

self.addEventListener('notificationclick', function(event) {
  console.log('On notification click: ', event.notification.tag);
  // Android doesn’t close the notification when you click on it
  // See: http://crbug.com/463146
  event.notification.close();
  var doge = event.notification.data.doge;
  console.log(doge.wow);

  // This looks to see if the current is already open and
  // focuses if it is
  event.waitUntil(clients.matchAll({
    type: 'window'
  }).then(function(clientList) {
    for (var i = 0; i < clientList.length; i++) {
      var client = clientList[i];
      if (client.url === '/' && 'focus' in client) {
        return client.focus();
      }
    }
    if (clients.openWindow) {
      return clients.openWindow('/');
    }
  }));
});