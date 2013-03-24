<?php
include "config/koneksi.php";
//menghubungkan ke database
$numresult = mysql_query("SELECT * FROM produk ORDER BY id DESC");
$jumlah = mysql_num_rows($numresult);
$limit = 10;
//3 baris perintah diatas digunakan untuk menampilkan jumlah produk terbaru sebanyak 10 buah record produk terbaru
if (empty($offset)) {
$offset = 0;
}
$query = "SELECT * FROM produk ORDER BY id DESC LIMIT $offset, $limit";
$result = mysql_query($query);
echo "<div align=\"left\">";
$halaman = intval($jumlah/$limit);
if ($jumlah%$limit) { 
$halaman++; 
} 
for ($i=1;$i<=$halaman;$i++) {
$newoffset=$limit*($i-1); 
if ($offset!=$newoffset) 
{ 
echo "<b><font face=\"arial\" size=\"2\">[<a style=\"color: black\" href=\"produk.php?offset=$newoffset\">$i</a>]</font></B>";
} else { 
echo "<b><font face=\"arial\" size=\"3\" color=\"red\">[$i]</font></b>"; 
} 
}
echo "</div>";

//mencetak data yang ditampilkan lengkap bersama foto produk

		$kolom = 5;
		$lbrKolom   = (int)(50/$kolom);
		$i = 0;
		
while ($data = mysql_fetch_array($result)) {
	{
			if ($i % $kolom == 0)
			{
	$format_uang  = number_format($data[harga], 0, ',', '.');	
	
	echo '	
<table width="100%" border="0" cellpadding="2" cellspacing="2" class="detil">
	<tr>
			<td width="'.$lbrKolom .'" rowspan="7" valign="top">			
			<div class="foto" align="center">
	    	<div class="Gambar_Produk"><img src="Produk/'.$data['gambar'].'" width="125" height="125"></div>
			</td>
			</tr>
			
     <td width="'.$lbrKolom .'%" height = "100%" align=center>

			<tr>
		    	<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#003366">Kode</td>
				<td  valign="top" td width="'.$lbrKolom .'">:</td>
				<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#003366">'.$data['id'].'</td>
			  </tr>
			  
			  	<tr>
				<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#003366">Nama</td>
				<td  valign="top" td width="'.$lbrKolom .'">:</td>
				<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#003366">'.$data['nama'].'</td>
			    </tr>
			  
			  	<tr>
				<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#003366">Deskripsi</td>
				<td  valign="top" td width="'.$lbrKolom .'">:</td>
				<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#003366"> '.$data['deskripsi'].'</td>
			    </tr>
			  
			  	<tr>
				<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#003366">Harga</td>
				<td  valign="top" td width="'.$lbrKolom .'"> :</td>
				<td  valign="top"><font face=Tahoma size=\"2.5\" color = "#F00"><b>Rp. '.$format_uang.',-</b></td>
				</tr>
				 </td>
				 
			   </td>
			   		   
			   <tr>
				<td colspan="3" align ="Right"><br>';
if(isset($_SESSION['id_pelanggan'])){				
	echo '
		<a href="aksi.php?module=keranjang&act=tambah&id='.$data[id].'"><img src="Gambar/Beli.png"\ title="Beli Sekarang" border="0" width=\"50\" height=\"30\" ></a>'; }
		
	echo '
	<a href="detail.php?id='.$data['id'].'"><img src="Gambar/Detail.png"\ title="Detail Produk" border="0" width=\"50\" height=\"30\" ></a><hr/>	    		
		
				</td>
				</tr>
			   <tr>
				<td colspan="3"></td>
				 </tr>
			  </td>		  
			  </table>
			  ';

			}
}
}
?>