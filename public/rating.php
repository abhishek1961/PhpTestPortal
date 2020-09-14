<?php 

 $name=$_POST['name'];
 $rating=$_POST['rating'];
 
   $file= fopen('rating.txt','a');
   $data="name : ".$name."\n"."comment : ".$rating."\n\n";
   echo'
   <script type="text/javascript">
   window.location.replace("http://localhost/Core-test-portal/public/aboutme.php");
   </script>
   ';
   
    
    fwrite($file,$data);
   
    
   
  ?>