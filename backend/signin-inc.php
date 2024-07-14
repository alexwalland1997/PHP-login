<?php
    
     if (isset($_POST["submit"])) {

          $username = $_POST["username"];
          $password = $_POST["pword"];

          require_once 'dbh-inc.php';
          require_once 'functions-inc.php';

          loginUser($conn, $username, $password);

     }
     else {
          header("location: ../signin.php");
          exit();
     }



?>