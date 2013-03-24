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
<th width="54%" scope="col"><img src="Gambar/Kantong Belanja.jpg" width="35" height="35" /></th>
<th width="450" scope="col"><div align="left" class="Judul_Teks">Kantong Belanja -- RaChick Cipanas</div></th>
</tr>
<tr>
<th colspan="2" scope="col"><div align="center" class="Teks_Atas"><marquee>Kami Melayani berbelanja Anda dengan Nyaman.</marquee></div></th>
</tr>
</table>
<hr/>
<table width="99%" border="0" cellspacing="1" cellpadding="1" align="center">
<tr>
<td width="17%" height="16" bgcolor="#0B78B3" class="Teks_Tabel"><div align="LEFT">Produk</div></td> 
<td width="30%" bgcolor="#0B78B3" class="Teks_Tabel"><div align="left">Nama</div></td>
<td width="20%" bgcolor="#0B78B3" class="Teks_Tabel"><div align="right">Harga (Rp)</div></td>
<td width="4%" colspan="2" bgcolor="#0B78B3" class="Teks_Tabel"><div align="center">Aksi</div></td>
<td width="10%" bgcolor="#0B78B3" class="Teks_Tabel"><div align="right">Jumlah</div></td>
<td width="45%" bgcolor="#0B78B3" class="Teks_Tabel"><div align="right">Total (Rp)</div></td>
</tr>
<SCRIPT language=Javascript>
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
$perintah = "select * from transaksi inner join produk on produk.id = transaksi.id where transaksi.ip=$cookie_kantong";
$hasil =mysql_query($perintah);
while ($data=mysql_fetch_array($hasil)) {
?>
<form method="POST" action="ubah_transaksi.php">
<tr>
<td width="17%""><img src=<? echo 'Produk/'.$data['gambar'].''; ?> width=\"75\" height=\"75\></td>
<td width="30%" align="left" class="Isi_Tabel_Nama"><? echo ''.$data['nama'].'' ?></span></td>
<td width="15%" align="right" class="Isi_Tabel_Harga"><? echo 'Rp. '.number_format($data['harga'], 0, ',', '.').',-'; ?></div></td>
<td width="2%"<div align="right"><a href=<? echo 'hapus_transaksi.php?id='.$data['id'].$deteksi='.$cookie_kantong.''; ?>> <img src="Gambar/Hapus.png" title="Hapus" width="15" border="0"></a></td>
<td width= "2%"><a href=<? echo 'ubah_transaksi.php?id=' .$data['id'].'&ubah_transaksi='.$cookie_kantong.''; ?> ><input nama="imageField" type="image" src="Gambar/Ubah.png" width="15" border="0"></a></td>
