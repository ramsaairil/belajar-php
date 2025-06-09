<?php
// fungsi dengan parameter
function tambah($a, $b)
{
    $c = $a + $b;
    return $c;
}
$nilai1 = 10;
$nilai2 = 5;
$nilai3 = tambah($nilai1, $nilai2);
echo "Penjumlahan dari $nilai1 + $nilai2 adalah " . $nilai3;
echo "<br>";

echo "Pernjumlahan dari 9 + 7 adalah " . tambah(9, 7);
echo "<br>";

function hello ($nama)
{
    echo "Hai" . $nama . ", selamat belajar PHP<br>";
}
echo hello("Farel");
echo hello('Adytia');

// fungsi sederhana
function selamat_datang ()
{
    echo"Selamat datang di bahasa pemrograman PHP";
}

echo selamat_datang();
echo selamat_datang();