<?php

$valid_nama = "^[a-z]+[.,a-z ]+$";
$valid_mail = "^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,3}))$";

if (!eregi($valid_nama, $nama) || !eregi($valid_mail, $email)) {
$salah = TRUE;
//cek validasi penginputan
} 

if ($salah) {
	if (!eregi($valid_nama, $nama)) {
	echo "<font face=\"arial\" size=\"2\">Maaf, penulisan Nama Anda tidak valid<br>Silahkan Anda lengkapi <a style=\"color: blue\" href=\"belum_daftar.php\"><b>Kembali</b></a></font>";	
	} elseif (!eregi($valid_mail, $email)) {
	echo "<font face=\"arial\" size=\"2\">Maaf, penulisan Email Anda tidak valid<br>Silahkan Anda lengkapi <a style=\"color: blue\" href=\"belum_daftar.php\"><b>Kembali</b></a></font>";
	}
} else {
require("config.php");
$cari="select * from transaksi where ip=$cookie_kantong";
//fungsi sqk untuk mengecek tabel transaki berdasarkan ip pelanggan dari variabel cookie kantong
$query=mysql_query($cari);
if(mysql_num_rows($query)==0){
	echo"<font face=\"arial\" size=\"2\">Maaf, Anda belum melakukan pembelian <a style=\"color: blue\" href=\"produk.php\"><b>Pembelian</b></a></font>";
}else{
	$mail_to="muhammad.sadeli@gmail.com";
	//email toko
	$mail_subject="Pembelian Barang Online";
	$mail_body = "Email------------: $email\n\n";
	$mail_body.= "Nama Lengkap-----: $nama\n\n";
	$mail_body.= "Alamat Lengkap---: $alamat\n\n";
	$mail_body.= "Telepon----------: $telepon\n\n";
	$mail_body.= "Catatan----------: $catatan\n\n";
	$mail_body.= "Daftar Pemesanan Barang\n";
	$mail_body.="==========================================================================================================\n";
	$mail_body.="----------Judul----------Quantity-----Harga-----Jumlah-----\n";
	$mail_body.="==========================================================================================================\n";
	//data diatas merupakan data format tampilan email 
	require("config.php");
	$cari="select * from transaksi where ip=$cookie_kantong";
	//melakukan pencarian data dari tabel transaksi berdasarkan ip pelanggan
	$query=mysql_query($cari);
	while($row=mysql_fetch_array($query)){
	$nama="$row[nama]";
	$jumlah="$row[jumlah]";
	$harga="$row[harga]";
	$total="$row[total]";
	$mail_body.= "$nama / $jumlah / $harga / $total\n";
	$mail_body.="----------------------------------------------------------------------------------------------------------\n";
	}
	$mail_body.="==========================================================================================================\n";
	//menampilkan data hasil transaksi
	require("config.php");
	$cari="select * from transaksi where ip=$cookie_kantong";
	$query=mysql_query($cari);
	$row=mysql_num_rows($query);
	while($hasil=mysql_fetch_array($query)){
	$gtot=$gtot+$hasil[total];
	}
	$mail_body.="Total : $gtot\n";
	$mail_body.="----------------------------------------------------------------------------------------------------------\n";
	$proses=explode(",",$mail_to);
	//menampilkan total
reset($proses);
foreach ($proses as $tujuan) {
$kirim = mail($tujuan,$mail_subject,$mail_body, "From: $email");
//kirim data transaksi melalui email
}
	
	if ($kirim) {
	require("hapus_transaksi_selesai.php");
	header("location:transaksi_selesai.php");
	//kembali ke lokasi halaman transaksi selesai
	} else {
	echo "<font face=\"arial\" size=\"2\">E-mail Anda belum terkirim. Harap ulangi. <a style=\"color: blue\" href=\"sudah_daftar.php\"><b>Kembali</b></a></font>";
	}
}
}
	
?>
