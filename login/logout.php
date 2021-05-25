<?php 
session_start();
session_destroy();
//unset($_SESSION['error']);
//unset($_SESSION['check']);


header('location:login.php');


?>