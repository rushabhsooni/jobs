<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "8002",
  CURLOPT_URL => "http://117.247.82.141:8002/main/utility",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Postman-Token: 74999ccf-7905-4c52-956d-70fa1274e528",
    "action: GENERATE_APPKEY",
    "asp_client_secret: UEHzNzW9LpTIyMYENMY5MDg5GD25QjI5ODJDRjVJNWFU=",
    "asp_clientid: U99El1DC935JD41OAA2D87kj5EC3M7WQ2P",
    "gsp_auth_token: 17d016b2c7964032afa26b7bd289ce9f",
    "ip-usr: 43.255.154.28",
    "txn: 1321"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}