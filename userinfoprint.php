<?php

function userinfo($email,$pass,$name,$last,$birthdate,$gender,$address,$city,$state,$country){
echo'
<body>
    <br><br><br><br><br><br><br>
    <center>
    <form  action="editprofile.php" method="POST"><div style="width:50%" >

        <div class="form-row">
            <div class="form-group col-md-6">
            <label id="font7"  for="inputEmail4">Email</label>
            <input  type="email" class="form-control" name="email" placeholder="'.$email.'" id="inputEmail4"></input>
            </div>  
          <div class="form-group col-md-6">
            <label id="font7" for="inputPassword4">Password</label>
            <input  type="password" class="form-control text-center" name="pass" placeholder="'.$pass.'" id="inputPassword4"></input>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
            <label  id="font7" for="inputAddress">First Name</label>
            <input  type="text" class="form-control" name="name" placeholder="'.$name.'" id="inputfirst_name"></input>
            </div>
          <div class="form-group col-md-6">
            <label id="font7" for="inputAddress2">Last name</label>
            <input  type="text" class="form-control" name="last" placeholder="'.$last.'" id="inputlastname"></input>
            </div>
        </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label id="font7" for="inputCity">Birthdate</label>
                <p id="font7 date" class="form-control"  id="inputBirthdate" >'.$birthdate.'</p>
                </div>
                <div class="form-group col-md-6">
                <label id="font7" for="inputGender">Gender</label>
                <input class="form-control text-center" id="inputGender" name="gender" placeholder="'.$gender.'" for="inputGender"></input>
            </div>

                <div class="form-group col-md-6">
                <label id="font7" for="inputAddress">Address</label>
                <input type="text" class="form-control" name="address" placeholder="'.$address.'" id="inputAddress"></input>
                </div>
                <div class="form-group col-md-6">
                <label id="font7" for="inputCity">City</label>
                <input type="text" class="form-control" name="city" placeholder="'.$city.'" id="inputCity"></input>
          </div>
                
                <div class="form-group col-md-6">
                <label id="font7" for="inputState">State</label>
                <input type="text"class="form-control" name="state" placeholder="'.$state.'" id="inputState"></input>
                </div>
                <div class="form-group col-md-6">
                <label id="font7" for="inputCountry">Country</label>
                <p type="font 7 text" class="form-control"  placeholder="" id="inputCountry" >'.$country.'</p>
                </div>
            </div>
        
            
             <button type="submit" class="btn btn-primary" name="update" id="edit">Edit</button>
    </div>
      </form>
    </center>


    </body>


';
}



?>
