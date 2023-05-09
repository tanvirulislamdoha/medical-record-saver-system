<?php
include 'action.php';
        session_start();
        $nid = $_SESSION['nid'];
        // $dob = $_SESSION['dob'];

// $btn1= $_REQUEST['btn1']

        $u_email = $_REQUEST['u_email'];
        $u_phone = $_REQUEST['u_phone'];
        $u_pass = $_REQUEST['u_pass'];
        $u_cpass = $_REQUEST['u_cpass'];


        
         $u_phone_pattern="/(\+88)?-?01[3-9]\d{8}/";
         $u_email_pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
         $u_pass_pattern="/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";

        $getInfo = mysqli_query($conn,"SELECT * FROM `c_information` WHERE nid = '$nid'");
      

        // $match = mysqli_query($conn, $recordCheck);
        $data = mysqli_fetch_array($getInfo);
        
        

        // $u_nid = $data['nid'];
        $u_name = $data['name'];
        $u_fname = $data['f_name'];
        $u_mname = $data['m_name'];
        $u_padd = $data['p_address'];
        $u_tadd = $data['t_address'];
        $u_bgrp = $data['b_group'];
        // $u_dob = $_REQUEST['dob'];

        

      

    //   $duplicate_email = mysqli_query($conn, "SELECT * FROM `health_info` WHERE email = '$u_email'");
    
  
    // if(mysqli_num_rows($duplicate_email)>0){
    //   echo "<script>alert('This email already taken')</script>";
    //   echo "<script>location.href='registration.php'</script>";
    // }
   
     if(!preg_match($u_phone_pattern,$u_phone)){
      echo "<script>alert('Invalid phone number..!!')</script>";
      echo "<script>location.href='edituser_profile.php'</script>";
    }
    else if(!preg_match($u_email_pattern,$u_email)){
      echo "<script>alert('Invalid email address..!!')</script>";
      echo "<script>location.href='edituser_profile.php'</script>";
    }
    else if(!preg_match($u_pass_pattern,$u_pass)){
      echo "<script>alert('Invalid password..!!')</script>";
      echo "<script>location.href='edituser_profile.php'</script>";
    }
    else if($u_pass !== $u_cpass){
      echo "<script>alert('Unmatched password..!!')</script>";
      echo "<script>location.href='edituser_profile.php'</script>";
    }
    else{
      
     

      
      $update_query = " UPDATE `health_info` SET `t_address`='$u_tadd',`email`='$u_email',`phone`='$u_phone',`password`='$u_pass' WHERE nid = '$nid'";
       
    
      if(!mysqli_query($conn, $update_query)){
        echo "<script>alert('Connection Problem')</script>";
        echo "<script>location.href='edituser_profile.php'</script>";
      }
      else{
        echo "<script>alert('Your profile is completed')</script>";
        echo "<script>location.href='profile.php'</script>";
      }
    }
  






// $dataFetchQuery="SELECT * FROM `c_information` WHERE nid='$nid' AND dob = '$dob'";
// $_outcome = mysqli_query($conn, $dataFetchQuery);


// $username_pattern = "/[A-Za-z .]+/";
// $mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
// $email_pattern = "/(cse|eee|civil|law|bba|eng)_\d{10}@lus\.ac\.bd/";
// $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";



?>