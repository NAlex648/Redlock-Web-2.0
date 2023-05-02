<?php
$servername = "mysql"; 
$username = "root"; 
$password = "root"; 
$dbname = "Redlock"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo '<span style="font-size: 50px;"><p><center>redlock-web-2.0</center></p></span>';
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jabatan</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["addr"] . "</td><td>" . $row["jabat"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>