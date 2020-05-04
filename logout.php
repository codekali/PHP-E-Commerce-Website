
<!--PHP script file to log out users-->

<?php  
    session_start(); 
    //if session is not set previously then the user redirects to index page directly
    if(!isset($_SESSION)) 
        header('location: index.php'); 
    
    //else if session is set previously then the user session is destroyed(logged out) and then redirects to index page
    else{
        session_destroy();
        header('location: index.php');
    }
?>