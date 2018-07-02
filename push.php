<?php
 include_once 'connection.php';
 $a = $_POST['email'];
$b = $_POST['movie'];
if(strlen($a)==0 || strlen($b)==0)
{
    echo 'cannot be null';
  header("refresh:1;url=index.php");
    return;
}
if (!filter_var($a, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
      echo $emailErr;
      header("refresh:1;url=index.php");
    return;
    }
  $q ="INSERT INTO `data`(`email`, `movie`) VALUES ('$a','$b');";
   $query = mysqli_query($hritik,$q);
if($query){
    echo 'you will be notify when movie is available';
    header("refresh:1;url=index.php");
}
?>