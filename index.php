<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "universitas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Gagal Membuat Connection: " . $conn->connect_error);
}

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama</th><th>NIM</th><th>Jenis Kelamin</th><th>Kelas</th><th>Program Studi</th><th>Angkatan</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["nim"] . "</td>";
        echo "<td>" . $row["jenis_kelamin"] . "</td>";
        echo "<td>" . $row["kelas"] . "</td>";
        echo "<td>" . $row["program_studi"] . "</td>";
        echo "<td>" . $row["angkatan"] . "</td>";
        echo "</tr>";
    }
}
echo "</table>";
$conn->close();

?>