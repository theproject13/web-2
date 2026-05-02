<?php
include "koneksi.php";

$sql = "CREATE TABLE tbl_mhs (
    mhsID INT AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>