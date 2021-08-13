<?php
    //solo te permite buscar la informacion y regresar un valor.
    include_once("database.php");
    include("FINALcard.php");
    

    function catalogo($type,$gender){
        $mysqli = connect();
        $query = "SELECT * FROM inventory_table WHERE product_type = '".$type."' AND product_gender = '".$gender."' ;";
        $result = $mysqli -> query($query);
        
    
        if ($result->num_rows === 0) { 
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 class="text-center">Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '<br><br><br><br><br><br>
            <table >
    <table style="width:60%" align="center">
        <tr>
          
            
            
                <div class="card-group"><br><br>';
                
                $i=0;
            while ($datos = $result->fetch_array()) {
                echo'<td>';
                card($datos[0],$datos[2],$datos[5],$datos[9]); //LLenado de la pagina visual con informacion de la base de datos $datos[columna]
                echo '</td>';
                $i++;
                if($i==3){
                    echo'
                    </tr>
                    <tr>
                    ';
                    $i=0;
                }
                
                //card();
            }
            echo '
            </tr><br><br>
            </div>
        ';
            
        }
        return $result;
    }
   
?>