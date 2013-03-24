<?php session_start();
//menjalankan sesion
if(!session_is_registered('$_POST[username]'.'$encrypt_pass')){
header("location:index.php");}
//cek sesion
require ("../config.php");
$cek="SELECT * FROM orders ORDER BY id_orders DESC";
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
		<td width="9%" bgcolor="#999999"><div align="center" class="style5">Aksi</div></td>
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
		            <td><a href=detail_order.php?id=$data[id_orders]>Detail</a></td></tr>";
      $no++;
    }
	 echo "</table>";
} else {
    echo "<tr><td colspan=6><div align=center>Data Order KOSONG!</div></td></tr></table>";
}	
?>
