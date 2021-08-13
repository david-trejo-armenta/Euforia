<?php
    //solo te permite buscar la informacion y regresar un valor.
    include_once("database.php");
    include("minicart.php");
    include_once("navbarconexion.php");

    function minishoppingcart(){
        $mysqli = connect();
        session_start();
        $user = ($_SESSION['id']);

        $query = "SELECT * FROM user_id WHERE user_id = '".$user."';";
        $result = $mysqli -> query($query);
        
    
        if ($result->num_rows === 0) { 
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 class="text-center">Lo sentimos por el momento no contamos con Artículos</h1>';
        }
        else{
            echo '
            <table >
    <table style="width:50%" align="center">
        <tr>
          
            
            
                <div class="card-group">';
                
                $i=0;
            while ($datos = $result->fetch_array()) {
                echo'<td>';
                minicart($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6]); //LLenado de la pagina visual con informacion de la base de datos $datos[columna]
                echo '</td>';
                $i++;
                if($i==1){
                    echo'
                    </tr>
                    <tr>
                    ';
                    $i=0;
                }
                
                //card();
            }
            
            echo '
            
            </tr>
            
            </div>
            </table>
            <center>
            <br>
            <a href="savetransaction.php" class="btn btn-primary">Buy</a>
            <br>
            </center>
            
        ';
                  
        }
        return $result;
    }
   
?>