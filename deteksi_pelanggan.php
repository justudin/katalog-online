<?
require("config.php");
//mengecek ketabel pelanggan
$cari="select * from pelanggan";
$query=mysql_query($cari);
$row=mysql_fetch_array($query);
?>