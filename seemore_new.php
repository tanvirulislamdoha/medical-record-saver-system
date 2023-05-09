<?php
include 'action.php';
session_start();
$nid = $_SESSION['nid'];
$name = $_SESSION['name'];
$id = $_SESSION['id'];


$getInfo = mysqli_query($conn, "SELECT * FROM `medical_record` WHERE id = '$id'");
      

//   $match = mysqli_query($conn, $recordCheck);
$data = mysqli_fetch_array($getInfo);
?>



<html>


    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<style>

   

.home {
    background: #f6f7fa;
}

#navigation {
    background: #0e1a35;
}

#navigation {
    padding: 0;
}

.header-top {
    margin: 0;
    padding-top: 2px;
}

.header-top img {
    border-radius: 50%;
    max-width: 48px !important;
    width: 100%;
}


.header-rightside .nav > li > a:focus,
.header-rightside .nav > li > a:hover {
    background: none;
    text-decoration: none;
}


header {
    background: #ffffff none repeat scroll 0 0;
    box-shadow: 0 1px 12px rgba(0, 0, 0, 0.04);
    display: inline-block !important;
    line-height: 23px;
    font-size: 17px;
    padding: 15px;
    transition: all 0.5s ease 0s;
    width: 100%;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

.pic1{
    height: 500px;
    border-radius: 20px;
    margin-top: 15px;
    margin-bottom: 10px;
  
}

.pic{
    height: 800px;

    border-radius: 20px;
    margin-top: 15px;
    margin-bottom: 10px;
    margin-right: 80px;
    margin-left: 0px;
   
}
.picup{
    height: 250px;
    border-radius: 15px 15px 0px 0px;
    margin: 10px;
    background: #EF6603;
}
.picup1,.picup{
    height: 250px;
    border-radius: 0px 0px 15px 15px;
  margin: 10px;
  background: #2EE59D;
  
 
  display: flex;
  align-items: center;
  justify-content: center;
  color: #000;
  background-color: #FFFAFA;
  border: none;
  border-radius: 25px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
.picup1:hover ,.picup:hover{
  background-color: #17A2B8 ;
  box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
  color: #fff;
  transform: translateY(-7px);
}
 

.back{
    background: #E7F5F6;
}
.bd{
    border-right:2px red;
}
.presbtn{
    background: #F26D3E;
}
.reportbtn{
    background: #F26D3E;
}
.scrollbar{
    overflow-y: scroll;
 
}
.delete{
    margin: 8px 0px 0px 120px;
}
/* body{
    background-color: #0d172e;
} */
</style>

</head>
<body class="home">

    
<div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar js-sticky-header site-navbar-target pt-5 pb-5" role="banner">

<div class="container">
  <div class="row align-items-center position-relative">


    <div class="site-logo">
      <a href="home.php" class="text-black"><span class="text-white">স্বাস্থ্য-কার্ড</a>
    </div>

    <div class="col-12">
      <nav class="site-navigation text-right ml-auto " role="navigation">

        <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
          <li><a href="home.php" class="nav-link">Home</a></li>
          <li><a href="about.php" class="nav-link">About e-Health</a></li>
          

          <li><a href="profile.php" class="nav-link"><?php echo $name; ?></a></li>
          <li><a href="logout.php" class="nav-link">Log Out</a></li>

          
        </ul>
      </nav>

    </div>

    <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

  </div>
</div>

</header>



        
            <header>
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-center justify-content-center">
                        
                            <span>

                                   <h4> <?php  echo "<strong>Hospital Name:    </strong>".$data['hospital_name']; ?></h4> 
                                   <h4> <?php  echo "<strong>Dr Name:    </strong>".$data['dr_name']; ?></h4> 
                                   <h4> <?php  echo "<strong>Date:    </strong>".$data['date']; ?></h4> 
                            </span>

                     
                    </div>

                </div>
            </header>
            <header class="presbtn">
                <div class="row ">
                    <div class="col-lg-12  d-flex align-items-center justify-content-center">
                        
                            <h3>
                                Prescription
                            </h3>

                     
                    </div>

                </div>
            </header>
            <div class="container-fluid">

           
            <div class="row back pb-5">
                
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                     <div class="picup" style="height: 250px; width:500px;">
                                            <form class="" action="seemore_Update.php" method="post" enctype="multipart/form-data">
                                                <div class="input-group border-0 ">
                                                <input class="form-control border-0 p-2 pl-3 rounded-pill" type="file" name="prescription" placeholder="Upload Prescription" required>
                                                <input class="d-none form-control border-0 p-2 pl-3 rounded-pill" style="display:hidden;" type="text" name="id" value='<?php echo $id ?>' placeholder="Upload Prescription" required>
                                                </div>
                                                
                                                <div class="col-md-12 text-center mt-3">
                                                    <button type="submit" class="btn btn-warning" name="submit">Change Prescription</button>
                                                </div>
                                                
                                                
                                            </form>
                                        
                                            
                                            
                    </div>
                  
                 </div>
                 <div class="col-md-8"  style="height: 100%; width:100%;">
                     <div class="row-fluid">
                         <div class="pic col-md-12 bg-light d-flex align-items-center justify-content-center" style=" width:100%;">
                      <div class="">
                      <img src="<?php echo $data['prescription']; ?>" style="height: 100%; width:100%; border-radius: 20px;">
                      </div>
                      
                </div>
            
        </div>
       
    </div>
</div>
</div>

<header class="reportbtn">
                <div class="row">
                    <div class="col-lg-12  d-flex align-items-center justify-content-center">
                        
                            <span>
                                <h3>Report</h3>
                            </span>
 
                     
                    </div>

                </div>
            </header>
<div class="container-fluid">

           
<div class="row back pb-5">
    
    <div class="col-md-4 d-flex align-items-center justify-content-center">
         <div class="picup" style="height: 250px; width:500px;">
                        <form class="" action="reports_Update.php" method="post" enctype="multipart/form-data">
                            <div class="input-group border-0 ">
                            <input class="form-control border-0 p-2 pl-3 rounded-pill" type="file"  name="reports[]" placeholder="Upload Prescription" multiple required>
                            <input class="d-none form-control border-0 p-2 pl-3 rounded-pill" style="display:hidden;" type="text" name="id" value='<?php echo $id ?>' placeholder="Upload Prescription" required>
                            </div>
                            
                            <div class="col-md-12 text-center mt-3">
                                <button type="submit" class="btn btn-warning" name="submit" value="image_up">Upload Reports</button>
                            </div>
                                    
                                </form>
                            
                                
                                
        </div>
      
     </div>
     <div class="col-md-8 pic1 scrollbar">
         <div class="row">
             <div class=" p-5 col-md-12 bg-light ">
             <div class="row">
                
          
             <?php
  include 'action.php';
//   $getInfo = mysqli_query($conn,"SELECT * FROM `medical_record` WHERE id = '$id'");
      

// $match = mysqli_query($conn, $recordCheck);
//   $data = mysqli_fetch_array($getInfo);

  $x = $data['reports'];
//   $x= "ssdgfhfdf/dsfdgfhg/dwfsdgf/dfesgfhd/"
$i_pos=0;
$inc = 0;
$y = array("");
$p = "";

for($i=$i_pos; $i<strlen($x); $i++){
  if($x[$i]!="/"){

    //for($p=$i_pos; $p<strlen($x); $p++)

    $p = $p.$x[$i];
    // $y[$inc] = $x[$i];
    // $i_pos = $i+1;

  }
  else{
    $y[$inc] = $p;
    $p="";
    $inc++;
    $i_pos = $i+1;
  }
}

// for($k=0; $k<count($y); $k++){
//   echo $y[$k]."<br>";
// }

// 
if($y[0] != NULL){
$a = 0;
while($a < count($y)){
  echo "<div class='col-lg-4 col-md-6 col-sm-12 pb-5'>
  <img class='img-thumbnail' src='reports/$y[$a]' style='height: 300px; width:300px;'>
  <form action='reports_delete.php' method=' post' >
    <input class='d-none' type='text' name = 'id' value='$id'>
    <input class='d-none' type='text' name = 'report' value='$y[$a]'>
    <div class='col-md-12 text-center mt-3'>
        <button type='submit' class='btn btn-danger' name='submit'>Delete</button>
    </div>
    </form>
  
  </div>
  ";
  // echo $y[$a];
  // echo "<H1>photo/.$y[$a]</H1>";
//   echo "<br>";
//   echo "<br>";
//   echo "<br>";
  $a++;
}
}
?>
<!-- <a class='btn btn-danger' href='reports_delete.php?'>Delete</a> -->

             
          <!-- <div class="">
          <img class="ml-2" src="./uploads/sd.jpg" style="height: 100%; width:100%;">
          </div> -->
        
  
  </div>

</div>

</div>
</div>
</div>
</div>




       <!-- Footer -->
       <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pt-5 pb-5">
    <!-- Section: Social media -->
 
    <!-- Section: Social media -->

    <!-- Section: Form -->
  
    <!-- Section: Form -->

    <!-- Section: Text -->
  
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-2 col-md-6 col-sm-12 mb-4 mb-md-0 d-flex align-items-center justify-content-center">
          <h2 class="text-uppercase fw-5">স্বাস্থ্য-কার্ড</h2>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12 mb-4 mb-md-0 d-flex align-items-center justify-content-center">
         

          <ul class="list-unstyled mb-0 text-left">
            <li>
              <a href="#!" class="text-white ">FAQ</a>
            </li>
            <li>
              <a href="#!" class="text-white">Manual</a>
            </li>
            <li>
              <a href="#!" class="text-white">Privacy Policy</a>
            </li>
            <li>
              <a href="#!" class="text-white">Terms of service</a>
            </li>
            <li>
              <a href="#!" class="text-white">Other Affiliates</a>
            </li>
         




            
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 col-sm-12">
          <p class="">Funded & Maintained by </p>

          <img src="./images/dept.png">
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 col-sm-12">
        
          <p class="">Affiliates </p>
          <img src="./images/affiliates.png">

          <!-- <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul> -->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://tanvirulislamdoha.github.io/">Tanvir</a> & <a class="text-white" href="https://github.com/SourovD?tab=repositories">Saurav</a>
  </div>
  <!-- Copyright -->
</footer>
    <script>
        $(document).ready(function(){
   $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
   });
});


    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>


   
</body>
</html>

