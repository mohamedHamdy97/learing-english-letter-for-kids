<?php 

 
$conn = new mysqli("localhost", "root", "", "person_events");
if($conn->connect_error){
 die($conn->connect_error);
}



if(isset($_POST['load'])){
  $load = json_decode($_POST['load'], true);
  if(count($load)>0){
  for($i=0;$i<count($load);$i++)
  {
      $textContent =$load[$i]["textContent"];
      $type = $load[$i]["type"];
      $target = $load[$i]["target"];
      $Date_Time = $load[$i]["Date_Time"];
      $sql = "Insert Into Events values('$textContent','$type', '$target', '$Date_Time')";
      
      $conn->query($sql);
}
  if($conn->affected_rows > 0){
    echo "Inserted Successfully";
  }
  else{
    echo "Sorry: Problem With Insertion";	
  } 
}}
if(isset($_POST['unload'])){
  $load = json_decode($_POST['unload'], true);
  if(count($load)>0){
  for($i=0;$i<count($load);$i++)
  {
   $textContent =$load[$i]["textContent"]; 
     $type = $load[$i]["type"];
  $target = $load[$i]["target"];
  $Date_Time = $load[$i]["Date_Time"];
  $sql = "Insert Into Events values('$textContent','$type', '$target', '$Date_Time')";
  
  $conn->query($sql);
}
  if($conn->affected_rows > 0){
    echo "Inserted Successfully";
  }
  else{
    echo "Sorry: Problem With Insertion";	
  } 
}}if(isset($_POST['clickbtngenerate'])){
  $load = json_decode($_POST['clickbtngenerate'], true);
  if(count($load)>0){
  for($i=0;$i<count($load);$i++)
  {  
      $textContent =$load[$i]["textContent"]; 
      $type = $load[$i]["type"];
      $target = $load[$i]["target"];
      $Date_Time = $load[$i]["Date_Time"];
      $sql = "Insert Into Events values('$textContent','$type', '$target', '$Date_Time')";
      
      $conn->query($sql);
}
  if($conn->affected_rows > 0){
    echo "Inserted Successfully";
  }
  else{
    echo "Sorry: Problem With Insertion";	
  } 
}}
if(isset($_POST['clickAlphabtn'])){
  $load = json_decode($_POST['clickAlphabtn'], true);
  if(count($load)>0){
  for($i=0;$i<count($load);$i++)
  {   
    
      $textContent =$load[$i]["textContent"]; 
      $type = $load[$i]["type"];
      $target = $load[$i]["target"];
      $Date_Time = $load[$i]["Date_Time"];
      $sql = "Insert Into Events values('$textContent','$type', '$target', '$Date_Time')";
      
      $conn->query($sql);
}
  if($conn->affected_rows > 0){
    echo "Inserted Successfully";
  }
  else{
    echo "Sorry: Problem With Insertion";	
  } 
}}

if(isset($_GET['eventes'])){
   //$person = json_decode($_GET['person'], true);
      
           $sql = "Select * from Events order By Date_Time"; 
          
      if ($result = $conn->query($sql)){
           $rows = array();
             if($result->num_rows > 0){
                 while($row = $result->fetch_assoc()){
                     array_push($rows, $row);
                 }
                  echo json_encode($rows);
             }
      }
       else{
   echo "No Data to Retrieve";
    }
   }
?>