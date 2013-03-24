<?php session_start();
if(!session_is_registered('$_POST[username]'.'$encrypt_pass')){
header("location:index.php");} require ("../config.php");
$cek="select * from admin order by id desc";
$hasil=mysql_query($cek); ?>
<style type="text/css">
<!--
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #FFFFFF; font-weight: bold; }
body {
	margin-top: 0px;
	margin-left: 0px;
}
.style15 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; }
.style35 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style36 {font-size: 10}
-->
</style>
<font face="Arial" size="2">
<table width="100%" border="0">
  <tr>
    <td width="50%" height="24" bgcolor="#0B78B3"><div align="center"><span class="style15">Isi Data Admin </span></div></td>
  </tr>
  <tr>
    <td width="50%" valign="top"><form id="form1" name="form1" method="post" action="input_admin.php">
      <table width="100%" border="0">
        <tr>
          <td width="38%" align="left" valign="top"><span class="style35">Username  </span></td>
          <td width="2%" align="left" valign="top"><span class="style35">:</span></td>
          <td width="60%" align="left" valign="top"><span class="style35">
            <label>
            <input name="username" type="text" id="username" />
            </label>
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top"><span class="style35">Password </span></td>
          <td align="left" valign="top"><span class="style36">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label></label><label></label>
            <label>
            <input name="password" type="text" id="password" />
            </label>
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top"><span class="style35">
            <label>
            <input type="submit" name="Submit" value="Simpan" />
            </label>
            <label>
            <input type="reset" name="Submit2" value="Batal" />
            </label>
          </span></td>
        </tr>
      </table>
        </form>
        
        <tr>
            <td width="50%" bgcolor="#0B78B3"><div align="center"><span class="style15">Daftar Admin </span></div></td>
            </tr>
    </td>
    <td width="50%" align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0">
      <tr>
        <td width="6%" height="25" bgcolor="#999999"><div align="center" class="style5">ID</div></td>
        <td width="76%" bgcolor="#999999"><div align="center" class="style5">Nama Admin </div></td>
        <td width="9%" bgcolor="#999999"><div align="center" class="style5">Delete</div></td>
      </tr>
<? while ($data=mysql_fetch_array($hasil)){
echo("  <tr>
<td><div align=\"center\">$data[id]</div></td>
<td>$data[username]</td>
<td><div align=\"center\"><a href=\"delete_admin.php?id=$data[id]\">Delete</a></div></td>
</tr>");
} ?>
    </table></td>
  </tr>
</table>