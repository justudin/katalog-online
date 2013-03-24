<?php
include "config/koneksi.php";
$kode=$_POST['kode'];
if( $kode == $_SESSION['check']){	
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$telp=$_POST['telepon'];
	$alamat=$_POST['alamat'];
	$pass=md5($_POST['password']);
	$cari="select * from pelanggan where email='$email'";
	//fungsi sql untuk mengecek data pelanggan berdasarkan email
	$query=mysql_query($cari);
	if(mysql_num_rows($query) > 0){
	echo"<font face=\"arial\" size=\"2\">Email yang Anda gunakan sudah ada<br>Silahkan ganti dengan yang lain <a style=\"color: blue\" href=\"daftar.php\"><b>Kembali</b></a></font>";
	}else{
	$input = "insert into pelanggan (nama, alamat, telp, email, password)
	values ('$nama', '$alamat', '$telp', '$email', '$pass')";
	//simpan data pelanggan menggunakan perintah SQL
	$result=mysql_query($input);
	if($result){
		echo '<h2>Pendaftaran Berhasil </h2><br/>';
	} else echo "Data Gagal disimpan";
	}
} else echo "Kode yang Anda Masukkan Salah!";
?>
