<?php
    include_once 'header.php'
?>

    <div id="test">
        <h1>Log in</h1>
        <form action="backend/signin-inc.php" method="post">
            <input type="text" name="username" placeholder="Enter your Username" required>
            <input type="password" name="pword" placeholder="Enter your Password" required>
            <br>
            <button type="submit" name="submit">Log in</button>
            <br>
             </form>

        <?php 
        if (isset($_GET["error"])) {
            if ($_GET["error"] =="wronglogin") {
                    echo "<p class='error'>Invalid username entered please enter a valid username</p>" ; 
                }
            else if ($_GET["error"] =="incorrectpword") {
                    echo "<p class='error'>Incorrect Password please try again or reset password</p>" ; 
                }
            }
        ?>
    </div>

<?php
    include_once 'footer.php'
?>