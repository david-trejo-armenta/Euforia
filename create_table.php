<?php
include_once("database.php");

function create($name){
connect();

  if(mysqli_query($mysqli, $query1)){
    
    echo "Database ".$name." created successfully ";
  } else{
    echo "ERROR: Unable to execute $query1. " . mysqli_error($mysqli);
  }
  
}

?>