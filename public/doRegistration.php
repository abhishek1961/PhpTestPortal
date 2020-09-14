<?php

require 'PHPMailer/PHPMailerAutoload.php'; //including phpMailer library
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email'];

 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'id4897078_onlinetestdb');
 $q="insert into user(username,password,email,status) values ('$username','$password','$email','1')";
 mysqli_query($con,$q);
 mysqli_close($con);
 $configcode=rand(687875,47642965);
 
 
 $mail=new PHPMailer();

 $mail->Host='smtp.gmail.com';
 $mail->SMTPAuth='true';
 $mail->Username='csacfs@gmail.com';
 $mail->Password='gbdfbsdgbdgd34532';
 $mail->SMTPSecure='tls';
 $mail->Port=587;
 
 $mail->SetFrom('developer@gmail.com','PhpTestPortal');
 $mail->addAddress($email);
 $mail->addReplyTo('developer@gmail.com','PhpTestPortal');
 
 $mail->isHTML(true);
 $mail->Subject='verification';
 $mail->Body='dear username='.$username.' with password='.$password.' </br><h1>please click on the below link to verify your email otherwise you are unable to give test</h1> </br>'.' http://localhost/Core-test-portal/public/emailvarification.php?email='.$email.'&configcode='.$configcode;
//$mail->Body='ok ho jayega';
 if($mail->send())
 {
     //$mail->send();
     //echo 'ho gaya';    
    // echo '<script type="text/javascript">window.close();</script>';
   // echo'complete your registration by verifying your email!!';
    
    echo'
             <script type="text/javascript"> 
                 
                 window.location.replace("http://localhost/Core-test-portal/public");
            </script>
       ';
 }
 else
 {
  echo "Mailer Error: " . $mail->ErrorInfo;

  echo'
             <script type="text/javascript"> 
                 
                 window.location.replace("http://localhost/Core-test-portal/public/userlogin.php");
            </script>
       ';
     
 }
 ?>