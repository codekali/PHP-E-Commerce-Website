<?php   
    $item_id = $_GET['id'];
    include "includes/common.php";//To include the connection variables
    $user_id = $_SESSION['id'];
    //SQL query to insert the desired product to user-item table to add to the cart
    $query = "INSERT INTO users_items(user_id, item_id, stat) VALUES('$user_id', '$item_id', 'Added to cart')";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    //redirect the user to products page to continue shopping
    header('location: item-description.php?id='.$item_id.'&added=1');
?>