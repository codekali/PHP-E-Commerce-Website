
<!-- PHP file to help user login in with their email and password-->

<?php 
    include "includes/common.php";//To include the connection variables to the database
    
    //mysqli_real_escape_string is used here to read ' or " as a normal character
    $email = mysqli_real_escape_string($con,$_POST['email']) or die(mysqli_error($con));
    
    //Using md5 hash technique
    $pass = md5($_POST['passw']);
    
    //query to look for the queried user email 
    $query = "SELECT id, email FROM users WHERE email='$email'";
    $query_result = mysqli_query($con, $query);
    
    //If there are no users found with the given email-id then text will be displayed that No user found
    if(mysqli_num_rows($query_result) == 0){ 
        header('location: login.php?error=404');
    } else{
        //Check whether the password is correct or not
        $query = "SELECT id,email FROM users WHERE email='$email' AND passw='$pass'";
        $query_result = mysqli_query($con, $query);
        //if the the password is correct then the user is logged in and the session is created
        if($rows = mysqli_fetch_array($query_result)){
            $_SESSION['email'] = $rows['email'];
            $_SESSION['id'] = $rows['id'];
            header('location: products.php');
        }
        //And if the password provided is incorrect then throw an error to login page
        else{
            header('location: login.php?error=300');
        }
        
    }
?>