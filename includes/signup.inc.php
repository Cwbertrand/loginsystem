<?php

if(isset($_POST["submit"])){
   
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $email = $_POST["email"];
    $userpaswd = $_POST["userpaswd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($firstname, $secondname, $email, $userpaswd, $pwdrepeat) !== false) {

        header("location ..signUp/sign.php?error=emptyinput");
        exit();
    }
    if(invalidUid($firstname, $secondname) !== false) {
        header("location: ..signUp/sign.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("location: ..signUp/sign.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($userpaswd, $pwdrepeat) !== false) {
        header("location: ..signUp/sign.php?error=passwordsdontmatch");
        exit();
    }
    if(uidexist($conn, $firstname, $secondname) !== false) {
        header("location: ..signUp/sign.php?error=usernametaken");
        exit();
    }

    createUser($conn, $firstname, $secondname, $email, $userpaswd);

}else{
    header("location: /signUp/signup.php");
}