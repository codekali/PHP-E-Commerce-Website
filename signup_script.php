
<!--Script Page to let users sign up to continue with the site

<?php
        include "includes/common.php";//include connection variables
        //Get the user details from the form and store it in the database
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $pass = md5($_POST['password']);

        //query to check whether the given email-id is registered previously or not
        $check = "SELECT id FROM users WHERE email='$email'";

        $check_result = mysqli_query($con, $check);

        //if the email-id provided is already registered then it shows an error
        if(mysqli_num_rows($check_result)){
            echo "ERROR: Email ID already exists";
            die(mysqli_error($con));
        } else{
            //query to add the user to the user table and get it registered
            $entry_query = "INSERT INTO users(email, first_name, phone, city, address, passw) values('$email', '$fname', '$phone', '$city', '$address', '$pass')";
            $res = mysqli_query($con, $entry_query) or die(mysqli_error($con));
            $_SESSION['id'] = mysqli_insert_id($con);
            $_SESSION['email'] = $email;
            echo "<script> window.alert('Hello $fname <br> You are successfully registered!'); </script>";
            header('location: products.php');
        }
    ?>