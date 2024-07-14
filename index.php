<?php
    include_once 'header.php'
?>

    <div id="test">
    <?php
            if (isset($_SESSION["user"])) {
                echo "<h1>Hello there " . $_SESSION["user"] . "</h1>" ;
                echo "<p> You have found the secret page </p>";
                echo "<p>Click Log out to log out</p>";
            }
            else {
                echo "<h1>Hello World!</h1>";
                echo " <p> You have found my php experimental page. </p>";
                echo "<p>Here I will be trying out a log in system.</p>";
            }
    ?>
</div>

<?php
    include_once 'footer.php'
?>