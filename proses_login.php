<?php 
require("config.php");
$encrypt_pass = md5($_POST[password]);
$cek = "select * from pelanggan where email='$_POST[email]' and password='$encrypt_pass'";
//menyeleksi ke tabel admin username dan password berdsarkan variabel username dan password
//untuk password sebelumnya telah dienkripsi dengan fungsi md5
$hasil = mysql_query($cek);
$hasil_cek = mysql_num_rows($hasil);

//jika data tidak ditemukan maka tamplan pesan user dan psw salah
if ($hasil_cek==0){
echo "<script>alert('Email atau Password yang Anda isi salah...!!!');document.location='index.php';</script>";
}else{
$data = mysql_fetch_array($hasil);
$_SESSION['$_POST[email]'.'$encrypt_pass']=1;
$_SESSION['id'] = $data['id_pelanggan'];
//jika data ditemukan maka buka halaman menu utama dan sekaligus membuka session
echo "<script type='text/javascript'>document.location='index.php';</script>";

}
?>