<!-- 
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  margin-left: 20%;
  margin-top: 5%;
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>
 -->

 <?php
 /*
 * sanitize and validate the data using filter_var()
 * for number
 $int = "height is 08848m.";
 $newint = filter_var($int, FILTER_SANITIZE_NUMBER_INT);
 echo $newint."<br>";
 //here taking the sanitized data for validation
 //the filter_var() function will not count 0 as integer thus we need to specify the in the condition as below
 if (filter_var($newint, FILTER_VALIDATE_INT) === 0 || !filter_var($newint, FILTER_VALIDATE_INT) === false) {
     echo "Valid Integer!";
 } else {
     echo "Invalid Integer!!";
 }
 */

 /*
 *validate the ip address
 $ip = "192.168.0.1";
 if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
     echo "Valid IP Address.";
 } else {
     echo "Invalid IP Address!!";
 }
*/
/* sanitize and validate the email address
$email = "abc@abc.abc";
$checkedemail = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $checkedemail. "<br>"; 
if (!filter_var($checkedemail, FILTER_VALIDATE_EMAIL) === false) {
    echo "Email address is valid.";
} else {
    echo "Invalid Email address!!";
}
*/
/* sanitize and validate the URL 
$url = "https://www.apple.com";
$newurl = filter_var($url, FILTER_SANITIZE_URL);
if (!filter_var($newurl, FILTER_VALIDATE_URL) === false) {
    echo "url is valid.";
} else {
    echo "Invalid URL!!";
}
*/


//  **  filters advanced  **  //
/*
$age = 65;
$min_age = 18;
$max_age = 65;
if (filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min_age, "max_range" => $max_age))) === false) {
    echo "Your Age is not Eligible!!.";
} else {
    echo "Your Age is Eligible.";
}
*/

