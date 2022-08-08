
function validation(){

 

    let x = document.forms["form"]["name"].value;
    if (x == "") {
      document.getElementById('nameErr').innerHTML="**Name must be filled";
      return false;
    }
    
       
    let y = document.forms["form"]["phone"].value;
    if (y == "") {
      document.getElementById('phoneErr').innerHTML="**Phone must be filled";
      return false;
    }

        
    let z= document.forms["form"]["address"].value;
    if (z == "") {
      document.getElementById('addressErr').innerHTML="**Address must be attached";
      return false;
    }
    
    let a= document.forms["form"]["joindate"].value;
    if (a == "") {
      document.getElementById('joindateErr').innerHTML="**Join Date must be attached";
      return false;
    }
    

    let b= document.forms["form"]["salary"].value;
    if (b == "") {
      document.getElementById('salaryErr').innerHTML="**Salary must be attached";
      return false;
    }
    
    
   
    
  
  
  
                   
    
    
    }