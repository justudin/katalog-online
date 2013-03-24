<?php
include "config/koneksi.php";
//fungsi ini digunakan untuk menapilkna data produk terbaru yang dikenali di filed status apabila dinput angka 1
$cek="select * from produk where status=\"1\" ORDER BY id DESC";
$hasil=mysql_query($cek);
		
		$kolom = 5;
		$lbrKolom   = (int)(50/$kolom);
		$i = 0;
				
while ($data=mysql_fetch_array($hasil)){
	{
			if ($i % $kolom == 0)
			{
	$format_uang  = number_format($data[harga], 0, ',', '.');	
	
	echo '	
	
		<table width="100%" border="0" cellpadding="2" cellspacing="2" class="detil">
	<tr>
			<td width="'.$lbrKolom .'" rowspan="7" valign="top">			
			<div class="foto" align="center">
	    	<div class="Gambar_Produk"><img src="Produk/'.$data['gambar'].'" width="125" height="125></div>
			</td>
			</tr>
			
     <td width="'.$lbrKolom .'%" height = "100%" align="center">

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
				<td colspan="3" align ="Right"><br>	';
if(isset($_SESSION['id_pelanggan'])){				
	echo '<a href="aksi.php?module=keranjang&act=tambah&id='.$data[id].'"><img src="Gambar/Beli.png"\ title="Beli Sekarang" border="0" width=\"50\" height=\"30\" ></a>'; }
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