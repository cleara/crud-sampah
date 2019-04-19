<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cleara";

// Create connection
$conn = new mysqli("localhost", "root", "", "cleara");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM form_sampah  WHERE id_sampah='".$_POST["txt_id_sampah"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
<a href="Sampah.php">BACK</a>