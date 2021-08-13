<?php
  include('database.php');
  $mysqli = connect();
  
  if (isset($_POST['insert'])) {
   $email = ($_POST['email']);
   $password = ($_POST['password']);
   $password = hash('sha256',$password);
   $first_name = ($_POST['first_name']);
   $last_name = ($_POST['last_name']);
   $birthdate = ($_POST['birthdate']);
   $gender = ($_POST['gender']);
   $address = ($_POST['address']); 
   $state = ($_POST['state']);
   $city = ($_POST['city']);
   $country = ($_POST['country']);
  

   $query = "INSERT INTO user_table(`email`, `pass`, `first_name`, `lastname`, `birthdate`, `gender`, `mailing`, `city`, `state`, `country`) VALUES ('$email','$password','$first_name','$last_name','$birthdate','$gender','$address','$city','$state','$country')";
   if(mysqli_query($mysqli, $query)){
    header("Location: index.php");
    echo "Welcome!";
  } else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($mysqli);
  }
   $query2 = "INSERT INTO User_ID (product_ct,product_name,price,size,image_path,quantity_ct) VALUES ('58','CACAS2','9.99','9.9','https://www.dropbox.com/s/kc9pz6ps59rcrj5/S-M-Elmo.jpg?raw=1','2');";

    
   
  }
?>