<?php
    include "includes/common.php";
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
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
            include "includes/header.php";//to include header in the current page
            echo "<br><br><br><br>";
        ?>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h2>Change Password</h2>
                    <!--Form to change one's password and update it-->
                    <form method="post" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" class="form-control" name="oldpass" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="newpass" placeholder="New Password"required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="connewpass" placeholder="Confirm Password" required >
                        </div>  
                        <button class="btn" id="mybtn">Change Password</button>
                    </form>
                </div>
            </div>    
        </div>    

        <?php
            include "includes/footer.php";//To include the footer in the current page
            //catch the error while updating the user's password and display on an alert box
            if(!empty($_GET)){
                $response = $_GET['alert'];
                if($response == 3){
                    echo "<script> window.alert('Password Successfully Updated!');</script>";    
                } else if($response == 1){
                    echo "<script> window.alert('Enter your correct previous password!');</script>";
                } else if($response == 2){
                    echo "<script> window.alert('New passwords do not match!');</script>";
                }
            }
        ?>
    </body>
</html>