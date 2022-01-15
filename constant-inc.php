<?php
// Start the session
session_start();


// site url
function base_url (){
    $url ="http://localhost/admin/";
    return $url;
}




// database connection
function connect(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'ad-campaign';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
return $conn;
}


// print and die
function prx($v){
  echo "<pre>";
  print_r($v);
  echo "</pre>";

  return;
}


// redirect
function redirect($url)
{
    header('Location: ' . $url);

    exit();
}




?>