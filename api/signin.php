<?php 
include '../constant-inc.php';
$conn = connect();

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM USERS WHERE email = '$email' and password = '$pass'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) > 0){
    $row = mysqli_fetch_assoc($query);
    $_SESSION['uid'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['role'] = $row['role'];
    echo "true";
}else{
    echo "false";
}

?>