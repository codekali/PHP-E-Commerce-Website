
<!--Script file to change user passwords after user has logged in-->


<?php   
    include "includes/common.php";//Include the connection variables to the string
    $oldpass = md5($_POST['oldpass']);
    $newpass = $_POST['newpass'];
    $connewpass = $_POST['connewpass'];
    $user_id = $_SESSION['id'];
    //fetch teh previously stored password from the database
    $passfetch_query = "SELECT passw FROM users where id = '$user_id'";
    $passfetch_query_result = mysqli_query($con, $passfetch_query) or die(mysqli_error($con));
    $rows = mysqli_fetch_array($passfetch_query_result);
    //if the old password given by the user and password stored in the database matches then the two new passwords are checked to be same
    if( !strcmp($rows['passw'], $oldpass) ){
        //if the new password and the confirm password matches then the password gets successfully updated
        if( !strcmp($newpass, $connewpass )){
            $newpass = md5($newpass);//password hashing before storing in database
            echo $newpass;
            $entry_query = "UPDATE users SET passw = '$newpass' WHERE id = '$user_id'";
            $res = mysqli_query($con, $entry_query) or die(mysqli_error($con));
            header('location: settings.php?alert=3');
        } 
        //else the user is sent an error as passwords do not match
        else{
            header('location: settings.php?alert=2');
        }
    }
    //else the user is sent an error to enter the correct previous password
    else{
        header('location: settings.php?alert=1');
    }
    
?>