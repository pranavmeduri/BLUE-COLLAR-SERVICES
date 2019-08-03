<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/servicelogo.jpg" type="image/x-icon">
  <meta name="description" content="">
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
  
  
 
<header>
<h1>.......Authorized Personnel Only!!!!!!........</h1>
<h2>  Rights  Reserved  for  Admin                    </h2>
</header>
<title>ADMIN</title>
</head>
<body>
 <form name="form1" action=" " method="post">    
     <div class="row row-sm-offset">
                     
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <tr>
                 
                                                               
                                        <td>Name</td>
                                        <td><input type="text" name="t1"></td>
                                       
                        
                                             
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


 
                     
                             <td colspan="2" align="center"><input type="submit"     class="btn btn-primary"  name="submit1" value="LOGIN"></td>
                           
                           
                     

                       

                     
                                         
                                  </div>
                                
</form>

<?php
if(isset($_POST["submit1"]))
{
                                             include "db.php";

                                                $count=0;
                                                $res=mysqli_query($conn,"select * from adminlogin where name='$_POST[t1]'  && pass='$_POST[t2]' ");
                                                 $count=mysqli_num_rows($res);
                                                     if($count>0)
                                                        {
                                                               ?>
                                                            <script type="text/javascript ">
                                                              window.location="admincategory.php";
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









<!DOCTYPE html>
<html>
<body>
<form name="form1" action="index.html" method="post">  
</tr>
   <tr>
       <td><colspan="3" align="center" ><input type="submit" name="submit" value="back"></td>
       
        </tr> 
</table>
</form>                               
</body>
</html>



