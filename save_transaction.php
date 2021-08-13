<?php
include_once("database.php");



function save($order_id,$user,$product_id,$product_name,$price,$size,$image_path,$quantity){
  

$query1 = "INSERT INTO transactions_table (transaction_type,product_tr,quantity_tr,user_tr,product_name,price,size,image_path) VALUES ('SALE','$product_id','$quantity','$user','$product_name','$price','$size','$image_path');";

$mysqli = connect();

if(mysqli_query($mysqli, $query1)){
    header("Location: shoppinghistory.php");
    } else{
    echo "ERROR: Unable to execute $query1. " . mysqli_error($mysqli);
  }
 

}
function deleteauto($user_id){
  $mysqli = connect();


  $query2 = "DELETE FROM user_id WHERE user_id = '$user_id';";
  if(mysqli_query($mysqli, $query2)){
    header("Location: shoppinghistory.php");
    echo "Item deleted";
  } else{
    echo "ERROR: Unable to execute $query2. " . mysqli_error($mysqli);
  }

  }
?>