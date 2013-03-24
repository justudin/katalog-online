<?php
require("config.php");
$cari="select * from produk";
//cari data produk dengan fungsi SQL
$query=mysql_query($cari);
$hasil=mysql_num_rows($query);
//jika hasil ada maka
if($hasil > 0){
		require("config.php");
		$id = abs((int) $_GET['id']);
		$cari="select * from produk where id=$id";
		//tampilkan data produk berdasarkan id produk dari tabel id
		$hasil=mysql_query($cari);
		$row = mysql_fetch_array($hasil);
		$ciri=$row[id];
		$nam=$row[nama];
		$har=$row[harga];
		if($hasil){
		require("deteksi_pelanggan.php");
		//proses untuk menyimpan ke tabel transaksi
		$query = "insert into transaksi (ip,id, jumlah, nama, harga, total)
		Values ('$cookie_kantong','$ciri', 1, '$nam', '$har', '$har')";
		$result = mysql_query($query);	
		header("location:home.php");
		}else{
			echo"Data gagal diInput..!";
			//jika ada kesalahan prosedur diatas maka pesan akan tampil
		}
	}else{
		
				header("location:kantong_belanja.php");
				//kembali kekantong belanja
	}
?>