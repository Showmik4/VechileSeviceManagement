<?php
require_once '../Model/db_config.php';

   $name="";
  $nameErr="";


  $phone="";
  $phoneErr="";

  $address="";
  $addressErr="";

  $joindate="";
  $joindateErr="";

  $salary="";
  $salaryErr="";

  $err_db="";
  $hasError=false;


  if(isset($_POST["add_employee"]))
  {
    if(empty($_POST["name"])){
      $hasError=true;
      $nameErr="&nbsp;&nbsp;*Name Required";
    }

    else{
        $name= htmlspecialchars($_POST["name"]); 
    }

    if(empty($_POST["phone"])){
        $hasError=true;
        $phoneErr="&nbsp;&nbsp;*phone Required";
      }
  
      else
      {
        $phone = $_POST["phone"];
      }

      if(empty($_POST["address"])){
        $hasError=true;
        $addressErr="&nbsp;&nbsp;*address Required";
      }
  
      else
      {
        $address = $_POST["address"];
      }

      if(empty($_POST["joinning_date"])){
        $hasError=true;
        $joindateErr="&nbsp;&nbsp;*join date Required";
      }
  
      else
      {
        $joindate = $_POST["joinning_date"];
      }


      if(empty($_POST["salary"])){
        $hasError=true;
        $salaryErr="&nbsp;&nbsp;*salary Required";
      }
  
      else
      {
        $salary = $_POST["salary"];
      }


   



if(!$hasError){
    
$rs = insertEmployee($_POST["name"],$_POST["phone"],$_POST["address"],$_POST["joinning_date"],$_POST["salary"]);
    if($rs === true){
       echo "<h1 style='color:red'>Service Added Successfully</h1>";
    }
    $err_db = $rs;

}
}

else if (isset($_POST["edit_employee"])){
  //do validations
  //if no error
  $rs = updateEmployee($_POST["name"],$_POST["phone"],$_POST["address"],$_POST["salary"],$_POST["id"]);
  if($rs === true){
     echo "<h1 style='color:green'>Service Update Successfully</h1>";
  }
  $err_db = $rs;
}



function insertEmployee($name,$phone,$address,$joindate,$salary){
    $query="insert into employee  values (NULL,'$name','$phone','$address','$joindate','$salary')";
    return execute($query);
}

function getEmployees($id){
    $query="select * from employee where id=$id";
    $rs = get($query);
    return $rs[0];
}

function getEmployee(){
  $query= "select *from employee";
  $rs = get($query);
  return $rs;
}


function updateEmployee($name,$phone,$address,$salary,$id){

  $query="update employee set name='$name',phone='$phone',address='$address',salary='$salary' where id = $id";

  return execute($query);
}





 ?>

 <style>
  h1{
    text-align: center;
    font-size: 15px;
  }
 </style>
