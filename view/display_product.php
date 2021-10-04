<h1>Display A Product</h1>

<?php 
    include('model/product_db.php');

    $aProduct = getProduct($id);
    // print_r( $aProduct);
    echo( "<p><strong>$aProduct[0]</strong>: $aProduct[1] $aProduct[2]</p>");


?>