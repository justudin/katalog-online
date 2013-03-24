<?php
require("config.php");
echo "<font face=\"Arial\" size=\"2\">Info link download Ada di bawah ini, Silakan Anda download :<p>";
$cek="Select * from download order by id desc";
//menampilkan data record download dari yan terbaru
$hasil=mysql_query($cek);
while($data=mysql_fetch_array($hasil)){
echo "<a href=\"$data[link]\">* $data[judul]</a><br>";
} 
?>