<?php 

function cartgenerator($order_id,$user_id,$product_id,$name,$price,$size,$image,$quantity){ 
    echo ' <br><br>
    <div class="shadow p-3 card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">

        <form action="delete.php" method="POST">

        <input type="hidden" name="id" value='.$order_id.'>
 
            <a href="showcaseo.php?product_id='.$product_id.'" ><img id="cart" src="'.$image.'" class="card-img" alt="camisa"></a>
        </div>
        <div class=" col-md-8">
            <div class="card-body">
                <h2 id="font9" class="card-title text-right">'.$name.'</h5>
                <p id="font8" class="card-text text-right">Order ID: '.$order_id.'</p>
                <p id="font8" class="card-text text-right">Product ID:'.$product_id.'</p>
                <p id="font8" class="card-text text-right">Size: '.$size.'</p>
                <p id="font8" class="card-text text-right">Price: '.$price.'</p><br><br><br><br>
               
                <button type="submit" class="btn btn-primary float-right" name="delete" id="submit"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg></button>
                
            </div>
        </div>
    </div>
</div>
</form>'
      ;
      
    }
    
?>