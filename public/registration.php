<html>
 <head>
  <title> User Registration</title>
  <link rel="icon" type="image/gif" href="./images/TAlogo.png">
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <script type="text/javascript" src="./js/registration.js" ></script>
  
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
  </div>
  <div id="nav">
   <a href="http://localhost/Core-test-portal/public/adminlogin.php">Admin Login</a><br/>
   <a href="http://localhost/Core-test-portal/public/userlogin.php">User Login</a><br/>
   <a href="http://localhost/Core-test-portal/public/registration.php">New User Registration</a><br/>
  
  </div>
  <div id="section">
  <h1>New User Registration Form</h1>
  <form action="doRegistration.php" method="post" >
   <table>
       
    <tr>
	 <td>Email</td>
	 <td><input type="email" name="email"/autocomplete="off"   onkeyup="checkemail(this.value)"/><span id="spanmsg2"></span></td>
	</tr>   
       
    <tr>
	 <td>Username</td>
	 <td><input type="text" name="username"  onfocus="this.value=''"  autocomplete="off" onkeyup="checkname(this.value)"/><span id="spanmsg1"></span></td>
	</tr>
	<tr>
	 <td>Password</td>
	 <td><input type="password" name="password" /></td>
	</tr>
  
	
	
	<tr><td><input id="submit" type="submit"  value="Register" onclick="return uservalidate()"/></td></tr>
   </table>
  </form>
   <div id="errormsg">...</div>
  </div>
   <div id="footer">
   copyright &copy;||Developer-name||2018   
  </div>
  
 </body>
</html>