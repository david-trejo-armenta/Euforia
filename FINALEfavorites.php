<?php
    //solo te permite buscar la informacion y regresar un valor.
    include_once("database.php");
    include("favcartgenerator.php");
    

    function favtable($user){
        
        $mysqli = connect();
        
        $query = "SELECT * FROM fav WHERE user_id = '$user';";
        $result = $mysqli -> query($query);
        
    
        if ($result->num_rows === 0) { 
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 class="text-center">You do not have anything in your cart yet, go ahead and grab some goodies</h1>';
        }
        else{
            echo ' <br><br><br><br><br><br><center><h1>Wishlist</h1></center>
            <table >
    <table style="width:60%" align="center">
        <tr>
          
            
            
                <div class="card-group">';
                
                $i=0;
            while ($datos = $result->fetch_array()) {
                echo'<td>';
                favgen($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7]); //LLenado de la pagina visual con informacion de la base de datos $datos[columna]
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
            
           
            
                  
        }
        return $result;
    }
   
?>