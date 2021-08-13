<?php
include_once("database.php");

if (isset($_POST['delete'])) {
  $order_id = ($_POST['id']);

$mysqli = connect();


$query2 = "DELETE FROM user_id WHERE order_id = '$order_id';";
if(mysqli_query($mysqli, $query2)){
  header("Location: shoppingcart.php");
  echo "Item deleted";
} else{
  echo "ERROR: Unable to execute $query2. " . mysqli_error($mysqli);
}

}
if (isset($_POST['deletefav'])) {
  $order_id = ($_POST['id']);

$mysqli = connect();


$query2 = "DELETE FROM fav WHERE order_id = '$order_id';";
if(mysqli_query($mysqli, $query2)){
  header("Location: favorites.php");
  echo "Item deleted";
} else{
  echo "ERROR: Unable to execute $query2. " . mysqli_error($mysqli);
}

}

?>
?>
