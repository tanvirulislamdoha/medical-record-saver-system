<?php
include 'action.php';
$nid = $_REQUEST['l_nid'];
$pass = $_REQUEST['l_pass'];

$_outcome = mysqli_query($conn, "SELECT * FROM `health_info` WHERE nid='$nid' And password ='$pass'");

if(mysqli_num_rows($_outcome) > 0){
  session_start();
  $_SESSION['nid'] = $nid;

  $record = mysqli_fetch_array($_outcome);
  $_SESSION['name'] = $record['name'];
  // $_SESSION['dob'] = $dob;
      //  echo $_SESSION['name'];
      
      echo "<script>location.href='home.php'</script>";
    }
else{
      echo "<script>alert('worng nid or pass')</script>";
      echo "<script>location.href='login.php'</script>";
    }

?>