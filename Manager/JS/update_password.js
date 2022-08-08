
function validation(){

 

    let x = document.forms["form"]["old_password"].value;
    if (x == "") {
      document.getElementById('oldpassErr').innerHTML="**Old Pass must be filled";
      return false;
    }
    
       
    let y = document.forms["form"]["new_password"].value;
    if (y == "") {
      document.getElementById('newpassErr').innerHTML="**New pass must be filled";
      return false;
    }

    let z = document.forms["form"]["con_password"].value;
    if (z == "") {
      document.getElementById('conpassErr').innerHTML="**Confirm pass must be filled";
      return false;
    }
    
   
    
  
  
  
                   
    
    
    }