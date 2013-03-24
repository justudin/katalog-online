<?php session_start();
if(!session_is_registered('$_POST[username]'.'$encrypt_pass')){
header("location:index.php");}
require ("../config.php");
$cek="select * from produk where id=$_GET[id]";
$hasil=mysql_query($cek);
$data=mysql_fetch_array($hasil);
$tampil_deskripsi=str_replace("<br>","\r\n",$data[deskripsi]);
?>
<style type="text/css">
<!--
body {
	margin-top: 0px;
	margin-left: 0px;
}
.style15 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; color: #FFFFFF; }
.style35 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style36 {font-size: 10}
-->
</style>

<SCRIPT language=Javascript>
//Membuat validasi hanya untuk input angka menggunakan kode javascript
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</SCRIPT>

<font face="Arial" size="2">
<table width="100%" border="0">
  <tr>
    <td height="24" bgcolor="#0B78B3"><div align="center"><span class="style15">Edit Data Produk </span></div></td>
  </tr>
  <tr>
    <td><form method="post" action="proses_edit_produk.php" enctype="multipart/form-data">
      <table width="100%" border="0">
	  <tr><input type=hidden name="id" value="<?php echo "$data[id]"; ?>"></tr>
        <tr>
          <td width="23%" align="left" valign="top"><span class="style35">Nama Produk </span></td>
          <td width="2%" align="left" valign="top"><span class="style35">:</span></td>
          <td width="75%" align="left" valign="top"><span class="style35">
            <label>
            <input name="nama" type="text" id="nama" value="<? echo "$data[nama]"; ?>"/>
            </label>
          </span></td>
        </tr>
        <tr>
          <td width="23%" align="left" valign="top"><span class="style35">Jenis </span></td>
          <td width="2%" align="left" valign="top"><span class="style35">:</span></td>
          <td width="75%" align="left" valign="top"><span class="style35">
            <label>
            <input name="jenis" type="text" id="jenis" value="<? echo "$data[jenis]"; ?>"/>
            </label>
          </span></td>
        </tr>
        <tr>
          <td width="23%" align="left" valign="top"><span class="style35">Deskripsi</span></td>
          <td align="left" valign="top"><span class="style35">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label>
            <textarea name="deskripsi" cols="35" rows="10" id="deskripsi""><? echo "$tampil_deskripsi"; ?></textarea>
            </label>
          </span></td>
        </tr>
        <tr>
          <td width="23%" align="left" valign="top"><span class="style35">Harga </span></td>
          <td width="2%" align="left" valign="top"><span class="style35">:</span></td>
          <td width="75%" align="left" valign="top"><span class="style35">
            <label>
            <input name="harga" type="text" id="harga" value="<? echo "$data[harga]"; ?>" maxlength="10" onkeypress="return isNumberKey(event)"/>
            </label>
          </span></td>
        </tr>
        <tr>
          <td width="23%" align="left" valign="top"><span class="style35">Status </span></td>
          <td width="2%" align="left" valign="top"><span class="style35">:</span></td>
          <td width="75%" align="left" valign="top"><span class="style35">
            <label>
            <input name="status" type="text" id="status" value="<? echo "$data[status]"; ?>" maxlength="1" onkeypress="return isNumberKey(event)" />
            </label>
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top"><span class="style35">Keterangan Kode Status</span></td>
          <td align="left" valign="top"><span class="style36">:</span></td>
          <td align="left" valign="top"><span class="style35">Ketik 1 = Produk Baru, 0 = Produk Lama</span></td>
        </tr>
        <tr>
          <td align="left" valign="top"><span class="style35">Upload gambar </span></td>
          <td align="left" valign="top"><span class="style36">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label></label><label></label>
            <label>
            <input name="gambar" type="file" />
            </label>
          </span></td>
        </tr>
                <tr>
          <td align="left" valign="top"><span class="style35"></span></td>
          <td align="left" valign="top"><span class="style36"></span></td>
          <td align="left" valign="top"><span class="style35">            <input type="submit" name="Submit" value="Update" />
            <a href="produk.php"><input type="submit" name="Kembali" value="Kembali" /></a></span></td></span></td>
        </tr>       
      </table>
      </form></td>
  </tr>
</table>
