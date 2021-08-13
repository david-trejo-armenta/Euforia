<?php
  include('database.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Sign up</title>
</head>
<body id="background">
    <form action="insert.php" method="POST">
    <header>
    <nav class="navbar navbar-expand-lg  navbar-light fixed-top navbar-fluid">
            
        <button class="navbar-toggler navbar-brand" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-brand d-flex justify-content-between"> PRODUCTS  </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            

        </button><a href="index.html" class=".logo d-flex justify-content-center"><img src="Logo.png" width= "10%" margin-left="50px"></a>
        <ul class="navbar-nav">
         
    
      
    </nav>
    </header>
    <br><br><br><br>
    
    <form ><div style="width:50%" >
    <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="email@example.com" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">First Name</label>
          <input type="text" class="form-control" id="inputfirst_name" name="first_name" placeholder="Name" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Last name</label>
          <input type="text" class="form-control" id="inputlastname" name="last_name" placeholder="Last Name" required>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Birthdate</label>
            <input type="date" class="form-control" name="birthdate" id="inputBirthdate" placeholder="19/12/1999">
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
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" name="city" id="inputCity" placeholder="Chihuahua">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">State</label>
            <input id="inputState" class="form-control" name="state" placeholder="Chihuahua">
          </div>
          <div class="form-group col-md-6">
            <label for="inputCountry">Country</label>
            <input type="text" class="form-control" name="country" id="inputCountry" placeholder="Mexico">
          </div>
        </div>
        
        <button type="submit" class="btn" name="insert" id="submit">Sign up</button>
    </div>
      </form>
   
</body>
</form>
</html>