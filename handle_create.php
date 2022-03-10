<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $productName = $_POST['name'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        
        $pg = "INSERT INTO product (name, image, category, price) VALUES ('$productName', '$image', '$category', '$price')";

        $result = pg_query($conn, $pg);
        if(isset(result)) {
            echo "okeee";
        }
        else { 
            echo "ngu";
        }
        // header('location: main.php');
    }

?>