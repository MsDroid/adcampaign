<?php 
include '../constant-inc.php';
$conn = connect();

if($_GET['type'] && $_GET['id'] != ''){
    $type = $_GET['type'];
    $camp_id = $_GET['id'];

    if($type == 'active'){
        $sql = "UPDATE campaign SET status = '1' where id = '$camp_id'";
    }elseif($type == 'deactive'){
        $sql = "UPDATE campaign SET status = '0' where id = '$camp_id'";
    }

    $query = mysqli_query($conn, $sql);

    if($query){
        redirect('../dashboard.php');
    }else{
        redirect('../dashboard.php');
    }
}





?>