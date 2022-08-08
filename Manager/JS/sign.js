
function validation(){

    let a = document.forms["RegistrationForm"]["uid"].value;
    if (a == "") {
      document.getElementById('uidErr').innerHTML="**Please Fill the field"; 
      return false;
    }
  
    let x = document.forms["RegistrationForm"]["username"].value;
    if (x == "") {
      document.getElementById('usernameErr').innerHTML="**Please Fill the field";
      return false;
    }
    
       
    let y = document.forms["RegistrationForm"]["password"].value;
    if (y == "") {
      document.getElementById('passwordErr').innerHTML="**Please Fill the field";
      return false;
    }
    
    let z = document.forms["RegistrationForm"]["email"].value;
    if (z == "") {
      document.getElementById('emailErr').innerHTML="**Please Fill the field";
      return false;
    }
    
  
    let m = document.forms["RegistrationForm"]["address"].value;
    if (m == "") {
      document.getElementById('addressErr').innerHTML="**Please Fill the field";
      return false;
    }
    
  
    let n = document.forms["RegistrationForm"]["gender"].value;
    if (n == "") {
      document.getElementById('genderErr').innerHTML="**Please Fill the field";
      return false;
    }
    
  
    let o = document.forms["RegistrationForm"]["image"].value;
    if (o == "") {
      document.getElementById('imageErr').innerHTML="**Please Fill the field";
      return false;
    }
    
  
                   
    
    
    }