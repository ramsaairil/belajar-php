<?php
// fungsi string
# menghitung jumlah karakter
$str = "Saya laper banget";
echo "Jumlah karakter di atas adalah " . strlen($str);
echo "<hr>";
echo "saya ambil kalimat lapar dari str: ". substr($str, 5, 12);
echo "<hr>";

// fungsi tanggal
$hari = array(1=> "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
echo$hari[date('N')];
echo date(', d F Y H:i:s');