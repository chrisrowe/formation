<h1>Valet is working!</h1>

<h2>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Error connecting to DB: " . $conn->connect_error);
}
echo "DB connected!";
?>
</h2>