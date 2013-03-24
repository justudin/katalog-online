<?php
if($cookie_kantong==""){
  require("config.php");
		$cari="select * from produk where id=1";
		$query=mysql_query($cari);
		$tambah="update kantong set kantong=kantong+1 where id=1";
		mysql_query($tambah);
		$cari2="select * from produk where id=1";
		$query2=mysql_query($cari2);
		$row=mysql_fetch_array($query2);
		setcookie("cookie_kantong","$row[kantong]");
		require("deteksi_pelanggan.php");
		require("index.php");
} else {
require("config.php");
$id = abs((int) $_GET['id']);
$cari3="select * from transaksi where id=$id and ip=$cookie_kantong";
$query3=mysql_query($cari3);
if(mysql_num_rows($query3) == 0) {
require("input_transaksi.php");
header("location:kantong_belanja.php");
} else {
$id = abs((int) $_GET['id']);
$ubah="update transaksi set jumlah=jumlah+$jumlah, total=total+harga where id=$id and ip=$cookie_kantong";
mysql_query($ubah);
header("location:kantong_belanja.php");
}
}
?>