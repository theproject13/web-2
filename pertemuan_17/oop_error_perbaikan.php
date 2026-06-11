<?php
class Mahasiswa
{
    public $nama;

    function tampil()
    {
        echo $this->nama;
    }
}

$mhs = new Mahasiswa();
$mhs->nama = "Budi";
$mhs->tampil();
?>