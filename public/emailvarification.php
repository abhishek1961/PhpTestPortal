<?php
$email=$_GET['email'];

$con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 $q="update  user set status=1 where email='$email'";
 $result=mysqli_query($con,$q);
 header('location:http://localhost/Core-test-portal/public/userlogin.php');


?>