<?php
include 'action.php';
session_start();
$nid = $_SESSION['nid'];


$h_name = $_REQUEST['h_name'];
$d_name = $_REQUEST['d_name'];
$prescription = $_FILES['prescription'];

$date =  date("Y-m-d");
//$h_name = $_REQUEST['h_name'];

// $uploads_dir = 'photo/';

$prescriptionLocation=($prescription['tmp_name']);
$prescriptionName= $prescription['name'];

$prescription_des ="prescription/" . $prescriptionName;
move_uploaded_file($prescriptionLocation,$prescription_des);



$report_dir = 'reports/';



$reports_name ="";

    foreach ($_FILES["reports"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["reports"]["tmp_name"][$key];
            $name = $_FILES["reports"]["name"][$key];
            move_uploaded_file($tmp_name, "$report_dir/$name");
            $reports_name =$reports_name.$name."/";
            
        }
       
    }


    $sql = "INSERT INTO `medical_record`(`date`, `nid`, `hospital_name`, `dr_name`, `prescription`, `reports`) VALUES ('$date','$nid','$h_name','$d_name','$prescription_des','".$reports_name."')";

    if(!mysqli_query($conn, $sql)){
      echo "not uploaded ";
      // echo "<script>location.href='registration.php'</script>";
    }
    else{
      // echo "<script>alert('Record Added')</script>";
      echo "<script>location.href='home.php'</script>";
    }


?>