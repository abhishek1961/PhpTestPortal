function rateus()
  {
      var name=document.getElementsByName("name")[0];
      
      var rating=document.getElementsByName("rating")[0];
      if(name.value.length==0 || rating.value.length==0)
    { //alert("both fields are rq.");
        var msg= document.getElementById("msg");
         msg.style.color="red";
     msg.innerHTML="both  fields are rq.";
        return false;
    }
     
   
  }