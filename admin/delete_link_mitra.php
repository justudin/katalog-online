<?php require ("../config.php");
$perintah="delete from mitra where id=$_GET[id]";
$hasil=mysql_query($perintah);
if ($hasil) { header("location:mitra.php"); 
} else {
echo ("Berita gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke MySQL. Silahkan diulangi kembali.");
} ?>