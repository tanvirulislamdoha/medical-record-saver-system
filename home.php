<?php
session_start();



if(isset($_SESSION['name'])){

  include 'u_home.php';


  
}
else{
  echo"<script>alert('You can not access this page without login!!')</script>";
  echo"<script>location.href='index.php'</script>";
}
?>
