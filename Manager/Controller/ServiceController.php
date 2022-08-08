<?php
require_once '../Model/db_config.php';

   $category="";
  $categoryErr="";


  $cost="";
  $costErr="";


 

  $service_image="";
  $service_imageErr="";

  $err_db="";
  $hasError=false;


  if(isset($_POST["add_service"]))
  {
    if(empty($_POST["category"])){
      $hasError=true;
      $categoryErr="&nbsp;&nbsp;*Category Required";
    }

    else{
        $category = htmlspecialchars($_POST["category"]); 
    }

    if(empty($_POST["cost"])){
        $hasError=true;
        $costErr="&nbsp;&nbsp;*Cost Required";
      }
  
      else
      {
        $cost = $_POST["cost"];
      }



   




    
 
    if($_FILES["image"]["name"]==""){
      // echo "string";
       $hasError=true;
       $service_imageErr="&nbsp;&nbsp;*Image Required";
     }
 
 
 
 
 else{
   
     
     $fileType = strtolower(pathinfo(basename($_FILES["image"]["name"]),PATHINFO_EXTENSION));
     $target = "../storage/service_images/".uniqid().".$fileType";
     move_uploaded_file($_FILES["image"]["tmp_name"],$target);
 }
   



if(!$hasError){
    
$rs = insertBook($_POST["category"],$_POST["cost"],$target);
    if($rs === true){
       echo "<h1 style='color:red'>Service Added Successfully</h1>";
    }
    $err_db = $rs;

}
}

else if (isset($_POST["edit_service"])){
  //do validations
  //if no error
  $rs = updateService($_POST["category"],$_POST["cost"],$_POST["id"]);
  if($rs === true){
     echo "<h1 style='color:green'>Service Update Successfully</h1>";
  }
  $err_db = $rs;
}



function insertBook($category,$cost,$service_image){
    $query="insert into services  values (NULL,'$category','$cost','$service_image')";
    return execute($query);
}

function getservice($id){
    $query="select * from services where id=$id";
    $rs = get($query);
    return $rs[0];
}

function getServices(){
  $query= "select *from services";
  $rs = get($query);
  return $rs;
}


function updateService($category,$cost,$id){

  $query="update services set category='$category',cost='$cost' where id = $id";

  return execute($query);
}





 ?>

 <style>
  h1{
    text-align: center;
    font-size: 15px;
  }
 </style>
