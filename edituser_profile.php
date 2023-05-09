<?php
                include 'action.php';
                session_start();
                $nid = $_SESSION['nid'];
                $name = $_SESSION['name'];
                // $dob = $_SESSION['dob'];
                $recordCheck = mysqli_query($conn,"SELECT * FROM `health_info` WHERE nid = '$nid'");
               

                // $match = mysqli_query($conn, $recordCheck);
                $data = mysqli_fetch_array($recordCheck);

                ?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



    <title>User profile</title>
    <style>
                body {
    background: #77D5CC;
}
.container{
    border-radius: 50px;
}
.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

            </style>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


      <!-- <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@yourdomain.com</span></a>
              <span class="mx-md-2 d-inline-block"></span>
              <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block">1+ (234) 5678 9101</span></a>


              <div class="float-right">

                <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

              </div>

            </div>

          </div>

        </div>
      </div> -->

      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

<div class="container">
  <div class="row align-items-center position-relative">


    <div class="site-logo">
      <a href="home.php" class="text-black"><span class="text-white">স্বাস্থ্য-কার্ড</a>
    </div>

    <div class="col-12">
      <nav class="site-navigation text-right ml-auto " role="navigation">

      <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
          <li><a href="home.php" class="nav-link">Home</a></li>
          <li><a href="about_user.php" class="nav-link">About e-Health</a></li>
          <!-- <li><a href="registration_info.php" class="nav-link">Registration</a></li> -->


          <!-- <li class="has-children">
            <a href="#about-section" class="nav-link">About Us</a>
            <ul class="dropdown arrow-top">
              <li><a href="#team-section" class="nav-link">Team</a></li>
              <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
              <li><a href="#faq-section" class="nav-link">FAQ</a></li>
              <li class="has-children">
                <a href="#">More Links</a>
                <ul class="dropdown">
                  <li><a href="#">Menu One</a></li>
                  <li><a href="#">Menu Two</a></li>
                  <li><a href="#">Menu Three</a></li>
                </ul>
              </li>
            </ul>
          </li> -->

          <li><a href="profile.php" class="nav-link"><?php echo $name; ?></a></li>
          <li><a href="logout.php" class="nav-link">Log Out</a></li>

          <!-- <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
          <li><a href="#blog-section" class="nav-link">Blog</a></li> -->
          
        </ul>
      </nav>

    </div>

    <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

  </div>
</div>

</header>

    <div class="container bg-white mt-5 mb-5 pt-5 pb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="<?php 
                        if($data['image']== 'image/' )
                        {
                            echo "https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg" ;
                        }
                        else{
                            echo $data['image'];
                        }
                        ?>">
            <form action="editprofile_check.php" method="post" enctype="multipart/form-data">
                  <input type="file" name="image" placeholder="Upload Photo">
                  <!-- <button type="submit" name="submit" value="image_up">Upload Photo</button> -->
                  
            <!-- </form> -->
           </span><span class="font-weight-bold mt-3"><?php echo $data['name']?></span><span>
                <!-- <span class="text-black-50">edogaru@mail.com.my</span><span> </span> -->
            </div>
            
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h2 class="text-right">Profile Settings</h2>
                </div>
                <!-- <form action="editprofile_checkDir.php" method="post" enctype="multipart/form-data"> -->
                <div class="row mt-2">
                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" name="u_name" placeholder=" name" value="<?php echo $data['name']?>" readonly></div>
                    <div class="col-md-12"><label class="labels">NID Number</label><input type="text" class="form-control" name="u_nid" placeholder="enter nid number" value="<?php echo $data['nid']?>" readonly></div>
                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="text" class="form-control" name="u_dob" placeholder="enter phone number" value="<?php echo $data['dob']?>" readonly></div>
                    <!-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div> -->
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Father's Name</label><input type="text" class="form-control" name="u_fname" placeholder="enter father name" value="<?php echo $data['f_name']?>" readonly></div>
                    <div class="col-md-12"><label class="labels">Mother's Name</label><input type="text" class="form-control" name="u_mname" placeholder="enter mother's name" value="<?php echo $data['m_name']?>" readonly></div>
                    <div class="col-md-12"><label class="labels">Permanent Address</label><input type="text" class="form-control" name="u_padd" placeholder="enter your permanent address" value="<?php echo $data['p_address']?>" readonly></div>
                    <div class="col-md-12"><label class="labels">Present Address</label><input type="text" class="form-control" name="u_tadd" placeholder="enter your present address" value="<?php echo $data['t_address']?>"></div>
                    <div class="col-md-12"><label class="labels">Blood Group</label><input type="text" class="form-control" name="u_bgrp" placeholder="enter address line 2" value="<?php echo $data['b_group']?>" readonly></div>
                    <div class="col-md-12"><label class="labels">E-mail</label><input type="text" class="form-control" name="u_email" placeholder="enter email address" value="<?php echo $data['email']?>"></div>
                    <div class="col-md-12"><label class="labels">Phone</label><input type="text" class="form-control" name="u_phone" placeholder="enter phone number" value="<?php echo $data['phone']?>"></div>
                    <!-- <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" name="u_pass" placeholder="Set Password" value="<?php ?>"></div> -->
                    <div class="col-md-12 my-3"><label class="text text-center text-weight-bold">Password</label><input type="password" class="form-control" name="u_pass" placeholder="Enter Your Password to save profile" value="" required></div>
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit" name = "submit" value="image_up">Save Profile</button>
                    <!-- <button class="btn btn-primary profile-button" type="button">Skip</button> -->
                </div>
            </div>
            </form>
        </div>
        <!-- <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>




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
<!-- Footer -->
  
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>