<?php
include 'action.php';
        session_start();
        $nid = $_SESSION['nid'];
        // $dob = $_SESSION['dob'];

// $btn1= $_REQUEST['btn1']

switch($_REQUEST['submit']){
   case 'image_up':

        $u_tadd = $_REQUEST['u_tadd'];
        $u_email = $_REQUEST['u_email'];
        $u_phone = $_REQUEST['u_phone'];
        $u_pass = $_REQUEST['u_pass'];

        $image=$_FILES['image'];
        
        $getInfo = mysqli_query($conn,"SELECT * FROM `health_info` WHERE nid = '$nid'");
      

        // $match = mysqli_query($conn, $recordCheck);
        $data = mysqli_fetch_array($getInfo);
        
        

        // $u_nid = $data['nid'];
        $u_name = $data['name'];
        $u_fname = $data['f_name'];
        $u_mname = $data['m_name'];
        $u_padd = $data['p_address'];
        
        $u_bgrp = $data['b_group'];
        $pass = $data['password'];
       
      
        // $u_dob = $_REQUEST['dob'];


        // $imageLocation=($image['tmp_name']);
        // $imageName= $image['name'];
        
        // $image_des ="image/" . $imageName;
        //  echo $imageLocation;
        
        // move_uploaded_file($imageLocation,$image_des);
        // print_r($image);
        // die();

        if($pass == $u_pass){
                if($image['tmp_name'] == null){
                  $update_query = "UPDATE `health_info` SET `t_address`='$u_tadd', `email`='$u_email',`phone`='$u_phone' WHERE nid = '$nid'";
                }
                else{
                  $imageLocation=($image['tmp_name']);
                  $imageName= $image['name'];
                  
                  $image_des ="image/" . $imageName;
                  move_uploaded_file($imageLocation,$image_des);
        
                  $update_query = "UPDATE `health_info` SET `image`='$image_des', `t_address`='$u_tadd', `email`='$u_email',`phone`='$u_phone' WHERE nid = '$nid'";
                }
          

        if(!mysqli_query($conn, $update_query)){
          echo "<script>alert('Connection Problem')</script>";
          echo "<script>location.href='edituser_profile.php'</script>";
        }
        else{
          echo "<script>alert('Profile is Updated')</script>";
          echo "<script>location.href='profile.php'</script>";
        }
        }
        else{
          echo "<script>alert('Wrong password..!!')</script>";
          echo "<script>location.href='edituser_profile.php'</script>";
        }

        
  // case 'form_up':

  //   $u_email = $data['email'];
  //   $u_pass = $data['password'];
  //   $u_phone = $data['phone'];
 
  //   //   $u_email = $_REQUEST['u_email'];
  //   //   $u_phone = $_REQUEST['u_phone'];
  //   //   $u_pass = $_REQUEST['u_pass'];
  //   //   $u_cpass = $_REQUEST['u_cpass'];

  //     $duplicate_checker = mysqli_query($conn, "SELECT * FROM `health_info` WHERE nid = '$nid'");
    
   
  //   if($u_pass !== $u_cpass){
  //     echo "<script>alert('Unmatched password..!!')</script>";
  //     echo "<script>location.href='edituser_profile.php'</script>";
  //   }
  //   else{
   
  //     $update_query = "UPDATE `health_info` SET `email`='$u_email',`phone`='$u_phone',`password`='$u_pass' WHERE nid = '$nid'";
       
    
  //     if(!mysqli_query($conn, $update_query)){
  //       echo "<script>alert('Connection Problem')</script>";
  //       echo "<script>location.href='edituser_profile.php'</script>";
  //     }
  //     else{
  //       echo "<script>alert('Your profile is completed')</script>";
  //       echo "<script>location.href='login.php'</script>";
  //     }
  //   }
    }






// $dataFetchQuery="SELECT * FROM `c_information` WHERE nid='$nid' AND dob = '$dob'";
// $_outcome = mysqli_query($conn, $dataFetchQuery);


// $username_pattern = "/[A-Za-z .]+/";
// $mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
// $email_pattern = "/(cse|eee|civil|law|bba|eng)_\d{10}@lus\.ac\.bd/";
// $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";


?>
