<?php
require("config.php");
$cari="select * from transaksi where ip=$cookie_kantong";
$query=mysql_query($cari);
if ($query > 0){
$row=mysql_num_rows($query);
while($hasil=mysql_fetch_array($query)){
$gtot=$gtot+$hasil[total];
}
$format_uang * number_format($gtot, 0, ',', '.');
echo "Rp $format_uang ,-";
}
?>