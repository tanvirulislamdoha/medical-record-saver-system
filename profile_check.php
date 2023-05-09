<?php
include 'action.php';
        session_start();
        $nid = $_SESSION['nid'];
        $dob = $_SESSION['dob'];

// $btn1= $_REQUEST['btn1']

switch($_REQUEST['submit']){
   case 'image_up':


        $image=$_FILES['image'];
        
        $getInfo = mysqli_query($conn,"SELECT * FROM `c_information` WHERE nid = '$nid' AND dob = '$dob'");
      

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
        $u_email = $_REQUEST['u_email'];
        $u_phone = $_REQUEST['u_phone'];
        $u_pass = $_REQUEST['u_pass'];
        $u_cpass = $_REQUEST['u_cpass'];
  
      
        $u_phone_pattern="/(\+88)?-?01[3-9]\d{8}/";
        $u_email_pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
        $u_pass_pattern="/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/";




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
          $imageLocation=($image['tmp_name']);
          $imageName= $image['name'];
          
          $image_des ="image/" . $imageName;
          //  echo $imageLocation;
          
          move_uploaded_file($imageLocation,$image_des);
          
          $insert_query = "INSERT INTO `health_info`(`nid`, `dob`, `name`, `f_name`, `m_name`, `p_address`, `t_address`, `b_group`, `email`, `phone`, `password`, `image`) VALUES ('$nid','$dob','$u_name','$u_fname','$u_mname','$u_padd','$u_tadd','$u_bgrp','$u_email','$u_phone','$u_pass','$image_des')";
        
          if(!mysqli_query($conn, $insert_query)){
            echo "<script>alert('Connection Problem')</script>";
            echo "<script>location.href='registration.php'</script>";
          }
          else{
            echo "<script>alert('Your profile is completed')</script>";
            echo "<script>location.href='login.php'</script>";
          }
        }

      

        // if(!mysqli_query($conn, $insert_query)){
        //   echo "<script>alert('Connection Problem')</script>";
        //   // echo "<script>location.href='registration.php'</script>";
        // }
        // else{
        //   // echo "<script>alert('Photo upload is completed')</script>";
        //   echo "<script>location.href='photo_uploaded.php'</script>";
        // }
  // case 'form_up':

      
  //     // $u_nid = $_REQUEST['u_nid'];
  //     // $u_name = $_REQUEST['u_name'];
  //     // $u_fname = $_REQUEST['u_fname'];
  //     // $u_mname = $_REQUEST['u_mname'];
  //     // $u_padd = $_REQUEST['u_padd'];
  //     // $u_tadd = $_REQUEST['u_tadd'];
  //     // $u_bgrp = $_REQUEST['u_bgrp'];
  //     // $u_dob = $_REQUEST['u_dob'];
  //     $u_email = $_REQUEST['u_email'];
  //     $u_phone = $_REQUEST['u_phone'];
  //     $u_pass = $_REQUEST['u_pass'];
  //     $u_cpass = $_REQUEST['u_cpass'];

  //     $duplicate_checker = mysqli_query($conn, "SELECT * FROM `health_info` WHERE nid = '$nid'");
    
  //   // if(mysqli_num_rows($duplicate_checker)>0){
  //   //   echo "<script>alert('You have already an account')</script>";
  //   //   echo "<script>location.href='login.php'</script>";
  //   // }
  //   // else if(!preg_match($username_pattern,$r_username)){
  //   //   echo "<script>alert('Invalid username..!!')</script>";
  //   //   echo "<script>location.href='register.php'</script>";
  //   // }
  //   // else if(!preg_match($mobile_pattern,$r_mobile)){
  //   //   echo "<script>alert('Invalid mobile number..!!')</script>";
  //   //   echo "<script>location.href='register.php'</script>";
  //   // }
  //   // else if(!preg_match($email_pattern,$r_email)){
  //   //   echo "<script>alert('Invalid email address..!!')</script>";
  //   //   echo "<script>location.href='register.php'</script>";
  //   // }
  //   // else if(!preg_match($pass_pattern,$r_pass)){
  //   //   echo "<script>alert('Invalid password..!!')</script>";
  //   //   echo "<script>location.href='register.php'</script>";
  //   // }
  //   if($u_pass !== $u_cpass){
  //     echo "<script>alert('Unmatched password..!!')</script>";
  //     echo "<script>location.href='registration.php'</script>";
  //   }
  //   else{
  //     // $insert_query = "INSERT INTO `register`(`username`, `email`, `pass`, `mobile`) VALUES ('$r_username','$r_email','$r_pass','$r_mobile')";
    
  //     // $insert_query = "INSERT INTO `health_info`(`email`, `phone`, `password`) VALUES ('$u_email','$u_phone','$u_pass') WHERE nid = '$nid'";
  //     $insert_query = "UPDATE `health_info` SET `email`='$u_email',`phone`='$u_phone',`password`='$u_pass' WHERE nid = '$nid'";
       
    
  //     if(!mysqli_query($conn, $insert_query)){
  //       echo "<script>alert('Connection Problem')</script>";
  //       echo "<script>location.href='registration.php'</script>";
  //     }
  //     else{
  //       echo "<script>alert('Your profile is completed')</script>";
  //       echo "<script>location.href='login.php'</script>";
  //     }
  //   }
    }




?>

<!-- // $dataFetchQuery="SELECT * FROM `c_information` WHERE nid='$nid' AND dob = '$dob'";
// $_outcome = mysqli_query($conn, $dataFetchQuery);


// $username_pattern = "/[A-Za-z .]+/";
// $mobile_pattern = "/(\+88)?-?01[3-9]\d{8}/";
// $email_pattern = "/(cse|eee|civil|law|bba|eng)_\d{10}@lus\.ac\.bd/";
// $pass_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%&*_+><])).{6,20}/"; -->



