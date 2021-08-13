<?php 
include_once("create_cart.php");
function show($product_id,$product_type,$name,$color,$quantity,$price,$gender,$size,$description,$image){
echo'
<form action="create_cart.php" method="POST">

<input type="hidden" name="product_id" value='.$product_id.'>
<input type="hidden" name="name" value='.$name.'>
<input type="hidden" name="price" value='.$price.'>
<input type="hidden" name="size" value='.$size.'>
<input type="hidden" name="image" value='.$image.'>
<input type="hidden" name="quantity" value='.$quantity.'>

<div id="product">
        <section class=>
        <div class="shadow p-3 card md-6" style="max-width: 100cm;">
                <div class="row no-gutters">
                
                  
                  </div>
            <div class="card md-6" style="max-width: 100cm ;">
                <div class="row no-gutters">
                  <div class="image"><br><br><br><br>
                    <img src="'.$image.'" class="card-img" alt="...">
                  </div>
                  
                  
                  <div class="col-md-6 card text-left ml-6 border-0" >
                    <div class="card-body">
                      <br><br><br>
                      <h1 id="9" class="card-title">'.$name.'</h1><br>
                      <h4 id="font8" >ID# '.$product_id.'</h4><br><br><br>
                      
                      <p id="font8" class="card-text">'.$description.'</p><br><br>
                      
                      <h2 id="font9" >Price: '.$price.'</h2><br><br>                     
                      <h4 id="font8" >Avaliable: '.$quantity.'</h4><br><br><br><br>
                      <button type="submit" class="btn btn-primary " name="fav" id="submit">
                      
                      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg></button>
                      
                    <button type="submit" class="btn btn-primary" name="add" id="submit">Add to cart</button>
                    </div>
                  </div>
                </div>
              </div>
              </form>
              </form>
        </section>
    </div>';}
    ?>