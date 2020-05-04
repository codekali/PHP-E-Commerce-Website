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
            include "includes/header.php";//to include the header in the order_history page
            echo "<br><br><br>";
            $user_id = $_SESSION['id'];
            //Query to select the confirmed order items by the current user
            $query = "SELECT * FROM users_items ui JOIN items i ON ui.item_id = i.item_id WHERE ui.user_id =$user_id AND stat='Confirmed'";
            $query_res = mysqli_query($con, $query) or die(mysqli_error($con));
            //if no previous order is found then display no previous ordered items
            if(!mysqli_num_rows($query_res)){
                echo "<div class='container' style='margin-top: 100px'>
                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>
                            <a href='products.php' class='btn' id='mybtn' style='float: right'>Place Some Order</a>
                            <table class='table table-hover'>
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th>Order Date & Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td colspan='4' style='text-align: center'><h4>No items ordered yet. Grab some awesome products!</td></tr></h4>";
            } else {
                $total_money=0;
                $i = 0;
        ?>
        
        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <a href="products.php" class='btn' id="mybtn" style="float: right">Place New Order</a>
                    <table class="table table-hover table-striped table-stretched">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Order Date & Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--PHP script to fetch every confirmed order from database and display in the table of ordered list-->
                            <?php while($rows = mysqli_fetch_array($query_res)){ ?>
                            
                                <tr>
                                    <td><?php echo $rows['name']; ?></td>
                                    <td><?php echo $rows['price']; ?></td>
                                    <td><?php echo $rows['purchase_timestamp']; ?></td>
                                    <td><?php echo $rows['stat']; ?></td>
                                </tr>

                            <?php
                            $i++; 
                            $total_money += $rows['price'];                
                            }//end of while loop
                            ?>
                                <tr>
                                    <td><b>Total Amount</b></td>
                                    <td><b><?php echo $total_money; ?></b></td>                                
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php 
            }//end of if statement
            include "includes/footer.php";//To include footer in the order history page
        ?>
    </body>
</html>