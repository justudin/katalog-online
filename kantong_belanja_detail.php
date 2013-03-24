
<table width="100%" border="0" cellspacing="1" cellpadding="1" class="Judul_Teks">
  <tr>
    <th width="54" scope="col"><img src="Gambar/Kantong Belanja.jpg" width="35" height="35" /></th>
    <th width="450" scope="col"><div align="left" class="Judul_Teks">Kantong Belanja -- raChick Cipanas</div></th>
  </tr>
  <tr>
    <th colspan="2" scope="col"><div align="center" class="Teks_Atas"><marquee>
    Kami Melayani berbelanja Anda dengan Nyaman.</marquee></div></th>
  </tr>
</table>
<hr/>
 
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
if(isset($_SESSION['id_pelanggan'])){	
 // Tampilkan produk-produk yang telah dimasukkan ke keranjang belanja
	$sid = session_id();
	$sql = mysql_query("SELECT * FROM orders_temp, produk 
			                WHERE id_session='$sid' AND orders_temp.id_produk=produk.id");
  $ketemu=mysql_num_rows($sql);
  if($ketemu < 1){
    echo "<script>window.alert('Keranjang Belanjanya Masih Kosong');
        window.location=('index.php')</script>";
    }
  else{  
  
    echo "<form method=post action=aksi.php?module=keranjang&act=update>
          <table border=0 width=100% cellpadding=3 align=center>
          <tbody>
          <tr bgcolor=#6da6b1><th>No</th><th>Produk</th><th>Nama Produk</th><th>Qty</th>
          <th>Harga</th><th>Sub Total</th><th>Hapus</th></tr>";  
  
  $no=1;
  while($r=mysql_fetch_array($sql)){
    $subtotal    = $r[harga] * $r[jumlah];
    $total       = $total + $subtotal;  
    $subtotal_rp = format_rupiah($subtotal);
    $total_rp    = format_rupiah($total);
    $harga       = format_rupiah($r[harga]);
    
    echo "<tr bgcolor=#dad0d0><td>$no</td><input type=hidden name=id[$no] value=$r[id_orders_temp]>
              <td align=center><br><img src=produk/$r[gambar] width=45 height=60></td>
              <td>$r[nama]</td>
              <td><input type=text name='jml[$no]' value=$r[jumlah] size=1 onkeypress=return harusangka(event)></td>
              <td>$harga</td>
              <td>$subtotal_rp</td>
              <td align=center><a href='aksi.php?module=keranjang&act=hapus&id=$r[id_orders_temp]'>
              <img src=images/kali.png border=0 title=Hapus></a></td>
          </tr>";
    $no++; 
  } 
  echo "<tr><td colspan=6 align=right><br><b>Total</b>:</td><td colspan=2><br>Rp. <b>$total_rp</b></td></tr>
        <tr>
		<td colspan=2 align=left><br/><a href='produk.php'><img src='images/lanjutkan.jpg' title='Lanjutkan Belanja' ></a>	</td>
        <td colspan=3 align=center><br /><input type=image src='images/update.jpg' border=0><br /></td>
        <td colspan=2 align=right><br /><a href=selesai_belanja.php><img src=images/selesai.jpg  border=0></a><br /></td></tr>
        </tbody></table></form>";
  }
?>
	 			
<table width="99%" border="0" cellspacing="1" cellpadding="1" align="center">
<tr>
<td colspan="3">
<p align="justify" class="Pesan_Teks"><font face=Tahoma size=2 color = "#000">*) Apabila Anda mengubah jumlah (Qty), jangan lupa tekan tombol <b>Update Keranjang</b>.<br />  
        **) Total harga diatas belum termasuk ongkos kirim yang akan dihitung saat <b>Selesai Belanja</b>.</p></font
<hr><hr/>
</td>
</tr>
</table>
</table>
</tr>
</table>
<?php
} else {
echo'Login dulu';
?>
<form id="form1" name="form1" method="post" action="proses_login.php">

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
<?php } ?>