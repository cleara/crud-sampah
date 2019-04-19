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
echo "<a href='Sampah.php'></a><br>";
$sql = "SELECT * FROM form_sampah";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border="2" style="color:black;">
        <tr>
            <td>
                <p>Id Sampah</p>  
            </td>
            <td>
                <p>Nama Sampah</p> 
            </td>
            <td>
                <p>Jenis sampah</p> 
            </td>
            <td>
                <p>Fungsi 3R</p> 
            </td>
            <td>
                <p>Organik_Anorganik</p> 
            </td>
            <td>
                <p>Basah_Kering</p> 
            </td>
            <td>
                <p>Manfaat</p> 
            </td>
        </tr>
   <?php
if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
    ?>
        <tr>
        <td> <?php echo  $row["id_sampah"]?></td>
        <td> <?php echo $row["nama_sampah"]?></td> 
        <td> <?php echo $row["jenis_sampah"]?></td> 
        <td> <?php echo $row["fungsi_3R"]?></td> 
        <td> <?php echo $row["organik_anorganik"]?></td> 
        <td> <?php echo $row["basah_kering"]?></td> 
        <td> <?php echo $row["manfaat"]?></td>
        <td> <a href='sampah_show.php?id=$row[id_sampah]'>show</a></td>
        <td> <a href='sampah_edit.php?id=$row[id_sampah]'>edit</a></td>
        <td> <a href='sampah_hapus.php?id=$row[id_sampah]'>delete</a></td>
        </tr>
    <?php
    }
} else {
    echo "0 results";
}
?>
</table>
</body>
<?php
$conn->close();
?> 
</html>