<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div align="center"> 
<?php
require("config.php");

//menampilkan iklan berdasarkan status yang diinput jika status berangka 1 maka iklan akan ditampilkan sesuai dengan data yang diinput
$sql="Select * from iklan where status=\"1\" order by id desc limit 5";
$hasil=mysql_query($sql);
//cetak data record ke halaman web berdasarkan kode SQL diatas
while ($data=mysql_fetch_array($hasil)){
echo '
<a href="'.$data['link'].'"><img src="iklan/'.$data['alamat'].'" width=\"150\" border=\"0\" title="'.$data['ket'].'"/></a><p>
';
}
?></div>
</body>
</html>