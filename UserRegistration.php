<?php

//Get values pass from form in login.php file
$username = $_POST['username'];
$password = $_POST['email'];
$password = $_POST['password'];

// to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "ase_login";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo  " INSERT into `users` (username, password) VALUE ({$username},{$password})";
$result = mysqli_query($conn, " INSERT into `users` (username, password) VALUE ('{$username}','{$password}')");

header("Location: SignUp_PageConfirmation.html");
die();


// connect to the server and select database
//mysql_connect("localhost", "root", "");
//mysql_select_db("login");

// Query the database for user
/*
$result = mysql_query("select" from users where username = '$username' and password = '$password'")
or die("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username']== $username) && $row['password'] == $password ) {
echo "Login success!! Welcome ".$row['username'];
} else {
echo "Invalid Login!";
}
*/
?>
