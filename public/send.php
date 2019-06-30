<?php
    $url = "https://fcm.googleapis.com/fcm/send";
    $token = "eahQ2CpeJlA:APA91bEkhDqe8Hr_L-vKPOD1u9Evc5VsdEWI-4Tkz3CuqoVxR8J7PQ5btltWYWF1Lhoh4VcOYlbfh0DDoYekmdEns4k7pdEFRncR6x9JEJxlmmLaQlUJlACrHM3umc9unmUGK9cTBtUU";
    $serverKey = 'AAAA-lI1rew:APA91bG5bfkTxVA7UdqrKbsmPC-XSHwBU7q0h6Y6lOqFpJ5Wb_RVuajtxzYhtiHA_PycN8p_4opG9Vezk07NHXliCp42MHY1W7-MH0D7m0Pf6Jwd7NbOkbgto89oEBbwYz-TImrsE1le';
    $title = "Notification title";
    $body = "Hello I am from Your php server";
    $notification = array('title' =>$title , 'text' => $body, 'sound' => 'default', 'badge' => '1');
    $arrayToSend = array('to' => $token, 'notification' => $notification,'priority'=>'high');
    $json = json_encode($arrayToSend);
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    //Send the request
    $response = curl_exec($ch);
    //Close request
    if ($response === FALSE) {
    die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
?>
