<?php 

//check that submit was pressed
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["pword"];
    $passwordRP = $_POST["repeatpword"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    if (invalidUser($username) !== false) {
        header("location: ../register.php?error=invaliduser");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }

    if (pwordMatch($password, $passwordRP) == false) {
        header("location: ../register.php?error=pwordnotmatch");
        exit();
    }

    if (userAvail($conn, $username, $email) !== false) {
        header("location: ../register.php?error=usertaken");
        exit(); 
    }

    createUser($conn, $username, $email, $password);

} 
else {
    //if not throw them back to register page
    header("location: ../register.php");
}