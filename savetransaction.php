<?php

//solo te permite buscar la informacion y regresar un valor.
include_once("database.php");
include_once("save_transaction.php");



    $mysqli = connect();
    session_start();
    $user = ($_SESSION['id']);
    $query = "SELECT * FROM user_id WHERE user_id = '$user';";
    $result = $mysqli -> query($query);


    if ($result->num_rows === 0) { 

        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 class="text-center">Error while saving the purhcase order, please contact an Euforia associate</h1>';

    }

    else{

        while ($datos = $result->fetch_array()) {

        save($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7]);
        deleteauto($datos[1]);
        }

    }




?>