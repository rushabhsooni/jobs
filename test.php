<?php

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
$r = "rushabah'sd";
$val1 = mysqli_real_escape_string($conn, $r);
$sql = "INSERT INTO test (name) VALUES ('{$val1}')";


    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";}
    else {
    echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
    // start date
   echo "<br>" ;


?>