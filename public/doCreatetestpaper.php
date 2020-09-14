<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/Core-test-portal/public/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/Core-test-portal/public/index.html');
 
 $size=sizeof($_POST);   //count no. of checkbox checked
// echo $size;
  echo"<div>thisa is size".$size."</div>";
 //echo "size=".$size;
 for($j=1,$i=1;$i<=$size-1;$i++)
 {
  
  $index="que".$j;    //index =checkbox namefrom getquestion .php
  echo"</br>";
  echo"<div>this is index:".$index."</div>";
  if(!isset($_POST[$index]))      //true if checkbox is null
  {
	  echo"</br>";
  echo"<div>nahi mila data </div>";
    
    $j++;
	$i--;
	continue;
  }
  else
  {
  $j++;
  $queid[$i]=$_POST[$index];
   echo"</br>";
  echo"<div>this is queid:".$queid[$i]."this id post_index:".$_POST[$index]."</div>";
 // echo "queid[".$i."]".$queid[$i];
  }
 }
 /* connection */
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 
  /* query to obtain subject */
 $q="select subject from question where queid=$queid[1]";
 $result=mysqli_query($con,$q);
 $row=mysqli_fetch_array($result);
 $subject=$row['subject'];
  echo"</br>";
  echo"<div>this is subject:".$subject."</div>";
 
 
 $q1="insert into test (subject,duration) values ('$subject','$_POST[duration]')";
 

 mysqli_query($con,$q1);
 
 /* obtaining generated test paper's testid */
 $q2="select max(testid) from test";
 $result2=mysqli_query($con,$q2);
 $row2=mysqli_fetch_array($result2);
 $testid=$row2[0];
  echo"</br>";
  echo"<div>this is testid:".$testid."</div>";
 
 
 /* inserting records in test_question table */
 for($i=1;$i<=$size-1;$i++)
 {
  $q3="insert into test_question (queid,testid) values ($queid[$i],$testid)";
 mysqli_query($con,$q3);
 }
 
 mysqli_close($con);
// header('location:http://localhost/Core-test-portal/public/createtestpaper.php');
   
       echo'
             <script type="text/javascript"> 
                 
                 window.location.replace("http://localhost/Core-test-portal/public/createtestpaper.php");
            </script>
       ';
?>