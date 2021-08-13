<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Euforia</title>
  <link rel="shortcut icon" type="image/x-icon" href="icono.png" />
  </head>
  <header>
  <?php
  include_once("navbarconexion.php");
  ?>
  </header>
<body>
<div class="d-none d-sm-block">
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="MAN" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="bamboo5.jpg" class="d-block w-100 .cover" alt="Man t-shirtStyles">
        <div class="carousel-caption a2">
          <h1 id= "h1w">EUFORIA<h1>
          <h2 id= "h2w">Dress Well, Dress Eco-Friendly, Dress Euforia</h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.dropbox.com/s/w94dvrf56tf4b6y/Background2.jpg?raw=1" class="d-block w-100 .cover " alt="Woman Shirt Styles">
        <div class="carousel-caption a2">
          <h1 id= "h1" >WOMEN STYLES</h1>
          <h2 id= "h2"> Get in touch with nature </h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.dropbox.com/s/jqquo0evatfgbyr/Background1.jpg?raw=1" class="d-block w-100 .cover " alt="Woman Shirt Styles">
        <div class="carousel-caption a2">
          <h1 id= "h1" >MEN STYLES</h1>
          <h2 id= "h2"> Outfits for every event </h2>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.dropbox.com/s/cofccfej31kwlpb/Background3.jpg?raw=1" class="d-block w-100 .cover " alt="Tennis Shoes">
        <div class="carousel-caption a2">
          <h1 id= "h1">SHOES</h1>
          <h2 id= "h2">Mark your step </h2>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only color:black;">Next</span>
    </a>
  </div>
</div>

<div class="d-block d-sm-none">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="MAN" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://www.dropbox.com/s/4t21ireiz7y8zvt/Bg5.jpg?raw=1" class="d-block w-100 .cover" alt="Man t-shirtStyles">
        <div class="carousel-caption .a2">
          <h5 id="font7">WOMEN STYLES</h5>
          <p id="font6">Nature fresh</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.dropbox.com/s/n7ttjlqbr5hpmxp/Bg6.jpg?raw=1" class="d-block w-100 .cover " alt="Woman Shirt Styles">
        <div class="carousel-caption  .a2">
          <h5 id="font7">MEN STYLES</h5>
          <p id="font6"> Every Style counts </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://www.dropbox.com/s/ucyxqrnn1oh61pz/Bg4.jpg?raw=1" class="d-block w-100 .cover " alt="Tennis Shoes">
        <div class="carousel-caption .a2">
          <h5 id="font7">SHOES</h5>
          <p id="font6">Create your path</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only color:black;">Next</span>
    </a>
  </div>
</div>
</body>
<footer>

</footer>

</html>