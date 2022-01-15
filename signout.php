<?php 
include 'constant-inc.php';


// remove all session variables
session_unset();

// destroy the session
session_destroy();

redirect('sign-in.php');
?>