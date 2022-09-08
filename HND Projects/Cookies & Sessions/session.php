<?php

if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {  //check if the form has been submitted and if the username and password fields are not empty

    if ($_POST['username'] == 'admin' && $_POST['password'] == 'secret') {  //check if the username and password are correct
        session_start();        //start the session
        $_SESSION['username'] = 'admin';  //set the username session variable
        $_SESSION['valid'] = true;          //set the valid session variable
        header("Location:http://webdev.edinburghcollege.ac.uk/~HNCWEBMR6/HND%20Projects/Cookies%20&%20Sessions/welcomeMessage.php");    //redirect to the welcome page

    } else {
        header("Location:http://webdev.edinburghcollege.ac.uk/~HNCWEBMR6/HND%20Projects/Cookies%20&%20Sessions/filedLogin.php");        //redirect to the failed login page
    }
}

?>


