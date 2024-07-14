<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in system</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <?php
            if (isset($_SESSION["user"])) {
                echo "<li><a href='backend/logout-inc.php'>Log out</a></li>";
            }
            else {
                echo "<li><a href='register.php'>Register</a></li>";
                echo "<li><a href='signin.php'>Log in</a></li>";
            }
        ?>
         </ul>

