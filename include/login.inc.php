<?php
//error typo checking
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbhandler.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../index.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else{
    header("location: ../index.php");
    exit();
}