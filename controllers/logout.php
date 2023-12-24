<?php  
  session_start();
  $_SESSION = [];
  session_destroy();
  header('location:http://localhost/PROJET%20FINAL/index.php');
?>