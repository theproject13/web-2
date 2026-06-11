<?php
include "koneksi.php";

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi,$query);

if(!$result){
    die("Error Query : ".mysqli_error($koneksi));
}
?>