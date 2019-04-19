<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cleara";

// Create connection
$conn = new mysqli("localhost", "root", "", "Cleara");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO form_sampah (id_sampah, nama_sampah, jenis_sampah,
        fungsi_3R, organik_anorganik, basah_kering, manfaat)
VALUES ('".$_POST["txt_id_sampah"]."','".$_POST["txt_nama_sampah"]."',
        '".$_POST["txt_jenis_sampah"]."', '".$_POST["txt_fungsi_3R"]."',
        '".$_POST["txt_organik_anorganik"]."', '".$_POST["txt_basah_kering"]."',
        '".$_POST["txt_manfaat"]."');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
    echo "<a href='sampah_store.php'>kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 