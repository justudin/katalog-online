<?php
require("config.php");
$numresult = mysql_query("SELECT * FROM produk ORDER BY id DESC");
$jumlah = mysql_num_rows($numresult);
$limit = 10;
//menampilkan record data produk terbaru sebanyak 10 buah saja
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
//menampilkan ke halam data produk terbaru, dan data yang ditampilkan hanya gambar produk saja

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
			
    		  ';

			}
}
}
?>