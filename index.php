<?php 
include 'constant-inc.php';
$conn = connect();
$site_url = base_url();
// echo $site_url;
$count = 0;
if($_SESSION['IS_LOGIN'] != 'YES'){
	redirect('sign-in.php');
}

?>