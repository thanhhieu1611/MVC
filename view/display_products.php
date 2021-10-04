<h1>Display All Products</h1>

<?php 
    include('./model/product_db.php');

    $products = getProducts();

    foreach($products as $product){
        // print_r($product);
        echo( "<a href='?id=$product[0]'>$product[1] $product[2]</a></br>");
    }

?>

    <!-- Add Product -->
    <form action="#" method="GET">
        <label for="add"></label>
        <input type="submit" value="Add Product" id="add" name="add">
    </form>