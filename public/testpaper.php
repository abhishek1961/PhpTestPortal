<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/Core-test-portal/public/adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:http://localhost/Core-test-portal/public/adminhome.php');
 
 $testid=$_GET['testid'];
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 $q="select * from test_question where testid=$testid";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 
 $q2="select duration from test where testid=$testid";
 $result2=mysqli_query($con,$q2);
 $row_count2=mysqli_num_rows($result2);
 $row2=mysqli_fetch_array($result2);
 
 
 
 
 
?>
<html>
 <head>
  <title> Test Paper</title>
  <link rel="icon" type="image/gif" href="./images/TAlogo.png">
  <link rel="stylesheet" type="text/css" href="./css/layout.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <link rel="stylesheet" type="text/css" href="./css/testpaper.css" />
  
  <script type="text/javascript">
  function duration(d)
  {
      
     
      document.getElementById("qdiv").style.overflowY="scroll";
      if(d==<?php echo "$row2[duration]"; ?>)
      {
          alert("There is no (-)ve marking in this test press ok to satart!");
      }
      if(d===0)
      { var dp=document.getElementById('h2');
        dp.innerHTML=d ;
          //window.location.replace("http://localhost/Core-test-portal/public/testresult.php");
          
         alert('Thankyou for giving test');
         document.getElementById("sub").click();
         
          
          
      }
      else{
    var dp=document.getElementById('p2');
    dp.innerHTML=d ;

renewtime(d);}
  }
 function renewtime(d)
 {
  d=d-1;   
	setTimeout('duration('+d+')',1000);
 }
  </script>
  
  <style>
      #h2{width:200px;
          background-color:	#dfe3ee;
          color:red;
          
            
      }
      
      #qdiv
      {
          height:75%;
          width:100%;
      }
  </style>
  
 </head>
 <body onload =duration(<?php echo "$row2[duration]"; ?>);>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  </div>
  <div id="nav">
   <a style="visibility:hidden;" href="http://localhost/Core-test-portal/public/logout.php">Logout</a><br/>  
   <a style="visibility:hidden;" href="http://localhost/Core-test-portal/public/home.php">Back to Home</a><br/>
   <a style="visibility:hidden;" href="http://localhost/Core-test-portal/public/testlist.php">Back to Test List</a><br/>
    </div>
  <div id="section">
  <h1>Home:Test List:Test Paper</h1 >
  <h2 id="h2">
      <p1>Time Left</p1>
      <p2 id="p2"><?php echo "$row2[duration]"; ?></p2>
      <p3>Second</p3>
      <h2>
      <form action="testresult.php" method="post"> 
      <h3 id="qdiv">
   <?php
   
      for($i=1;$i<=$row_count;$i++)
	  {
	    $row=mysqli_fetch_array($result);
		$queid=$row['queid'];
		$q1="select * from question where queid=$queid";
		$result1=mysqli_query($con,$q1);
		$row1=mysqli_fetch_array($result1);
		
    ?>
	 <div class="questiondiv" >
	  <input type="hidden" name="queid<?php echo $i; ?>" value="<?php echo $row1['queid']; ?>"/>
	  <span class="queno">Que#<?php echo $i.":"; ?></span>
	  <span class="question"><?php echo $row1['que']; ?></span><br/>
	  <input class="option" type="radio" name="option<?php echo $i; ?>" value="a" />
		<span class="options">(a)<?php echo " ".$row1['optiona']; ?></span><br/>
	  <input class="option" type="radio" name="option<?php echo $i; ?>" value="b" />
		<span class="options">(b)<?php echo " ".$row1['optionb']; ?></span><br/>
	  <input class="option" type="radio" name="option<?php echo $i; ?>" value="c" />
		<span class="options">(c)<?php echo " ".$row1['optionc']; ?></span><br/>
	  <input class="option" type="radio" name="option<?php echo $i; ?>" value="d" />
		<span class="options">(d)<?php echo " ".$row1['optiond']; ?></span><br/>
	  <input class="option" checked type="radio" name="option<?php echo $i; ?>" value="e" style="visibility:hidden" />
		<span class="options" style="visibility:hidden" >(e) I do not know the answer</span><br/>
		
	 </div>
	 <?php } ?>
	 </h3>
	 <input type ="hidden" name="testid" value=<?php echo $testid; ?>>
	 <input type="submit" id="sub" value="Submit to See Result"/>
	 </form>

   </div>
    </div>  
   <div id="footer">
     copyright &copy;||Developer-name||2018 
  
  </div>
  
 </body>
</html>