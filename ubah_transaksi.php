<?php
if($cookie_kantong==""){
require("config.php");
$cari="select * from kantong where id=1";
$query=mysql_query($cari);
$tambah="update kantong set kantong=kantong+1 where id=1";
mysql_query($tambah);
$cari2="select * from kantong where id=1";
$query2=mysql_query($cari2);
$row=mysql_fetch_array($query2);
setcookie("cookie_kantong","$row[kantong]");
require("deteksi_pelanggan.php");
require("index.php");
}else{
require("config.php");
$id = abs((int) $_GET['id']);
$cari3="select * from transaksi where id=$id and ip=$cookie_kantong";
$query3=mysql_query($cari3);
if(mysql_num_rows($query3) == 0){
require("input_transaksi.php");
header("location:kantong-belanja.php");
}else{
$jumlahdata = $_POST['n'];
for ($i=1; $i<=$n; $i++)
{
	$idp = $_POST['id'.$i];
	require("config.php");
		$cari2="select * from produk where id=$idp";
		$hasil2=mysql_query($cari2);
		$row2 = mysql_fetch_array($hasil2);
		$har=$row2[harga];
		if($hasil2){
	$jmlubah = $_POST['jumlah'.$i];
	$totubah = $jmlubah*$har;
	$query = "UPDATE transaksi SET jumlah = $jmlubah, total=$totubah WHERE id = '$idp' and ip=$cookie_kantong";
	mysql_query($query);
	}
}
header("location:kantong_belanja.php");
}
}
?>