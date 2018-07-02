<?php
 include_once 'connection.php';
 $a = $_POST['email'];
$b = $_POST['movie'];
if(strlen($a)==0 || strlen($b)==0)
    return;
if (!filter_var($a, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      echo $emailErr;
      header("refresh:1;url=index.php");
    }
?>