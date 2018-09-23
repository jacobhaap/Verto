<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "verto";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
// Check connection
$username = mysqli_real_escape_string($conn, $_POST['username']);
$hashedP = mysqli_query(conn, "SELECT username, password FROM users WHERE username = '$username'");
$password = mysqli_real_escape_string($connection, $_POST['password']);
if($row = mysqli_fetch_assoc($result)) { $dbpassword = $row['password'];}
if(password_verify($password, $dbpassword)){
			header("Location: network.php");
                }
                else {
                        header('location: about.php');
               	
		}
?>

