function uservalidate()
{
 var flag=true;
 var username=document.getElementsByName("username")[0];
 var password=document.getElementsByName("password")[0];
 var email=document.getElementsByName("email")[0];
 var atpos = email.value.indexOf("@");
 var dotpos = email.value.lastIndexOf(".");
 var errormsg=document.getElementById("errormsg");
 errormsg.style.color="red";
 if(username.value.length==0)
  flag=false;
  
 if(password.value.length==0)
  flag=false;
  
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.value.length) 
    flag=false;
 

 if(flag==true)
   
   { //alert('username='+username.value+'  '+'password='+password.value+'\n activation link will be sent to your email id if not there check spam!!');
		alert('username='+username.value+'  '+'password='+password.value+'\n Account Created Successfully!!');
	}
 
 else
 { errormsg.innerHTML="*Password or email is blank or incorrect..";}
 return(flag);
}

function checkname(str)
{

 str=str.trim();
 if(str.length==0)
 {
     document.getElementById("spanmsg1").style.color="blue";
	 document.getElementById("spanmsg1").innerHTML="Write username...";
	 document.getElementById("submit").disabled=true;
 }
 else
 {
 
  var req= new XMLHttpRequest();
  req.open("get","http://localhost/Core-test-portal/public/checkname.php?username="+str,true);
  req.send();
  req.onreadystatechange=function(){
   if(req.status==200 && req.readyState==4)
   {
    if((req.responseText)=="user hai")
	{
	 document.getElementById("spanmsg1").style.color="red";
	 document.getElementById("spanmsg1").innerHTML="Username already exists ";
	 document.getElementById("submit").disabled=true;
	  //uservalidate();
	
	}
	else 
	{
	 document.getElementById("spanmsg1").style.color="green";
	 document.getElementById("spanmsg1").innerHTML="Perfect!!!";
	 document.getElementById("submit").disabled=false;
	}
   }
  }
 }
}

function checkemail(str)
{

// str=str.trim();
 if(str.length==0)
 {
     document.getElementById("spanmsg2").style.color="blue";
	 document.getElementById("spanmsg2").innerHTML="Write username...";
	 document.getElementById("submit").disabled=true;
 }
 else
 {
 
  var req= new XMLHttpRequest();
  req.open("get","http://localhost/Core-test-portal/public/checkemail.php?useremail="+str,true);
  req.send();
  req.onreadystatechange=function(){
   if(req.status==200 && req.readyState==4)
   {
    if((req.responseText)=="user hai")
	{
	 document.getElementById("spanmsg2").style.color="red";
	 document.getElementById("spanmsg2").innerHTML="email already in use  ";
	 document.getElementById("submit").disabled=true;
	 // uservalidate();
	
	}
	else 
	{
	 document.getElementById("spanmsg2").style.color="green";
	 document.getElementById("spanmsg2").innerHTML=".";
	 document.getElementById("submit").disabled=false;
	}
   }
  }
 }
}