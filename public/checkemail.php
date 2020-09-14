<?php
 $useremail=$_GET['useremail'];
 
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 $q="select email from user where email='$useremail'";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 if($row_count!=0)
  echo "user hai";
 else
  echo "user nahi hai"
?>