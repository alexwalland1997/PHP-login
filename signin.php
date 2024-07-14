<?php
    include_once 'header.php'
?>

    <div id="test">
        <h1>Log in</h1>
        <form action="backend/signin-inc.php" method="post">
            <input type="text" name="username" placeholder="Enter your Username" required>
            <input type="password" name="pword" placeholder="Enter your Password" required>
            <br>
            <button type="submit" name="log in">Log in</button>
        </form>
    </div>

<?php
    include_once 'footer.php'
?>