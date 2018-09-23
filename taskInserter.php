<?php session_start()?>
<html>
<body>
<?php 
$servername = "localhost";
$username = "root";
$dbname = "verto";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
// Check connection
if ($conn->connect_error) {
	die("conn failed");}
else{
$sql = "INSERT INTO services (username, serviceName, serviceDesc, serviceCreateDate) VALUES ('$_POST[cost]','$_POST[type]','$_POST[desc]',NOW())";}

if ($conn->query($sql) === TRUE){
    // output data of each row
	echo "new record added";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}
$conn->close();
?> 
</body>
</html>
