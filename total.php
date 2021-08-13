<?php
// Make a MySQL Connection
include_once("database.php");
include_once("totalprint.php");

function total($user){
$query = "SELECT SUM(price) AS TotalItemsOrdered FROM user_id WHERE user_id = '$user' "; 
$connect = connect(); 
$result = $connect->query($query);

// Print out result
while($row = $result->fetch_array()){

    totalcard($row[0]);
	
}
};
?>