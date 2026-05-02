<?php
include "koneksi.php";

$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$age = $_POST['age'];

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('$fn', '$ln', '$age')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan <br>";
    echo "<a href='tampil_data.php'>Lihat Data</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>