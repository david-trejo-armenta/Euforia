<?php
    //solo te permite buscar la informacion y regresar un valor.
    include_once("database.php");
    include("show.php");
    

    function showcase($product_id){
        $mysqli = connect();
        $query = "SELECT * FROM inventory_table WHERE product_id = '".$product_id."' ";
        $result = $mysqli -> query($query);
        
        if ($result->num_rows === 0) { 
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1>Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        while($datos=$result->fetch_array()){
                      
               
         show($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7],$datos[8],$datos[9]); //LLenado de la pagina visual con informacion de la base de datos $datos[columna]
                    
                       
        }
        return $result;
    }
   
?>