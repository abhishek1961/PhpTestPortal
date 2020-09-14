<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:http://localhost/Core-test-portal/public/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/Core-test-portal/public/index.html');
?>
<html>
 <head>
  <title> Admin Home</title>
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
   <a href="http://localhost/Core-test-portal/public/managetests.php">Manage Tests</a><br/>
   <a href="http://localhost/Core-test-portal/public/managequestions.php">Manage Questions</a><br/>
  </div>
  <div id="section">
  <h1>Control Pannel</h1>
   <table cellspacing="50px">
	 <tr>
	  <td><a href="http://localhost/Core-test-portal/public/managetests.php"><img id="testimage" src="./images/testimage.jpg" style="border:2px solid olive;width:100px;height:100px;"/><br/>Manage Test</a></td>
	  <td><a href="http://localhost/Core-test-portal/public/managequestions.php"><img id="questionimage" src="./images/questionsimage.jpg" style="border:2px solid olive;height:100px;width:100px;"/><br/>Manage Questions</a></td>
	 </tr>
   </table>
    </div>  
   <div id="footer">
   copyright &copy;||Developer-name||2018 
   </div>
  
 </body>
</html>