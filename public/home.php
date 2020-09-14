<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:http://localhost/Core-test-portal/public/userlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/Core-test-portal/public/adminhome.php');
 
 $username=$_SESSION['username'];
  {
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 $q="select status from user where username='$username'";
 $result=mysqli_query($con,$q);
 $row=mysqli_fetch_array($result);
 if($row['status']==0)
 {
    session_destroy(); 
    echo'
             <script type="text/javascript"> 
                 
                 window.location.replace("http://localhost/Core-test-portal/public/userlogin.php");
            </script>
       ';
 }
  }
  
?>
<html>
 <head>
  <title>Home</title>
  <link rel="icon" type="image/gif" href="./images/TAlogo.png">
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="http://localhost/Core-test-portal/public/logout.php">Logout</a><br/>  
   <a href="http://localhost/Core-test-portal/public/myaccount.php">My Account</a><br/>
   <a href="http://localhost/Core-test-portal/public/testlist.php">List of Test Papers</a><br/>
  </div>
  <div id="section">
  <h1>Home</h1>
   <table cellspacing="50px">
	 <tr>
	  <td><a href="http://localhost/Core-test-portal/public/myaccount.php"><img id="myaccountimage" src="./images/myaccountimage.jpg" style="border:2px solid olive;width:100px;height:100px;"/><br/>My Account</a></td>
	  <td><a href="http://localhost/Core-test-portal/public/testlist.php"><img id="testpaperslistimage" src="./images/testpaperslistimage.jpg" style="border:2px solid olive;height:100px;width:100px;"/><br/>Test Papers List</a></td>
	  <td><a href="http://localhost/Core-test-portal/public/aboutme.php"><img id="rateimage" src="./images/rateimage.jpg"style="border:2px solid olive;height:100px;width:100px;"/></br>Rate Us</a></td>
	  <td><a href="http://localhost/Core-test-portal/public/report.php"><img id="report" src="./images/report.png"style="border:2px solid olive;height:100px;width:100px;"/></br>Report</a></td>
	 </tr>
   </table>
    </div>  
   <div id="footer">
   copyright &copy;||Developer-name||2018   
  </div>
  
 </body>
</html>