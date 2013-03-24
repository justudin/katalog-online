<?php require ("../config.php");
$perintah="delete from produk where id=$_GET[id]";
$hasil=mysql_query($perintah);
if ($hasil) {
header("location:produk.php");
} else {
echo ("Berita gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke MySQL. Silahkan diulangi kembali.");
} ?>