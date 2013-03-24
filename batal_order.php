<?php
//menjalankan sesion
if(!session_is_registered('$_POST[email]'.'$encrypt_pass')){
header("location:index.php");}
//cek sesion
$id=$_SESSION['id'];
require ("config.php");
$status="Batal";
	mysql_query("UPDATE orders SET status='$status' where id_orders='$_GET[id]'");
		header('location:data_order.php');
?>