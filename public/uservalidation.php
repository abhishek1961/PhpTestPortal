<?php
 session_start();
 $username=$_POST['username'];
 $password=$_POST['password'];
 if($username=="admin")
  header('location:http://localhost/Core-test-portal/public/adminlogin.php');
 else
 {
 /* Establish Connection with mysql */
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 $q="select * from user where username='$username'&& password='$password'";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 if($row_count==1)
 {
    
  $row=mysqli_fetch_array($result);
  $_SESSION['username']=$row['username'];
  header('location:http://localhost/Core-test-portal/public/home.php');
 }
 else
  { 
    $p1="select * from user where username='$username'";// password=afar";dummypassword!!
    $r1=mysqli_query($con,$p1);
     $rc1=mysqli_num_rows($r1);
   
    if($rc1==1 )
    {
        
       echo'
             <script type="text/javascript"> 
                 alert("check username or password");
                 window.location.replace("http://localhost/Core-test-portal/public/userlogin.php");
            </script>
       ';
       
      // header('location:http://localhost/Core-test-portal/public/userlogin.php');
    }
    else
    {header('location:http://localhost/Core-test-portal/public/userlogin.php');}
      }
  
 }
?>

