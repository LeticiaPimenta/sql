<?php


function callRestAPI($uri, $json) {
      $headers = array (
        "Content-Type: application/json; charset=utf-8",
		"Accept: application/json",
        "Content-Length: " .strlen($json)
      );
     
      $channel = curl_init($uri);
      curl_setopt($channel, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($channel, CURLOPT_CUSTOMREQUEST, "PUT");
     curl_setopt($channel, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($channel, CURLOPT_POSTFIELDS, $json);
     curl_setopt($channel, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($channel, CURLOPT_CONNECTTIMEOUT, 10);
     
     curl_exec($channel);
     $statusCode = curl_getInfo($channel, CURLINFO_HTTP_CODE);
     curl_close($channel);    
     return $statusCode;
 }
$url = 'https://api.pipedrive.com/v1/deals/17364?api_token=feec049b509be82fc75fa5b7d31d646a1760d6e2';

$json ='{
"user_id": "2555364"
}';
 callRestAPI($url, $json);