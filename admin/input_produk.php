<?php
include "../config.php";

		$gambar = $_FILES['gambar']['tmp_name'];
		$filename = $_FILES['gambar']['name'];
		$path='../produk/' . $filename;
		
		if(!move_uploaded_file($gambar, $path)){
			echo "Upload Gambar GAGAL!!";	
		} else {
			$perintah = "INSERT INTO produk (nama,jenis,deskripsi,harga,gambar,status)
				VALUES ('$_POST[nama]','$_POST[jenis]','$_POST[deskripsi]','$_POST[harga]','$filename','$_POST[status]')";
			$result = mysql_query($perintah);
			if ($result) {
				header("location:produk.php");
			} else {
				echo "Data belum dapat di simpan!!";	
			}
		} 
?>