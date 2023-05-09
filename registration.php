<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">



    <title>Registration</title>


    <style>
      
        form{
       background-color: #FFFFFF;
       padding: 15px;
       border-radius: 15px;
       /* box-shadow: 0px 0px 10px 10px; */
       box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
     }
     .container-fluid{
         padding-bottom: 50px;
         padding-top: 50px;
         background: #E7F5F6;
     }
     .leftform{
        background-color: aqua;
        min-height: 300px;
        border-radius: 10px;
     }
     .leftform div{
        padding: 25px;
        background: #E7F5F6;
        border-radius: 5px;
     }
     .leftform div:hover{
        background: #b8df2c;
     }
     .leftform div:active{
      background: purple;
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
              <a href="index.php" class="text-black"><span class="text-white">স্বাস্থ্য-কার্ড</a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="about.php" class="nav-link">About e-Health</a></li>
                  <li><a href="registration_info.php" class="nav-link">Registration</a></li>


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

                  <li><a href="login.php" class="nav-link">Log In</a></li>

                  <!-- <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  <li><a href="#blog-section" class="nav-link">Blog</a></li> -->
                  
                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

      </header>

      <div class="container-fluid">
        <div class="row justify-content-center">
           <div class="col-lg-4 col-md-6 col-sm-12 row align-items-center justify-content-center " >
                        
                <div class="leftform row align-items-center col-lg-12 p-5 bg-info">
                    <div class="col-lg-12 text-center mb-3">National Identity Card</div>
                    <div class="col-lg-12 text-center mb-3">Birth Certificate</div>
                    <div class="col-lg-12 text-center mb-3">Passport</div>
                </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-12 mt-5" >
                        
            <form class="border border-rounded  mb-5 text-black p-5" action="reg_action.php" method="post" >
                  <div class="mb-4 text-center">
                     <h3>Register YourSelf</h3>
                  </div>
                   <div class="mb-2 ">
                     <!-- Username: -->
                     <label for="nid">NID:</label>
                     <input type="number" class="form-control "  name="nid" placeholder="Enter Your National ID Number"  required>
                   </div>
                   <div class="mb-2 ">
                    <!-- Username: -->
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control "  name="dob"  required>
                  </div>

                   <!-- <div class="mb-2 ">
                     
                     <label for="email">Email:</label>
                     <input type="text" class="form-control "  name="email" placeholder="Enter Your E-mail Address"  required>
                   </div>
                   <div class="mb-2 ">
                    <label for="mobile">Mobile:</label>
                   
                    <input type="text" class="form-control"  name="mobile" placeholder="Put Your Mobile Number"  required>
                  </div>
     
                   <div class="mb-2 ">
                    
                     <label for="pass">Password:</label>
                     <input type="text"   class="form-control "  name="pass" placeholder="Set Your Password" required>
                   </div>
                   <div class="mb-2 ">
                 
                     <label for="cpass">Confirm Paassword:</label>
                     <input type="text" class="form-control"  name="cpass" placeholder="Confirm Your Given Password"  required>
                   </div>
                   -->
                  
              
                   <button type="submit" class="btn pt-2 btn-primary btn-block btn-info rounded" name="sub">Register</button>
     
                   <p class="forgot pt-3">already Registered? <a href="login.php">Log In</a></p>  
         
                  
                </form>
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
  


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>