
<!--PHP script file to check if an item is added to cart or not-->

<?php
    function check_if_added_to_cart($item_id){
        include "includes/common.php";
        $user_id = $_SESSION['id'];

        //Query to check if the item is added to the cart or not
        $query = "SELECT id FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND stat='Added to cart'";
        $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
        if(mysqli_num_rows($query_result)){
            return 1;
        } else{
            return 0;
        }
    }
?>