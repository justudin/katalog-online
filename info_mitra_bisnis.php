<?php
require("config.php");
echo "<font face=\"Arial\" size=\"2\">Daftar mitra bisnis yang menjalin kerja sama dengan perusahaan kami :<p>";
$cek="Select * from mitra order by id desc";
//menampilkna data record mitra bisnis dari yang terbaru ke halaman website Anda
$hasil=mysql_query($cek);
while($data=mysql_fetch_array($hasil)){
echo "<a href=\"$data[link]\">  * $data[nama]</a><br>";
} 
?>