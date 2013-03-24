<style type="text/css">
.Teks_Tanggal {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #000;
	font-weight: bold;
}
.Teks_Tanggal {
	font-size: 10px;
}
.Teks_Tanggal {
	font-weight: normal;
}
</style>
<div align="center" class="Teks_Tanggal">
<?php
$hari   = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");  
$bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"); 
//membuat variabel hari dan bulan dengan nilai arra nama hari dan bulan
$tanggal = $hari[date('N')] . ", " . date('j') . " " . $bulan[(date('n')-1)] . " " . date('Y');  
//menampilkan nama hari dan bulan berdasarkan fungsi date yang dapat kemudian di smaakan dengan nilai arra dari variabel hari dan bulan
echo "<b>$tanggal</b>";  
?></div>