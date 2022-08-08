
function validation(){

 

    let x = document.forms["form"]["category"].value;
    if (x == "") {
      document.getElementById('catErr').innerHTML="**Category must be filled";
      return false;
    }
    
       
    let y = document.forms["form"]["cost"].value;
    if (y == "") {
      document.getElementById('costErr').innerHTML="**Cost must be filled";
      return false;
    }

        
    let z= document.forms["form"]["img"].value;
    if (z == "") {
      document.getElementById('imgErr').innerHTML="**Image must be attached";
      return false;
    }
    
    
   
    
  
  
  
                   
    
    
    }