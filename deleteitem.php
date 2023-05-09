<?php
  include 'action.php';
  $id = $_GET['id'];

  $deleteQuery = "DELETE FROM `medical_record` WHERE id='$id'";

  mysqli_query($conn, $deleteQuery);
  
  header("location:home.php");  //it another mehod to send index page
?>