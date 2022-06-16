<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Practice</title>
    <style>
        .error {color: red;}
    </style>
  </head>
  <body>
<h2>User Feedback</h2>
<?php
$nameErr = $genderErr = $emailErr = $phoneErr = "";
$name = $email = $gender = $message = $phone = "";
//name requirement
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required!!<br>";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  //email validation and requirement
  if (empty($_POST["email"])) {
    $emailErr = "Email is required!!<br>";
  } else {
    $email_pattern= "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    $email = $_POST["email"];
    if (preg_match($email_pattern, $email) != 1){
      $emailErr = "Your Email Address is NOT Valid!!<br>";
    } else { 
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Your Email Address is NOT Valid!!<br>";
    } else {
      $email = test_input($_POST["email"]);
    }
  }        
  }
  //phone requirement 
  if (empty($_POST["phone"])) {
          $phoneErr =  "Phone is required!!<br>";
        } else {
          $phone = test_input($_POST["phone"]);
          if (!preg_match ("/^[0-9]*$/", $phone) ) {  
            $phoneErr = "Only numeric value is allowed.";  
            }  
        //check mobile no length should not be greator than 10  
        if (strlen ($phone) > 10) {  
            $phoneErr = "Phone number must not be more than 10 digits.";  
            }  
    } 
       
        
        //message output
        if (empty($_POST["message"])) {
        } else {
          $message = test_input($_POST["message"]);
        } 
        //gender requirement
        if (empty($_POST["gender"])) {
          $genderErr =  "Gender is required!!<br>";
        } else {
          $gender = test_input($_POST["gender"]);
        } 
      }  

      function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      ?>


<p><span class="error">* required field</span></p>
<!-- $_SERVER["PHP_SELF"] this variable can be used by hackers. so to fix this exploit we have to use htmlspecialchars() function. -->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  
  Full Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Contact Number: <input type="number" name="phone" value="<?php echo $phone;?>" />
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Message: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" 
  <?php 
  if (isset($gender) && $gender == "female") {
    echo "checked";
  }
  ?>
  value="female" >Female
  <input type="radio" name="gender" <?php 
  if (isset($gender) && $gender == "male") {
    echo "checked";
  }
  ?>
  value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
      <input type="submit" name="submit" value="SUBMIT" />
</form>

    <?php
    if(isset($_POST['submit'])) {  
    if($nameErr == "" && $emailErr == "" && $phoneErr == "" && $genderErr == "") {
      echo "<h3> <p style=\"color:Green;\"><b>Form Submitted Successfully.</b></p></h3>";    
        
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $message;
echo "<br>";
echo $gender;
} else {  
  echo "<h3> <p style=\"color:red;\"><b>You didn't filled up the form correctly.</b></p></h3>";  
}  
}  
?>
    
  </body>
</html>