<?php
$conn = mysqli_connect("localhost", "root", "");

$sql = "CREATE DATABASE lat_dbase";

if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>