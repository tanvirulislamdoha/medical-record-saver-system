<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "national_server";

  $conn = mysqli_connect($servername, $username, $password, $dbName);

  if(!$conn){
    die("Connection failed:".mysqli_connect_error());
  }
  else{
    // echo "<script>alert('Database Connected.')</script>";
  }
?>