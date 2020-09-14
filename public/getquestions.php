<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:http://localhost/Core-test-portal/public/adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:http://localhost/Core-test-portal/public/index.html');
 htmlspecialchars($_POST['subject']);
 $subject=trim($_POST['subject']);
  
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 $q="select * from question where subject='$subject'";
 $result=mysqli_query($con,$q);
 mysqli_close($con);
 $row_count=mysqli_num_rows($result);
?>

<table id="testformtable">
<?php
 for($i=1;$i<=$row_count;$i++)
 {
  $row=mysqli_fetch_array($result);
  echo "<tr><td><input type='checkbox' class='checkboxes' value='";
  echo $row['queid'];
  echo "' name='que";
  echo $i;
  echo "'/>";
  echo "</td><td>";
  echo $row['queid'];
  echo "</td><td>";
  echo $row['que'];
  echo "</td></tr>";
 }
 
 echo "</br>
       <tr>
       <!--<td><input type='text' name='durationH' placeholder='hh' maxlength='2' size='2' ></td>
       
       <td><input type='text' name='durationM' placeholder='mm'  maxlength='2' size='2'></td>-->
       
       <td><input type='number' name='duration' placeholder='duration'  maxlength='5' size='8'></td>
       <td><input type='submit' value='Create' onclick='return validateform()'/></td>
       </tr>";
 
 
?>
</table></form>