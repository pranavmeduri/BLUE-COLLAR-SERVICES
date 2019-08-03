<!DOCTYPE html>
<html>
<head>
<!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/servicelogo.jpg" type="image/x-icon">
  <meta name="description" content="LOGIN">
  <title>LOGIN</title>
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

<section id="ext_menu-r">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="https://mobirise.com" class="navbar-logo"><img src="assets/images/servicelogo.jpg" alt="Mobirise"></a>
                        <a class="navbar-caption" href="http://serve.epizy.com/">With Love SERVE</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index.html">HOME</a></li><li class="nav-item"><a class="nav-link link" href="aboutus.html">ABOUT US</a></li><li class="nav-item"><a class="nav-link link" href="contactus.html">CONTACT US</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>


<section class="engine"><a rel="external" href="http://serve.epizy.com/">With love SERVE</a></section><section class="mbr-section mbr-after-navbar" id="form1-s" style="background-color: rgb(71, 85, 119); padding-top: 120px; padding-bottom: 120px;">
  
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">LOGIN</h3>
                    
                </div>
            </div>
        </div>
    </div>
  
     <form name="form1" action=" " method="post">    
     <div class="row row-sm-offset">
                     
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <tr>
                                                                 
                         <div style="margin-left: 50%">
                                          
                                   <table>
                                           <td>Name</td>
                                     
                                          <td><input type="text" name="t1"></td>
                                       </table > 
                        </div>
                                             
                                       </tr>


                               </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                   <tr>
                                                        
     
                                            <td>Password</td>
                                           <td><input type="password" name="t2"></td>
 
                                   </tr>
                                </div>
                            </div>
                     
                                    <table style="margin: auto;">
                                     <div style="margin-left: 45%">
                                   <td colspan="2" align="center"><input type="submit"     class="btn btn-primary"  name="submit1" value="LOGIN"></td>
                                  </div>
                                 </table>
</form>


</section>

<section class="mbr-section" id="content5-19" style="background-color:rgb(71, 85, 119); padding-top: 200px; padding-bottom: 200px;">

    

    <div class="container">
        
        
    </div>

</section>






<?php
if(isset($_POST["submit1"]))
{
                                             include "db.php";

                                                $count=0;
                                                $res=mysqli_query($conn,"select * from users where name='$_POST[t1]'  && pass='$_POST[t2]' ");
                                                 $count=mysqli_num_rows($res);
                                                     if($count>0)
                                                        {
                                                               ?>
                                                            <script type="text/javascript ">
                                                              window.location="logins.html";
                                                            </script>
                                                      <?php

                                                       }

                                                    else
                                                     {
                                                         ?>
                                                            <script type="text/javascript ">
                                                              alert("incorrect name or password"  );
                                                            </script>
                                                      <?php
                                                     }
}
 mysqli_close($conn);

?>
</body>
</html>