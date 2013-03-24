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
  if (form.namabank.value == ""){
    alert("Anda belum mengisikan Nama Bank.");
    form.namabank.focus();
    return (false);
  }    
  if (form.norek.value == ""){
    alert("Anda belum mengisikan No rekening.");
    form.norek.focus();
    return (false);
  }
  if (form.jam.value == ""){
    alert("Anda belum mengisikan Jam pembayaran.");
    form.jam.focus();
    return (false);
  }
  if (form.jml.value == ""){
    alert("Anda belum mengisikan Jumlah Pembayaran.");
    form.jml.focus();
    return (false);
  }
  return true;
}
</script>
<?php
include "config/koneksi.php";
$id=$_GET['id'];
if(isset($_SESSION['id_pelanggan'])){	
if(!empty($id)){
$sql=mysql_query("select * from orders where id_orders='$id'");
$order=mysql_fetch_array($sql);
?>
            <table width="100%" height="31" border="0">
                  <tr>
                    <td height="21" bgcolor="#0B78B3"><div align="center"><span class="style81">FORMULIR Pembayaran </span></div></td>
                  </tr>
                </table>
                <hr class="cari" />
                <form action="proses_pembayaran.php" method="post" onSubmit="return validasi(this)">
                  <table width="100%" height="184" border="0" cellpadding="1" cellspacing="1">
				     <tr>
                      <td width="23%" height="22" valign="top"><span class="style106">Pembayaran via (Nama Bank)</span></td>
                      <td width="4%" valign="top"><strong>:</strong></td>
                      <td width="73%"><label>
                        <input name="namabank" type="text" class="txt_masukan" size="50" maxlength="35" />
						<input name="id_order" type="hidden" value="<?php echo $order['id_orders']?>"/>
						<input name="id_pelanggan" type="hidden" value="<?php echo $order['id_pelanggan']?>"/>
						
                        </label>                      </td>
                      </tr>
					 <tr>
                      <td height="22" valign="top"><span class="style106">No rekening</span></td>
                      <td valign="top"><strong>:</strong></td>
                      <td valign="top"><label>
                        <input name="norek" type="text" class="txt_masukan" size="50" />
                        </label>                      </td>
                    </tr>
                    <tr>
                      <td height="22" valign="top"><span class="style106">Jam Pembayaran</span></td>
                      <td valign="top"><strong>:</strong></td>
                      <td valign="top"><label>
                        <input name="jam" type="text" class="txt_masukan" size="10" />
                      </label>*Format penulisan HH:MM -> misal jam 14:00</td>
                    </tr>
                    <tr>
                      <td height="22" valign="top"><span class="style106">Jumlah Pembayaran</span></td>
                      <td valign="top"><strong>:</strong></td>
                      <td valign="top"><label>
                        <input name="jml" type="text" class="txt_masukan" size="20" />
                        </label>                      </td>
                    </tr>
            
                  </table>
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="42%">&nbsp;</td>
                      <td width="58%"><table width="100%" border="0">
                          <tr>
                            <td width="19%"><label>
                              <input name="bayar" type="submit" class="tmb_masukan" value="Kirim Pembayaran" onclick="return confirm('Apakah Anda yakin Data yang Anda masukan sudah Benar?')"/>
                              </label>
                            </td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                </form>

<?php
	} 
} else echo "<script type='text/javascript'>alert('Anda Belum Login!');document.location='index.php';</script>";

?>