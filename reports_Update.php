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
        $prev_reports = $data['reports'];

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

            $reports_name = $prev_reports.$reports_name;

            // echo $reports_name;

        // echo $prescription_des;
        // die();

        $update_query = mysqli_query($conn, "UPDATE `medical_record` SET `reports`='$reports_name' WHERE id = '$id' AND nid = '$nid'");

        if(!$update_query){
            echo "<script>alert('Connection Problem')</script>";
            echo "<script>location.href='seemore_Update.php'</script>";
          }
          else{
            echo "<script>alert('Reports Update is Successful')</script>";
            echo "<script>location.href='seemore_new.php'</script>";
          }




?>