<?php
$connect;
function connect(){
    $connect = new mysqli("localhost", "root","","euforia");
    if (!$connect) {
        die('Contacte al administrador de la página ' . mysql_error());
    }
    else{
    
        return $connect;
    }
}

