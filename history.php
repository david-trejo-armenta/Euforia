<?php

function cart($product_name,$product_id,$price,$size,$image_path,$transaction_id,$user_id,$quantity,$created_at){
echo'
<div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <a method="GET" href="showcaseo.php?product_id='.$product_id.' "><img src="'.$image_path.'" class="card-img" alt="camisa"></a>
                                         
                        </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h5 class="card-title">'.$product_name.'</h5>                            
                        <h5 class="card-title">ID#: '.$product_id.'</h5>
                            <p class="card-text">Price: '.$price.'</p>
                            <h5 class="card-title">Size: '.$size.'</h5>
                            <h5 class="card-title">Order'.$transaction_id.'</h5>                            
                            <h5 class="card-title">'.$user_id.'</h5>
                                <p class="card-text">'.$quantity.'</p>
                                <h5 class="card-title">'.$created_at.'</h5>
                                
                            
                            <p class="card-text"><small class="text-muted">$150</small></p>
                        </div>
                    </div>
                </div>
            </div>
';
}
?>
