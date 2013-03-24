<?php
  include "config/koneksi.php";
$id = abs((int) $_GET['id']);
$cek="select * from produk where id=$id";
//menampilkan data produk berdarakan id produk dari variabel dengan nama id
$hasil=mysql_query($cek);
while ($data=mysql_fetch_array($hasil)){
	$kolom = 3;
	$lbrKolom   = (int)(50/$kolom);
	$i = 0;
	if ($i % $kolom == 0)
			{
	$format_uang  = number_format($data[harga], 0, ',', '.');	
	//mencetak data produk ke halaman website berdasarkan id yang telah di dapat
echo '
<table width="100%" border="0" cellpadding="2" cellspacing="2" class="detil">
	<tr>
			<td width="'.$lbrKolom .'" valign="top">			
			<div class="foto" align="center">
	    	<div class="Gambar_Produk"><img src="Produk/'.$data['gambar'].'" width=350 height=350></div>
			</td>
			</tr>
						  </table>
						  
	<table width="100%" border="0" cellpadding="2" cellspacing="2" class="detil">
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
				<td colspan="3" align ="center"><br>							
    <hr/> ';
if(isset($_SESSION['id_pelanggan'])){			
	echo '	
			<a href="aksi.php?module=keranjang&act=tambah&id='.$data[id].'"><img src="Gambar/Beli.png"\ title="Beli Sekarang" border="0" width=\"50\" height=\"30\" ></a>'; }
	echo '		
 
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
?>