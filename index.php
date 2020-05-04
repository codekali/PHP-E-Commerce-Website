<?php 
    include "includes/common.php";
    if (isset($_SESSION['email'])) {
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
            //To include the header in the index page
            include "includes/header.php";
        ?> 

        <!--The main banner image-->
        <div id="banner_image">
            <center>
            <div class= "container">
                <div id="banner-content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p>
                    <a href="products.php" class="btn btn-danger btn-active">Shop Now</a>
                </div>
            </div>
            </center>
        </div>

        <!--Section of links to the product page-->
        <div class="container">
            <div class="row" style="margin: 50px 0;">
                <!--Thumbnail link to Camera part of products page-->
                <div class="col-md-4">
                    <a href="products.php#cameras">
                        <div class="thumbnail">
                            <img src="img/camera.jpg" />
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose among the best available in the world</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Thumbnail link to Watch part of products page-->
                <div class="col-md-4">
                    <a href="products.php#watches">
                        <div class="thumbnail">
                            <img src="img/watch.jpg" />
                            <div class="caption">
                                <h3>Watches</h3>
                                <p>Original Watches from best brands</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!--Thumbnail link to Shirt part of products page-->
                <div class="col-md-4">
                    <a href="products.php#shirts">
                        <div class="thumbnail">
                            <img src="img/shirt.jpg" />
                            <div class="caption">
                                <h3>Shirts</h3>
                                <p>Our exquisite collection of shirts</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <?php
            //To include the footer in the index page
            include "includes/footer.php";
        ?>
    </body>
</html>