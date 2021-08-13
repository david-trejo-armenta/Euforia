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
<?php
  include_once("navbarconexion.php");
  ?>
<body>
<form action="insert.php" method="POST">
    <br><br><br><br>
    <center>
    <form ><div style="width:50%" >
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="my.email@e-mail.com" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">First Name</label>
          <input type="text" name="first_name" class="form-control" id="inputfirst_name" placeholder="John" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Last name</label>
          <input type="text" name="last_name" class="form-control" id="inputlastname" placeholder="Smith" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Birthdate</label>
            <input type="date" name="birthdate" class="form-control" id="inputBirthdate" placeholder="19/12/1999">
          </div>
          <div class="form-group col-md-6">
            <label for="inputGender">Gender</label>
            <select id="inputGender" name="gender" class="form-control">
              <option selected>M</option>
              <option>F</option>
              <option>N</option>
            </select>
            <small>M for Male, F for Female and N for Neither</small>
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="Chihuahua">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">State</label>
            <input type="text" name="state" class="form-control" id="inputState" placeholder="State">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCountry">Country</label>
            <input type="text" name="country" class="form-control" id="inputCountry" placeholder="Mexico">
          </div>
        </div>
        
        <button type="submit" href= "index.php" class="btn btn-primary" name="insert" id="submit">Sign up</button>
    </div>
      </form>
    </center>

    </form>
    </body>
    </html>