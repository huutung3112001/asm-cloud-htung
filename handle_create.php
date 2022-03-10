<?php 
    include('database.php');

    if(isset($_POST['submit']) ) {
        $id = $_POST['idProduct'];
        $productName = $_POST['name'];
        $company = $_POST['company'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $price = $_POST['price'];
        
        $pg = "INSERT INTO product (id, company, name, image, category, price) VALUES ( '$id' ,'$company', '$productName', '$image', '$category', '$price')";

        $result = pg_query($conn, $pg);

        // var_dump($result);
        // session_die();
        $count = pg_num_rows($result);


        $row = pg_fetch_array($result);
        // echo "test </h2>"; 
        // if(pg_num_rows($result) == 1)
        // {

        //     echo "I'm about to learn PHP! </h2>";
           
        // }
        // else {
        //     echo "errors </h2>";
        // }
        header('location: main.php');
    }

?>