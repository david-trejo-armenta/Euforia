<?php
   session_start();
   
    function navbar(){
        
    if(isset($_SESSION['started'])){

        include_once("navbarlogged.php");
        
    }
    else{

        include_once("navbar.php");
    }

}
?>