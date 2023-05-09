<?php
include 'action.php';

$nid = $_REQUEST['nid'];
$dob = $_REQUEST['dob'];

$dataFetchQuery="SELECT * FROM `c_information` WHERE nid='$nid' AND dob = '$dob'";
$_outcome = mysqli_query($conn, $dataFetchQuery);




if(mysqli_num_rows($_outcome)){
  session_start();
  $_SESSION['nid'] = $nid;
  $_SESSION['dob'] = $dob;
      echo "<script>location.href='user_profile.php'</script>";
    }
else{
      echo "<script>alert('Wrong Information')</script>";
      echo "<script>location.href='registration.php'</script>";
    }


