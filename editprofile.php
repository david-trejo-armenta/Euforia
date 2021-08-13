<?php

  include('database.php');
  $mysqli = connect();
  
  if (isset($_POST['update'])) {
   include_once("navbarconexion.php");
   $user = ($_SESSION['id']);
   $email = ($_POST['email']);
   $pass = ($_POST['pass']);
   $pass = hash('sha256',$pass);
   $name = ($_POST['name']);
   $last = ($_POST['last']);
   $gender = ($_POST['gender']);
   $address = ($_POST['address']); 
   $state = ($_POST['state']);
   $city = ($_POST['city']);
  
  

   $query = "UPDATE user_table SET email='$email', pass='$pass', first_name='$name', lastname='$last', gender='$gender', mailing='$address', city='$city', state='$state' WHERE customer_id ='$user'";
   
   if(mysqli_query($mysqli, $query)){
    echo'<br><br><br><br><br><br><br><br><br><br><br><br><br><center><h1>Information Updated click on the Euforia logo to go back to the main page</h1></center>';
    
  } else{
    echo "ERROR: Could not execute $query. " . mysqli_error($mysqli);
  }
      
   
  }
?>