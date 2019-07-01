<?php
    $url = "https://fcm.googleapis.com/fcm/send";
    $token = "cIExcu6AezU:APA91bEVmsNcifszcy9hSzaBGV4652MkhW9YEK9N_EupPB-Fica0u9fV2kgpl1l1OkewG4SKRYYSJeriblTiFvXCVDqqzWOzDHHmhMwwa8I6HOsLGd_Apel83jYeSAZt-LmOkzsHkpYD";
    $serverKey = 'AAAAhvFtF9A:APA91bES6WRxy_X69FiQt8uBi-DYQz4_x29MTJJX_fDNLMIM-q8eQ8VQRXyeia4XQs6rYuCgFlOORMLIIGzC6Apno0U9TFFtebK4LzLpTQ4Q7QT3XN5gyPZuxmoF9G9Qy0LszXKluO0R';
    $title = "Notification title";
    $body = "Hello I am from Your php server";
    $notification = array('title' =>$title , 'text' => $body, 'sound' => 'default', 'badge' => '1');
    $arrayToSend = array('to' => $token,'data' => $notification,'payload' => $notification, 'notification' => $notification,'priority'=>'high');
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
