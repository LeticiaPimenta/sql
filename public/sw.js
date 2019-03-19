'use strict';

self.addEventListener('push', function(event, data) {
  //console.log('Global Fut Pro', event , self);
  console.log(event);
  console.log(data);

  var title = 'Chegou um novo Lead !!!.';
  var body = 'Você tem 2 minutos para aceitar.';
  var icon = 'images/icon2.png';
  var tag = 'notification-tag-capriatti';

  event.waitUntil(
    self.registration.showNotification(title, {
      body: body,
      tag: tag,
      data: {
        click_url: 'admin#!/app/roleta'          
      },
    })
  );
});

self.addEventListener('notificationclick', function(event) {
  console.log('On notification click: ', event.notification.tag);
  console.log( event.notification);
  // Android doesn’t close the notification when you click on it
  // See: http://crbug.com/463146
  event.notification.close();

  // This looks to see if the current is already open and
  // focuses if it is
  event.waitUntil(clients.matchAll({
    type: 'window'
  }).then(function(clientList) {
    for (var i = 0; i < clientList.length; i++) {
      var client = clientList[i];
      if (client.url === 'admin#!/app/roleta' && 'focus' in client) {
        return client.focus();
      }
    }
    if (clients.openWindow) {
      return clients.openWindow('admin#!/app/roleta');
    }
  }));
});