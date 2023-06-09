<?php
$servername = "sql307.infinityfree.com";
$username_db = "epiz_33835110";
$password_db = "fc9rLLcxT2n";
$dbname = "epiz_33835110_db_zidni_zatzet";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

$sql = "INSERT INTO zatzet (username, email, password) VALUES ('$username', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    $pesan = "Registrasi berhasil!";
} else {
    $pesan = "Registrasi gagal: " . $conn->error;
}

$conn->close();
?>
