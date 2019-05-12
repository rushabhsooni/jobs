<?php
// connection code 
$servername = "localhost";
$username = "root";
$password = "xEjrfVm3ALbF";
$dbname = "jobs";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);	
}

echo "<br>";
echo "Connected successfully";
echo "<br>";
$r = 'hello';

echo $r;


     $sql = "INSERT INTO japan (title) VALUES ('hello')";


    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";}
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
      }