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
	color: #000000;
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
          <td><img src="Gambar/Header.gif" width="800" height="238" /></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
            <tr valign="top">
              <td width="30%" height="343" bgcolor="#0B78B3"><table width="99%" border="0" cellspacing="1" cellpadding="1">
                <tr>
                  <th scope="col"><a href="menu_utama.php">Kembali ke Menu</a></th>
                </tr>
              </table></td>
              <td width="70%"><p><? require("daftar_mitra.php") ?></p>
                </td>
              </tr>
            </table></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="Teks_Menu_Bawah"><? require("../footer.php") ?></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>