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
<form name="form1" action="adming.php" method="post">  
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

if(isset($_POST["submit1"]))
{
$add=addslashes($_POST["t3"]);
echo $add;
$sql="INSERT INTO table1 (name,phone,address,exp) values ('{$_POST["t1"]}','{$_POST["t2"]}','{$add}','{$_POST["t4"]}')";
echo $sql;             

if (mysqli_query($conn, $sql)) {
    echo "Inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

if(isset($_POST["submit2"]))
{
   $sql = "DELETE FROM table1 WHERE name='{$_POST["t1"]}' ";

if (mysqli_query($conn, $sql)) {
    echo " Deleted successfully";
} else {
    echo "Error : " . mysqli_error($conn);
}

}

if(isset($_POST["submit3"]))
{
echo "<table>";
    $result = mysqli_query($conn,"SELECT * FROM table1 ");


 echo "<table border =1  align=center  style=width:50% margin:auto  >";
     echo "<tr>";
echo "<th>";  echo 'sno';    echo"</th>";
     echo "<th>";  echo 'name';    echo"</th>";
      echo "<th>";  echo 'phone';    echo"</th>";
        echo "<th>";  echo 'address';    echo"</th>";
        echo "<th>";  echo 'exp';    echo"</th>";
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

}



  if(isset($_POST['submit4']))
{
    
     $sql = "UPDATE table1 SET  phone='{$_POST["t2"]}' ,address='{$_POST["t3"]}',exp='{$_POST["t4"]}'   WHERE name='{$_POST["t1"]}' ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


}
 


mysqli_close($conn);

                                                 ?>