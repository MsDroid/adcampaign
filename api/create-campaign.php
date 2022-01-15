<?php 
include '../constant-inc.php';
$conn = connect();

$title = $_POST['title'];
$desc = $_POST['desc'];
$link = $_POST['link'];
$media_no = $_POST['media_no'];
$uid = $_SESSION['uid'];

$sql = "INSERT INTO campaign (title,detail,link,media_no,uid,status) values ('$title','$desc','$link','$media_no','$uid','0')";
$query = mysqli_query($conn, $sql);

if($query){
    echo "true";
}else{
    echo "false";
}

?>