<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.Teks_Counter {
	font-family: Verdana, Geneva, sans-serif;
}
.Teks_Counter {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	font-weight: bold;
}
.Teks_Counter {
	font-weight: bold;
}
.Teks_Counter {
	color: #F00;
}
.Teks_Counter {
	color: #00F;
}
</style>
</head>

<body>
<div align="center">
  <span class="Teks_Counter">
  <?php
if (isset($visitor)){
if ($visitor=="visited")
include("counter.txt");
//mebaca file text dengan nama counter.txt
} else {
$file=fopen("counter.txt","r+");
$nilai=fread($file,filesize("counter.txt"));
fclose($file);
$nilai += 1;
$file=fopen("counter.txt","w+");
fputs($file,$nilai);
fclose($file);
echo "Anda Pengunjung ke<br/>";
include("counter.txt");
//menampilkan angka pad afile text
}
?>
</span><span class="Teks_Counter"></span></div>
</body>
</html>