<?php 
include "config/koneksi.php";
if(isset($_SESSION['id_pelanggan'])){	
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
.Judul_Teks {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	color: #FFF;
}

</style>
</head>

<tr>
    <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
    <td class="Teks_Menu_Kiri"><a href="data_order.php">Data Order</a></td>
</tr>
<tr>
    <td><div align="center"><img src="Gambar/Sub Menu.gif" alt="" width="10" height="10" /></div></td>
    <td class="Teks_Menu_Kiri"><a href="cek_login.php?op=out">Keluar (Logout)</a></td>
</tr>
<?php
} else {
?>
<form id="form1" name="form1" method="post" action="cek_login.php?op=in">

<table border="0">
<tr>
<td><span class="style7"></span></td>
<td align="left" valign="middle"><span class="style6">Email</span></td>
<td align="left" valign="top"><span class="style6">
<label>
<input name="email" type="text" id="email" />
</label>
</span></td>
</tr>
<tr>
<td><span class="style7"></span></td>
<td align="left" valign="middle"><span class="style6">Password</span></td>
<td align="left" valign="top"><span class="style6">
<label>
<input name="password" type="password" id="password" />
</label>
</span></td>
</tr>
<tr>
<td><span class="style7"></span></td>
<td><span class="style7"></span></td>
<td align="left" valign="top"><span class="style6">
<label>
<input type="submit" name="Submit" value="Login" />
</label>
<label>
<input type="reset" name="Submit2" value="Batal" />
</label>
</span></td>
</tr>
<tr>
<td colspan=3>Atau Daftar <a href="daftar.php">disini</a></td>
</tr>
</table>
<hr/>
</form>
<?php
}
?>