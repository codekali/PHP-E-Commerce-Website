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
        <style>
            #para{ text-align: justify; }
        </style>
    </head>
    <body>
        <?php   
            //To include the header in the contact webpage
            include "includes/header.php";
            echo "<br><br><br><br>";
        ?> 
        <div class="container">
            <!-- First Row to contain the Live support text section and the contact image-->
            <div class="row">
                <div class="col-md-10">
                    <h2>Live Support</h2>
                    <p id="para"> Here we give support to all your query inclusive of order issue, cart issue, account issue and other payment related issues. The are a number of ways to contact us. You can mail us on the provided email-id or you can call us at the given helpline number or if the query is not that urgent drop a message in the below given form and we will revert back to you as soon as possible. Please provide relevant details and explain your query when submitting it through the below form. So never let your query pile up. Hit us and we'll find you a solution. :-)</p>
                </div>
                <div class="col-md-2">
                    <img src="img/support.png" class="img-responsive" width="150px">
                </div>
            </div>
            <!--Second Row to contain the contact form and the company contact details -->
            <div class="row">
                <div class="col-md-8">
                    <h2>Contact Us</h2>
                    <form>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" style="min-height: 100px" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn" id="mybtn" type="button" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2>Company Information</h2>
                    <p>Nehru Place, New Delhi - 110023</p>
                    <p>Phone: +91 90000 00000</p>
                    <p>Email: livesupport@lifestylestore.com</p>
                </div>
            </div>
        </div>
        <?php
            //To include the footer in the contact webpage
            echo "<br><br><br>";
            include "includes/footer.php";
        ?>
    </body>
</html>