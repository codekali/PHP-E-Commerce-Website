    
    <!--Header partial html to include in html pages and reduce the code sizes-->
    <link rel="stylesheet" href="./../css/bootstrap.min.css" />
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
    <nav class="navbar navbar-inverse navbar-fixed-top theme-bg-color" style="border: none">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.php">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav navbar-right">
                <?php
                    //if user is not logged in then dispay the sign up and login navigation items 
                    if(!isset($_SESSION['email'])) {  ?>
                    
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                    
                    <?php }
                    //else if the user is logged in then the folowing navigation items will be displayed
                    else { ?>

                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href="order_history.php"><span class="glyphicon glyphicon-file"></span> Order History</a></li>
                    <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

                    <?php }?>

                </ul>
            </div>
        </div>
    </nav>