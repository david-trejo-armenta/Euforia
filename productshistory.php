<?php
    //solo te permite buscar la informacion y regresar un valor.
    include_once("database.php");
    include("cart.php");


    function transaction($user_id, $type){
        $mysqli = connect();
        $query = "SELECT * FROM transactions_table WHERE user_tr = '$user_id' AND transaction_type = '$type';";
        $result = $mysqli -> query($query);


        if ($result->num_rows === 0) { 
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1>You have not bought anything go ahead and get something nice</h1>';
        }
        else{
            echo '
            <table >
    <table style="width:80%" align="center">
        <tr><br><br><br><br><br><br><br><br>

            
                <div class="card-group">';

                $i=0;
            while ($datos = $result->fetch_array()) {
                echo'<td>';
                cart($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7],$datos[8],$datos[9]); //LLenado de la pagina visual con informacion de la base de datos $datos[columna]
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
            </tr>
            </div>
        </div>';

        }
        return $result;
    }

?>