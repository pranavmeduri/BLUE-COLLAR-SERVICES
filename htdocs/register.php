<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/servicelogo.jpg" type="image/x-icon">
  <meta name="description" content="Site Maker Description">
  <title>Success</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section id="ext_menu-d">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="http://serve.epizy.com" class="navbar-logo"><img src="assets/images/servicelogo.jpg" alt="Mobirise"></a>
                        <a class="navbar-caption" href="http://serve.epizy.com">With Love SERVE</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="http://serve.epizy.com">HOME</a></li><li class="nav-item"><a class="nav-link link" href="aboutus.html">ABOUT US</a></li><li class="nav-item"><a class="nav-link link" href="contactus.html">CONTACT US</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="http://serve.epizy.com">http://serve.epizy.com</a></section><section class="mbr-section mbr-section-hero mbr-section-full header2 mbr-parallax-background mbr-after-navbar" id="header2-e" style="background-image: url(assets/images/landscape.jpg);">

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(0, 0, 0);">
    </div>

    <div class="mbr-table mbr-table-full">
        <div class="mbr-table-cell">

            <div class="container">
                <div class="mbr-section row">
                    <div class="mbr-table-md-up">
                        
                        
                                                            <?php

                                      include "db.php";

                                                $count=0;
                                                $res=mysqli_query($conn,"select * from users where Name='$_POST[name]' ");
                                                 $count=mysqli_num_rows($res);
                                                     if($count>0)
                                                   {
                                                     ?>
                                                     <script type= "text/javascript">
                                                        alert("this name already exists please choose another");
                                                     </script>
                                                 <?php


                                                 }
                                                  else{


                                                  $sql = "INSERT INTO users (name,email,phone,pass) VALUES ('{$_POST["name"]}','{$_POST["email"]}','{$_POST["phone"]}','{$_POST["password"]}')";
                                                     


                                                     }



                                              if (mysqli_query($conn, $sql)) {
                                                    
                                                                                                            

                                                               
                                            
                                                     } else {
                                                      ?>
                                                        <div class="mbr-table-cell col-md-5 content-size text-xs-center text-md-right">

                            <h3 class="mbr-section-title display-2">If name already exists, register with another name,else</h3>

                                                              

                                                 <?php
                                 //   echo "ERROR==== THIS NAME ALREADY EXISTS PLEASE CHOOSE ANOTHER NAME " . $sql . "<br>" . mysqli_error($conn);
                                                   }



                                       mysqli_close($conn);

                                                 ?>
                                      

                            <div class="mbr-section-text" align="left">
                                  <div align="center">
  
                      
                                <p>Proceed &nbsp;to Login &nbsp;</p>
                            
                            
  
                            <div class="mbr-section-btn"><a class="btn btn-primary" href="login.php">Login</a></div>

                     

                        </div>
                              <div class="mbr-table-cell mbr-valign-top mbr-left-padding-md-up col-md-7 image-size" style="width: 35%;">
                          <div class="mbr-figure">  <img src="assets/images/all-home-services-1400x1273.jpg"></div>   
                                         

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating hidden-sm-down" aria-hidden="true"><a href="#next"><i class="mbr-arrow-icon"></i></a></div>

</section>




  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>