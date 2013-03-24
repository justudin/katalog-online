<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center">
<? //Kode pembuka perintah PHP
echo '<font face="Verdana, Arial, Helvetica, sans-serif" size="2">';
$idyahoo="kie.sari,kieky_cuiit"; //membuat id yahoo tujuan yang ingin ditampilkan
$proses=explode(",",$idyahoo); //perintah ini digunakan untuk mendeteksi id yahoo yang telah dibuat
reset($proses);
foreach ($proses as $tujuan) { //perintah perulangan yang akan menampilkan info status berdasarkan banak id yang ditampilkan dari variabel idyahoo
echo ("
$tujuan<br>
<a href=\"ymsgr:sendIM?.target=$tujuan\">&nbsp;
<img border=0 src=\"http://opi.yahoo.co.id/online?u=$tujuan&m=g&t=14&l4=us\"></a><br>");
}
?></div>
</body>
</html>