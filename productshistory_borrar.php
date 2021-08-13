<?php
    //solo te permite buscar la informacion y regresar un valor.
    include_once("database.php");
    include("cart.php");
    

    function transaction($user_id, $type){
        $mysqli = connect();
        $query = "SELECT inventory_table.product_name, inventory_table.product_id, inventory_table.price,inventory_table.size,inventory_table.image_path, transactions_table.transaction_id,transactions_table.user_tr, transactions_table.quantity_tr, transactions_table.created_at_tr
        FROM transactions_table
        INNER JOIN inventory_table ON inventory_table.product_id = transactions_table.product_tr
        WHERE user_tr = '".$user_id."'  AND transaction_type = '".$type."';";
        $result = $mysqli -> query($query);
        
    
        if ($result->num_rows === 0) { 
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1>You have not bought anything go ahead and get something nice</h1>';
        }
        else{
            echo '
            <table >
    <table style="width:80%" align="center">
        <tr>
          
            <div class="container col-12 col-md-10">
                <div class="card-group">';
                
                $i=0;
            while ($datos = $result->fetch_array()) {
                echo'<td>';
                cart($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7],$datos[8]); //LLenado de la pagina visual con informacion de la base de datos $datos[columna]
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
        </div>';
            
        }
        return $result;
    }
   
?>