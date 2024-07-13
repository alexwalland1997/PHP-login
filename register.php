<?php
    include_once 'header.php'
?>

    <div id="test">
        <h1>Sign Up </h1>
        <form action="register-inc.php" method="post">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="pword" placeholder="Password">
            <input type="text" name="repeatpword" placeholder="Repeat Password">
            <br>
            <button type="submit" name="button">Sign Up</button>
        </form>
    </div>

<?php
    include_once 'footer.php'
?>