<?php
 session_start();
 
include_once("database.php");
include_once("idassignment.php");



validar($_POST['email'],$_POST['password']);

    function validar($email,$password){
        $mysqli = connect();
        $password = hash('sha256',$password);
        $consulta = "SELECT * FROM user_table WHERE email = '".$email."' && pass = '".$password."';";
        $resultado = $mysqli->query($consulta);
        
        if ($resultado->num_rows === 0) { //validación === 0
            $_SESSION['message'] = 'The User or password is wrong';           
            $_SESSION['message_type'] = 'danger'; 
            header("Location: index.php");
            
        }
        else{
            
            

            while ($datos = $resultado->fetch_array()) {

                assign($datos[0],$datos[3]);
                

            }
            
            
            $_SESSION['started'] = 1;
            header('Location: index.php');
            echo'Welcome back '.$datos[3].'';
            echo'Welcome back name '.$_SESSION["name"].''; 

                   
            

            

        }
        
    }


?>