
function validation(){

 

  let x = document.forms["loginForm"]["username"].value;
  if (x == "") {
    document.getElementById('usernameErr').innerHTML="**User name must be filled";
    return false;
  }
  
     
  let y = document.forms["loginForm"]["password"].value;
  if (y == "") {
    document.getElementById('passwordErr').innerHTML="**Password must be filled";
    return false;
  }
  
 
  



                 
  
  
  }