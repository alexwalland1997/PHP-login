<?php
//clear session data
session_start();
session_unset();
session_destroy();

//load up homepage
header("location: ../index.php");
exit();

?>