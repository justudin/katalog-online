<?php session_start();
//menjalankan sesion
if(!session_is_registered('$_POST[username]'.'$encrypt_pass')){
header("location:index.php");}
//cek sesion
require ("../config.php");
$cek="select * from produk order by id desc";
//perintah sql untuk seleksi ke tabel produk
$hasil=mysql_query($cek);
?>
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
    <td width="50%" height="24" bgcolor="#0B78B3"><div align="center"><span class="style15">Isi Data Produk </span></div></td>
     </tr>
  <tr>
    <td><form id="form1" name="form1" method="post" action="input_produk.php" enctype="multipart/form-data">
      <table width="99%" border="0">
        <tr>
          <td width="38%" align="left" valign="top"><span class="style35">Nama Produk </span></td>
          <td width="2%" align="left" valign="top"><span class="style35">:</span></td>
          <td width="60%" align="left" valign="top"><span class="style35">
            <label>
            <input name="nama" type="text" id="nama" />
            </label>
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top"><span class="style35">Jenis</span></td>
          <td align="left" valign="top"><span class="style35">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label>
            <input name="jenis" cols="35" rows="10" id="jenis"></textarea>
            </label>
          </span></td>
        </tr>
        <tr>
          <td align="left" valign="top"><span class="style35">Deskripsi</span></td>
          <td align="left" valign="top"><span class="style35">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label>
            <textarea name="deskripsi" cols="35" rows="10" id="deskripsi"></textarea>
            </label>
          </span></td>
        </tr>
          <tr>
          <td align="left" valign="top"><span class="style35">Harga</span></td>
          <td align="left" valign="top"><span class="style35">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label>
            <input name="harga" cols="35" rows="10" id="harga" maxlength="10" onkeypress="return isNumberKey(event)" />
            </label>
          </span></td>
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
          <td align="left" valign="top"><span class="style35">Status </span></td>
          <td align="left" valign="top"><span class="style36">:</span></td>
          <td align="left" valign="top"><span class="style35">
            <label></label><label></label>
            <label>
            <input name="status" type="text" id="status" maxlength="1" onkeypress="return isNumberKey(event)" />
           </label>
          </span></td>
        </tr>
         <tr>
          <td align="left" valign="top"><span class="style35">Keterangan Kode Status</span></td>
          <td align="left" valign="top"><span class="style36">:</span></td>
          <td align="left" valign="top"><span class="style35">Ketik 1 = Produk Baru, 0 = Produk Lama</span></td>
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
             <td width="50%" bgcolor="#0B78B3"><div align="center"><span class="style15">Data Produk</span></div></td>
             </tr>
    </td>
    <tr>
        <td align="left" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0">
      <tr>
      
        <td width="6%" height="25" bgcolor="#999999"><div align="center" class="style5">No</div></td>
        <td width="76%" bgcolor="#999999"><div align="center" class="style5">Nama Produk </div></td>
        <td width="9%" bgcolor="#999999"><div align="center" class="style5">Edit</div></td>
        <td width="9%" bgcolor="#999999"><div align="center" class="style5">Delete</div></td>
      </tr>
<? 
$no=1;
while ($data=mysql_fetch_array($hasil)){
echo("  <tr>
<td><div align=\"center\">$no</div></td>
<td>$data[nama]</td>
<td><div align=\"center\"><a href=\"edit_produk.php?id=$data[id]\">Edit</a></div></td>
<td><div align=\"center\"><a href=\"delete_produk.php?id=$data[id]\">Delete</a></div></td>
</tr>");
$no++; } ?>
    </table></td>
  </tr>
</table>