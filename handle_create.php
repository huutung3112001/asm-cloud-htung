<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $productName = $_POST['name'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        
        $pg = "INSERT INTO product (name, image, category, price) VALUES ('$productName', '$image', '$category', '$price')";

        $result = pg_query($conn, $pg);

        $result = pg_query($conn, $pg);
        // var_dump($result);
        // session_die();
        $count = pg_num_rows($result);


        $row = pg_fetch_array($result);
        if(pg_num_rows($result) >0){

            echo "I'm about to learn PHP! </h2>";
           
        }
        else {
            echo "errors </h2>";
        }
        // header('location: main.php');
    }

?>