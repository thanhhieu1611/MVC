<?php

// Read products from csv database, then return products array
function getProducts(){
    $file = fopen('./model/products.csv', 'r');
    $products = array();

    while ( !feof($file) )
    {
        $product = fgetcsv( $file );
        if( $product === false ) continue;
        $products[] = $product;
    }

    fclose($file);

    // print_r($products);
    return $products;
}

// Get a Product based on its id
function getProduct($id){
    $products = getProducts();

    foreach( $products as $product){

        if( $product[0] === $id ){
            return $product;
        }

    }
}

//Add a product into database
function addProduct($newId, $name, $price){
    $product = array($newId, $name, $price);

    $file = fopen('./model/products.csv', 'a');

    if ($file === false) {
        die('Error opening the file ');
    }

    // fseek($file, -2, SEEK_END);

    fputcsv($file, $product);

    fclose($file);
}

