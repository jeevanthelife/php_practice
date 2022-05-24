<?php
session_start();    //start the session
?>
<html>
<body>
    <?php
    // $_SESSION['username'] = "Jeevan";
    // $_SESSION["address"] = "Kathamndu";
    // echo "session variables are set.";


    // Echo session variables that were set on previous page
    // echo "The username is " . $_SESSION["username"] . ".<br>";
    // echo "Your address is " . $_SESSION["address"] . ".";
    session_unset();
    session_destroy(); 
    ?>
</body>
</html>