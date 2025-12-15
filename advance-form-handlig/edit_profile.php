<?php 

if (!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit();
}


require_once 'db_config.php';

$user_id =$_SESSION['user_id'];
$success = '';
$error = '';

?>