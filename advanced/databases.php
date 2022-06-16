<?php
$host = 'localhost';
$user = '';
$pass = '';
$dbname = 'myprodb';
/*
//creating connection with MySqli Object oriented 
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn -> connect_error) {
    die ("Connection failed: " . $conn -> connect_error);
}
echo 'Connected successfully<br>';
//create database
// $sql = "CREATE DATABASE mydb";
// // $sql = 'DROP DATABASE my_db'; //DELETE DATABASE
// if ($conn -> query($sql) === TRUE) {
//     echo "Database created successfully.";
// } else {
//     echo "Failed creating Database!!";
// }

$sql = "CREATE TABLE UserFeedback (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn -> query($sql) === TRUE) {
        echo "Table Users created.";
    } else {
        echo "FAILED CREATING TABLE!". $con->error;
    }

//close connection
$conn -> close();
---------------------------------------------------------------------
*/



//creating connection with MySqli procedural
$conn =  mysqli_connect($host, $user, $pass,$dbname);
if (!$conn) {
    die ('Could not Connect: '. mysqli_connect_error());
}
echo 'Connected Successfully<br>';

// // Create database
// $sql = "CREATE DATABASE myprodb";
// // $sql = 'DROP DATABASE my_db'; //DELETE DATABASE
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }

// // Create tables
// $sql = "CREATE TABLE UserFeedback (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
//     if (mysqli_query($conn, $sql)) {
//     echo "Table created successfully";
//     } else {
//     echo "Error creating Table: " . mysqli_error($conn);
//     }

// // Insert data in tables
// $sql = "INSERT INTO UserFeedback (firstname, lastname, email)
// VALUES ('abahadur', 'c', 'abc@gmail.com')";
// if (mysqli_query($conn, $sql)) {
//     $last_id = mysqli_insert_id($conn);   // for getting last id of inserted data
//     echo "New record added. last inserted record ID is.". $last_id;
// } else {
//     echo "Failed to add new record: $sql". mysqli_error($conn);
// }
// //Insert multiple queries
// $sql = "INSERT INTO UserFeedback (firstname, lastname, email)
// VALUES ('ram', 'das', 'ram@gmail.com');";
// $sql .= "INSERT INTO UserFeedback (firstname, lastname, email)
// VALUES ('sid', 'sad', 'sid@gmail.com');";
// $sql .= "INSERT INTO UserFeedback (firstname, lastname, email)
// VALUES ('om', 'sai', 'om@gmail.com');";
// if (mysqli_multi_query($conn, $sql)) {
//     echo "New record added.";
// } else {
//     echo "Failed to add new record: $sql". mysqli_error($conn);
// }

// //insert queries with Prepared statements
// $sql = $conn -> prepare("INSERT INTO UserFeedback (firstname, lastname, email) VALUES (?, ?, ?)");
// $sql -> bind_param("sss", $firstname, $lastname, $email);

// $firstname = "Har";
// $lastname = "OM";
// $email = "hariom@gmail.com";
// $sql -> execute();
// echo "<br>records added!!";

// // select particular data with specifying condition 
// $sql = "SELECT id, firstname, lastname, email from UserFeedback Where id='7'";
// // $sql = "SELECT id, firstname, lastname, email FROM UserFeedback LIMIT 2, 4";    //this limits the data to print i.e. displays 4 record from 3rd data
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     // output data of row 
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: ". $row["id"] . " -Name: " . $row["firstname"]. " " . $row["lastname"] .  " " .$row["email"]. "<br>"; 
//     }
// } else {
//     echo "No result found";
// }

// // select and order the data in asc/desc order
// $sql = "SELECT id, firstname, lastname, email FROM UserFeedback ORDER BY lastname";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {    //num_rows -- returns number of rows in result set.
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: ". $row["id"] . " -Name: " . $row["firstname"]. " " . $row["lastname"] .  " " .$row["email"]. "<br>";
//     } 
// } else {
//     echo "no results found";
// }

// //delete dataform table in sql
// $sql = "DELETE FROM UserFeedback WHERE id=5";
// if (mysqli_query($conn, $sql)) {
//     echo "Record deleted succesfully!!";
// } else {
//     echo "Failed To Delete data!". mysqli_error($conn);
// }

// //delete dataform table in sql
// $sql = "UPDATE UserFeedback SET firstname='Hari' WHERE id=10";
// if (mysqli_query($conn, $sql)) {
//     echo "Record updated succesfully!!";
// } else {
//     echo "Failed To update record!". mysqli_error($conn);
// }

//close connection
mysqli_close($conn);



/*
---------------------------------------------------------------------------
//creating connection with MySqli PDO
try {
    $conn = new PDO("mysql:host=$host", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!!<br>";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
//creating database with MySqli PDO
try {
    $conn = new PDO("mysql:host=$host", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
//close connection
$conn = null;
*/

?>