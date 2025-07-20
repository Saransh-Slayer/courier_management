// MySQL database connection
<?php
// db.php — Database connection used across all pages

$servername = "localhost";
$username = "root";         // Default for local XAMPP/WAMP
$password = "";             // Default is empty for local
$database = "courier_db";   // Make sure this matches your imported schema.sql

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
