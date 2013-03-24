<?
require("config.php");
//fungsi mysql untuk mengubah data pelanggan
$query="update pelanggan set email=$email,nama=$nama,alamat=$alamat,telepon=$telepon,catatan=$catatan where email='$email'";
mysql_query($query);
if($query){
require("kirim_email_transaksi.php");
}
?>