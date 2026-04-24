<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>

<form method="post">
    Masukkan Bilangan Pertama:<br>
    <input type="text" name="A"><br>

    Masukkan Bilangan Kedua:<br>
    <input type="text" name="B"><br>

    <input type="submit" value="Hitung">
</form>

<?php
if (isset($_POST['A']) && isset($_POST['B'])) {

    $A = $_POST['A'];
    $B = $_POST['B'];

    function jumlah($A, $B) {
        return $A + $B;
    }

    function kurang($A, $B) {
        return $A - $B;
    }

    function kali($A, $B) {
        return $A * $B;
    }

    function bagi($A, $B) {
        return $A / $B;
    }

    echo "<br>Bilangan Pertama: $A";
    echo "<br>Bilangan Kedua: $B<br><br>";

    echo "Penjumlahan: $A + $B = " . jumlah($A, $B) . "<br>";
    echo "Pengurangan: $A - $B = " . kurang($A, $B) . "<br>";
    echo "Perkalian: $A * $B = " . kali($A, $B) . "<br>";
    echo "Pembagian: $A / $B = " . bagi($A, $B) . "<br>";
}
?>

</body>
</html>