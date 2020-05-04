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
            include "includes/header.php";
        ?> 
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div style="margin-top: 150px">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h2>Log In</h2>
                            </div>
                            <!--Define a panel for the login form-->
                            <div class="panel-body">
                                <p class="text-warning">Login to make a purchase</p>
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <!--Login form with POST method and calls the login_submit.php script for validation and session start-->
                                    <form method="post" action="login_submit.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="passw" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required>
                                        </div>
                                        <button class="btn btn-block" id="mybtn">Log In</button>
                                    </form>
                                </div>
                            </div>
                            <!--A link to get registered first if not registered earlier-->
                            <div class="panel-footer">
                                Don't have an account? <a href="signup.php" class="btn-link" >Register</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            //To include footen content in the login page
            include "includes/footer.php";
        ?>
        
        <script>
            <?php
                if(isset($_GET)){
                    $error = $_GET['error'];
                    //if the error received is 404 then alert window opens with no user found
                    if($error == 404)
                        echo "window.alert('No user registered with this email ID');";
                    //else if the error received is 300 then alert window opens with password incorrect
                    else if($error == 300)
                        echo "window.alert('Password is incorrect');";
                }
            ?>
        </script>
    </body>
</html>