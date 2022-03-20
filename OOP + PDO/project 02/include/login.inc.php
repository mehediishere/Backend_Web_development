<?php

if (isset($_POST["submit_login"])) {

    // Grabbing the data
    $uname = $_POST["user"];
    $pwd = $_POST["pwd"];

    // Instantiate signupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    $signup = new loginContr($uname, $pwd);

    // Running error handlers and user signup
    $signup->loginUser();

    // Going to back to font page
    header("location: ../index.php?error=none");

}

?>