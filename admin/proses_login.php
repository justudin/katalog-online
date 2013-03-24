<?php session_start();
require("../config.php");
$encrypt_pass = md5($password);
$cek = "Select * from admin where username='$_POST[username]' and password='$encrypt_pass'";
//menyeleksi ke tabel admin username dan password berdsarkan variabel username dan password
//untuk password sebelumnya telah dienkripsi dengan fungsi md5
$hasil = mysql_query($cek);
$hasil_cek = mysql_num_rows($hasil);
//jika data tidak ditemukan maka tamplan pesan user dan psw salah
if ($hasil_cek==1){
echo "Username dan Password yang Anda isi salah...!!!";
}else{
//jika data ditemukan maka buka halaman menu utama dan sekaligus membuka session
header("location:menu_utama.php");
$_SESSION['$_POST[username]'.'$encrypt_pass']=1;
}
?>