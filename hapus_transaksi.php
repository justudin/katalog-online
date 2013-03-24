<?php
require("config.php");
$query="delate from transaksi where id=$id and ip=$cookie_kantong";
$hapus=mysql_query($query);
if($query){
	header("location:kantong_belanja.php");
}else{
	echo"data gagal dihapus";
}
?>