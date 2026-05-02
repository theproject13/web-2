<?php
include "koneksi.php";

$result = mysqli_query($conn, "SELECT * FROM tbl_mhs");

echo "Jumlah data: " . mysqli_num_rows($result);
?>