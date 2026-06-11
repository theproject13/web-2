<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_mahasiswa"
);

if(!$conn){
    die(mysqli_connect_error());
}

echo "Koneksi Berhasil";
?>