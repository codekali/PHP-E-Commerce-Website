<?php
    include "includes/common.php";
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <!---- The page has a title Lifestyle Store-->
        <title>Lifestyle Store</title>
        <meta charset="utf-8"/>
        <!---- External css file index.css placed in the folder css is linked-->

        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/index.css"/>
        <style>
            .msg{
                position: absolute;
                width: 500px;
                height: 200px;
                top:50%;
                left: 50%;
                margin: -100px 0 0 -250px;
            }
        </style>
    </head>
    <body>  
        <?php
            $items = $_GET['total-item'];
            $id = $_SESSION['id'];
            //Change the status of ordered items from "Added to Cart" to Confirmed
            for($i = 1; $i <= $items; $i++){
                $itm_id = $_GET['id'.$i];
                $query = "UPDATE users_items SET stat = 'Confirmed' where user_id = $id AND item_id =$itm_id";
                $query_res = mysqli_query($con, $query) or die(mysqli_error($con));
            }
        ?>
        <!-- Display success message-->
        <div class="alert alert-success msg text-center" >
            <h2>Your Order is confirm</h2><br><br> 
            <h4><a href="products.php" class="alert-link">Click here</a> to purchase any other item</h4>
        </div>
    </body>
</html>