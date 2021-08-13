<?php 

function card ($id,$name,$price,$dato3){ 
    echo ' 
    <div class="shadow p-3 card" style="width: 18rem;">
    <a method="GET" href="showcaseo.php?product_id='.$id.'" ><img src="'.$dato3.'" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <p id="font9" class="card-text">'.$name.'<br></p><p id="font 7">ID: '.$id.'</p><br>
          
          <p id="font8" class="card-text">Price: '.$price.'</p>
        </div>
      </div>'
      ;
      
    }
    
?>