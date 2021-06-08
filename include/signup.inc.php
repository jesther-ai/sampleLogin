<?php
//error typo checking
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["passwordRepeat"];

    
    require_once 'dbhandler.php';
    require_once 'functions.inc.php';

    //error handling functions.inc.php
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else{
    header("location: ../signup.php");
}