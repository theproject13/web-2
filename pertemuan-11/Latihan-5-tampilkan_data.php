<?php
include "koneksi.php";

$result = mysqli_query($conn, "SELECT * FROM tbl_mhs");

while ($data = mysqli_fetch_assoc($result)) {
    echo $data['FirstName'] . " " . $data['LastName'] . " - " . $data['Age'] . "<br>";
}
?>