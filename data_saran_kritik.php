<?php
require("config.php");
echo "<table cellpadding=\"3\" cellspacing=\"0\" width=\"100%\">";
$numresult = mysql_query("SELECT * FROM buku_tamu ORDER BY id DESC");
$jumlah = mysql_num_rows($numresult);
$limit = 5;
//baris perintah diatas digunakan untuk menampilkan data buku tamu terbaru sebanyak 5 pesan saja tiap halaman
if (empty($offset)) {
$offset = 0;
}
$query = "SELECT * FROM buku_tamu ORDER BY id DESC LIMIT $offset, $limit";
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
echo "<b><font face=\"sans-serif\" size=\"2\">[<a style=\"color: black\" href=\"lihat_saran_kritik.php?offset=$newoffset\">$i</a>]</font></b>";
} else { 
echo "<b><font face=\"sans-serif\" size=\"3\" color=\"red\">[$i]</font></b>"; 
} 
}
echo "</div>";
//menampilkan kehalaman hasil pencarian
while ($row = mysql_fetch_array($result)) {
echo ("
<tr>
<td width=\"100%\" colspan=\"3\"><hr></td>
</tr>
<tr>
<td width=\"20%\"><font face=\"Tahoma\" size=\"3\">&nbsp;&nbsp;&nbsp;&nbsp;<b>Nama</b></font></td> 
<td width=\"3%\"><font face=\"Tahoma\" size=\"3\">:</font></td> 
<td width=\"75%\"><font face=\"Tahoma\" size=\"3\"><b>$row[nama]</b></font></td>
</tr>
<tr>
<td><font face=Tahoma size=\"2.5\" size=\"2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</font></td>
<td><font face=Tahoma size=\"2.5\" size=\"2\">:</font></td> 
<td><font face=Tahoma size=\"2.5\" size=\"2\">$row[tanggal]</font></td>
</tr>
<tr>
<td><font face=Tahoma size=\"2.5\" size=\"2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail</font></td> 
<td><font face=Tahoma size=\"2.5\" size=\"2\">:</font></td> 
<td><font face=Tahoma size=\"2.5\" size=\"2\">$row[email]</font></td>
</tr>
<tr>
<td><font face=Tahoma size=\"2.5\" size=\"2\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Komentar</font></td> 
<td><font face=Tahoma size=\"2.5\" size=\"2\">:</font></td> 
<p><td><font face=Tahoma size=\"2.5\" size=\"2\">$row[pesan]</font></p></td>
</tr>
");
}
echo "</table>";
?>