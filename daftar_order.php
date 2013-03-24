<?php
 include "config/koneksi.php";
//menjalankan sesion
if(isset($_SESSION['id_pelanggan'])){
//cek sesion
$id=$_SESSION['id_pelanggan'];
$cek="SELECT * FROM orders where id_pelanggan = '$id' and status!='Batal' ORDER BY id_orders ";
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
<table width="100%"> 
	<tr>
             <td width="50%" bgcolor="#0B78B3" colspan="6"><div align="center"><span class="style15">Daftar Data Pemesan</span></div></td>
	</tr>    
</table>
<table width="100%" border="1" cellpadding="2" cellspacing="0">
	<tr>
        <td height="25" bgcolor="#999999"><div align="center" class="style5">No. Order</div></td>
        <td bgcolor="#999999"><div align="center" class="style5">Nama Pemesan </div></td>
        <td bgcolor="#999999"><div align="center" class="style5">Tgl Order</div></td>
        <td bgcolor="#999999"><div align="center" class="style5">No Telp</div></td>
		<td width="9%" bgcolor="#999999"><div align="center" class="style5">Status</div></td>
		<td width="20px" bgcolor="#999999"><div align="center" class="style5">Aksi</div></td>
	</tr>
<?php
$no=1;
$jml=mysql_num_rows($hasil);
if($jml>0){
while ($data=mysql_fetch_array($hasil)){
$tanggal=tgl_indo($data[tgl_order]);
      echo "<tr><td align=center>$data[id_orders]</td>
                <td>$data[nama_pemesan]</td>
                <td>$tanggal</td>
                <td>$data[notelp]</td>
                <td>$data[status]</td>
		            <td width=20px align=center><a href=detail_order.php?id=$data[id_orders]>Detail</a> ";
				if($data[status]=='Baru'){
				?>
				
				- <a href="batal_order.php?id=<?php echo $data['id_orders']?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Data ini?')">Batal</a>
				- <a href="pembayaran.php?id=<?php echo $data['id_orders']?>">Bayar</a>
				
				<?php
				} elseif($data[status]=='Bayar'){
				?>
				- <a href="batal_order.php?id=<?php echo $data['id_orders']?>" onclick="return confirm('Apakah Anda yakin ingin menghapus Data ini?')">Batal</a>
				<?php
				}
				echo "</td></tr>";
      $no++;
    }
	 echo "</table>";
} else {
    echo "<tr><td colspan=6><div align=center>Data Order KOSONG!</div></td></tr></table> ";
	 echo $_SESSION['id'];
}
} else 
header("location:index.php");	
?>
