<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $id = filter_input( INPUT_GET, 'id');
        $addProduct = filter_input( INPUT_GET, 'add');
        $submitProduct = filter_input( INPUT_GET, 'submit');

        if( $addProduct || $submitProduct ) {
            include('./view/add_product.php');
        }else{
            if( $id ) {
                include('./view/display_product.php');
            }else {
                include('./view/display_products.php');
            }
        }
        
    ?>

    
    
    <?php 

        
    ?>

    
</body>
</html>