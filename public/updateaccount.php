<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:http://localhost/Core-test-portal/public/adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/Core-test-portal/public/adminhome.php');
   
   $username=$_SESSION['username'];
   $password=$_POST['password'];
   $con=mysqli_connect('localhost','root','');
   mysqli_select_db($con,'id4897078_onlinetestdb');
   $q="update user set password='$password' where username='$username'";
   mysqli_query($con,$q);
   mysqli_close($con);
   header('location:http://localhost/Core-test-portal/public/myaccount.php');
?>
