<?php
session_start();
if(isset($_SESSION['username']))
{$name=$_SESSION['username'];
}
else{$name=" ";}
?>

<html>
 <head>
  <title> Online Testing</title>
   <link rel="icon" type="image/gif" href="./images/TAlogo.png">
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <script type="text/javascript" src="./js/rating.js"></script>
  <script type="text/javascript" src="./js/login.js"></script>
  
 </head>
 <body>
     
  <div id="header">
   <h1>Online Testing</h1>
  </div>
 
  <div id="nav">
      <?php
      if($name==" ")
       {
           $name="Anonymous";
            echo' <a  href="http://localhost/Core-test-portal/public/index.html">Home page</a><br/>
            <a  href="http://localhost/Core-test-portal/public/adminlogin.php">Admin Login</a><br/>
            <a href="http://localhost/Core-test-portal/public/userlogin.php">User Login</a><br/>
            <a href="http://localhost/Core-test-portal/public/registration.php">New User Registration</a><br/>';
       }
      else
       {
           echo'<a href="http://localhost/Core-test-portal/public/home.php">Back to Home</a><br/>
           <a href="http://localhost/Core-test-portal/public/logout.php">Logout</a><br/>  
           <a href="http://localhost/Core-test-portal/public/myaccount.php">My Account</a><br/>
           <a href="http://localhost/Core-test-portal/public/testlist.php">List of Test Papers</a><br/>';
       }
      ?>
   
  
  </div>
  <div id="section">
  <h1>Developer-name</h1>
  <p>
      <img src="./images/your_Image.jpg" style="height:150px;width:150px;">
      
  </p>
  <p>
   I have created this portal to help users to give test subject wise without paying any amount.
  </p>
  <hr>
  <form  action="http://localhost/Core-test-portal/public/rating.php" method="post">
      <table>
      <tr><th>Comment Section</th></tr>
      <tr>
          <td>Username</td>
          <td><input type="text" name="name" id="name"  readonly value="<?php echo $name; ?>"  autocomplete="off" placeholder="name"></td>
      </tr>
      <tr>
          <td>Comment</td>
          <td><textarea name="rating" id="rating" autocomplete="off" placeholder="comment"></textarea></td>
          <td id="msg">...</td>
      </tr>
  
   </table>
   <input type="submit" name="submit" onclick="return rateus()"/>
  </form>
  
  </div>
   <div id="footer">
  copyright &copy;||Developer-name||2018  
 
  </div>
  
 </body>
</html>