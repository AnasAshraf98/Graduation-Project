<?php 
session_start();
$_SESSION['counter']=$_SESSION['id'];
unset($_SESSION['id']);
//session_destroy();
header("Location: ../index.php");