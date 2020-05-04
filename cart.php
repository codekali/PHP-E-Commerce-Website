<?php 
    include "includes/common.php";
    if (!isset($_SESSION['email'])) {
        header('location: products.php');
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
    </head>
    <body>
        <?php 
            include "includes/header.php";//include the header in the cart page
            echo "<br><br><br>";
            $user_id = $_SESSION['id'];
            $query = "SELECT * FROM users_items ui JOIN items i ON ui.item_id = i.item_id WHERE ui.user_id =$user_id AND stat='Added to cart'";
            $query_res = mysqli_query($con, $query) or die(mysqli_error($con));
            if(!mysqli_num_rows($query_res)){//If there are no items in the cart then display th content to add items to cart
                echo "<div class='container' style='margin-top: 100px'>
                    <div class='row'>
                        <div class='col-md-6 col-md-offset-3'>
                            <a href='products.php' class='btn' id='mybtn' style='float: right'><span class='glyphicon glyphicon-plus'></span> Add items</a>
                            <table class='table table-hover'>
                                <thead>
                                    <tr>
                                        <th>Item Number</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td colspan='4' style='text-align: center'><h4>Add items to the cart first!</td></tr></h4>";
            } else {//If the cart contains some item, then display the items
                $total_money=0;
                $link = "success.php?";
                $i = 0;
        ?>
        
        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <a href="products.php" class='btn' id="mybtn" style="float: right"><span class='glyphicon glyphicon-plus'></span> Add more items</a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Remove from Cart</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($rows = mysqli_fetch_array($query_res)){ ?>
                                
                                <!--Display details of each item available in the cart by fetching data from database-->
                                <tr>
                                    <td><?php echo $rows['item_id']; ?></td>
                                    <td><?php echo $rows['name']; ?></td>
                                    <td><?php echo $rows['price']; ?></td>
                                    <td>
                                        <?php $full_link = 'cart-remove.php?id='.$rows['item_id']; ?> 
                                        <!--Button to remove an item from the cart-->
                                        <a class='btn btn-default btn-danger' href="<?php echo $full_link; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>

                            <?php
                            $i++;
                            $link = $link."id".$i."=".$rows['item_id']."&";                        
                            $total_money += $rows['price'];
                            }
                            ?>
                            <tr class="active">
                                <th> </th>
                                <th>Total</th>
                                <!--Display the total amount of the items in the cart-->
                                <th><?php echo $total_money; ?></th>
                                <!--Confirm button to confirm the order of the items in the cart-->
                                <td><a class="btn" id="mybtn" href="<?php echo $link.'total-item='.$i; ?>">&#10004; Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php 
            }
            echo "<br><br><br><br>";
            include "includes/footer.php";//include the footer in the cart page
        ?>
    </body>
</html>