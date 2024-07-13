<?php
    include_once 'header.php'
?>

    <div id="test">
        <h1>Sign Up </h1>
        <form action="signin-inc.php" method="post">
            <input type="text" name="username" placeholder="Enter your Username">
            <input type="text" name="pword" placeholder="Enter your Password">
            <br>
            <button type="submit" name="button">Sign Up</button>
        </form>
    </div>

<?php
    include_once 'footer.php'
?>