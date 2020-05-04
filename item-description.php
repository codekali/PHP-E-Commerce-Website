<?php 
    include "includes/common.php";
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
            //To include the header in the index page
            include "includes/header.php";
            echo "<br><br><br><br>";
        ?>
        
        <?php
            $itemid = $_GET['id'];
            $query = "SELECT * FROM items WHERE item_id = $itemid";
            $query_res = mysqli_query($con, $query) or die(mysqli_error($con));
            $row = mysqli_fetch_array($query_res, MYSQLI_ASSOC);
            if (isset($row)){
        ?>


                <div class="container">
                    <div class="row">
                        <div class="preview col-sm-6">
                            <img src="<?php echo $row['path'];?>" style="width: 90%" />                            
                        </div>
                        <div class="details col-sm-6">
                            <h3 class="product-title"><?php echo $row['name'];?></h3>
                                <div class="rating">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="review-no">41 reviews</span>
                                </div>
                            <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                            <h4 class="price">current price: <span><?php echo $row['price'];?></span></h4>
                            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                            <?php if (isset($_SESSION['email'])) { ?>
                                <div>
                                    <a href="cart-add-from-des.php?id=<?php echo $row['item_id'];?>" class="btn btn-block btn-primary product-page-link" style="display: none">Add to cart</a>
                                    <a href="cart.php" class="btn btn-block btn-primary product-page-link">Buy Now</a>
                                    <a href="cart-add-from-des.php?id=<?php echo $row['item_id'];?>" class="btn btn-block btn-primary product-page-link">Add to cart</a>
                                    <?php if (isset($_GET['added'])) echo '<button type="button" class="btn btn-block btn-success product-page-link" id="added">Added</button>';?>
                                </div>
                            <?php } else{?>
                                <div>
                                    <a href="cart-add-from-des.php?id=<?php echo $row['item_id'];?>" class="btn btn-block btn-primary product-page-link" style="display: none">Add to cart</a>
                                    <a href="login.php" class="btn btn-block btn-primary product-page-link">Buy Now</a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>

        <?php 
            }else {
                header('location: error.php');
            }
        ?>
        <?php
            echo "<br><br><br><br>";
            //To include the footer in the index page
            include "includes/footer.php";
        ?>
    </body>
</html>