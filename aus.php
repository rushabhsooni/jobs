<?php
// connection code 
$servername = "localhost";
$username = "root";
$password = "xEjrfVm3ALbF";
$dbname = "jobs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);	
}
echo "<br>";
echo "Connected successfully";
echo "<br>";
// concetion code end


// find the number of jobs 

 $url1 = "http://api.indeed.com/ads/apisearch?publisher=7260941144511308&q=&co=au&filter=1&userip=1.2.3.4&start=";
 $url2 =  "&limit=100&fromage=1&v=2&format=json";
 echo "<br>";
 
 $start = 10;
 $url1 = $url1.$start.$url2;
 echo $url1;

// http://api.indeed.com/ads/apisearch?publisher=7260941144511308&l=mumbai&co=in&userip=1.2.3.4&start=40&limit=100&fromage=3&v=2&format=json 


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "$url1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Postman-Token: 011054d3-0e58-4d75-895e-e7c2937ae7e4"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  #echo $response;
}

$obj2 = json_decode($response,true);
echo " no of jobs " ;
$z4 = $obj2['totalResults'];
echo $z4;

echo "australia ";


// ending  the number of jobs  



?>