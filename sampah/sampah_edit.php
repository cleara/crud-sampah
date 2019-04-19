<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "Cleara";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE form_sampah SET 
name =' ".$_POST["txt_Customer_name"]."',
address =' ".$_POST["txt_Customer_address"]."',
where customer_id=' ".$_POST["txt_id_sampah"]."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<a href="Supplier1.php">kembali</a>