<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "gymnasium_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"), true);
$nama = $data['nama'];
$tanggal = $data['tanggal'];

$sql = "INSERT INTO peminjaman (nama, tanggal) VALUES ('$nama', '$tanggal')";
if ($conn->query($sql) === TRUE) {
    echo json_encode(["message" => "Peminjaman berhasil!"]);
} else {
    echo json_encode(["message" => "Error: " . $sql . "<br>" . $conn->error]);
}

$conn->close();
?>
