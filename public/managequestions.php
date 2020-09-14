<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/Core-test-portal/public/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/Core-test-portal/public/index.html');
 
 
?>
<html>
 <head>
  <title> Manage Questions</title>
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
   <a href="http://localhost/Core-test-portal/public/adminhome.php">Back to Control Pannel</a><br/>
   <a href="http://localhost/Core-test-portal/public/viewquestions.php">View Questions</a><br/>
   <a href="http://localhost/Core-test-portal/public/createquestion.php">Create Question</a><br/>
  </div>
  <div id="section">
  <h1>Control Pannel:Manage Questions</h1>
   <table cellspacing="50px">
	 <tr>
	  <td><a href="http://localhost/Core-test-portal/public/viewquestions.php"><img id="viewimage" src="./images/viewimage.png" style="border:2px solid olive;width:100px;height:100px;"/><br/>View Questions</a></td>
	  <td><a href="http://localhost/Core-test-portal/public/createquestion.php"><img id="createquestionimage" src="./images/questionsimage.jpg" style="border:2px solid olive;height:100px;width:100px;"/><br/>Create Question</a></td>
	 </tr>
   </table>
    </div>  
   <div id="footer">
    copyright &copy;||Developer-name||2018 
  </div>
  
 </body>
</html>