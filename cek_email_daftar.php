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

<table width="100%" border="0" cellspacing="1" cellpadding="1" class="Judul_Teks">
  <tr>
    <th width="54" scope="col"><img src="Gambar/Kantong Belanja.jpg" width="35" height="35" /></th>
    <th width="450" scope="col"><div align="left" class="Judul_Teks">Kantong Belanja - Maxi Online Store</div></th>
  </tr>
  <tr>
    <th colspan="2" scope="col"><div align="center" class="Teks_Atas"><marquee>
    Kami Melayani Anda Berbelanja Online Dengan Nyaman Dan Aman - Maxi Online Store -  Muhammad Sadeli.</marquee></div></th>
    </tr>
  </table>

<hr/>

<table width="99%" border="0" cellspacing="1" cellpadding="1" align ="center">
<tr>
    <td width="17%" height="16" bgcolor="#0B78B3" class="Teks_Tabel"><div align="LEFT">Produk</div></td>
    <td width="30%" bgcolor="#0B78B3" class="Teks_Tabel"><div align="left">Nama</div></td>
    <td width="20%" bgcolor="#0B78B3" class="Teks_Tabel"><div align="right">Harga (Rp)</div></td>
    <td width="4%" colspan = "2" bgcolor="#0B78B3" class="Teks_Tabel"><div align="center">Aksi</div></td>
    <td width="10%" bgcolor="#0B78B3" class="Teks_Tabel"><div align="right">Jumlah</div></td>
    <td width="45%" bgcolor="#0B78B3" class="Teks_Tabel"><div align="right">Total (Rp)</div></td>
</tr>
   
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


<?php 
require ("config.php");
//fungsi untuk menghubungan ke database
$perintah = "select * from transaksi inner join produk on produk.id = transaksi.id where transaksi.ip=$cookie_kantong";
//cari berdasarkan field ip dari tabel transaksi berdasarkan variabel cookie_kantong
$hasil=mysql_query($perintah);
//menampilkan data barang belanja
while ($data=mysql_fetch_array($hasil)){
?>

<form method="POST" action="">

<tr>
<tr><input type=hidden name="id" value="<?php echo ''.$data['id'].''; ?>"></tr>

<td width="17%""><img src=<? echo 'Produk/'.$data['gambar'].''; ?> width=\"75\" height=\"75\></td>
<td width="30%" align="left" class="Isi_Tabel_Nama"><? echo ''.$data['nama'].'' ?></span></td>
<td width="15%" align="right" class="Isi_Tabel_Harga"><? echo 'Rp. '.number_format($data['harga'], 0, ',', '.').',-'; ?></div></td>
                          
<td width="2%"><div align="right"><a href=<? echo 'hapus_transaksi.php?id='.$data['id'].'&deteksi='.$cookie_kantong.''; ?>> <img src="Gambar/Hapus.png" title="Hapus" width="15" border="0"></a></td>	
			  			              				
<td width="2%"><a href=<? echo 'ubah_transaksi.php?id='.$data['id'].'&ubah_transaksi='.$cookie_kantong.''; ?> ><input name="imageField" type="image" src="Gambar/Ubah.png" width="15" border="0">	</a></td>
             
<td width="10%"><div align="right"><input name="jumlah" type="text" id="jumlah" value="<? echo ''.$data['jumlah'].''; ?>" size="2" width="100" maxlength="3" onkeypress="return isNumberKey(event)"/></div></td>
             
<td width="55%"><div align="right" class="Isi_Tabel_Harga"><? echo 'Rp.'.number_format($data['total'], 0, ',', '.').',-'; ?> </div></td>	
</tr>
</td>


<?php
}
?>

</form>

<tr>
<table width="99%" border="0" cellspacing="1" cellpadding="1" align ="center">
<hr/>
<td width="82%" height="16" bgcolor="#0B78B3" class="Teks_Tabel"><div align="right">Total :</div></td>
<td width="100%" height="16" bgcolor="#CCCCCC"  class="Isi_Tabel"><div align="right"><b>
  <?php require("total_transaksi.php");?>
</b></font></span></div>
</td>
</tr>


