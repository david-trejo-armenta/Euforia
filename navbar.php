<?php
include_once("FINALnavbar.php");
navbar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200;700&family=Roboto&display=swap');
</style>
    
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Euforia</title>
  <link rel="shortcut icon" type="image/x-icon" href="icono.png" />
</head>

<header>


  <nav  id="navbarbackground"class=" shadow p-3 navbar navbar-expand-lg  navbar-light fixed-top">
            
  <a href="index.php" class="d-block d-sm-none d-flex flex-reverse "></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="d-flex flex-row"> <img src="https://www.dropbox.com/s/h4iaypsr165352l/Logo.png?raw=1" width="20%"></img> </span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">

      <ul class="navbar-nav">
     
        <!--            Drop-down menus                                      -->


        <li class="nav-item dropdown ">
 
        <div class="d-block d-md-none ">
        <a class="nav-link nav-brandd-flex justify-content-start " href="index.php" role="button" ><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a>
        </div>
          <a class="nav-link  d-flex justify-content-start " href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor "
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
          </a>
          <div class="dropdown-menu dropdown" aria-labelledby="navbarDropdownMenuLink">
            <h6 class="dropdown-header">HER</h6>
            <a  class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=TOP&gender=F">TOPS</a>
            <a   class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=BOTTOM&gender=F">BOTTOMS</a>
            <a   class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=SHOES&gender=F">SHOES</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">HIM</h6>
            <a   class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=TOP&gender=M">TOPS</a>
            <a  class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=BOTTOM&gender=M">BOTTOMS</a>
            <a  class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=SHOES&gender=M">SHOES</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">OTHERS</h6>
            <a  class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=SCRUNCH&gender=M">SCRUNCHIES</a>
            <a  class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=CUSH&gender=F">CUSHIONS</a>
            <a  class="dropdown-item .dropdown" method="GET" href="FINALcatalog.php?type=FACE&gender=M">FACE MASKS</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item .dropdown" href="about.php">ABOUT US</a>
            



          
  

      </ul>
      
        <div class="ml-auto d-sm-none d-md-block">
      <a href="index.php" class="d-flex justify-content-center "><img class="d-none d-sm-block"
          src="https://www.dropbox.com/s/h4iaypsr165352l/Logo.png?raw=1" width="15%"></a>
        </div>
       
      
      <ul class="navbar-nav ml-auto">
     



        <!--            Drop-down menus                                      -->

        <div class="navbar-nav ">

          <li class="nav-item dropleft ">

            <a class="nav-link  d-flex row-reverse" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <!--USER-->
              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg>
            </a>
            <form action="login.php" method="POST">
            <div class="dropdown-menu  dropleft">
              <form class="px-6 py-3">
                <div class="form-group">
                  <label  width="100%" for="exampleDropdownFormEmail1"><p id="loginheader">Email address</p></label>
                  <input   type="email" name="email" class="form-control"  id="exampleDropdownFormEmail1"
                    placeholder="email@example.com">
                </div>
                <div class="form-group">
                  <label  for="exampleDropdownFormPassword1"><p id="loginheader">Password</p></label>
                  <input  type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
               
                <center>
                <button id="font4" type="submit" class="btn btn-primary">Sign in</button>
                </center>
              </form>
              </form>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="register.php">New around here?</a>
              <a class="dropdown-item" href="recovery.php">Forgot password?</a>
            </div>


          <li class="nav-item dropleft ">

            <a class="nav-link  d-flex row-reverse" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <!--CART-->
              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
              </svg>
            </a>
            <div class="dropdown-menu p-1 text-muted border-none">
            <h5>Login so you can create a cart</h5>
            </div>
        </div>

      </ul>

    </div>

  </nav>

</header>