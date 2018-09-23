<?php
$servername = "localhost";
$username = "root";
$dbname = "verto";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
// Check connection
$crypter = password_hash($_POST[username], PASSWORD_BCRYPT);
if ($conn->connect_error) {
	die("conn failed");}
$sql = "INSERT INTO users (firstname, lastname, username, password) VALUES ('$_POST[firstname]','.$_POST[lastname]','$_POST[username]', '$crypter')";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE){
    // output data of each row
	echo "new record added";
	header("location: login.php");
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}
$conn->close();
?> 