<tr>
<td colspan="3" align ="Center" class="Isi_Tabel"><br><br>
<a href="produk.php"><img src="Gambar/LanjutBelanja.png"\ title="Lanjutkan Belanja" border="0" width=\"70\" height=\"30\" ></a>		 			
</td>
</tr>

</table>

<table width="99%" border="0" cellspacing="1" cellpadding="1" align="center">
<tr>

<td colspan="3" align ="Center"><br><br>

               <table width="100%" border="0">
                    <tr>
                      <td width="50%"><form action="sudah_daftar.php" method="post" name="form1" id="form1">
                          <label>
                          <div align="right">
                            <input name="belum_daftar" type="image" src="Gambar/SudahDaftar.png" width="85" height="35" border="0" value="Belum Daftar" />
                          </div>
                        </label>
                      </form></td>
                      <td width="50%"><form action="belum_daftar.php" method="post" name="form2" id="form2">
                          <label>
                          <input name="belum_daftar" type="image" src="Gambar/BelumDaftar.png" width="85" height="35" border="0" value="Belum Daftar" />
                          </label>
                      </form></td>
                    </tr>
                </table>
                <p>&nbsp;</p>
              <p>
                <?
		$cari="select * from pelanggan where email='$email'";
		//mengecek dan menampilkan data pelanggan ke tabel pelanggan berdasarkan email yang diinput
		$query=mysql_query($cari);
		$data=mysql_fetch_array($query);
		$alamat=str_replace("<br>","\r\n",$data[alamat]);
  		$catatan=str_replace("<br>","\r\n",$data[catatan]);
  		?>
</p>
              <form action="ubah_data_pelanggan.php" method="post" name="form3" id="form3">
                <table width="100%" height="184" border="0" cellpadding="1" cellspacing="1">
                  <tr>
                    <input type="hidden" name="id" value="<?php echo "$data[email]"; ?>" />
                    <td height="22" valign="top"><span class="style96">E-mail</span></td>
                    <td valign="top"><span class="style90">:</span></td>
                    <td valign="top"><span class="style90">
                      <label>
                        <input name="email" type="text" class="txt_masukan" size="50" value="<?php echo $data[email];?>" />
                        </label>
                    </span></td>
                  </tr>
                  <tr>
                    <td width="23%" height="22" valign="top"><span class="style96">Nama Lengkap </span></td>
                    <td width="4%" valign="top"><span class="style90">:</span></td>
                    <td width="73%"><span class="style90">
                      <label>
                        <input name="nama" type="text" class="txt_masukan" size="50" maxlength="35" value="<?php echo $data[nama];?>" />
                        </label>
                    </span> </td>
                  </tr>
                  <tr>
                    <td height="96" valign="top"><span class="style96">Alamat Lengkap </span></td>
                    <td valign="top"><span class="style90">:</span></td>
                    <td valign="top"><span class="style90">
                      <label>
                        <textarea name="alamat" cols="49" rows="7" class="txt_masukan"><?php echo $alamat;?></textarea>
                        </label>
                    </span> </td>
                  </tr>
                  <tr>
                    <td height="22" valign="top"><span class="style96">Telepon / Hp</span></td>
                    <td valign="top"><span class="style90">:</span></td>
                    <td valign="top"><span class="style90">
                      <label>
                        <input name="telepon" type="text" class="txt_masukan" size="50" value="<?php echo $data[telepon];?>" />
                        </label>
                    </span> </td>
                  </tr>
                  <tr>
                    <td height="96" valign="top"><span class="style96">Catatan</span></td>
                    <td valign="top"><span class="style90">:</span></td>
                    <td valign="top"><span class="style90">
                      <label>
                        <textarea name="catatan" cols="49" rows="7" class="txt_masukan"><?php echo $catatan;?></textarea>
                        </label>
                    </span> </td>
                  </tr>
                </table>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="42%">&nbsp;</td>
                    <td width="58%"><table width="100%" border="0">
                        <tr>
                          <td width="19%"><label>
                            <input name="simpan" type="submit" class="tmb_masukan" value="Kirim" />
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

