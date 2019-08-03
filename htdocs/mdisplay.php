<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v3.12.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.12.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/servicelogo-128x128.jpg" type="image/x-icon">
  <meta name="description" content="Site Creator Description">
  <title>Masonry</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="mbr-section article" id="msg-box8-11" style="background-color: rgb(204, 144, 1); padding-top: 40px; padding-bottom: 80px;">

    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">OUR MASONS</h3>
                
                
            </div>
        </div>
    </div>

</section>

<section class="engine"><a rel="external" href="http://serve.epizy.com">With love SERVE</a></section><section class="mbr-section" id="content5-12" style="background-color:rgb(199, 182, 1); padding-top: 200px; padding-bottom: 200px;">
<?php
    include "db.php";
echo "<table>";
    $result = mysqli_query($conn,"SELECT * FROM table2 ");
  
//if (mysqli_num_rows($result) > 0) { 
    // output data of each row
 



 echo "<table border =1  align=center  style=width:50% margin:auto  >";
     echo "<tr>";
echo "<th>";  echo 'sno';    echo"</th>";
     echo "<th>";  echo 'name';    echo"</th>";
      echo "<th>";  echo 'phone';    echo"</th>";
        echo "<th>";  echo 'address';    echo"</th>";
        echo "<th>";  echo 'exp(yrs)';    echo"</th>";
      echo "</tr>";
   while($row = mysqli_fetch_array($result))
      {
  
 //   echo $row['sno'] . " " . $row['name']. " " . $row['phone'] . " " . $row['address']. " " . $row['exp']; //these are the fields that you have stored in your database table employee
 //     echo "<br />";
      
     echo "<tr>";
     
    echo "<td>";  echo $row['sno'];    echo"</td>";
     echo "<td>";  echo $row['name'];    echo"</td>";
      echo "<td>";  echo $row['phone'];    echo"</td>";
        echo "<td>";  echo $row['address'];    echo"</td>";
        echo "<td>";  echo $row['exp'];    echo"</td>";



      echo "</tr>";
     }
  echo "</table>";

//} else {
//    echo "0 results";
//}

echo "</table>";
    mysqli_close($conn);
    ?>

    

    <div class="container">
        
        
    </div>

</section>

<section class="mbr-section" id="content5-13" style="background-color:rgb(199, 182, 1); padding-top: 200px; padding-bottom: 200px;">

    

    <div class="container">
        
        
    </div>

</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>