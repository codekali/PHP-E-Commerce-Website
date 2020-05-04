
<!-- connect to the database with the credentials-->

<?php
    $con = mysqli_connect("localhost", "root", ".tdgjmpt", "test") or die(mysqli_error($con));
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>