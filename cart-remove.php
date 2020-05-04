
<!--PHP script file to remove items from the cart-->

<?php   
    $item_id = $_GET['id'];
    include "includes/common.php";//To include the connection variables
    $user_id = $_SESSION['id'];
    
    //SQL query to delete an item from cart by removing it from the table user-item
    $query = "delete from users_items where item_id = $item_id and user_id = $user_id";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    
    //Redirect the user to cart page to see the updated list in the cart
    header('location: cart.php');
?>