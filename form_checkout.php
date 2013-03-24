<style type="text/css">
.Teks_Atas {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 9px;
	color: #000;
}
.Judul_Teks {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #06C;
}
.Teks_Tabel {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	color: #FFF;
	font-weight: bold;
}
.Isi_Tabel {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 9px;
	font-weight: bold;
	color: #F00;
}
.Isi_Tabel_Harga {
	font-family: Verdana, Geneva, sans-serif;
}
.Isi_Tabel_Harga {
	font-family: Verdana, Geneva, sans-serif;
	color: #F00;
	font-size: 10px;
}
.Isi_Tabel_Nama {
	font-size: 11px;
	color: #003366;
	font-family: Tahoma, Geneva, sans-serif;
}
.Pesan_Teks {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 10px;
}
</style>

<script language="javascript">
function validasi(form){
  if (form.nama.value == ""){
    alert("Anda belum mengisikan Nama.");
    form.nama.focus();
    return (false);
  }    
  if (form.email.value == ""){
    alert("Anda belum mengisikan Email.");
    form.email.focus();
    return (false);
  }
  if (form.alamat.value == ""){
    alert("Anda belum mengisikan Alamat.");
    form.alamat.focus();
    return (false);
  }
  if (form.telepon.value == ""){
    alert("Anda belum mengisikan Telpon.");
    form.telepon.focus();
    return (false);
  }
  if (form.kode.value == ""){
    alert("Anda belum mengisikan Kode.");
    form.kode.focus();
    return (false);
  }
  return true;
}

function harusangka(jumlah){
  var karakter = (jumlah.which) ? jumlah.which : event.keyCode
  if (karakter > 31 && (karakter < 48 || karakter > 57))
    return false;

  return true;
}
</script>

<?php
 include "config/koneksi.php";
$sid = session_id();
$idpel= $_SESSION['id_pelanggan'];
  $sql = mysql_query("SELECT * FROM orders_temp, produk 
			                WHERE id_session='$sid' AND orders_temp.id_produk=produk.id");
  $ketemu=mysql_num_rows($sql);
  if($ketemu < 1){
   echo "<script> alert('Keranjang belanja masih kosong');window.location='index.php'</script>\n";
   	 exit(0);
	}
	else{
	$sql2=mysql_query("select * from pelanggan where id_pelanggan = '$idpel'");
	$data = mysql_fetch_array($sql2);
?>
 <hr class="cari" />
                <table width="100%" height="31" border="0">
                  <tr>
                    <td height="21" bgcolor="#0B78B3"><div align="center"><span class="style81">FORMULIR DATA DIRI</span></div></td>
                  </tr>
                </table>
                <hr class="cari" />
                <form action="proses_selesai.php" method="post" onSubmit="return validasi(this)">
                  <table width="100%" height="184" border="0" cellpadding="1" cellspacing="1">
				  <tr>
                      <td width="23%" height="22" valign="top"><span class="style106">Nama Lengkap </span></td>
                      <td width="4%" valign="top"><strong>:</strong></td>
                      <td width="73%"><label>
						<input name="id" type="hidden" size="50" maxlength="35" />
                        <input name="nama" type="text" class="txt_masukan" value="<?php echo $data["nama"]?>" size="50" />
                        </label>                      </td>
                    </tr>
                    <tr>
                      <td height="22" valign="top"><span class="style106">E-mail</span></td>
                      <td valign="top"><strong>:</strong></td>
                      <td valign="top"><label>
                        <input name="email" type="text" value="<?php echo $data['email'];?>" class="txt_masukan" size="50" />
                      </label></td>
                    </tr>
                    <tr>
                      <td height="96" valign="top"><span class="style106">Alamat Lengkap </span></td>
                      <td valign="top"><strong>:</strong></td>
                      <td valign="top"><label>
                        <textarea name="alamat" cols="49" rows="7" class="txt_masukan"><?php echo $data['alamat'];?> </textarea>
                        </label>                      </td>
                    </tr>
                    <tr>
                      <td height="22" valign="top"><span class="style106">Telepon / Hp</span></td>
                      <td valign="top"><strong>:</strong></td>
                      <td valign="top"><label>
                        <input name="telepon" type="text" value="<?php echo $data['telp'];?>" class="txt_masukan" size="50" />
                        </label>                      </td>
                    </tr>
                    <tr>
                      <td height="96" valign="top"><span class="style106">Catatan</span></td>
                      <td valign="top"><strong>:</strong></td>
                      <td valign="top"><label>
                        <textarea name="catatan" cols="49" rows="7" class="txt_masukan"></textarea>
                        </label>                      </td>
                    </tr>
					<tr>
						<td align="left" valign="top">&nbsp;</td>
						<td align="left" valign="top">&nbsp;</td>
						<td align="left" valign="top">Ketikkan  kode di bawah ini :</td>
					</tr>
					<tr>
						<td align="left" valign="top">&nbsp;</td>
						<td align="left" valign="top">&nbsp;</td>
						<td align="left" valign="top"><img src="random_captcha.php">&nbsp;</td>
					</tr>
					<tr>
						<td align="left" valign="top">&nbsp;</td>
						<td align="left" valign="top">&nbsp;</td>
						<td align="left" valign="top"><input type="text" size="3" maxlength="3" name="kode">&nbsp;</td>
					</tr>
					 
                  </table>
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="42%">&nbsp;</td>
                      <td width="58%"><table width="100%" border="0">
                          <tr>
                            <td width="19%"><label>
                              <input name="simpan" type="submit" class="tmb_masukan" value="Proses" />
                              </label>
                            </td>
                            <td width="81%"><label>
                              <input name="batal" type="reset" class="tmb_masukan" value="Batal" />
                              </label>
                            </td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                </form>
</p>

<?php }
?>

</td>
</tr>

</table>

