
<?php
// MySQL server info
$servername = "localhost";
$username = "root";        // Default for XAMPP/WAMP
$password = "";            // Blank in XAMPP/WAMP
$database = "webteam_intern";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
