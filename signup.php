<?php 
    include "includes/common.php";
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- The page has a title Lifestyle Store-->
        <title>Lifestyle Store</title>
        <meta charset="utf-8"/>
        <!-- External css file index.css placed in the folder css is linked-->

        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="./js/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./css/index.css"/>
    </head>
    <body>
        <?php   
            include "includes/header.php";//to include header in the current page
            echo "<br><br><br><br>";
        ?>

        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h2>SIGN UP</h2>
                    <!-- Form to get user details and let them shop in the future by just logging in-->
                    <form method = "post" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name*" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email*" required>
                        </div>  
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password*" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" pattern="[0-9]{10}" placeholder="Phone No.">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <button class="btn btn-block" id="mybtn">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>    

        <?php
            include "includes/footer.php";//to include footer in the current page
        ?>
    </body>
</html>



