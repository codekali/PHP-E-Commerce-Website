<?php
    include "includes/common.php";//to include connection variables
    include "includes/check-if-added.php";//To include the check-if-added function to check the items if it's added to the cart
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
            include "includes/header.php";//To include header in the current page
        ?>
        <!--Big texts to highlight the lifestyle store-->
        <div class="container" style="margin-top: 7%">
            <div class="jumbotron">
                <h1>Welcome to out Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
        
        <?php
            //Gather every item from the database
            $query = "SELECT * FROM items";
            $query_res = mysqli_query($con, $query) or die(mysqli_error($con));
            $i = 0;
            while($i <3){
        ?>
        <div class="container" 
        <?php
        //Assign ids to the different section of products
        if($i==0) echo "id='cameras'";
        else if($i==1) echo "id='watches'";
        else if($i==2) echo "id='shirts'";
        ?> >
            <div class="row">
                <?php 
                    $j = 0;
                    while($j < 4){
                        $rows = mysqli_fetch_array($query_res, MYSQLI_ASSOC);
                ?>
                <div class="col-md-3 col-xs-6 text-center">
                    <div class="thumbnail">
                        <!-- Define thumbnails for each item from the database-->
						<a href="item-description.php?id=<?php echo $rows['item_id'];?>"><img class="product-image" src="<?php echo $rows['path']; ?>"></a>
                        <div class="caption">
                            <h3><?php echo $rows['name'];?></h3>
                            <p>Price: Rs. <?php echo $rows['price'];?></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                            <?php } else{
                                if(check_if_added_to_cart($rows['item_id'])){ //function in "includes/check-if-added" to check whether an item is added to cart or not
                            ?>
                                    <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                            <?php
                                } else {
                            ?>
                                <a href="cart-add.php?id=<?php echo $rows['item_id'];?>" name="add" value="add" class="btn btn-block btn-primary" >Add to cart</a>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
                <?php $j++; } ?>
            </div>
        </div>
        <?php $i++; } ?>
        <!--Provide some space to overcome the overlapping of the items and footer-->
        <div class="container" style="height: 70px;"></div>
        <?php
            include "includes/footer.php";//To include footer in the current page
        ?>
    </body>
</html>