<?php
 include "config/koneksi.php";
$idpel= $_SESSION['id_pelanggan'];
$sql2=mysql_query("select nama,email from pelanggan where id_pelanggan = '$idpel'");
$data = mysql_fetch_array($sql2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RaChick Cipanas</title>
<style type="text/css">
.Judul_Teks {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #FFF;
}
</style>
</head>
  <table width="100%" height="25" border="0">
  <tr>
  <td height="25" bgcolor="#0B78B3"><div align="center" class="Judul_Teks">ISI SARAN, KRITIK & KOMENTAR ANDA</span></div></td>
  </tr>
  </table>
<body>
<font face="Arial" size="2">
<div align="left">
   <form id="form1" name="form1" method="post" action="cek_captcha.php">
    <table width="50%" border="0" cellspacing="1" cellpadding="5" align ="left">
      <tr>
        <td align="left" valign="top">Nama</td>
        <td align="left" valign="top">:</td>
        <td align="left" valign="top"><label>
          <input name="nama_x" type="text" id="nama_x" value="<?php echo $data["nama"]?>"/>
        </label></td>
      </tr>
      <tr>
        <td align="left" valign="top">Email</td>
        <td align="left" valign="top">:</td>
        <td align="left" valign="top"><label>
          <input name="mail_x" type="text" id="mail_x" value="<?php echo $data["email"]?>" />
        </label></td>
      </tr>
      <tr>
        <td align="left" valign="top">Pesan</td>
        <td align="left" valign="top">:</td>
        <td align="left" valign="top"><label>
          <textarea name="pesan_x" cols="35" rows="5" id="pesan_x"></textarea>
        </label></td>
      </tr>
       <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">Ketikkan  kode di bawah ini :</td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top"><? require("captcha.php") ?>&nbsp;</td>
      </tr>
    </table>
  </form>
</div>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th scope="col"><hr /></th>
    </tr>
    <tr>
    <td height="25" bgcolor="#0B78B3"><div align="center" class="Judul_Teks">DATA SARAN, KRITIK & KOMENTAR YANG MASUK</span></div></td>
  </tr>
</table>
<p>&nbsp<? require("data_saran_kritik.php") ?></p>
</body>
</html>
