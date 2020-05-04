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
            h4{ color: darkslategray; }
            .row p{ text-align: justify; }
            hr{ margin: 5px 0 10px 40px; border: 1px solid gray; width: 150px;}
        </style>
    </head>
    <body>
        <?php 
            //To include the header in the about webpage  
            include "includes/header.php";
            echo "<br><br><br><br>";
        ?> 
        <div class="container">
            <div class="row">
                <!--This column contains team photo and who we are content-->
                <div class="col-md-4">
                    <h3>WHO WE ARE</h3>
                    <hr>
                    <img src="img/team.jpg" class="img-responsive">
                    <br>
                    <p>Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the internet using a web browser. Consumers find a product of interest by visiting the website of the retailer directly or by searching among alternative vendors using a shopping search engine, which displays the same products's availability and pricibg at different e-retailers. As of 2016, customers can shop online using a range of different computers and devices including desktop computers laptop, tablet, computers and smartphones.</p>
                </div>
                <!--This column contains Our history content-->
                <div class="col-md-4">
                    <h3>OUR HISTORY</h3>
                    <hr>
                    <h4 style="color: slategray">1960</h4>
                    <p>One of the ealiest foems of trade conducted online was IBM's online transaction processing(OLTP) developed in the 1960s.</p>
                    <h4 style="color: slategray">1985</h4>
                    <p>The processing of financial transactins in realtime. The computerized ticker reservation sestem developed foe American Airlines called Semi-Automatic Business Research Environment (SABRE) was one of its applications.</p>
                    <h4 style="color: slategray">1990</h4>
                    <p>Here, computer terminals located in different travel agensies were linked to a large IBM mainframe computer, which processed transactions simultaneously and coordinated them so that all travel agents had access to the same information at the same time.</p>
                    <p>The emrgence of online shopping as we know today developed with the emergence of the internet.</p>
                </div>
                <!--This column contains contains the growth content of the website-->
                <div class="col-md-4">
                    <h3>GROWTH</h3>
                    <hr>
                    <h4 style="color: slategray">Growth in online shoppers</h4>
                    <br>
                    <p>As the revenues from online sales continues to grow significantly researchers identified different types of online shoppers, Rohm & Swaninathan[7] identified four categoriws and named them "convenience shoppers, variety seekers, balances buyers and store oriented shoppers". They focused on shopping motivations and foung that the variety of products available and the perceived convenience of the buying online experience were significant motivating factors.</p>
                </div>
            </div>
        </div>
        <?php
            //To include the footer in the about webpage
            echo "<br><br><br>";
            include "includes/footer.php";
        ?>
    </body>
</html>