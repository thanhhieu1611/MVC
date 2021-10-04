<h1>Add a Product</h1>

<?php
include('model/product_db.php');
?>

<form action="" method="GET">
    <!-- Id -->
    <label for="newId">Product ID: </label>
    <input type="text" name="newId" id="newId" placeholder="Please type the id">
    <br>
    
    <!-- Product Name -->
    <label for="name">Product Name:</label>
    <input type="text" name="name" id="name" placeholder="Please type the product name">
    <br>

    <!-- Price -->
    <label for="price">Product Price:</label>
    <input type="float" name="price" id="price" placeholder="Please type the product price">
    <br>

    <!-- Add Button -->
    <label for="add"></label>
    <input type="submit" value="Submit" id="add" name="submit">
    <br>
    
</form>

<?php 

    $submit = filter_input( INPUT_GET, 'submit');
    if($submit){
        $newId = filter_input( INPUT_GET, 'newId');
        $name = filter_input( INPUT_GET, 'name');
        $price = filter_input( INPUT_GET, 'price');
        addProduct($newId, $name, $price);
    }
?>