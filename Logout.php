<?php

session_start();
unset($_SESSION['username']);
session_destroy();
echo "Logged Out Successfully<br><br>";
?>


<html>

<a href = "Home.php">Click to return home page</a>

</html>