<?php
include 'action.php';
        session_start();
        $nid = $_SESSION['nid'];
        $dob = $_SESSION['dob'];

// $btn1= $_REQUEST['btn1']

        $u_email = $_REQUEST['u_email'];
        $u_phone = $_REQUEST['u_phone'];
        $u_pass = $_REQUEST['u_pass'];
        $u_cpass = $_REQUEST['u_cpass'];


        
         $u_phone_pattern="/(\+88)?-?01[3-9]\d{8}/";
         $u_email_pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
         $u_pass_pattern="/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";

        $getInfo = mysqli_query($conn,"SELECT * FROM `c_information` WHERE nid = '$nid' AND dob = '$dob'");
      
        
      
        $data = mysqli_fetch_array($getInfo);
        
        

       
        $u_name = $data['name'];
        $u_fname = $data['f_name'];
        $u_mname = $data['m_name'];
        $u_padd = $data['p_address'];
        $u_tadd = $data['t_address'];
        $u_bgrp = $data['b_group'];
       

        

      

      $duplicate_nid = mysqli_query($conn, "SELECT * FROM `health_info` WHERE nid = '$nid'");
      $duplicate_email = mysqli_query($conn, "SELECT * FROM `health_info` WHERE email = '$u_email'");
    
    if(mysqli_num_rows($duplicate_nid)>0){
      echo "<script>alert('You have already an account')</script>";
      echo "<script>location.href='login.php'</script>";
    }
    else if(mysqli_num_rows($duplicate_email)>0){
      echo "<script>alert('This email already taken')</script>";
      echo "<script>location.href='registration.php'</script>";
    }

    else if(!preg_match($u_phone_pattern,$u_phone)){
      echo "<script>alert('Invalid phone number..!!')</script>";
      echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($u_email_pattern,$u_email)){
      echo "<script>alert('Invalid email address..!!')</script>";
      echo "<script>location.href='registration.php'</script>";
    }
    else if(!preg_match($u_pass_pattern,$u_pass)){
      echo "<script>alert('Invalid password..!!')</script>";
      echo "<script>location.href='registration.php'</script>";
    }
    else if($u_pass !== $u_cpass){
      echo "<script>alert('Unmatched password..!!')</script>";
      echo "<script>location.href='registration.php'</script>";
    }
    else{
      
      $insert_query = "INSERT INTO `health_info`(`nid`, `dob`, `name`, `f_name`, `m_name`, `p_address`, `t_address`, `b_group`, `email`, `phone`, `password`) VALUES ('$nid','$dob','$u_name','$u_fname','$u_mname','$u_padd','$u_tadd','$u_bgrp','$u_email','$u_phone','$u_pass')";
       
    
      if(!mysqli_query($conn, $insert_query)){
        echo "<script>alert('Connection Problem')</script>";
        echo "<script>location.href='registration.php'</script>";
      }
      else{
        echo "<script>alert('Your profile is completed')</script>";
        echo "<script>location.href='login.php'</script>";
      }
    }
  






