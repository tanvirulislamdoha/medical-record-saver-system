
<?php
        include 'action.php';
        session_start();
        $nid = $_SESSION['nid'];
        $name = $_SESSION['name'];
        $id = $_REQUEST['id'];
        $_SESSION['id'] = $id;

        $report = $_REQUEST['report'];
        
        // $dob = $_SESSION['dob'];
        $recordCheck = mysqli_query($conn, "SELECT * FROM `medical_record` WHERE nid = '$nid' AND id = '$id'");
        
   
        $data = mysqli_fetch_array($recordCheck);

        
        $x = $data['reports'];

        
        //   $x= "ssdgfhfdf/dsfdgfhg/dwfsdgf/dfesgfhd/"
        $i_pos=0;
        $inc = 0;
        $y = array("");
        $p = "";
        
        for($i=$i_pos; $i<strlen($x); $i++){
          if($x[$i]!="/"){
            $p = $p.$x[$i];
          }
          else{
            $y[$inc] = $p;
            $p="";
            $inc++;
            $i_pos = $i+1;
          }
        }
        
        
        $updated_reports = "";
        $hello = "";

        $a = 0;
        while($a < count($y)){
          if($y[$a] == $report){
            $hello = "hi";
          }
          else{
            $updated_reports = $updated_reports.$y[$a]."/";
          }
          $a++;
        }

        // echo $upadated_reports;












         $update_query = mysqli_query($conn, "UPDATE `medical_record` SET `reports`= '$updated_reports' WHERE id = '$id' AND nid = '$nid'");

        if(!$update_query){
            echo "<script>alert('Connection Problem')</script>";
            echo "<script>location.href='seemore.php'</script>";
          }
          else{
            echo "<script>alert('Report is Deleted')</script>";
            echo "<script>location.href='seemore_new.php'</script>";
          }




?>