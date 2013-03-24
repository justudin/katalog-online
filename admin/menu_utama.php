<?php session_start();
if(!session_is_registered('$_POST[username]'.'$encrypt_pass')){
header("location:index.php");}
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link ilo-full-src="Gambar/Icon.ico" rel="SHORTCUT ICON" href="Gambar/Icon.ico" type="image/x-icon">
<title>RaChick Cipanas</title>
<style type="text/css">
.Teks_Menu_Kiri {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
.Teks_Menu_Kiri {
	color: #FFF;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
}
.Menu_Costumer {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #00F;
	font-weight: bold;
}
body {
	text-align: right;
	color: #000;
	background-image: url(Gambar/Latar.jpg);
	margin-top: 0px;
	margin-bottom: 0px;
}
.Teks_Menu_Atas {
	font-family: Tahoma, Geneva, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
.Teks_Login {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
.Teks_Garis {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	color: #333;
	text-align: center;
}
.Teks_Info {
	font-family: Times New Roman, Times, serif;
	font-size: 14px;
	color: #333;
	font-weight: bold;
}
.Teks_Menu_Bawah {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	text-align: center;
}
a:link {
	color: #F90;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #F90;
}
a:hover {
	text-decoration: none;
	color: #F00;
}
a:active {
	text-decoration: none;
	color: #000;
}
body,td,th {
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
}
</style>
</head>

<body>
<div align="center">
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><table width="801" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr valign="top">
              <td height="225" colspan="2" bgcolor="#0B78B3"><img src="Gambar/Header.gif" width="800" height="238" /></td>
            </tr>
            <tr valign="top">
              <td width="30%" height="343" bgcolor="#0B78B3"><table width="99%" border="0" cellspacing="1" cellpadding="1">
                <tr>
                  <th scope="col"><img src="Gambar/Menu.png" width="128" height="128" /></th>
                </tr>
                <tr>
                  <th scope="col"><? require("../tanggal.php") ?></th>
                </tr>
              </table></td>
              <td width="70%"><p><table width="101%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <th colspan="2" bgcolor="#0B78B3" scope="col">Menu Utama Admin -- RaChick cipanas </th>
    </tr>
  <tr>
    <th width="15%" scope="col"><div align="center"><img src="Gambar/Admin.png" width="48" height="48" /></div></th>
    <td width="85%" scope="col"><div align="left"><a href="admin.php">Admin</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><img src="Gambar/Produk.png" width="48" height="48" /></div></td>
    <td><div align="left"><a href="produk.php">Produk</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><img src="Gambar/Mitra.png" width="48" height="48" /></div></td>
    <td><div align="left"><a href="mitra.php">Mitra Bisnis</a></div></td>
  </tr>
  <tr>
    <td><div align="center"><img src="Gambar/order.gif" width="48" height="48" /></div></td>
    <td><div align="left"><a href="order.php">Order</a></div></td>
  </tr> 
  <!-- <tr>
    <td><div align="center"><img src="Gambar/Download.png" width="48" height="48" /></div></td>
    <td><div align="left"><a href="download.php">Download</a></div></td>
  </tr> -->
  <tr>
    <td><div align="center"><img src="Gambar/LogOut.png" width="48" height="48" /></div></td>
    <td><div align="left"><a href="logout.php">LogOut</a></div></td>
  </tr>
</table></p>
                </td>
              </tr>
          </table></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td class="Teks_Menu_Bawah"><div align="left"><? require("../footer.php") ?></div></td>
        </tr>
    </td>
    </tr>
</div>
</body>
</html>