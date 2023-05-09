<?php
        include 'action.php';
        session_start();
        $nid = $_SESSION['nid'];
        $name = $_SESSION['name'];
        $id = $_REQUEST['id'];
        $_SESSION['id'] = $id;
        // $dob = $_SESSION['dob'];
        $recordCheck = mysqli_query($conn,"SELECT * FROM `medical_record` WHERE nid = '$nid' AND id = '$id'");
        

   
        $data = mysqli_fetch_array($recordCheck);

        $prescription = $_FILES['prescription'];
        // echo $id;

        // print_r($prescription);
        // die();

        $prescriptionLocation=($prescription['tmp_name']);
        $prescriptionName= $prescription['name'];

        $prescription_des ="prescription/" . $prescriptionName;
        move_uploaded_file($prescriptionLocation,$prescription_des);

        // echo $prescription_des;
        // die();

        $update_query = mysqli_query($conn, "UPDATE `medical_record` SET `prescription`='$prescription_des' WHERE id = '$id' AND nid = '$nid'");

        if(!$update_query){
            echo "<script>alert('Connection Problem')</script>";
            echo "<script>location.href='seemore_Update.php'</script>";
          }
          else{
            echo "<script>alert('Prescription Update is Successful')</script>";
            echo "<script>location.href='seemore_new.php'</script>";
          }




?>