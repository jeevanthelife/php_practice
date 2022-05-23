<?php
    function isCredential($email, $password){
       $email_pattern= "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
       $password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
       $x = preg_match($password_pattern, $password);           //returns 1 to $x if matches the proper password pattern
       $y = preg_match($email_pattern, $email);
       echo "$x,$y";

       

    }

    echo isCredential("jeevan@gmail.com","jEe1va2n1@");

?>