<?php
include "koneksi.php";

mysqli_query($conn, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Karina', 'Suwandi', 29)");

mysqli_query($conn, "INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Glenn', 'Gandari', 32)");

echo "Data berhasil ditambahkan";
?>