<?php
$servername = "localhost"; 
$username = "pi";
$password = "PASSWORD";
$dbname = "status";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT settemp FROM settemp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	$num = (int) $row["settemp"]; 
	echo "<font size=4px><b> $num&nbsp*F </b></font>";
    }
} else {
    echo "0 results";
}

$conn->close();


?>

