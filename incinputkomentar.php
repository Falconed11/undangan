<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$db         = "undangan";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Koneksi Gagal: " . $conn->connect_error);
}

$sql = "INSERT INTO komentar (nama, komentar)
  VALUES ('" . $_POST["nama"] . "', '" . addslashes($_POST["komentar"]) . "')";

if ($conn->query($sql) === TRUE) {
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: index.php?pesan=sukses");
