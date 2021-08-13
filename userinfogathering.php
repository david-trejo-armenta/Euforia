<?php
    //solo te permite buscar la informacion y regresar un valor.
    include_once("database.php");
    include("userinfoprint.php");
    

    function infogathering($user){
        $mysqli = connect();
        $query = "SELECT * FROM user_table WHERE customer_id = '".$user."';";
        $result = $mysqli -> query($query);
        
          
           while ($datos = $result->fetch_array()) {
                
                userinfo($datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7],$datos[8],$datos[9],$datos[10]); //LLenado de la pagina visual con informacion de la base de datos $datos[columna]
                
    }
}

   
?>