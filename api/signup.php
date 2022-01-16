<?php 
include '../constant-inc.php';
$conn = connect();

$name = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['password']);

$sql = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$pass')";
$query = mysqli_query($conn, $sql);

if($query){
    echo "true";
}else{
    echo "false";
}



?>