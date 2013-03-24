<?php require ("../config.php");
$perintah="delete from download where id=$id";
$hasil=mysql_query($perintah);
if ($hasil) { header("location:download.php"); 
} else {
echo ("Berita gagal dihapus. Kemungkinan terjadi kegagalan koneksi ke MySQL. Silahkan diulangi kembali.");
} ?>