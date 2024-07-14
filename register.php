<?php
    include_once 'header.php'
?>

    <div id="test">
        <h1>Sign Up </h1>
        <form action="backend/register-inc.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required minlength="8">
            <input type="password" name="pword" placeholder="Password" required minlength="8">
            <input type="password" name="repeatpword" placeholder="Repeat Password" required>
            <br>
            <button type="submit" name="submit">Sign Up</button>
        </form>

        <?php 
        if (isset($_GET["error"])) {
            if ($_GET["error"] =="emptyinput") {
                echo "<p class='error'> Complete the form </p>" ;
            }
            else if ($_GET["error"] =="invaliduser") {
                    echo "<p class='error'>Invalid username please enter a new username</p>" ; 
                }
            else if ($_GET["error"] =="invalidemail") {
                    echo "<p class='error'>Enter a valid email</p>" ; 
                }
            else if ($_GET["error"] =="pwordnotmatch") {
                    echo "<p class='error'>Passwords didn't match</p>" ; 
                }
            else if ($_GET["error"] =="usertaken") {
                    echo "<p class='error'>This username is already taken please enter a different one</p>" ; 
                }
            else if ($_GET["error"] =="dbfail") {
                    echo "<p class='error'>Something went wrong, try again</p>" ; 
                } 
            else if ($_GET["error"] =="none") {
                    echo "<p class='success'>You have successfully registered</p>" ; 
                }    
        }
    ?>
    </div>

    

<?php
    include_once 'footer.php'
?>