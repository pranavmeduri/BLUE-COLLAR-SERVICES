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
  
  















<body>
<form name="form1" action="adminuserdp.php" method="post">  
</tr>
   <tr>
       <td><colspan="2" align="center" ><input type="submit" name="submit" value="back"></td>
       
        </tr> 
</table>
</form>                               
</body>
</html>







 <?php

include "db.php";


if(isset($_POST["submit3"]))
{
echo "<table>";
    $result = mysqli_query($conn,"SELECT * FROM users ");


 echo "<table border =1  align=center  style=width:50% margin:auto  >";
     echo "<tr>";
echo "<th>";  echo 'id';    echo"</th>";
     echo "<th>";  echo 'name';    echo"</th>";
      echo "<th>";  echo 'email';    echo"</th>";
        echo "<th>";  echo 'pass';    echo"</th>";
        echo "<th>";  echo 'phone';    echo"</th>";
      echo "</tr>";
   while($row = mysqli_fetch_array($result))
      {
  
 //   echo $row['sno'] . " " . $row['name']. " " . $row['phone'] . " " . $row['address']. " " . $row['exp']; //these are the fields that you have stored in your database table employee
 //     echo "<br />";
      
     echo "<tr>";
     
    echo "<td>";  echo $row['id'];    echo"</td>";
     echo "<td>";  echo $row['name'];    echo"</td>";
      echo "<td>";  echo $row['email'];    echo"</td>";
        echo "<td>";  echo $row['pass'];    echo"</td>";
        echo "<td>";  echo $row['phone'];    echo"</td>";



      echo "</tr>";
     }
  echo "</table>";

//} else {
//    echo "0 results";
//}

echo "</table>";

}



  

mysqli_close($conn);

                                                 ?>