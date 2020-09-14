<?php 
session_start();
$username=$_SESSION['username'];

$con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 $q="select * from record where username='$username'";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
?>

 
<html>
 <head>
  <title> MyReport</title>
  <link rel="icon" type="image/gif" href="./images/TAlogo.png">
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <link rel="stylesheet" type="text/css" href="./css/table.css" />
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a href="http://localhost/Core-test-portal/public/logout.php">Logout</a><br/>  
   <a href="http://localhost/Core-test-portal/public/home.php">Back to Home</a><br/>
   <a href="http://localhost/Core-test-portal/public/myaccount.php">My Account</a><br/>
    </div>
  <div id="section">
  <h1>Home:Record</h1>
  <div id="tablediv">
  <table id="questiontable">
	 <tr id="headrow">
	  <th>Test Id</th>
	  <th>Subject</th>
	  <th>Percentage</th>
	 </tr>
<?php
if($row_count!=0)
{
	for($i=1;$i<=$row_count;$i++)
	{
	  $row=mysqli_fetch_array($result);
	  $q1="select * from test_question where testid=".$row['testid'];
	  $result1=mysqli_query($con,$q1);
	  $row_count1=mysqli_num_rows($result1);
?>
	 <tr class="<?php if($i%2==0) echo "odd"; ?>">
	  <td><?php echo $row['testid']; ?></td>
	  <td><?php echo $row['subject'];?></td>
	  <td><?php echo $row['percentage']; ?></td>
	  
	 </tr>
	 
<?php }}
?>

   </table>
   </div>
    </div>  
   <div id="footer">
     copyright &copy;||Developer-name||2018 
	</div>
  
 </body>
</html>