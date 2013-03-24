<?php
//fungsi ini digunakan untuk membaca variabel dengan nama cookie_kantong yang apabila kosong 
//maka perintah untuk mengupdate tabel kantong dengan mengisi angka 1 pada field kantong berdasarkan id produk akan di jalankan
if($cookie_kantong==""){
	
require("config.php");
$cari="select * from kantong where id=1";
$query=mysql_query($cari);
$tambah="update kantong set kantong=kantong+1 where id=1";
mysql_query($tambah);

require("config.php");
$cari2="select * from kantong where id=1";
$query2=mysql_query($cari2);
$row=mysql_fetch_array($query2);
setcookie("cookie_kantong","$row[kantong]");
//buat bayangan cookie di variabel isicookie
$isicookie=$row[kantong];

//tampilkan data produk berdasarkan id produk dari tabel id
$cari="select * from produk where id=$id";
		$hasil=mysql_query($cari);
		$row = mysql_fetch_array($hasil);
		//tampilkan data produk
		$ciri=$row[id];
		$nam=$row[nama];
		$har=$row[harga];
		if($hasil){
//membaca file deteksi_pelanggan.php			
require("deteksi_pelanggan.php");
//proses untuk menyimpan ke tabel transaksi
$query = "insert into transaksi (ip,id, jumlah, nama, harga, total)
Values ('$isicookie','$ciri', 1, '$nam', '$har', '$har')";
$result = mysql_query($query);	
//menuju ke kantong belanja
header("location:kantong_belanja.php");
}
}else{
//fungsi dibawah ini digunakan untuk apabila kondisi pertama tidak termasuk maka akan mengupdate jumlah pembelian berdasarkan produk dengan
//ditambah angka 1 tiap jumlah barang berdasarkan ip dari variabel cookie_kantong
require("config.php");
$id = abs((int) $_GET['id']);
$cari4="select * from transaksi where id=$id and ip=$cookie_kantong";
$query3=mysql_query($cari4);
if(mysql_num_rows($query3) == 0){	
require("input_transaksi.php");
header("location:kantong_belanja.php");
}else{
$id = abs((int) $_GET['id']);
$ubah="update transaksi set jumlah=jumlah+1, total=total+harga where id=$id and ip=$cookie_kantong";
mysql_query($ubah);	
header("location:kantong_belanja.php");
}
}
?>
