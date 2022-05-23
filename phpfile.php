<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpfile</title>
</head>
<body>
    
    Hello <?php echo $_POST["name"];?> !!<br>
    <?php
        $email_pattern= "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
        $email = $_GET["email"];
        if (preg_match($email_pattern, $email) != 1){
            echo "Your Email Address is NOT Valid";
        }
        
        else {
            echo "Your Email Address is: $email ";
        }
    ?>
    <!-- Your Email Address is :  <?php echo $_POST["email"]; ?> -->

    
</body>
</html>