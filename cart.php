<?php 

function cart($transaction_id,$transaction_type,$product_id,$quantity,$user_id,$product_name,$price,$size,$image_path,$created_at){ 
    echo ' 
    <div class="shadow p-3 card" style="width-max: 22rem;">
    <a method="GET" href="showcaseo.php?product_id='.$product_id.'" ><img src="'.$image_path.'" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p class="card-text">Transaction ID: '.$transaction_id.'<br></p>
          <p class="card-text">Item: '.$product_name.'</p>
          <p class="card-text">Price: '.$price.' <br>Size: '.$size.'</p>
          <p class="card-text">Purchased on: '.$created_at.'</p>

        </div>
      </div>'
      ;

    }
    ?>