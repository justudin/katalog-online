<?php
require("config.php");
//fungsi ini akan dijalankan jika semua transaksi telah selesai dilakukan dnegan membuat fungsi SQL untuk menghapus data dari tabel 
//transaksi berdasarkan ip pelanggan
$query="delete from transaksi where ip=$cookie_kantong";
$hapus=mysql_query($query);
?>

