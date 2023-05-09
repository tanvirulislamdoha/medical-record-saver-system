<?php
session_start();

if(isset($_SESSION['nid'])){
  session_unset();
  session_destroy();
  // echo "<script>alert('You have log outed from your account')</script>";
  echo "<script>location.href='index.php'</script>";
}
else{
  echo "<script>alert('URL Invalid')</script>";
  echo "<script>location.href='index.php'</script>";
}

  ?>