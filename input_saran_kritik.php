<?php
require("config.php");
$valid_nama= "^[a-z]+[.,a-z ]+$";
$valid_mail = "^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,3}))$";
$tanggal=date("Ymd");
$nama = strip_tags($_POST[nama_x]);
$mail = strip_tags($_POST[mail_x]);
$pesan_tag = strip_tags($_POST[pesan_x]);
$pesan = nl2br($pesan_tag);
if (!eregi($valid_mail, $mail) || !eregi($valid_nama, $nama) || empty($pesan_tag)){
$kesalahan=TRUE;
//cek validasi penginputan jika terjadi kesalahan
}
if ($kesalahan) {
if (!eregi($valid_mail,$mail)){echo "<li>Penulisan alamat E-mail Anda salah!</li>";}
if (!eregi($valid_nama,$nama)){echo "<li>Penulisan nama Anda salah!</li>";}
if (empty($pesan_tag)){ echo "<li>Anda belum menuliskan <b>Komentar Anda</b></li>"; }
} else {		
$query = "INSERT INTO buku_tamu (nama,email,tanggal,pesan) 
VALUES ('$nama','$mail','$tanggal','$pesan')";
//fungsi sql untuk menyimpan data buku tamu
$result = mysql_query($query);
if ($result) {
header("location:isi_saran_kritik.php");	
//kembali ke halaman isi saran kritik
}else{
echo"Pesan Anda tidak dapat disimpan.";
//menampilkan pesan 
}
}
?>