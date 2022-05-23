<?php
/*$cookie_name="username";
$cookie_value="jeevan";
setcookie($cookie_name, $cookie_value, time()+ (86400 * 30), "/");  //86400 sec = 24 hr; so setting expire date to 30 days    */
// setcookie("username", "", time() - 3600);    //set the expiration date to one hour ago to make the cookie deleted
setcookie("test_cookie", "test", time() + 3600, '/');    //test cookie for sookies status
?>
<html>
    <body>
        <?php 
        /* -- cookie set and display set cookie
            if (!isset($_COOKIE[$cookie_name])) {
                echo "Cookie named '".$cookie_name . "' is not set!";
            } else {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
            }
        */
        //echo " Cookie 'user' is deleted!!";    //displays cookie deleted for expired cookie
/*--to check whether cookies are enabled or not
        if (count($_COOKIE) > 0) {
            echo " Cookies are enabled!!";
        }else {
            echo " Cookies are disabled!!";
        }
*/
        ?>
    </body>
</html>