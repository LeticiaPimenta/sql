<?php
// Your API key
$api_key = "AAAAhvFtF9A:APA91bES6WRxy_X69FiQt8uBi-DYQz4_x29MTJJX_fDNLMIM-q8eQ8VQRXyeia4XQs6rYuCgFlOORMLIIGzC6Apno0U9TFFtebK4LzLpTQ4Q7QT3XN5gyPZuxmoF9G9Qy0LszXKluO0R";
$ids = 'c9HLPBWEnoY:APA91bEm45DQSFDGzk5ebxZaWR5kQr2EPKcuATjjXFHPm2MELp1LzPUbuXXVXbzHlO6CYOs7bRVdQelGQXhMqgeAPdnIaxRMmmEJ0Pdiyr1aCqlrIZBtqwmkq3Nq1y_TylIZ4-XZI4sO';
// Client IDs from your application
$registration_ids = array( $ids );

$message = "hello, test!!";

// URL to POST to
$gcm_url = 'https://android.googleapis.com/gcm/send';

// data to be posted
$fields = array(
                'registration_ids'  => $registration_ids,
                'data'              => array( "message" => $message ),
                );

// headers for the request
$headers = array( 
                    'Authorization: key=' . $api_key,
                    'Content-Type: application/json'
                );

$curl_handle = curl_init();

// set CURL options
curl_setopt( $curl_handle, CURLOPT_URL, $gcm_url );

curl_setopt( $curl_handle, CURLOPT_POST, true );
curl_setopt( $curl_handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true );

curl_setopt( $curl_handle, CURLOPT_POSTFIELDS, json_encode( $fields ) );

// send
$response = curl_exec($curl_handle);

curl_close($curl_handle);

// let's check the response
$data = json_decode($response);

print_r($data);
?>