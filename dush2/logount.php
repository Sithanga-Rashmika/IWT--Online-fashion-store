<?php   
session_start(); 
session_destroy();
header('Location:home.php'); //redirect back to home page after logging out
?>