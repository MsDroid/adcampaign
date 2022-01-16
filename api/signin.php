<?php 
include '../constant-inc.php';
$conn = connect();

$email = $_POST['email'];
$pass = md5($_POST['pass']);

$sql = "SELECT * FROM users WHERE email = '$email' and password = '$pass'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) > 0){
    $row = mysqli_fetch_assoc($query);
    $_SESSION['IS_LOGIN'] = 'YES';
    $_SESSION['uid'] = $row['uid'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['role'] = $row['role'];
    echo "true";
}else{
    echo "false";
}

?>