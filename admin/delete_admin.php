<?php require ("../config.php");
//baca file config dari luar folder untuk menghubungkan ke database
$perintah="delete from admin where id=$_GET[id]";
//hapus data admin berdasarkan id
$hasil=mysql_query($perintah);
if ($hasil) { header("location:admin.php"); 
//kembali ke halaman admin
} else {
echo ("Berita gagal dihapus....!!!");
} ?>