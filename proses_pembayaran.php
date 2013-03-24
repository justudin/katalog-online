<?php
include "config/koneksi.php";
$simpan=$_POST['bayar'];
if( $simpan == "Kirim Pembayaran"){	
	$namabank=$_POST['namabank'];
	$norek=$_POST['norek'];
	$jam=$_POST['jam'];
	$jml=$_POST['jml'];
	$id=$_POST['id_order'];
	$id2=$_POST['id_pelanggan'];
	$input = "insert into pembayaran values ('','$id2','$id','$namabank', '$norek', '$jam', '$jml')";
	//simpan data pembayaran menggunakan perintah SQL
	$result=mysql_query($input);
	if($result){
		mysql_query("update orders set status='Bayar' where id_orders='$id'");
		echo "<script type='text/javascript'>alert('Pembayaran berhasil, terimakasih telah melakukan Pembayaran..');document.location='data_order.php';</script>";
	} else 
	echo "<script type='text/javascript'>alert('Pembayaran Gagal, Silahkan Ulangi lagi');document.location='data_order.php';</script>";
}
?>
