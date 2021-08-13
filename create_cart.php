<?php
include_once("database.php");

if (isset($_POST['add'])) {
  session_start();
  $user = ($_SESSION['id']);
  $id = ($_POST['product_id']);
  $name = ($_POST['name']);
  $price = ($_POST['price']);
  $size = ($_POST['size']);
  $image = ($_POST['image']);
  $qty = ($_POST['quantity']);

$mysqli = connect();
$query2 = "INSERT INTO User_ID (`user_id`,`product_ct`,`product_name`,`price`,`size`,`image_path`,`quantity_ct`) VALUES ('$user','$id','$name','$price','$size','$image','$qty');";
if(mysqli_query($mysqli, $query2)){
  header("Location: shoppingcart.php");
  echo "Database created successfully";
} else{
  echo "ERROR: Unable to execute $query2. " . mysqli_error($mysqli);
}

}
if (isset($_POST['fav'])) {
  session_start();
  $user = ($_SESSION['id']);
  $id = ($_POST['product_id']);
  $name = ($_POST['name']);
  $price = ($_POST['price']);
  $size = ($_POST['size']);
  $image = ($_POST['image']);
  $qty = ($_POST['quantity']);

$mysqli = connect();
$query2 = "INSERT INTO fav (`user_id`,`product_ct`,`product_name`,`price`,`size`,`image_path`,`quantity_ct`) VALUES ('$user','$id','$name','$price','$size','$image','$qty');";
if(mysqli_query($mysqli, $query2)){
  header("Location: favorites.php");
  echo "Database created successfully";
} else{
  echo "ERROR: Unable to execute $query2. " . mysqli_error($mysqli);
}

}

?>