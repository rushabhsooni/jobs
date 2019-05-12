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

 $url1 = "http://api.indeed.com/ads/apisearch?publisher=7260941144511308&q=ca&co=ca&filter=1&userip=1.2.3.4&start=";
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
//echo $z4;


// ending  the number of jobs  






 echo $z4 ; 
for ($x = 0; $x <= $z4;) {
    #echo "The number is: $x <br>";
    echo "<br>";
    echo " $x " ;
    echo "<br>";
    $x = $x+20;
    $url1 = "http://api.indeed.com/ads/apisearch?publisher=7260941144511308&q=ca&co=ca&filter=1&userip=1.2.3.4&start=";
    $url2 =  "&limit=25&fromage=1&v=2&format=json";
    echo "<br>";
    //$start = 10;
    $url1 = $url1.$x.$url2;
    echo $url1;
    echo "<br>";
    
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
   // echo $response;
   }

   $obj23 = json_decode($response,true);
   //$data = $obj23['results']['0']['jobtitle'];
   //echo $data ; 
   //echo "<br>";
   //$data2 = $obj23['results']['1']['jobtitle'];
   //echo $data2 ;
   //echo "<br>";
   //$data3 = $obj23['results']['2']['jobtitle'];
   //echo $data3 ; 
   //echo "<br>";
   //$data4 = $obj23['results']['3']['jobtitle'];
   //echo $data4 ;
   
  // echo $obj23 ;
  // echo "$data" ;  
   echo "helo";
   echo "<br>" ;
   //var_dump($data);
   
  // echo $data['results']['0']['jobtitle'] ;
  // echo $data['results']['1']['jobtitle'] ;
  // echo $data['results']['2']['jobtitle'] ;
  for($y=0;$y<=20;$y++)
  { 
     echo $y ; 
  
     echo "  -" ;
     
    $data4 = $obj23['results'][$y]['jobtitle'];
    
     $k = $obj23['results'][$y]['company'];
     $l = $obj23['results'][$y]['city'];
     $m = $obj23['results'][$y]['state'];
     $q = $obj23['results'][$y]['url'];
     $n = $obj23['results'][$y]['country'];
     $o = $obj23['results'][$y]['snippet'];
     $p = $obj23['results'][$y]['jobkey'];
     $s = $obj23['results'][$y]['date'];
     $r = $obj23['results'][$y]['jobtitle'];
     $val1 = mysqli_real_escape_string($o);
     

     echo $val1 ;
     
     echo "  job snippet -" ;



    echo $data4;
    echo "|--|";
   // echo $k; 
    echo "|--|";
   // echo $l;
    echo "|--|";
    //echo $s;
    $time = strtotime($s);
    $newformat = date('d-m-y',$time);
    echo $newformat;
    
    
    $sql = "INSERT INTO canada (title,company,city,state,country,jobkey,date,snippet,url) VALUES ('$r','$k','$l','$m','$n','$p','$newformat','$val1','$q')";


    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";}
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    // start date
   echo "<br>" ;

     
    // end date
    
  }
  
}


?>