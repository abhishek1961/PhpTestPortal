<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:http://localhost/Core-test-portal/public/adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/Core-test-portal/public/adminhome.php');
?>
<html>
 <head>
  <title>My Account</title>
  <link rel="icon" type="image/gif" href="./images/TAlogo.png">
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <script type="text/javascript" src="./js/changepassword.js" ></script>
   <script type="text/javascript" src="./js/deleteuser.js" ></script>
   
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="http://localhost/Core-test-portal/public/logout.php">Logout</a><br/>  
   <a href="http://localhost/Core-test-portal/public/home.php">Back to Home</a><br/>
   <a href="http://localhost/Core-test-portal/public/testlist.php">List of Test Papers</a><br/>
  </div>
  <div id="section">
  <h1>Home: My Account</h1>
   <p id="p1">Press button to change password </p>
   <button id="changepassword" onclick="changepassword()">Change Password</button>
   <button id="delacc"  onclick="delaccount()">delete Account </button>
   <form action="updateaccount.php" method="post">
   <table cellspacing="50px">
	 <tr>
	  <td>Username</td>
	  <td><?php echo $_SESSION['username']; ?></td>
	 </tr>
	 <?php
	    $con=mysqli_connect('localhost','root','');
		mysqli_select_db($con,'id4897078_onlinetestdb');
		
		$q="select * from user where username='".$_SESSION['username']."'";
		$result=mysqli_query($con,$q);
		$row=mysqli_fetch_array($result);
		
	 ?>
	 <tr>
	  <td>Password</td>
	  <td><input type="text" disabled value="<?php echo $row['password']; ?>" name="password"/></td>
	 </tr>
	 <tr>
	  <td></td>
	  <td><input type="submit" style="display:none;" value="Update" name="update"/></td>
	 </tr>
   </table>
   </form>
    </div>  
   <div id="footer">
    copyright &copy;||Developer-name||2018 
  </div>
  
 </body>
</html>